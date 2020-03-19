import * as $ from 'jquery'
import * as slick from 'slick-carousel'

$('.first .slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: false,
    arrows: false,
    dots: false,
    fade: true,
});

$('.slider-dots').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    asNavFor: '.first .slider',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    centerPadding: '0'
});

$('.first .slider .slider-item').parent().css('height', '100%');