import * as $ from 'jquery'

$(document).ready(function () {

    // вид
    const catalog = $('.catalog-output');
    const requireClasses = 'catalog-output';

    $('.catalog-view form').on('change', function (e) {
        const id = e.target.id;

        catalog.fadeOut(200, function () {
            catalog.removeClass(function (i, classNames) {
                return classNames.split(' ').filter(function (className) {
                    return requireClasses.indexOf(className) === -1;
                }).join(' ');
            });
            catalog.addClass(id);
        });

        catalog.delay(200).fadeIn(200);
    });

    // описание
    const btn = $('.catalog-description__btn');
    const desc = $('.catalog-description__text');
    const height = desc.height(); // сначала ловит высоту полного текста 

    desc.css({
        'max-height': '200px', // а здесь скрывает
        'overflow': 'hidden'
    })

    console.log(height);
    

    btn.click(function () {
        desc.toggleClass('show');

        if (desc.hasClass('show')) {
            desc.animate({'max-height': height}, 200);
            btn.text('Свернуть');
        } else {
            desc.animate({'max-height': '200px'}, 200);
            btn.text('Подробнее');
        }
    });

});