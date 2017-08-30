@extends('front.layout')
@section('content')
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
                <p class="title-header__phone-number">+ 7 (727) 346-63-70</p>
                <a href="#call" class="title-header__order-call button order_call_btn button"><span class="title-header__btn-text">Заказать звонок</span></a>
            </div>
        </header>
        <div class="title-block__text-wrap">
            <h1 class="title-block__title">КОГДА ВСЕ ДОРОГИ<br>ВЕДУТ В ЦЕНТР</h1>
            <p class="title-block__text">Новый современный жилой комплекс комфорт-класса, расположенный в самом центре Алматы. На сегодняшний день район улиц Курмангазы&nbsp;/&nbsp;Амангельды по праву считается одним из самых уютных уголков центра города.</p>
        </div>
    </section>
    {{--<section class="about" id="about"> Закона РК «О долевом участии в жилищном строительстве».
        <div class="about__wrapper wrapper-1140">
            <div class="about__text-col text-col">
                <h2 class="text-col__title">О КОМПЛЕКСЕ</h2>
                <div class="text-col__text text-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, aspernatur consequuntur corporis cupiditate delectus, dolorem eligendi est eveniet id ipsam modi molestiae non optio perspiciatis possimus, quas ratione totam voluptas.</div>
                <address class="text-col__address">Микрорайон Кок-тобе,<br>ул. Зои Космодемьянской, 138/1</address>
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
                        <p class="fact__text">МЕСТ В ДЕТСКОМ САДУ</p>
                    </li>
                    <li class="facts__item facts__item--parking-places fact">
                        <p class="fact__count">189</p>
                        <p class="fact__text">ПАРКОВОЧНЫХ МЕСТ</p>
                    </li>
                </ul>
            </div>
            <div class="about__in-detail">
                <h3 class="about__in-detail__title">ПРЕИМУЩЕСТВА В ДЕТАЛЯХ</h3>
                <div class="about__in-detail-wrapper in-detail">
                    <div class="in-detail__col1">
                        <div class="in-detail__item">
                            <img src="" alt="" class="in-detail__img">
                            <div class="in-detail__text-wrap">
                                <h4 class="in-detail__item-title">АРХИТЕКТУРНЫЙ СТИЛЬ</h4>
                                <p class="in-detail__text"></p>
                            </div>
                        </div>
                        <div class="in-detail__item">
                            <img src="" alt="" class="in-detail__img">
                            <div class="in-detail__text-wrap">
                                <h4 class="in-detail__item-title">ПРОДУМАННЫЕ КОММЕРЧЕСКИЕ ПОМЕЩЕНИЯ</h4>
                                <p class="in-detail__text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="in-detail__col2">
                        <div class="in-detail__item">
                            <img src="" alt="" class="in-detail__img">
                            <div class="in-detail__text-wrap">
                                <h4 class="in-detail__item-title">СЕЙСМОСТОЙКОСТЬ</h4>
                                <p class="in-detail__text"></p>
                            </div>
                        </div>
                    </div>
                    <div class="in-detail__col3">
                        <div class="in-detail__item">
                            <img src="" alt="" class="in-detail__img">
                            <div class="in-detail__text-wrap">
                                <h4 class="in-detail__item-title">УЮТНЫЙ И БЕЗОПАСНЫЙ ДВОР</h4>
                                <p class="in-detail__text"></p>
                            </div>
                        </div>
                        <div class="in-detail__item">
                            <img src="" alt="" class="in-detail__img">
                            <div class="in-detail__text-wrap">
                                <h4 class="in-detail__item-title">ИНФРАСТРУКТУРА, ОТЛАЖЕННАЯ ДЕСЯТИЛЕТИЯМИ</h4>
                                <p class="in-detail__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, iste, voluptates! A ex laborum modi molestiae totam. Aliquam nobis placeat qui temporibus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <section class="gallery" id="gallery">
        <div class="gallery__wrapper">
            <h2 class="gallery__title">ГАЛЕРЕЯ</h2>
            <div class="gallery__fotorama-wrap">
                <div class="fotorama"  data-auto="false" data-ratio="1140/510"
                     data-nav="thumbs" data-allowfullscreen="true"
                     data-thumbmargin="15" data-loop="true"
                     data-thumbwidth="110" data-thumbheight="100" data-transition="crossfade">
                    <a href="/img/a1.jpg" class=""></a>
                    <a href="/img/a2.jpg" class=""></a>
                    <a href="/img/a3.jpg" class=""></a>
                    <a href="/img/a4.jpg" class=""></a>
                    <a href="/img/a5.jpg" class=""></a>
                    <a href="/img/a6.jpg" class=""></a>
                    <a href="/img/1140x510.jpg" class=""></a>
                    <a href="/img/1140x510.jpg" class=""></a>
                    <a href="/img/1140x510.jpg" class=""></a>
                </div>
            </div>
            <div class="gallery__mobile-gallery mobile-gallery">
                <div class="mobile-gallery__top-row">
                    <div class="mobile-gallery__col">
                        <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--left-big">
                            <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="1" style="background-image: url('/img/a1.jpg')"></div>
                        </div>
                        <div class="mobile-gallery__small-row">
                            <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--left-small">
                                <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="2" style="background-image: url('/img/a2.jpg')"></div>
                            </div>
                            <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--left-small">
                                <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="3" style="background-image: url('/img/a3.jpg')"></div>
                            </div>
                        </div>
                    </div>
                    <div class="mobile-gallery__col">
                        <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--right-small">
                            <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="4" style="background-image: url('/img/a4.jpg')"></div>
                        </div>
                        <div class="mobile-gallery__img-wrap mobile-gallery__img-wrap--right-big">
                            <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="5" style="background-image: url('/img/a5.jpg')"></div>
                        </div>
                    </div>
                </div>
                <div class="mobile-gallery__big-img-wrap">
                    <div class="mobile-gallery__pseudo-img js_open_fotorama" data-img="6" style="background-image: url('/img/a6.jpg')"></div>
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
                        <input type="tel" class="form-row__input form-input feedbacks-input__input" maxlength="25" name="phone">
                        <div class="form-row__tooltip-wrap form-row__tooltip-wrap--popup-none"><p class="form-row__tooltip form-row__tooltip--border">Телефонный номер для связи</p></div>
                    </div>
                </div>
                <div class="feedbacks__input-wrapper feedbacks__input-wrapper--btn">
                    <input type="submit" value="Перезвонить мне" class="feedbacks__btn form-row__send-form button send-form">
                </div>
            </div>
        </div>
    </section>

    <section class="flats" id="flats">
        <div class="flats__wrapper">
            <div class="flats__layout-choice layout-choice">
                <h2 class="layout-choice__title">ПОДБЕРИТЕ ПЛАНИРОВКУ</h2>
                <div class="layout-choice__wrap">
                    <div class="layout-choice__nav">
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">ВЫБЕРИТЕ КОЛИЧЕСТВО КОМНАТ</p>
                            <ul class="layout-choice__list">
                                <li class="layout-choice__item"><button class="layout-choice__button is-active">1-комнатные</button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button">2-комнатные</button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button">3-комнатные</button></li>
                            </ul>
                        </div>
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">ВЫБЕРИТЕ ПЛОЩАДЬ</p>
                            <ul class="layout-choice__list">
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">112 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">64 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">26 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">211 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">165 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">89 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">90 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">54 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">111 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">79 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                                <li class="layout-choice__item"><button class="layout-choice__button layout-choice__button--area">87 м<sup class="layout-choice__btn-sup">2</sup></button></li>
                            </ul>
                        </div>
                        <div class="layout-choice__section">
                            <p class="layout-choice__section-title">СТОИМОСТЬ КВАРТИРЫ</p>
                            <p class="layout-choice__price">37 520 000</p>
                        </div>
                    </div>
                    <div class="layout-choice__layout-view-wrap">
                        <div class="layout-choice__layout-view">
                            <img src="/img/layout1.png" alt="" class="layout-choice__img">
                            <div class="layout-choice__descr-wrap">
                                <p class="layout-choice__name">2-комнатная квартира</p>
                                <p class="layout-choice__area">112м<sup class="layout-choice__area-sup">2</sup></p>
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
                            <input type="tel" class="form-row__input form-input feedbacks-input__input feedbacks-input__input--flats" maxlength="25" name="phone">
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
                <h2 class="contacts__title">КОНТАКТЫ</h2>
                <p class="contacts__phone">+7 (727) 346-63-70</p>
                <p class="contacts__address">Алматы, ул. Курмангазы,<br>уг. ул. Амангельды</p>
            </div>
            <div class="contacts__map-wrapper">
                <div class="contacts__map" id="map"></div>
            </div>
        </div>
    </section>
    @include('front.index.meta')
@endsection
