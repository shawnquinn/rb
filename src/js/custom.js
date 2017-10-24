// Custom JavaScript File

// Init Wow Effects
//new WOW().init();

// Custom Nav SlideOut
function openNav() {
    document.getElementById("slideoutnav").style.width = "66.67%";
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



  if ($(window).width() < 992) {
     var num = "95%";
  }
  else {
     var num = "66.67%";
  }

  $(window).resize(function() {
    if ($(window).width() < 992) {
      num = "95%";
    }
    else {
      num = "66.67%";
    }
  });

  $('#open-button').click(function() {
    $('#slideoutnav').css("width", num);
    $('#close-button').css("opacity", 1)
  });

  $('#close-button').click(function() {
    $('#slideoutnav').css("width", "0%");
    $('#close-button').css("opacity", 0)
  });

  $(".progress-bar").animate({
        width: "100%"
    }, 250 ); // start in under a se

  $('#open-button').click(function() {
    $('#slide-nav').stop().delay(300).animate({opacity: 1}, 500, "swing");
    $('.sidenav').addClass('shadowed');
  });

  $('#close-button').click(function() {
    $('#slide-nav').stop().css({opacity:0});
    $('.sidenav').removeClass('shadowed');
  });

  // Preloader
  $(window).on('load', function() { // makes sure the whole site is loaded
    //$('#progressive').delay(2000).addClass('dumped'); // will first fade out the loading animation
    $("#progressive").delay(2000).queue(function(next) {
      $(this).addClass('dumped');
      next();
    });
    $('#preloader').delay(2200).fadeOut(1500); // will fade out the white DIV that covers the website.
    $('#preload-logo').delay(200).addClass('loaded'); // Load in logo zoomed.
    $('body').delay(350).css({'overflow':'visible'});
  });
  // Preloader inside pages
  $(window).on('load', function() { // makes sure the whole site is loaded
    $('#preloader-inside').fadeOut(1000); // will fade out the white DIV that covers the website.
  });

  //Homepage BG Slider
  $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade',
    speed: 3000,
    pause: 7000,
    responsive: true,
    preloadImages: 'all',
    adad
    pager: false,
    randomStart: true,
    touchEnabled: false,
    oneToOneTouch: false
  });



} )( jQuery );
