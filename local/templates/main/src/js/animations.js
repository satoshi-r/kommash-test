import * as $ from 'jquery'

$(document).ready(function () {
    const elements = [
        $('.advantages-block1 .advantages-block__title'),
        $('.advantages-block1 .advantages-block__lead'),
        $('.advantages-block1 .advantages-block__text'),
        $('.advantages-block1 .advantages-block__btn'),
        $('.advantages-block2 .advantages-block__title'),
        $('.advantages-block2 .advantages-block__lead'),
        $('.advantages-block2 .advantages-block__text'),
        $('.advantages-block3 .advantages-block__lead'),
        $('.advantages-block3 .advantages-block__text'),
        $('.advantages-block3 .advantages-block__btn'),
        $('.main-service-title'),
        $('.main-service-text'),
        $('.main-service-btn'),
        $('.main-clients-title'),
        $('.main-clients-desc'),
        $('.main-clients-icons'),
        $('.test-drive-container')
    ];

    $(window).scroll(function () {
        const scrollPos = $(this).scrollTop(),
            windowHeight = $(this).innerHeight();

        elements.forEach(item => {
            const elPos = item.offset().top;
            
            if (elPos < (scrollPos + windowHeight - 100)) {
                item.addClass('fadeInUp');
            }
        });
    });


});