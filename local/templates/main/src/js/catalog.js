import * as $ from 'jquery'

$(document).ready(function () {
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
});