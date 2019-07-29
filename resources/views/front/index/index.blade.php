@extends('front.layout')
@section('content')
@include('front.index.stages_obj')
@yield('stageObj')
    <div class="top-phone"><a href="tel:{{ $contacts->phone }}" class="top-phone-link">{{ $contacts->phone }}</a></div>
    <section class="title-block" id="title">
        <header class="title-block__header title-header">
            <div class="title-block__menu-button js_menu"></div>
            <nav class="title-header__nav-wrap">
                <div class="title-header__menu-logo-wrap">
                    <img src="/img/dark_logo.png" alt="Жилой комплекс Центральный" class="title-header__menu-logo">
                </div>
                <ul class="title-header__nav-list">
                    <li class="title-header__nav-item"><a href="#about" class="js_goto_anchor title-header__nav-link">О КОМПЛЕКСЕ</a></li>
                    <li class="title-header__nav-item"><a href="#gallery" class="js_goto_anchor title-header__nav-link">ГАЛЕРЕЯ</a></li>
                    <li class="title-header__nav-item"><a href="#flats" class="js_goto_anchor title-header__nav-link">КВАРТИРЫ</a></li>
                    <li class="title-header__nav-item"><a href="#contacts" class="js_goto_anchor title-header__nav-link">КОНТАКТЫ</a></li>
                </ul>
            </nav>
            <div class="title-header__logo-wrap">
                <img src="/img/light_logo.png" alt="Жилой комплекс Центральный" class="title-header__logo">
            </div>
            <div class="title-header__feedback-wrap">
                <p class="title-header__phone-number">{{ $contacts->phone }}</p>
                <a href="#call" class="title-header__order-call button order_call_btn button"><span class="title-header__btn-text">Заказать звонок</span></a>
            </div>
        </header>
        <div class="title-block__box">
            <h1 class="title-block__box-title">{!! $main_block->block_title !!}</h1>
            <div class="title-block__box-prices-wrap title-block__box-prices-wrap--desktop">
                <div class="title-block__box-prices-slider js_prices_slider">
                    @foreach($main_block_flats as $item)
                        <div class="flat-price">
                            <div class="flat-price__name">{{ $item['name'] }} квартиры</div>
                            <div class="flat-price__sum-wrap">
                                <span class="flat-price__pretext">ОТ</span>
                                <span class="flat-price__sum">{{ number_format($item['min_price'], 0, ',', ' ') }}</span>
                                <span class="flat-price__tenge">d</span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="title-block__box-prices-wrap title-block__box-prices-wrap--mobile">
                @foreach($main_block_flats as $item)
                    <div class="title-block__box-price-item">
                        <div class="flat-price">
                            <div class="flat-price__name">{{ $item['name'] }} квартиры</div>
                            <div class="flat-price__sum-wrap">
                                <span class="flat-price__pretext">ОТ</span>
                                <span class="flat-price__sum">{{ number_format($item['min_price'], 0, ',', ' ') }}</span>
                                <span class="flat-price__tenge">d</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="title-block__pros">
            <div class="title-block__pros-item title-block__pros-item--parking">
                <img src="/img/parking.png" alt="Парковка ЖК Центральный" class="title-block__pros-img">
                <p class="title-block__pros-big-text">Паркинг</p>
                <p class="title-block__pros-medium-text">от 3 млн тенге</p>
{{--                <p class="title-block__pros-small-text">ПОДРОБНАЯ ИНФОРМАЦИЯ <br> ОБ АКЦИИ В ОТДЕЛЕ ПРОДАЖ</p>--}}
            </div>
            <div class="title-block__pros-item title-block__pros-item--discount">
                <p class="title-block__pros-title">до&nbsp;18%</p>
                <p class="title-block__pros-big-text">Скидки</p>
                <p class="title-block__pros-medium-text">на 2-3-4-комнатные квартиры</p>
            </div>
            <div class="title-block__pros-item">
                <img src="/img/mortgage.png" alt="Ипотека" class="title-block__pros-img">
                <p class="title-block__pros-big-text">Ипотека</p>
                <p class="title-block__pros-medium-text">от банка</p>
                <a href="#call" class="title-block__button order_call_btn">Узнать подробнее</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="about__wrapper">
            <div class="about__text-col text-col js_revealOnScroll" data-viewport-offset="30" data-animation="display">
                <h2 class="text-col__title">{{ $about->block_title }}</h2>
                <div class="text-col__text text-block">{!! $about->text !!}</div>
                <address class="text-col__address">{!! $about->address !!}</address>
                <a href="https://www.bcc.kz/product/ipoteka-7-20-25/" target="_blank" class="text-col__bank-link">
                    <img src="/img/centercredit.png" alt="Банк centercredit" class="text-col__bank-img">
                </a>
            </div>
            <div class="about__tagline js_revealOnScroll" data-viewport-offset="30" data-animation="display">
                <p class="about__tagline-text-wrap"><span class="about__tagline-text">Когда<br>все дороги<br>ведут<br>в центр!</span></p>
            </div>
            <div class="about__in-detail">
                <h3 class="about__in-detail__title">ПРЕИМУЩЕСТВА В&nbsp;ДЕТАЛЯХ</h3>
                <div class="about__in-detail-wrapper mobile-detail">
                    <div class="mobile-detail__item js_detail_item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth1">
                            <p class="mobile-detail__title">{!! $about->title3 !!}</p>
                            <p class="mobile-detail__text">{!! $about->text3 !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item js_detail_item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth2">
                            <p class="mobile-detail__title">{!! $about->title1 !!}</p>
                            <p class="mobile-detail__text">{!! $about->text1 !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item js_detail_item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth3">
                            <p class="mobile-detail__title">{!! $about->title2 !!}</p>
                            <p class="mobile-detail__text">{!! $about->text2 !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item js_detail_item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth4">
                            <p class="mobile-detail__title">{!! $about->title6 !!}</p>
                            <p class="mobile-detail__text">{!! $about->text6 !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item js_detail_item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth5">
                            <p class="mobile-detail__title">{!! $about->title4 !!}</p>
                            <p class="mobile-detail__text">{!! $about->text4 !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item js_detail_item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth6">
                            <p class="mobile-detail__title">{!! $about->title5 !!}</p>
                            <p class="mobile-detail__text">{!! $about->text5 !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__close"></div>
                </div>
                <div class="about__in-detail-wrapper in-detail">
                    <div class="in-detail__col1">
                        <div class="in-detail__wrapper in-detail__wrapper--col">
                            <div class="in-detail__item in-detail__item--left-top">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title1 !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text1 !!}</p>
                                </div>
                            </div>
                            <div class="in-detail__item in-detail__item--left-bottom">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title2 !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text2 !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-detail__item in-detail__item--middle">
                            <div class="in-detail__text-wrapper">
                                <p class="in-detail__item-title">{!! $about->title3 !!}</p>
                                <p class="in-detail__item-text">{!! $about->text3 !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="in-detail__col2">
                        <div class="in-detail__wrapper in-detail__wrapper--row">
                            <div class="in-detail__item in-detail__item--right1">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title4 !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text4 !!}</p>
                                </div>
                            </div>
                            <div class="in-detail__item in-detail__item--right2">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title5 !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text5 !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-detail__item in-detail__item--bottom-right">
                            <div class="in-detail__text-wrapper">
                                <p class="in-detail__item-title">{!! $about->title6 !!}</p>
                                <p class="in-detail__item-text">{!! $about->text6 !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="gallery" id="gallery">
        <div class="gallery__wrapper">
            <h2 class="gallery__title">{{ $gallery->block_title }}</h2>
            <div class="gallery__fotorama-wrap">
                <div class="js_gallery__fotorama fotorama"  data-auto="false" data-ratio="1140/510"
                     data-nav="thumbs" data-allowfullscreen="true"
                     data-thumbmargin="15" data-loop="true"
                     data-thumbwidth="110" data-thumbheight="100" data-transition="crossfade">
                    <?php $slider_arr = [] ?>
                    @foreach($gallery->slider_group as $slide)
                        <a href="{{$slide->slide->link}}?{{$slide->slide->cache_index}}"></a>
                        <?php $slider_arr[] = $slide->slide->link.'?'.$slide->slide->cache_index ?>
                    @endforeach
                </div>
            </div>
            <div class="for-Google-PageSpeed">
                @for($i = 0; $i < 9, isset($slider_arr[$i]); $i++)
                    <img src="{{ $slider_arr[$i] }}" alt="">
                @endfor
                @foreach($stages->dom_stages_group as $stage)
                    @if($stage->show == 1)
                        @foreach($stage->stage_images_group as $stage_img)
                            <img src="{{$stage_img->stage_photo->link}}?{{$stage_img->stage_photo->cache_index}}" alt="">
                        @endforeach
                    @endif
                    @break
                @endforeach
            </div>
            <div class="gallery__mobile-gallery mobile-gallery">
                <div class="mobile-gallery__top-row">
                    <div class="mobile-gallery__col">
                        <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--left-big">
                            <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="1" style="background-image: url('{{$slider_arr[0] or "/img/1140x510.jpg"}}')"></div>
                        </div>
                        <div class="mobile-gallery__small-row">
                            <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--left-small">
                                <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="2" style="background-image: url('{{$slider_arr[1] or "/img/1140x510.jpg"}}')"></div>
                            </div>
                            <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--left-small">
                                <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="3" style="background-image: url('{{$slider_arr[2] or "/img/1140x510.jpg"}}')"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-gallery__col">
                        <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--right-small">
                            <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="4" style="background-image: url('{{$slider_arr[3] or "/img/1140x510.jpg"}}')"></div>
                        </div>
                        <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--right-big">
                            <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="5" style="background-image: url('{{$slider_arr[4] or "/img/1140x510.jpg"}}')"></div>
                        </div>
                    </div>
                </div>
                <div class="mobile-gallery__big-img-wrap">
                    <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="6" style="background-image: url('{{$slider_arr[5] or "/img/1140x510.jpg"}}')"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="stages">
        <div class="stages__wrapper">
            <h3 class="stages__title">{{ $stages->block_title }}</h3>
            <div class="stages__row-wrap">
                <div class="stages__row">
                    @foreach($stages->dom_stages_group as $stage)
                        @if($stage->show == 1)
                            <button class="stages__btn js_stage_btn" id="{{$stage->id}}">{{$stage->dom_stages_name}}</button>
                        @endif
                    @endforeach
                </div>
                <div class="stages__control">
                    <div class="stages__left js_stages_left"></div>
                    <div class="stages__right js_stages_right"></div>
                </div>
            </div>
            <div class="stages__text-wrap">
                <p class="stages__text js_give_me_text"></p>
            </div>
            <ul class="stages__images-list js_fotorama_thumbs">
            </ul>
            <div class="stages__fotorama js_stages_fotorama fotorama"
                 data-nav="thumbs" data-allowfullscreen="true"
                 data-thumbmargin="15" data-loop="true"
                 data-thumbwidth="110" data-thumbheight="100"
                 data-auto="false" data-transition="crossfade">
            </div>
        </div>
    </section>

    <section class="feedbacks">
        <div class="feedbacks__wrapper js_revealOnScroll" data-viewport-offset="30" data-animation="display">
            <h2 class="feedbacks__title">Вам понравился<br>ЖК Центральный?</h2>
            <div class="feedbacks__sub-title">Оставьте ваши контакты, и наши менеджеры ответят на все ваши вопросы.</div>
            <div class="feedbacks__input-rows form-id" id="feedback_call">
                <input type="hidden" name="form" class="form-input" value="call">
                <div class="feedback-form__row form-row">
                    <div class="form-row__validation-wrap feedbacks-input">
                        <label class="feedbacks-input__label feedbacks-input__label--name"><span class="feedbacks-input__label-text">Имя</span></label>
                        <input type="text" name="client_name" required class="form-row__input form-input feedbacks-input__input">
                        <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Как к вам обращаться</p></div>
                    </div>
                </div>

                <div class="feedback-form__row form-row">
                    <div class="form-row__validation-wrap feedbacks-input">
                        <label class="feedbacks-input__label feedbacks-input__label--tel"><span class="feedbacks-input__label-text">+7</span></label>
                        <input type="tel" class="form-row__input form-input feedbacks-input__input" maxlength="25" data-mask="(000) 000-00-00" name="phone">
                        <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Телефонный номер для связи</p></div>
                    </div>
                </div>
                <div class="feedbacks__input-wrapper feedbacks__input-wrapper--btn">
                    <input type="submit" value="Перезвонить мне" class="feedbacks__btn form-row__send-form button send-form">
                </div>
            </div>
        </div>
    </section>

    <section class="flats" id="flats" data-exchange="{{$prices->dollar}}">
        <div class="flats__wrapper">
            <div class="flats__layout-choice layout-choice">
                <h2 class="layout-choice__title">{{ $flats->block_title }}</h2>
                <div class="layout-choice__wrap">
                    <div class="layout-choice__nav" id="layout">
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">ВЫБЕРИТЕ КОЛИЧЕСТВО КОМНАТ</p>
                            <ul class="layout-choice__list">
                                @foreach($flats->dom_flat_group as $item)
                                    <li class="layout-choice__item"><button class="layout-choice__button js_rooms_btn" data-id="flat{{$item->id}}" data-singularly="{{$item->singularly}}">{{$item->dom_flat_name}}</button></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">ВЫБЕРИТЕ ПЛОЩАДЬ</p>
                            <ul class="layout-choice__list">
                                @foreach($flats->dom_flat_group as $item)
                                    @foreach($item->layout_group as $layout_item)
                                        <li class="layout-choice__item">
                                            <button class="layout-choice__button js_area_btn layout-choice__button--area flat{{$layout_item->superior_item->id}}"
                                                    data-img="{{$layout_item->layout_scheme->link}}?{{$layout_item->layout_scheme->cache_index}}"
                                                    data-area="{{$layout_item->area}}" data-cost="{{$layout_item->meter_cost}}"
                                                    data-cost-in-tg="{{$layout_item->meter_in_tg}}"
                                                    data-discount-cost="{{$layout_item->discount}}"
                                                    data-info="{{$layout_item->info}}">{{$layout_item->area}} м<sup class="layout-choice__btn-sup">2</sup>
                                            </button>
                                        </li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                        <div class="layout-choice__section layout-choice__section--hide-on-mob">
                            <p class="layout-choice__section-title js_base_price_title">СТОИМОСТЬ КВАРТИРЫ ОТ:</p>
                            <p class="layout-choice__price"></p>
                        </div>
                        <div class="layout-choice__section layout-choice__section--hide-on-mob js_discount_price">
                            <p class="layout-choice__section-title">НОВАЯ ЦЕНА:</p>
                            <p class="layout-choice__discount-price"></p>
                        </div>
                        <div class="layout-choice__section layout-choice__section--hide-on-mob layout-choice__section--price-descr">
                            <p class="layout-choice__under-price">{{$flats->discount_text}}</p>
                        </div>
                    </div>
                    <div class="layout-choice__layout-view-wrap">
                        <div class="layout-choice__layout-view">
                            <img src="" alt="" class="layout-choice__img">
                            <p class="layout-choice__info"></p>
                            <div class="layout-choice__3d-tour-btn-wrap js_3d_tour_btn">
                                <a href="/3d-tour" target="_blank" class="layout-choice__3d-tour-btn">Смотреть в 3D</a>
                            </div>
                            <div class="layout-choice__descr-wrap">
                                <p class="layout-choice__name"></p>
                                <p class="layout-choice__area"><span class="layout-choice__area-text"></span>м<sup class="layout-choice__area-sup">2</sup></p>
                            </div>
                        </div>
                    </div>
                    <div class="layout-choice__mobile-prices">
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title js_base_price_title">СТОИМОСТЬ КВАРТИРЫ ОТ:</p>
                            <p class="layout-choice__price"></p>
                        </div>
                        <div class="layout-choice__section js_discount_price">
                            <p class="layout-choice__section-title">НОВАЯ ЦЕНА:</p>
                            <p class="layout-choice__discount-price"></p>
                        </div>
                        <div class="layout-choice__section layout-choice__section--price-descr">
                            <p class="layout-choice__under-price">{{$flats->discount_text}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="flats__hr">
        <div class="flats__feedback-wrapper feedback-row">
            <div class="feedback-row__wrapper form-id" id="flats_call">
                <div class="feedback-row__text-wrapper">
                    <p class="feedback-row__text-title">Понравилась планировка?</p>
                    <p class="feedback-row__text">Свяжитесь с нашим менеджером и обсудите все детали.</p>
                </div>
                <div class="feedback-row__inputs-wrapper">
                    <input type="hidden" name="form" class="form-input" value="call">
                    <div class="feedback-row__input-wrapper form-row">
                        <div class="form-row__validation-wrap">
                            <label class="feedbacks-input__label feedbacks-input__label--flats feedbacks-input__label--name"><span class="feedbacks-input__label-text">Имя</span></label>
                            <input type="text" name="client_name" required class="form-row__input form-input feedbacks-input__input feedbacks-input__input--flats">
                        </div>
                    </div>
                    <div class="feedback-row__input-wrapper form-row">
                        <div class="form-row__validation-wrap">
                            <label class="feedbacks-input__label feedbacks-input__label--flats feedbacks-input__label--tel"><span class="feedbacks-input__label-text">+7</span></label>
                            <input type="tel" class="form-row__input form-input feedbacks-input__input feedbacks-input__input--flats" data-mask="(000) 000-00-00" maxlength="25" name="phone">
                        </div>
                    </div>
                    <div class="feedback-row__input-wrapper feedback-row__input-wrapper--btn form-row">
                        <input type="submit" value="Перезвонить мне" class="form-row__send-form form-row__send-form--flats send-form">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="contacts__wrapper">
            <div class="contacts__contact-block js_revealOnScroll" data-viewport-offset="30" data-animation="display">
                <h2 class="contacts__title">{{ $contacts->block_title }}</h2>
                <p class="contacts__phone">{{ $contacts->phone }}</p>
                <p class="contacts__address">{!! $contacts->address !!}</p>
            </div>
            <div class="contacts__map-wrapper">
                <div class="contacts__map" id="map"></div>
            </div>
        </div>
    </section>
    @include('front.index.meta')
@endsection
