import * as $ from 'jquery'

$(document).ready(function () {
    // dropdown
    $('.header-menu__btn').hover(function () {
        $(this).find('.header-menu__dropdown').fadeToggle(200);
    });

    // hamburger
    $('#hamburger-btn').click(function () {
        $(this).toggleClass('menu-open');
        if ($(this).hasClass('menu-open')) {
            $('.hamburger').fadeIn(200).delay(150)
        }
    });



    // search
    const search = $('.header-search');
    $('#search-open').click(function () {
        search.fadeIn(300).css('display', 'flex');
    });

    $('#search-close').click(function () {
        search.fadeOut(300);
    });

    addEventListener("keydown", function (event) {
        if (event.keyCode == 27) {
            event.stopPropagation();
            search.fadeOut(300);
        }
    });

    // $('.opened').on('click', function (e) {
    //     e.preventDefault();

    //     if (!$(this).hasClass('accordeon-open')) {
    //         $(this).parent().find('.hamburger-accordeon__list').slideUp(200);
    //         $('.opened').removeClass('accordeon-open');

    //         $(this).addClass('accordeon-open');
    //         $(this).parent().find('.hamburger-accordeon__list').slideDown(200);
    //     }

    // });

    $('.hamburger-accordeon').on('click', function(e) {
        e.preventDefault();
    
        if($(this).closest('.accordeon-item').hasClass('accordeon-open')) {
            $('.accordeon-item').removeClass('accordeon-open');
        } else {
            $('.accordeon-item').removeClass('accordeon-open');
            $(this).closest('.accordeon-item').addClass('accordeon-open');
        }
        const $content = $(this).next();
        $content.slideToggle(100);
        $('.accordeon-item .hamburger-accordeon__list').not($content).slideUp('fast');
    });
});