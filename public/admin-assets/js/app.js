$(document).ready(function(){

    Api.init();
    View.init();
    Status.init();


    // TODO: Вынести в меню видежт

    var expPathname = location.pathname.split('/');
    $('.sidebar-menu a').each(function(){
        currentPath = '/'+expPathname[1]+'/'+expPathname[2]; // /adm/<route>
        if( $(this).attr('href') == currentPath ){
            $(this).closest('li').addClass('active');
        }
    });


    $(window).load( function() {
        $('#mycalendar1').monthly({
            mode: 'picker',
            setWidth: '250px',
            target: '#mytarget1',
            startHidden: true,
            showTrigger: '#mytarget1',
            stylePast: true
        });
        $('#mycalendar2').monthly({
            mode: 'picker',
            setWidth: '250px',
            target: '#mytarget2',
            startHidden: true,
            showTrigger: '#mytarget2',
            stylePast: true
        });
    });

    $('.js_get_requests_form').on('submit', function (e) {
        e.preventDefault();

        var data = {};

        data.date_start = $('#mytarget1').val();
        data.date_end = $('#mytarget2').val();

        window.open('/adm/requests?date_start=' + data.date_start + '&date_end=' + data.date_end);
    });
});
