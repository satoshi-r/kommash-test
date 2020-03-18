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



    // function (e) {
    //     e.preventDefault();

    //     if (!$(this).hasClass('open')) {
    //         $('.menu_column_list_item_submenu').slideUp(200);
    //         $('.i_have_sub').removeClass('open');


    //         $(this).addClass('open');
    //         $(this).parent().find('.menu_column_list_item_submenu').slideDown(200);
    //     }

    // }
});