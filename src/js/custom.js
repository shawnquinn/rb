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
(function($) {
  // Preloader
  $(window)
    .on("resize", function() {
      // makes sure the whole site is loaded
      //$('#progressive').delay(2000).addClass('dumped'); // will first fade out the loading animation
      // $("#progressive").delay(2000).queue(function(next) {
      //   $(this).addClass('dumped');
      //   next();
      // });
      $("#preloader")
        .delay(3200)
        .fadeOut(1200); // will fade out the white DIV that covers the website.
      //$('#preload-logo').delay(200).addClass('loaded'); // Load in logo zoomed.
      //$('body').delay(350).css({'overflow':'visible'});
    })
    .resize();

  if ($("body.home").length) {
    // Wait for Signature to Load then add Parallax effect to logo
    // First Instance
    setTimeout(function() {
      // Second Instance
      var logo = document.getElementById("main-home");
      var pxInstance2 = new Parallax(logo);
    }, 3600);

    // Second Instance
    var scene = document.getElementById("plx");
    var pxInstance1 = new Parallax(scene);
  }
  // Carousel Main
  //$(".carousel-item").first().addClass( "active" );

  //Animate
  //$("#slide-nav").css({opacity: 0});

  var num = "95%";

  if ($(window).width() < 992) {
    num = "100%";
  } else {
    num = "66.67%";
  }

  $(window).resize(function() {
    if ($(window).width() < 992) {
      num = "100%";
    } else {
      num = "66.67%";
    }
  });

  $(window).on("load", function() {
    if ($(window).width() < 992) {
      $("#home-content").removeClass("animated fadeIn");
    }
  });

  //Open Nav menu on click
  $("#open-button").click(function() {
    $(".stack-1").animate({ width: "86.67%" }, 100, "swing");
    $(".stack-2")
      .stop()
      .delay(200)
      .animate({ width: "76.67%" }, 100, "swing");

    if ($(window).width() < 992) {
      $("#slideoutnav")
        .stop()
        .animate({ width: num }, 100, "swing");

      $("#close-button")
        .stop()

        .animate({ opacity: 1 }, 300, "swing");

      $(".home-button")
        .stop()

        .animate({ opacity: 1 }, 300, "swing");
    } else {
      $("#slideoutnav")
        .stop()
        .delay(400)
        .animate({ width: num }, 100, "swing");
    }
    $("#close-button")
      .stop()
      .delay(300)
      .animate({ opacity: 1 }, 300, "swing");

    $(".home-button")
      .stop()
      .delay(1000)
      .animate({ opacity: 1 }, 300, "swing");
  });

  // Close on click
  $("#close-button").click(function() {
    $("#slideoutnav").css("width", "0%");
    $("#close-button").css("opacity", 0);
    $(".home-button").css("opacity", 0);

    $(".stack-1").css("width", "0%");
    $(".stack-2").css("width", "0%");
  });

  //Preloader Progress Bar
  $(".progress-bar").animate(
    {
      width: "100%"
    },
    250
  ); // start in 250 milliseconds

  // Reveal Opacity of Nav
  $("#open-button").click(function() {
    if ($(window).width() < 992) {
      $("#slide-nav")
        .stop()
        .delay(300)
        .animate({ opacity: 1 }, 500, "swing");
      $(".menu-logo")
        .stop()
        .delay(300)
        .animate({ opacity: 1 }, 1000, "swing");
    } else {
      $("#slide-nav")
        .stop()
        .delay(1000)
        .animate({ opacity: 1 }, 500, "swing");
      $(".menu-logo")
        .stop()
        .delay(1350)
        .animate({ opacity: 1 }, 1000, "swing");
    }
    //$(".sidenav").addClass("shadowed");
  });
  // Hide Opacity of Nav on Close
  $("#close-button").click(function() {
    $("#slide-nav")
      .stop()
      .css({ opacity: 0 });
    $(".menu-logo")
      .stop()
      .css({ opacity: 0 });
    $(".sidenav").removeClass("shadowed");
  });

  $(".site-wrapper").click(function() {
    $("#slide-nav").css({ opacity: 0 });
    $(".menu-logo").css({ opacity: 0 });
    $("#slideoutnav").css("width", "0%");
    $(".stack-1").css("width", "0%");
    $(".stack-2").css("width", "0%");
  });

  // Preloader inside pages
  // $(window).on('load', function() { // makes sure the whole site is loaded
  //   $('#preloader-inside').fadeOut(1000); // will fade out the white DIV that covers the website.
  // });

  // Recaptcha Appear
  var recaptcha = $("#rb-recaptcha");
  //$('#rb-recaptcha').hide();
  $(".wpcf7 input, .wpcf7 textarea").click(function() {
    recaptcha.addClass("appear");
  });

  // Popover

  // default init

  // $(function() {
  //   $('[data-toggle="popover"]').popover({
  //     content: "hello",
  //   });
  // });

  $(".btn-share").popover({
    html: true,
    // container: ".btn-share",
    content: function() {
      return $(this)
        .next(".popoverContent")
        .html();
    },
    template:
      '<div class="popover" role="tooltip"><div class="arrow"></div><div class="popover-body"></div></div>'
  });

  $(document).click(function(event) {
    //   // hide share button popover
    if (!$(event.target).closest(".btn-share").length) {
      $(".btn-share").popover("hide");
    }
  });

  // var isDragging = false;
  // $(".frame")
  //   .mousedown(function() {
  //     isDragging = false;
  //   })
  //   .mousemove(function() {
  //     isDragging = true;
  //   })
  //   .mouseup(function() {
  //     var wasDragging = isDragging;
  //     isDragging = false;
  //     if (wasDragging) {
  //       $('[data-toggle="popover"]').popover("hide");
  //     }
  //   });

  $(".frame").on("mousedown", function(e) {
    //only buttons
    if (
      $(e.target).data("toggle") !== "popover" &&
      $(e.target).parents(".popover.in").length === 0
    ) {
      $('[data-toggle="popover"]').popover("hide");
    }
    //   //buttons and icons within buttons
  });

  // $("a.twitter").attr(
  //   "href",
  //   "https://twitter.com/home?status=" + window.location.href
  // );
  // $("a.facebook").attr(
  //   "href",
  //   "https://www.facebook.com/sharer/sharer.php?u=" + window.location.href
  // );
  // $("a.google-plus").attr(
  //   "href",
  //   "https://plus.google.com/share?url=" + window.location.href
  // );

  //Homepage BG Slider
  $(".bxslider-OFF").bxSlider({
    auto: true,
    mode: "fade",
    speed: 3000,
    pause: 7000,
    responsive: true,
    preloadImages: "all",
    pager: false,
    randomStart: false,
    touchEnabled: false,
    oneToOneTouch: false
  });

  // Attorney Index Horizontal Slider
  var $frame = $("#basic");
  var $slidee = $frame.children("ul").eq(0);
  var $wrap = $frame.parent();
  var $masterWrap = $("#attorneys-index");

  var options = {
    horizontal: 1,
    itemNav: "basic",
    smart: 0,
    activateOn: "click",
    mouseDragging: 1,
    touchDragging: 1,
    releaseSwing: 0,
    startAt: 0,
    scrollBar: $wrap.find(".scrollbar"),
    scrollBy: 1,
    pagesBar: $wrap.find(".pages"),
    activatePageOn: "click",
    speed: 700,
    swingSpeed: 1,
    elasticBounds: 1,
    easing: "easeOutExpo",
    dragHandle: 1,
    dynamicHandle: 1,
    clickBar: 1,

    // Buttons
    forward: $wrap.find(".forward"),
    backward: $wrap.find(".backward"),
    prev: $wrap.find(".prev"),
    next: $wrap.find(".next"),
    prevPage: $masterWrap.find(".prevPage"),
    nextPage: $masterWrap.find(".nextPage")
  };

  // Call Sly on frame
  $frame.sly(options);

  $(window).resize(function(e) {
    $frame.sly("reload");
  });

  // To Start button
  $wrap.find(".toStart").on("click", function() {
    var item = $(this).data("item");
    // Animate a particular item to the start of the frame.
    // If no item is provided, the whole content will be animated.
    $frame.sly("toStart", item);
  });

  // To Center button
  $wrap.find(".toCenter").on("click", function() {
    var item = $(this).data("item");
    // Animate a particular item to the center of the frame.
    // If no item is provided, the whole content will be animated.
    $frame.sly("toCenter", item);
  });

  // To End button
  $wrap.find(".toEnd").on("click", function() {
    var item = $(this).data("item");
    // Animate a particular item to the end of the frame.
    // If no item is provided, the whole content will be animated.
    $frame.sly("toEnd", item);
  });

  // Add item
  $wrap.find(".add").on("click", function() {
    $frame.sly("add", "<li>" + $slidee.children().length + "</li>");
  });

  // Remove item
  $wrap.find(".remove").on("click", function() {
    $frame.sly("remove", -1);
  });
})(jQuery);
