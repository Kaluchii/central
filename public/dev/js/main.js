$(document).ready(function () {
    /***
     number - исходное число
     decimals - количество знаков после разделителя
     dec_point - символ разделителя
     thousands_sep - разделитель тысячных
     fractional_not_view - не отображать знаки после разделителя у целых чисел
     ***/
    function number_format(number, decimals, dec_point, thousands_sep, fractional_not_view) {
        number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
        var n = !isFinite(+number) ? 0 : +number,
            prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
            sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
            dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
            fr_not_view = (typeof fractional_not_view === 'undefined') ? false : fractional_not_view,
            s = '',
            toFixedFix = function (n, prec) {
                var k = Math.pow(10, prec);
                return '' + (Math.round(n * k) / k)
                        .toFixed(prec);
            };
        // Fix for IE parseFloat(0.55).toFixed(0) = 0;
        s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
            .split('.');
        if (s[0].length > 3) {
            s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
        }
        // Чтобы не отображать знаки после запятой у целых чисел
        if (fr_not_view && (n - Math.round(n) == 0)) {
            return n;
        }
        //////
        if ((s[1] || '')
                .length < prec) {
            s[1] = s[1] || '';
            s[1] += new Array(prec - s[1].length + 1)
                .join('0');
        }
        return s.join(dec);
    }

    //==== Форма "Заказать звонок"
    $('.order_call_btn').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
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

        if ($(window).width() < 1000) {
            myMap.behaviors.disable("drag");
        } else {
            myMap.behaviors.enable("drag");
        }
    });

    $(window).on('load', function () {
        $('.layout-choice__item:first-child .js_rooms_btn').click();
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

    /* Работа с планировками */

    var EXCHANGE_COST = $('#flats').data('exchange');

    $('.js_rooms_btn').on('click', function () {
        $('.js_area_btn').closest('.layout-choice__item').hide().removeClass('visible');
        $('.js_area_btn' + '.' + $(this).data('id')).closest('.layout-choice__item').show().addClass('visible');
        $('.layout-choice__name').text($(this).data('singularly'));
        $('.layout-choice__item.visible:first .js_area_btn').click();
        $('.js_rooms_btn').removeClass('is-active');
        $(this).addClass('is-active');
    });

    var state = false;
    $('.js_area_btn').on('click', function () {
        if ($(window).width() <= 820 && state){
            setTimeout(function () {
                $('body,html').animate({
                    scrollTop: $('.layout-choice__layout-view').offset().top - 70
                }, 500);
            }, 200);
        }

        $('.layout-choice__img').attr('src', $(this).data('img'));
        $('.layout-choice__area-text').text($(this).data('area'));
        var half_tg = number_format(Math.round($(this).data('cost') * $(this).data('area') * EXCHANGE_COST), 0, ',', ' ');
        $('.layout-choice__price').text(half_tg);
        $('.js_area_btn').removeClass('is-active');
        $(this).addClass('is-active');

        state = true;
    });


    $('.mobile-detail__item').on('click', function () {
        $(this).addClass('is-open');
    });

    $('.mobile-detail__close').on('click', function () {
        $('.mobile-detail__item').removeClass('is-open');
    });


    /* Fotorama */

// 1. Initialize fotorama manually.
    var $fotorama = $('.fotorama').fotorama({
        navwidth: '80%'
    });
// 2. Get the API object.
    var fotorama = $fotorama.data('fotorama');
    fotorama.setOptions({
        arrows: false
    });

    $("<div class='custom-control custom-control--prev'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");
    $("<div class='custom-control custom-control--next'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");

    $("<div class='nav-scroll-btn nav-scroll-btn--prev'></div>").insertBefore(".fotorama__nav.fotorama__nav--thumbs");
    $("<div class='nav-scroll-btn nav-scroll-btn--next'></div>").insertAfter(".fotorama__nav.fotorama__nav--thumbs");
// make the buttons functionality

    $('.nav-scroll-btn--prev').click(function () {
        fotorama.show('<');
    });
    $('.nav-scroll-btn--next').click(function () {
        fotorama.show('>');
    });

    $('.js_open_fotorama').on('click', function () {
        fotorama.show($(this).data('img') - 1);
        fotorama.requestFullScreen();
    });



    /* Yandex map */

    var init = function () {
        myMap = new ymaps.Map("map",
            {center: [43.24507704, 76.93126367], zoom: 16, controls: []});
        myMap.behaviors.disable("scrollZoom");
        myMap.behaviors.disable("dblClickZoom");
        var myPlacemark = new ymaps.Placemark([43.24474076, 76.93127042], {}, {
            iconLayout: "default#image",
            iconImageHref: "/img/map_icon_wshadow.png",
            iconImageSize: [163, 210],
            iconImageOffset: [-70, -170]
        });
        myMap.geoObjects.add(myPlacemark)
    };

    ymaps.ready(init);
    var myMap;
});