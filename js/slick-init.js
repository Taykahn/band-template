jQuery(document).ready(function($){
 $('.slider-for').slick({
 arrows: false,
 fade: true,
 asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
  slidesToShow: 1,
 slidesToScroll: 1,
 asNavFor: '.slider-for',
 dots: false,
 centerMode: true,
 focusOnSelect: true,
 arrows: false,
 autoplay: true,
 autoplaySpeed: 5000,
 fade: true
 });
});