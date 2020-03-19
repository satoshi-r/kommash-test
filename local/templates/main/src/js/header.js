import * as $ from 'jquery'

$(document).ready(function () {
    // dropdown
    $('.header-menu__btn').hover(function () {
        $(this).find('.header-menu__dropdown').fadeToggle(200);
    });

    // hamburger
    const hamburger = $('.hamburger');
    $('#hamburger-btn').click(function () {
        $(this).toggleClass('menu-open');
        if ($(this).hasClass('menu-open')) {
            hamburger.delay(150).fadeIn(200).addClass('hamburger-opened');
        } else {
            hamburger.fadeOut(200).removeClass('hamburger-opened');;
        }
    });

    // accordeon
    $('.hamburger-accordeon').on('click', function (e) {
        e.preventDefault();

        if ($(this).closest('.accordeon-item').hasClass('accordeon-open')) {
            $('.accordeon-item').removeClass('accordeon-open');
        } else {
            $('.accordeon-item').removeClass('accordeon-open');
            $(this).closest('.accordeon-item').addClass('accordeon-open');
        }
        const $content = $(this).next();
        $content.slideToggle(100);
        $('.accordeon-item .hamburger-accordeon__list').not($content).slideUp('fast');
    });

    // contacts
    const contacts = $('.contacts');
    $('.header-contacts__btn').click(function () {
        contacts.addClass('opened');
    });

    const closeContacts = e => {
        if (!contacts.is(e.target) && contacts.has(e.target).length === 0) {
            contacts.removeClass('opened');
        }
    }

    $(document).mouseup(function(e){
        closeContacts(e);
    });

    // search
    const search = $('.header-search');
    $('#search-open').click(function () {
        search.fadeIn(300).css('display', 'flex');
    });

    $('#search-close').click(function () {
        search.fadeOut(300);
    });

    $(document).on('keydown', function (e) {
        if (e.keyCode == 27) {
            e.stopPropagation();
            search.fadeOut(300);
        }
    });


});