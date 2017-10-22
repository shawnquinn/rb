// Custom JavaScript File
new WOW().init();

var rellax = new Rellax('.rellax', {
  speed: -2,
  center: false,
  round: true
});

( function( $ ) {

  // Carousel Main
  $(".carousel-item").first().addClass( "active" );

  // Click toggle Accordion
  var $link = $('.card h5 a');
  var $collapsed = $('.card h5 a.collapsed');
  $link.on('click', function() {
    $(this).children('.plus-minus').find('i.fa').toggleClass('fa-minus');
  });

  //Bx Slider - Ticker
  $('.bxslider').bxSlider({
    minSlides: 4,
    maxSlides: 4,
    useCSS: false,
    slideWidth: 200,
    slideMargin: 50,
    ticker: true,
    speed: 32000,
    tickerHover: true
  });

  // ScrollToTop
  $(window).scroll(function(){
		if ($(this).scrollTop() > 500) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});

	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});

} )( jQuery );


( function( $ ) {
  $('.counter').counterUp({
    delay: 50,
    time: 2000,
    offset: 100,
    // beginAt: 100,
    // formatter: function (n) {
    //   return n.replace(/,/g, '.');
    // }
  });
} )( jQuery );
