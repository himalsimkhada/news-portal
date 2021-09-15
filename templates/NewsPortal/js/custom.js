$(document).ready(function($) {
    $(".slider .slider-holder").owlCarousel({
        loop: true,
        margin: 20,
        nav: true,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
    });