// Custom JavaScript File

// Init Wow Effects
new WOW().init();

// Custom Nav SlideOut
function openNav() {
    document.getElementById("slideoutnav").style.width = "60%";
    document.getElementById("close-button").style.opacity = "1";
}

function closeNav() {
    document.getElementById("slideoutnav").style.width = "0";
    document.getElementById("close-button").style.opacity = "0";
}

// IIFE for jQuery
( function( $ ) {
  // Carousel Main
  //$(".carousel-item").first().addClass( "active" );

  //Animate
  //$("#slide-nav").css({opacity: 0});

  $('#close-button').click(function() {
    $('#slide-nav').css({opacity:0});
  });

  $('#open-button').click(function() {
    $('#slide-nav').delay(300).animate({opacity: 1}, 500, "swing");
  });


  // Preloader
  $(window).on('load', function() { // makes sure the whole site is loaded
    $('#status').delay(2500).fadeOut(); // will first fade out the loading animation
    $('#preloader').delay(3000).fadeOut(1500); // will fade out the white DIV that covers the website.
    $('body').delay(350).css({'overflow':'visible'});
  })

  //Homepage BG Slider
  $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade',
    speed: 3000,
    pause: 7000,
    responsive: true,
    pager: false,
    randomStart: true,
  });



} )( jQuery );
