// Custom JavaScript File

// Init Wow Effects
//new WOW().init();

// Custom Nav SlideOut
// function openNav() {
//     document.getElementById("slideoutnav").style.width = "66.67%";
//     document.getElementById("close-button").style.opacity = "1";
// }

// function closeNav() {
//     document.getElementById("slideoutnav").style.width = "0";
//     document.getElementById("close-button").style.opacity = "0";
// }


// IIFE for jQuery
( function( $ ) {
  // Wait for Signature to Load then add Parallax effect to logo
  // First Instance
  setTimeout(function() { 
    // Second Instance
    var logo = document.getElementById('main-home');
    var pxInstance2 = new Parallax(logo);
  }, 3600);


  if( $('body.home').length ){
    // Second Instance
    var scene = document.getElementById('plx');
    var pxInstance1 = new Parallax(scene);
  }
  // Carousel Main
  //$(".carousel-item").first().addClass( "active" );

  //Animate
  //$("#slide-nav").css({opacity: 0});

  var num = "95%";

  if ($(window).width() < 992) {
      num = "95%";
  }
  else {
      num = "66.67%";
  }

  $(window).resize(function() {
    if ($(window).width() < 992) {
      num = "95%";
    }
    else {
      num = "66.67%";
    }
  });

  //Open Nav menu on click
  $('#open-button').click(function() {
    $('.stack-1').animate({width: "85%"}, 100, "swing");
    $('.stack-2').stop().delay(200).animate({width: "75%"}, 100, "swing");
    $('#slideoutnav').stop().delay(400).animate({width: num}, 100, "swing");

    $('#close-button').css("opacity", 1);
  });
// Close on click
  $('#close-button').click(function() {
    $('#slideoutnav').css("width", "0%");
    $('#close-button').css("opacity", 0);

    $('.stack-1').css("width", "0%");
    $('.stack-2').css("width", "0%");
  });

  //Preloader Progress Bar
  $(".progress-bar").animate({
        width: "100%"
    }, 250 ); // start in 250 milliseconds
  
  // Reveal Opacity of Nav
  $('#open-button').click(function() {
    $('#slide-nav').stop().delay(1000).animate({opacity: 1}, 500, "swing");
    $('.menu-logo').stop().delay(1350).animate({opacity: 1}, 1000, "swing");
    $('.sidenav').addClass('shadowed');
  });
  // Hide Opacity of Nav on Close
  $('#close-button').click(function() {
    $('#slide-nav').stop().css({opacity:0});
    $('.menu-logo').stop().css({opacity:0});
    $('.sidenav').removeClass('shadowed');
  });

  // Preloader
  $(window).on('load', function() { // makes sure the whole site is loaded
    //$('#progressive').delay(2000).addClass('dumped'); // will first fade out the loading animation
    // $("#progressive").delay(2000).queue(function(next) {
    //   $(this).addClass('dumped');
    //   next();
    // });
    $('#preloader').delay(2200).fadeOut(1200); // will fade out the white DIV that covers the website.
    //$('#preload-logo').delay(200).addClass('loaded'); // Load in logo zoomed.
    //$('body').delay(350).css({'overflow':'visible'});
  });
  
  // Preloader inside pages
  $(window).on('load', function() { // makes sure the whole site is loaded
    $('#preloader-inside').fadeOut(1000); // will fade out the white DIV that covers the website.
  });

  //Homepage BG Slider
  $('.bxslider-OFF').bxSlider({
    auto: true,
    mode: 'fade',
    speed: 3000,
    pause: 7000,
    responsive: true,
    preloadImages: 'all',
    pager: false,
    randomStart: false,
    touchEnabled: false,
    oneToOneTouch: false
  });



} )( jQuery );
