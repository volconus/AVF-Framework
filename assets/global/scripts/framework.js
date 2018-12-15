// Framework Global Functions

function checkJson(response) {
    var isJson = true;
    try
    {
        var json = $.parseJSON(response);
    }
    catch(err)
    {
        isJson = false;
    }
    return isJson;
}


function getLoader(loaderType) {
    if (loaderType == 'horizontal') {
        return '<p align="center"><img src="assets/global/img/loading/loading8.gif" /></p>';
    }
}

/**
 * Submit Form
 * @param formId
 * @param route = route
 * @param resultType = json|echo
 * @param returnFunction = Returned after the ajax js function name.
 * @param echoSelector = If resultType is echo, element name for echo
 */
function post(formId, route, returnFunction, echoSelector, loader, loaderSelector) {
    var form = $('form#' + formId);
    var submitButton = form.find('button[type="submit"]');
    var values = form.serialize();
    loader = typeof loader !== 'undefined' ? loader : 'horizontal';

    $.ajax({
        beforeSend: function( xhr ) {
            submitButton.prop( "disabled", true );
            if (loader == 'full')
                $('.full-width-loader').fadeIn('fast');
            else if (loader == 'horizontal') {
                $(loaderSelector).removeClass('hidden');
                $(loaderSelector).fadeIn('fast');
                $(loaderSelector).html(getLoader('horizontal'));
            }
        },
        type: 'POST',
        url: route,
        data: values,
        async: true,
        success: function (response) {
            var isJson = checkJson(response);
            if(isJson == true) { // response is JSON
                var json = $.parseJSON(response);
                if (json.location) { // result is contains a forward url
                    document.location = json.location;
                } else {
                    window[returnFunction](json);
                }
            } else if (isJson == false) { // response is HTML
                window.history.pushState("Details", "Title", route);
                window.history.replaceState("Details", "Title", route);
                $(echoSelector).html(response);
            }
            else
                alert(l.unknownError + l.notSupportedResultType);
            delegate();
        },
        error: function (response) {
            alert(l.unknownError + l.notSupportedResultType + response);
        },
        complete: function ( xhr ) {
            submitButton.prop( "disabled", false );
            if (loader == 'full')
                $('.full-width-loader').fadeOut();
            else if (loader == 'horizontal') {
                //$(loaderSelector).fadeOut();
            }
        }
    });
}


/**
 * ASYNC AJAX Request
 * @param route = route
 * @param returnFunction = Returned after the ajax js function name.
 * @param echoSelector = If resultType is echo, element name for echo
 */
function get(route, returnFunction, echoSelector, loader, loaderSelector) {
    loader = typeof loader !== 'undefined' ? loader : 'full';

    $.ajax({
        beforeSend: function( xhr ) {
            if (loader == 'full')
                $('.full-width-loader').fadeIn('fast');
            else if (loader == 'horizontal') {
                $(loaderSelector).fadeIn('fast');
                $(loaderSelector).html(getLoader('horizontal'));
            }
        },
        type: 'GET',
        url: route,
        async: true,
        success: function (response) {
            var isJson = checkJson(response);
            if(isJson == true) { // response is JSON
                var json = $.parseJSON(response);
                if (json.location) { // result is contains a forward url
                    document.location = json.location;
                } else {
                    window[returnFunction](json);
                }
            } else if (isJson == false) { // response is HTML
                window.history.pushState("Details", "Title", route);
                window.history.replaceState("Details", "Title", route);
                $(echoSelector).html(response);
                document.title = l.prefixPageTitle + $('.new-page-title').text();
            }
            else
                alert(l.unknownError + l.notSupportedResultType);
            delegate();
        },
        error: function (response) {
                alert(l.unknownError + l.notSupportedResultType + response);
        },
        complete: function ( xhr ) {
            if (loader == 'full')
                $('.full-width-loader').fadeOut();
            else if (loader == 'horizontal') {
                $(loaderSelector).fadeOut();
                $(loaderSelector).html('');
            }

        }

    });
}

function append(data, div) {
    $('div#' + div).append(data);
    validate();
    delegate();
}

function getAppend(datas, div, animation) {
    if (animation == undefined)
        $('#' + div).html('<div class="circle"></div><div class="circle1"></div>');
    $.ajax({
        //async: false,
        type: 'GET',
        url: 'index.php',
        data: 'q=@' + datas,
        success: function (response) {
            $('div#' + div).append(response);
        },
        error: function (response) {
            $('#' + div).html(response)
        }
    })
}

function getInWindow(datas, obj, obj2, animation) {

    if (obj == undefined)
        obj = $('#panel-body').data('window-id');

    if (obj2 == undefined)
        obj2 = "popup-body";

    if (animation == undefined)
        $(obj + ' ' + obj2).html('Yükleniyor');

    $.ajax({
        //async: false,
        type: 'GET',
        url: 'index.php',
        data: 'q=@' + datas,
        success: function (response) {
            $("#" + obj + " ." + obj2).html(response);
        },
        error: function (response) {
            $('#loadingDiv').html('');
        }
    });

    validate();
    delegate();
}

function getPrepend(datas, div) {
    $.ajax({
        type: 'GET',
        url: 'index.php',
        data: 'q=@' + datas,
        success: function (response) {
            $('div#' + div).prepend(response);
        },
        error: function (response) {
            alert(response);
        }
    })
}

