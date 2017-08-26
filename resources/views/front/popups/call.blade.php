<div class="white-popup mfp-with-anim mfp-hide form-id" id="call">
    <div class="white-popup__wrap">
        <h4 class="white-popup__title">МЫ С РАДОСТЬЮ ВАМ ПЕРЕЗВОНИМ</h4>
        <p class="white-popup__sub-title">Оставьте ваши контакты, и наши менеджеры
            ответят на все ваши вопросы.</p>
        <div class="white-popup__form feedback-form">
            {{--Передача Названия формы--}}
            <input type="hidden" name="form" class="form-input" value="call">

            <div class="feedback-form__row form-row">
                    <div class="form-row__validation-wrap feedbacks-input">
                        <label class="feedbacks-input__label feedbacks-input__label--name"><span class="feedbacks-input__label-text">Имя</span></label>
                        <input type="text" name="name" required class="form-row__input form-input feedbacks-input__input">
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip form-row__tooltip--border">Как к вам обращаться</p></div>
                    </div>
            </div>

            <div class="feedback-form__row form-row">
                    <div class="form-row__validation-wrap feedbacks-input">
                        <label class="feedbacks-input__label feedbacks-input__label--tel"><span class="feedbacks-input__label-text">+7</span></label>
                        <input type="tel" class="form-row__input form-input feedbacks-input__input" maxlength="25" name="phone">
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip form-row__tooltip--border">Телефонный номер для связи</p></div>
                    </div>
            </div>

            {{--<div id="recaptcha" class="g-recaptcha" data-size="invisible"
                 data-sitekey="6LcvuCAUAAAAAJgp_f6pUukFjFpBccl72h0Y24rr"
                 data-callback="onSubmitReCaptcha"></div>--}}

            <div class="feedback-form__row form-row feedback-form__row--center-flag">
                <input type="submit" value="Перезвонить мне" class="form-row__send-form send-form">
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close mfp-close--visible">×</button>
        </div>
    </div>
</div>