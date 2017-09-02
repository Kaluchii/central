@extends('front.layout')
@section('content')
    <div class="top-phone"><a href="tel:+77273466370" class="top-phone-link">{{ $contacts->phone_field }}</a></div>
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
                <img src="/img/logo.png" alt="Жилой комплекс Центральный" class="title-header__logo">
            </div>
            <div class="title-header__feedback-wrap">
                <p class="title-header__phone-number">{{ $contacts->phone_field }}</p>
                <a href="#call" class="title-header__order-call button order_call_btn button"><span class="title-header__btn-text">Заказать звонок</span></a>
            </div>
        </header>
        <div class="title-block__text-wrap">
            <h1 class="title-block__title">{!! $main_block->block_title_field !!}</h1>
            <p class="title-block__text">{{ $main_block->text_field  }}</p>
        </div>
    </section>
    <section class="about" id="about">
        <div class="about__wrapper">
            <div class="about__text-col text-col">
                <h2 class="text-col__title">{{ $about->block_title_field }}</h2>
                <div class="text-col__text text-block">{!! $about->text_field !!}</div>
                <address class="text-col__address">Алматы, Курмангазы /&nbsp;Амангельды</address>
            </div>
            <div class="about__facts-col facts">
                <ul class="facts__list">
                    <li class="facts__item facts__item--floor fact">
                        <p class="fact__count">10</p>
                        <p class="fact__text">ЭТАЖЕЙ</p>
                    </li>
                    <li class="facts__item facts__item--flats fact">
                        <p class="fact__count">339</p>
                        <p class="fact__text">КВАРТИР</p>
                    </li>
                    <li class="facts__item facts__item--kindergarten-places fact">
                        <p class="fact__count">60</p>
                        <p class="fact__text">МЕСТ<br>В ДЕТСКОМ САДУ</p>
                    </li>
                    <li class="facts__item facts__item--parking-places fact">
                        <p class="fact__count">189</p>
                        <p class="fact__text">ПАРКОВОЧНЫХ<br>МЕСТ</p>
                    </li>
                </ul>
            </div>
            <div class="about__in-detail">
                <h3 class="about__in-detail__title">ПРЕИМУЩЕСТВА В&nbsp;ДЕТАЛЯХ</h3>
                <div class="about__in-detail-wrapper mobile-detail">
                    <div class="mobile-detail__item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth1">
                            <p class="mobile-detail__title">{!! $about->title3_field !!}</p>
                            <p class="mobile-detail__text">{!! $about->text3_field !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth2">
                            <p class="mobile-detail__title">{!! $about->title1_field !!}</p>
                            <p class="mobile-detail__text">{!! $about->text1_field !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth3">
                            <p class="mobile-detail__title">{!! $about->title2_field !!}</p>
                            <p class="mobile-detail__text">{!! $about->text2_field !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth4">
                            <p class="mobile-detail__title">{!! $about->title6_field !!}</p>
                            <p class="mobile-detail__text">{!! $about->text6_field !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth5">
                            <p class="mobile-detail__title">{!! $about->title4_field !!}</p>
                            <p class="mobile-detail__text">{!! $about->text4_field !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__item">
                        <div class="mobile-detail__item-wrapper mobile-detail__item-wrapper--nth6">
                            <p class="mobile-detail__title">{!! $about->title5_field !!}</p>
                            <p class="mobile-detail__text">{!! $about->text5_field !!}</p>
                        </div>
                    </div>
                    <div class="mobile-detail__close"></div>
                </div>
                <div class="about__in-detail-wrapper in-detail">
                    <div class="in-detail__col1">
                        <div class="in-detail__wrapper in-detail__wrapper--col">
                            <div class="in-detail__item in-detail__item--left-top">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title1_field !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text1_field !!}</p>
                                </div>
                            </div>
                            <div class="in-detail__item in-detail__item--left-bottom">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title2_field !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text2_field !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-detail__item in-detail__item--middle">
                            <div class="in-detail__text-wrapper">
                                <p class="in-detail__item-title">{!! $about->title3_field !!}</p>
                                <p class="in-detail__item-text">{!! $about->text3_field !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="in-detail__col2">
                        <div class="in-detail__wrapper in-detail__wrapper--row">
                            <div class="in-detail__item in-detail__item--right1">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title4_field !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text4_field !!}</p>
                                </div>
                            </div>
                            <div class="in-detail__item in-detail__item--right2">
                                <div class="in-detail__text-wrapper">
                                    <p class="in-detail__item-title">{!! $about->title5_field !!}</p>
                                    <p class="in-detail__item-text">{!! $about->text5_field !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="in-detail__item in-detail__item--bottom-right">
                            <div class="in-detail__text-wrapper">
                                <p class="in-detail__item-title">{!! $about->title6_field !!}</p>
                                <p class="in-detail__item-text">{!! $about->text6_field !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery" id="gallery">
        <div class="gallery__wrapper">
            <h2 class="gallery__title">{{ $gallery->block_title_field }}</h2>
            <div class="gallery__fotorama-wrap">
                <div class="fotorama"  data-auto="false" data-ratio="1140/510"
                     data-nav="thumbs" data-allowfullscreen="true"
                     data-thumbmargin="15" data-loop="true"
                     data-thumbwidth="110" data-thumbheight="100" data-transition="crossfade">
                    <?php $slider_arr = [] ?>
                    @foreach($gallery->slider_group as $slide)
                        <a href="{{$slide->slide_field->link}}"></a>
                        <?php $slider_arr[] = $slide->slide_field->link ?>
                    @endforeach
                </div>
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
    <section class="feedbacks">
        <div class="feedbacks__wrapper">
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

    <section class="flats" id="flats" data-exchange="{{$prices->dollar_field}}">
        <div class="flats__wrapper">
            <div class="flats__layout-choice layout-choice">
                <h2 class="layout-choice__title">{{ $flats->block_title_field }}</h2>
                <div class="layout-choice__wrap">
                    <div class="layout-choice__nav">
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">ВЫБЕРИТЕ КОЛИЧЕСТВО КОМНАТ</p>
                            <ul class="layout-choice__list">
                                @foreach($flats->dom_flat_group as $item)
                                    <li class="layout-choice__item"><button class="layout-choice__button js_rooms_btn" data-id="flat{{$item->id_field}}" data-singularly="{{$item->singularly_field}}">{{$item->dom_flat_name_field}}</button></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">ВЫБЕРИТЕ ПЛОЩАДЬ</p>
                            <ul class="layout-choice__list">
                                @foreach($flats->dom_flat_group as $item)
                                    @foreach($item->layout_group as $layout_item)
                                        <li class="layout-choice__item"><button class="layout-choice__button js_area_btn layout-choice__button--area flat{{$layout_item->superior_item->id_field}}" data-img="{{$layout_item->layout_scheme->link_field}}" data-area="{{$layout_item->area_field}}" data-cost="{{$layout_item->meter_cost_field}}" data-info="{{$layout_item->info_field}}">{{$layout_item->area_field}} м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                    @endforeach
                                @endforeach
                            </ul>
                        </div>
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">СТОИМОСТЬ КВАРТИРЫ ОТ:</p>
                            <p class="layout-choice__price"></p>
                        </div>
                    </div>
                    <div class="layout-choice__layout-view-wrap">
                        <div class="layout-choice__layout-view">
                            <img src="" alt="" class="layout-choice__img">
                            <p class="layout-choice__info"></p>
                            <div class="layout-choice__descr-wrap">
                                <p class="layout-choice__name"></p>
                                <p class="layout-choice__area"><span class="layout-choice__area-text"></span>м<sup class="layout-choice__area-sup">2</sup></p>
                            </div>
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
            <div class="contacts__contact-block">
                <h2 class="contacts__title">{{ $contacts->block_title_field }}</h2>
                <p class="contacts__phone">{{ $contacts->phone_field }}</p>
                <p class="contacts__address">{!! $contacts->address_field !!}</p>
                <p class="contacts__info-text">Информация предоставлена с целью изучения спроса потенциальных потребителей. Договоры о долевом участии заключаются после получения разрешения на привлечение денег дольщиков местным исполнительным органом согласно Закона РК «О долевом участии в жилищном строительстве».</p>
            </div>
            <div class="contacts__map-wrapper">
                <div class="contacts__map" id="map"></div>
            </div>
        </div>
    </section>
    @include('front.index.meta')
@endsection
