$(document).ready(function () {
    //==== Форма "Написать письмо"
    $('.order_call_btn').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                history.replaceState(null, null, '/call-me');
            },
            afterClose: function () {
                history.replaceState(null, null, '/');
            }
        },
        midClick: true
    });


    DG.then(function () {
        mainIcon = DG.icon({
            iconUrl: '/img/map_icon.png',
            iconSize: [164, 164],
            iconAnchor: [82, 82]
            // shadowUrl: '/img/EUR_shadow.png',
            // shadowSize: [80, 90],
            // shadowAnchor: [49, 73]
        });
        map = DG.map('map', {
            center: [43.2595, 76.92738],
            zoom: 16,
            dragging : false,
            boxZoom: false,
            geoclicker: false,
            zoomControl: false,
            fullscreenControl: false
        });
        DG.marker([43.259505, 76.92738], {icon: mainIcon, riseOnHover: true}).addTo(map);
    });





// 1. Initialize fotorama manually.
    var $fotorama = $('.fotorama').fotorama({
        navwidth: '80%'
    });
// 2. Get the API object.
    var fotorama = $fotorama.data('fotorama');
    fotorama.setOptions({
        arrows: false
    });

    jQuery("<div class='custom-control custom-control--prev'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");
    jQuery("<div class='custom-control custom-control--next'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");

    jQuery("<div class='nav-scroll-btn nav-scroll-btn--prev'></div>").insertBefore(".fotorama__nav.fotorama__nav--thumbs");
    jQuery("<div class='nav-scroll-btn nav-scroll-btn--next'></div>").insertAfter(".fotorama__nav.fotorama__nav--thumbs");
// make the buttons functionality
    /*$('.nav-scroll-btn--prev').mousedown(function(){
     $('.fotorama__wrap .fotorama__grab').css('opacity', 1);
     // $('.fotorama__wrap .fotorama__grab').css('transform', 'translate3d(' + -336 + 'px, 0px, 0px)');
     });

     $('.nav-scroll-btn--next').mousedown(function(){
     $('.fotorama__wrap .fotorama__grab').css('opacity', 1);
     // $('.fotorama__wrap .fotorama__grab').css('transform', 'translate3d(' + -336 + 'px, 0px, 0px)');
     });*/

    jQuery('.nav-scroll-btn--prev').click(function () {
        fotorama.show('<');
    });
    jQuery('.nav-scroll-btn--next').click(function () {
        fotorama.show('>');
    });


    $('.js_menu').on('click', function () {
        $(this).toggleClass('is-open');
        $('.title-header__nav-wrap').toggleClass('is-open').slideToggle();
    });

    $('.js_fixed-menu').on('click', function () {
        $(this).toggleClass('is-open');
        $('.fixed-header__nav-wrap').toggleClass('is-open').slideToggle();
    });

    $('.js_goto_anchor').bind("click", function(e){
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top
        }, 1000);
        e.preventDefault();
        if ($(window).width() <= 810){
            $('.js_fixed-menu').removeClass('is-open');
            $('.js_menu').removeClass('is-open');
            $('.title-header__nav-wrap').removeClass('is-open').slideUp();
            $('.fixed-header__nav-wrap').removeClass('is-open').slideUp();
        }
    });

    $(window).on('load resize', function () {
        if ($(window).width() > 810) {
            $('.title-header__nav-wrap').attr('style', '');
            $('.fixed-header__nav-wrap').attr('style', '');
            $('.fixed-header__logo').attr('src', '/img/dark_logo.png');
        } else {
            $('.title-header__nav-wrap').removeClass('show-imp');
            $('.fixed-header__logo').attr('src', '/img/dark_logo_mobile.png');
        }
    });

    $(window).on('scroll', function () {
        if($(window).scrollTop() >= $('#title').outerHeight()){
            $('.fixed-header').slideDown();
        }else{
            $('.fixed-header').slideUp();
            if ($(window).width() <= 810){
                $('.js_fixed-menu').removeClass('is-open');
                $('.fixed-header__nav-wrap').removeClass('is-open').hide();
            }
        }
    });


    $('.js_open_fotorama').on('click', function () {
        fotorama.show($(this).data('img') - 1);
        fotorama.requestFullScreen();
    });
});