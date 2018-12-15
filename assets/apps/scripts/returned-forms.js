/*
    This file purpose is process JSON result after the AJAX request.
 */

/**
 * Login Form
 * @param result = JSON
 */
function loginResult(result) {
    var resultLayer = $('div#login-result');
    var resultTextObject = $('div#login-result span');
    resultLayer.removeClass();
    if (result.msg == 'OK') {
        resultLayer.addClass('alert text-center alert-success');
        resultTextObject.html(l.successIcon + l.success);
        $(location).attr('href', 'dashboard');
    } else  if (result.msg == 'ERROR') {
        resultLayer.addClass('alert text-center alert-danger');
        resultTextObject.html(l.errorIcon + l.error + ' : ' + result.error);
    } else {
        alert(l.unknownError);
    }
}

/**
 * Get Sports Objects for Menu
 * @param result = JSON
 */
function sportsObjectPlacing(result) {
    $("#nestable_list_1 ol.dd-list").empty();
    jQuery.each(result, function(i, item) {
        $("#nestable_list_1 ol.dd-list").append('<li class="dd-item" data-id="' + item.remote_id + '" data-type="sport" data-name="' + item.name + '"> <div class="dd-handle"> ' + item.name + ' </div> </li>');
    })
}

/**
 * Get Region Objects for Menu
 * @param result = JSON
 */
function regionsObjectPlacing(result) {
    $("#nestable_list_1 ol.dd-list").empty();
    $("select#regions").empty();

    jQuery('select#regions').append(jQuery('<option>', {
        value: '',
        text : ''
    }));

    jQuery.each(result, function(i, item) {
        jQuery('select#regions').append(jQuery('<option>', {
            value: item.remote_id,
            text : item.name
        }));
        $("#nestable_list_1 ol.dd-list").append('<li class="dd-item" data-id="' + item.remote_id + '" data-type="region" data-name="' + item.name + '"> <div class="dd-handle"> ' + item.name + ' </div> </li>');
    })
}

/**
 * Get Competitions Objects for Menu
 * @param result = JSON
 */
function competitionsObjectPlacing(result) {
    $("#nestable_list_1 ol.dd-list").empty();
    $("select#competitions").empty();

    jQuery('select#competitions').append(jQuery('<option>', {
        value: '',
        text : ''
    }));

    jQuery.each(result, function(i, item) {
        jQuery('select#competitions').append(jQuery('<option>', {
            value: item.remote_id,
            text : item.name
        }));
        $("#nestable_list_1 ol.dd-list").append('<li class="dd-item" data-id="' + item.remote_id + '" data-type="competition" data-name="' + item.name + '"> <div class="dd-handle"> ' + item.name + ' </div> </li>');
    })
}

/**
 * Save Sidebar
 * @param result = JSON
 */
function sidebarEditSave(result) {
    if (result.msg == 'OK') {
        alert(l.success);
    } else  if (result.msg == 'ERROR') {
        alert(l.error + ' : ' + result.error);
    } else {
        alert(l.unknownError);
    }
}
/**
 * Save Page Edit
 * @param result = JSON
 */
function pageEditSave(result) {
    if (result.msg == 'OK') {
        alert(l.success);
    } else  if (result.msg == 'ERROR') {
        alert(l.error + ' : ' + result.error);
    } else {
        alert(l.unknownError);
    }
}
