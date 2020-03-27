import * as $ from 'jquery'
import * as slick from 'slick-carousel'

$('.product .slider').slick({
    infinite: true,
    vertical: false,
    verticalSwiping: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    draggable: true,
    arrows: false,
    asNavFor: '.product .slider-thumb'
});

$('.product .slider-thumb').slick({
    infinite: true,
    vertical: true,
    verticalSwiping: true,
    slidesToShow: 4,
    arrows: false,
    focusOnSelect: true,
    asNavFor: '.product .slider'
});