$(document).ready(function(){
  $('.ct-box-slider').slick({
    autoplay: true,
    autoplaySpeed: 4000,
    arrows: false,
  });
  $('#ct-js-box-slider--prev').on('click', function() {
    $('.ct-js-box-slider').slick('slickPrev');
  });
  $('#ct-js-box-slider--next').on('click', function() {
    $('.ct-js-box-slider').slick('slickNext');
  });
});
