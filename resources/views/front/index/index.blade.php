@extends('front.layout')
@section('content')
{{--    <section class="title-block">
        <div class="title-block__text-wrap">
            <h1 class="title-block__title">КОГДА ВСЕ ДОРОГИ ВЕДУТ В ЦЕНТР</h1>
            <p class="title-block__text">Современный жилой комплекс, продуманный до мелочей, помещенный с хирургической тонкостью в один из самых уютных уголков центра Алматы</p>
        </div>
    </section>
    <section class="about">
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
    <section class="feedbacks">
        <div class="feedbacks__wrapper wrapper-1140">
            <div class="feedbacks__title">Вам понравился ЖК Центральный?</div>
            <div class="feedbacks__sub-title">Оставьте ваши контакты, и наши менеджеры ответят на все ваши вопросы.</div>
            <div class="feedbacks__input-rows">
                <div class="feedbacks__input-wrapper feedbacks-input">
                    <label class="feedbacks-input__label feedbacks-input__label--name"><span class="feedbacks-input__label-text">Имя</span></label>
                    <input type="text" class="feedbacks-input__input">
                </div>
                <div class="feedbacks__input-wrapper feedbacks-input">
                    <label class="feedbacks-input__label feedbacks-input__label--tel"><span class="feedbacks-input__label-text">+7</span></label>
                    <input type="tel" class="feedbacks-input__input">
                </div>
                <div class="feedbacks__input-wrapper feedbacks__input-wrapper--btn">
                    <div class="feedbacks__btn button">Перезвонить мне</div>
                </div>
            </div>
        </div>
    </section>
{{--    <section class="flats">
        <div class="flats__wrapper wrapper-1140">
            <div class="flats__layout-choice layout-choice">
                <h2 class="layout-choice__title">ПОДБЕРИТЕ ПЛАНИРОВКУ</h2>
                <div class="layout-choice__wrap">
                    <div class="layout-choice__nav"></div>
                    <div class="layout-choice__layout-view-wrap">
                        <div class="layout-choice__layout-view"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flats__feedback-wrapper feedback-row">
            <div class="feedback-row__wrapper wrapper-1140">
                <p class="feedback-row__text">Понравилась планировка?<br>Свяжитесь с нашим менеджером и обсудите все детали</p>
                <div class="feedback-row__inputs-wrapper">
                    <div class="feedback-row__input-wrapper feedback-input">
                        <label class="feedback-input__label feedback-input__label--name">Имя</label>
                        <input type="text" class="feedback-input__input">
                    </div>
                    <div class="feedback-row__input-wrapper feedback-input">
                        <label class="feedback-input__label feedback-input__label--tel">+7</label>
                        <input type="tel" class="feedback-input__input">
                    </div>
                    <div class="feedback-row__input-wrapper">
                        <a class="feedback-row__cal-me button">Перезвонить мне</a>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    @include('front.index.meta')
@endsection
