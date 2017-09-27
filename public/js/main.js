$(document).ready(function () {

    /* Fotorama */

    if ($('#gallery').length){
        // 1. Initialize fotorama manually.
        var $fotorama = $('.js_gallery__fotorama').on('fotorama:show', function () {
            $('.fotorama__circle-animation').addClass('animate');
        }).on('fotorama:showend', function () {
            setTimeout(function () {
                $('.fotorama__circle-animation').removeClass('animate');
            }, 200);
        }).fotorama({
            navwidth: '80%'
        });
        // 2. Get the API object.
        var fotorama = $fotorama.data('fotorama');
        fotorama.setOptions({
            arrows: false
        });

        $("<div class='custom-control custom-control--prev'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");
        $("<div class='custom-control custom-control--next'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");
        $("<div class='fotorama__circle-animation'></div>").insertAfter(".fotorama__arr.fotorama__arr--next");

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


        // Подсветка текущего этапа и отображение нужных изображений

        // 1. Initialize fotorama manually.
        var $fotoramaStage = $('.js_stages_fotorama').on('fotorama:fullscreenexit', function () {
            fotoramaS.show(0);
        }).fotorama();
        // 2. Get the API object.
        var fotoramaS = $fotoramaStage.data('fotorama');
        fotoramaS.setOptions({
            arrows: false
        });

        $('.js_fotorama_thumbs').on('click', '.js_open_fotoramaStage', function () {
            var set = $('.js_fotorama_thumbs .js_open_fotoramaStage');
            fotoramaS.show(set.index(this));
            fotoramaS.requestFullScreen();
        });


        $('.js_stage_btn').on('click', function () {
            if (!$(this).hasClass('is-active')) {

                $('.js_give_me_text').text(stageObj[$(this).attr('id')]['text']);

                $('.js_fotorama_thumbs .stages__images-item').remove();

                var imageArray = [];
                for (var stageImg in stageObj[$(this).attr('id')]['images']){
                    var imageSrc = stageObj[$(this).attr('id')]['images'][stageImg].src;
                    imageArray.push({img: imageSrc});
                    $(".js_fotorama_thumbs").append($('<li class="stages__images-item js_open_fotoramaStage"><img src="' + imageSrc + '" alt="" width="270" height="200" class="stages__img"></li>'));
                }
                fotoramaS.load(imageArray);

                $('.js_stage_btn').removeClass('is-active');

                $(this).addClass('is-active');
            }
        });

        var stagesRow = $('.stages__row');
        $('.js_stages_left').on('click', function () {
            stagesRow.stop();
            stagesRow.animate({
                scrollLeft: stagesRow.scrollLeft() - 180
            }, 300);
        });
        $('.js_stages_right').on('click', function () {
            stagesRow.stop();
            stagesRow.animate({
                scrollLeft: stagesRow.scrollLeft() + 180
            }, 300);
        });

        $('.js_detail_item').on('click', function () {
            $('html, body').stop().animate({
                scrollTop: $('.mobile-detail').offset().top - 140
            }, 600);
        });

        //==================================================================
    }
});