/**
 * Created by volkan on 10.04.2017.
 */
function delegate() {
    console.log('delegated');
}

$(document).ready(function () {
    $(document).on('click', '.dummy-ajax-request', function (e) {
        e.preventDefault();
        // remove other menus active class
        $(this).parent().siblings().each(function() {
            $(this).removeClass('start active');
        });
        // add this menu active class
        $(this).parent().addClass('start active');
        // get request via ajax
        get($(this).attr('href'), null, $(this).data('result'), $(this).data('loader'), $(this).data('loader-result'))
    });

    $(document).on('submit', '.dummy-form', function (e) {
        e.preventDefault();
        post($(this).attr('id'), $(this).data('url'), 'echo', $(this).data('result'));
    });

    $(document).on('submit', '.returned-form', function (e) {
        e.preventDefault();
        post($(this).attr('id'), $(this).data('url'), $(this).data('return-function'), null, $(this).data('loader'), $(this).data('loader-result'));
    });

    $("#myModal").on("show.bs.modal", function (e) {
        var link = $(e.relatedTarget);
        $(this).find(".modal-dialog").html('<p align="center"><img src="assets/img/loading.gif" width="80" align="center" /></p>');
        get(link.attr("href"), null, '.modal-dialog');
    });

    $('#myModal').on('hidden.bs.modal', function () {
        if (($(this).find('span.reload').length > 0))
            location.reload();
        $(this).find(".modal-dialog").html('');
    });

    delegate();
    // change page head title on NON-AJAX Requests.
    document.title = l.prefixPageTitle + $('.new-page-title').text();
    console.log('ready');
});
