
$(function () {
  $(window).on('scroll', function () {
      if ( $(window).scrollTop() > 10 ) {
          $('.navbar').addClass('active');
      } else {
          $('.navbar').removeClass('active');
      }
  });
});

$(function () {
  $(window).on('scroll', function () {
      if ( $(window).scrollTop() > 275 ) {
          $('.swipeTop').removeClass('abracadabra');
      } else {
          $('.swipeTop').addClass('abracadabra');
      }
  });
});

$(document).ready(function(){
    $('.arg0_swiper').slick({
      autoplay: true,
      autoplaySpeed: 4000,
      arrows: false,
    });
    $('#arg0_swiper--prev').on('click', function() {
      $('.arg0_swiper').slick('slickPrev');
    });
    $('#arg0_swiper--next').on('click', function() {
      $('.arg0_swiper').slick('slickNext');
    });
  });

  function openNav() {
    document.getElementById("myNav").style.width = "100%";
    document.getElementById("myNav-2").style.width = "50%";
    $('.navbar').removeClass('active');
    $('.navbar-brand').removeClass('abracadabra');
    $('.hamburger').removeClass('abracadabra');
  }
  
  function closeNav() {
    document.getElementById("myNav").style.width = "0%";
    document.getElementById("myNav-2").style.width = "0%";
    $('.navbar-brand').addClass('abracadabra');
    $('.hamburger').addClass('abracadabra');
    $('.navbar').addClass('active');
  }



  $("#btnSubmit").click(function(event) {

    // Fetch form to apply custom Bootstrap validation
    var form = $("#myForm")

    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    
    form.addClass('was-validated');
    // Perform ajax submit here...
    
});
