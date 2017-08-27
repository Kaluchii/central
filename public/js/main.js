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