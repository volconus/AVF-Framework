/**
 * Created by volkan on 08.04.2017.
 */
$(document).ready(function () {
    $(document).on('change', '.menu-object-selector', function (e) {
        console.log('Changed' + $(this).val());
        get('menus/get/' + $(this).val(), 'sportsObjectPlacing', null);
    });

    $(document).on('change', '.menu-object-sport-selector', function (e) {
        console.log('Sport changed.' + $(this).val());
        get('menus/get/region/' + $(this).val(), 'regionsObjectPlacing', null);
    });

    $(document).on('change', '.menu-object-region-selector', function (e) {
        console.log('Region changed.' + $(this).val());
        get('menus/get/competition/' + $(this).val(), 'competitionsObjectPlacing', null);
    });

    $('select#objectType option[value=sports]').attr('selected', 'selected');
    $('select#objectType').val('sports').change();


});