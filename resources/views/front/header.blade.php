@section('header')
    <div class="fixed-header">
        <div class="fixed-header__wrapper">
            <div class="fixed-header__logo-wrap">
                <a href="#title" class="fixed-header__top-link js_goto_anchor"><img src="/img/dark_logo.png" alt="Жилой комплекс Центральный" class="fixed-header__logo"></a>
            </div>
            <div class="fixed-header__menu-button js_fixed-menu"></div>
            <div class="fixed-header__nav-wrap">
                <div class="fixed-header__menu-logo-wrap">
                    <a href="#title" class="fixed-header__top-link js_goto_anchor"><img src="/img/dark_logo_mobile.png" alt="Жилой комплекс Центральный" class="fixed-header__menu-logo"></a>
                </div>
                <ul class="fixed-header__nav-list">
                    <li class="fixed-header__nav-item"><a href="#about" class="js_goto_anchor fixed-header__nav-link">О КОМПЛЕКСЕ</a></li>
                    <li class="fixed-header__nav-item"><a href="#gallery" class="js_goto_anchor fixed-header__nav-link">ГАЛЕРЕЯ</a></li>
                    <li class="fixed-header__nav-item"><a href="#flats" class="js_goto_anchor fixed-header__nav-link">КВАРТИРЫ</a></li>
                    <li class="fixed-header__nav-item"><a href="#contacts" class="js_goto_anchor fixed-header__nav-link">КОНТАКТЫ</a></li>
                </ul>
            </div>
            <div class="fixed-header__feedback-wrap">
                <p class="fixed-header__phone-number">{{ $contacts->phone_field }}</p>
                <a href="#call" class="fixed-header__order-call button order_call_btn button"><span class="fixed-header__btn-text">Заказать звонок</span></a>
            </div>
        </div>
    </div>
@endsection