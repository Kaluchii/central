$(document).ready(function () {
    $(window).on('load', function () {
        $('.about__text-col, .about__tagline, .contacts__contact-block, .feedbacks__wrapper').viewportChecker({
            classToAdd: 'display',
            offset: '40%'
        });
    });
});