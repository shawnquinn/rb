<?php
/**
 * Template Name: Home Landing Page
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();

?>

<?php get_template_part('home-hero'); ?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper home-page" id="full-width-page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" hidden>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

						<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :

							comments_template();

						endif;
						?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->

	</div><!-- Container end -->

	<!-- ******************* The Latest Causes Area ******************* -->
	<section id="latest-causes">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title"><?php the_field('first_section_title'); ?></h3>
					<p class="section-lead lead text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.', 'understrap'); ?></p>
				</div>
			</div>

			<div class="row align-items-center py-5 causes">
				<div class="col-md-4 wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="200">
					<div class="inner-box">
						<a class="d-block" href="<?php echo esc_url( home_url('/') ); ?>">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/causes/c1.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						</a>
						<div class="content-box">
							<h4><?php echo esc_html_e('Alpha Sqaure', 'understrap') ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
							<a class="read-more" href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Learn More', 'understrap') ?></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="200">
					<div class="inner-box">
						<a class="d-block" href="<?php echo esc_url( home_url('/') ); ?>">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/causes/c2.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						</a>
						<div class="content-box">
							<h4><?php echo esc_html_e('Memory-Care Homes', 'understrap') ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
							<a class="read-more" href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Learn More', 'understrap') ?></a>
						</div>
					</div>
				</div>

				<div class="col-md-4 wow fadeInRight" data-wow-duration="1.5s" data-wow-offset="200">
					<div class="inner-box">
						<a class="d-block" href="<?php echo esc_url( home_url('/') ); ?>">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/causes/c3.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						</a>
						<div class="content-box">
							<h4><?php echo esc_html_e('Veteran\'s Resource Center', 'understrap') ?></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.</p>
							<a class="read-more" href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Learn More', 'understrap') ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- ******************* The Latest News ******************* -->
	<section id="news" hidden>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title wow fadeIn" date-wow-offset="200"><?php echo esc_html_e('Our Latest News', 'understrap'); ?></h3>
					<p class="section-lead lead text-center wow fadeIn" data-wow-duration="2s" data-wow-offset="200"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap'); ?></p>
				</div>
			</div>

			<div class="row my-5">
				<div class="col-md-5">
						<div class="post-featured wow fadeIn" data-wow-offset="200" data-wow-duration="2s">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-featured.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
							<div class="overlay-box text-center">
								<h4>Homes Fore the Homeless Golf Tournament 2017</h4>
								<p>Aug 25th, 2017 |	NEWS | <a href="#">EVENTS</a></p>
								<button class="btn btn-md btn-primary btn-block" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Read More', 'understrap') ?></button>
							</div>
						</div>
				</div>

				<div class="col-md-7">
					<div class="post-latest d-flex wow fadeInRight" data-wow-offset="200">
						<div class="image-thumb">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-thmb-1.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						</div>
						<div class="post-article">
							<a href="#"><h4>‘Homes Fore the Homeless’ Golf Tournament 2017</h4></a>
							<p>Aug 25th, 2017	|	NEWS	|	EVENTS</p>
							<a href="#">Read More »</a>
						</div>
					</div>

					<div class="post-latest d-flex wow fadeInRight" data-wow-offset="200">
						<div class="image-thumb">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-thmb-2.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						</div>
						<div class="post-article">
							<a href="#"><h4>Gold Nugget Win at PCBC for HomeAid San Diego</h4></a>
							<p>Sept 14th, 2017	|	NEWS	|	EVENTS</p>
							<a href="#">Read More »</a>
						</div>
					</div>

					<div class="post-latest d-flex wow fadeInRight" data-wow-offset="200">
						<div class="image-thumb">
							<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/post-thmb-3.jpg" alt="<?php echo esc_html_e('', 'understrap') ?>">
						</div>
						<div class="post-article">
							<a href="#"><h4>"Rey of Hope" - 15 Year Celebration</h4></a>
							<p>Oct 27th, 2017	|	NEWS	|	EVENTS</p>
							<a href="#">Read More »</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- ******************* The Providers Area ******************* -->
	<section id="providers" class="container-fluid">
		<div class="row">
			<div class="img-contain col-md-6 pl-0 d-none d-md-block wow fadeInLeft" data-wow-duration="2.33s"></div>
			<div class="col-md-6 py-5 wow fadeInRight">
					<div class="content">
						<h3><?php echo esc_html_e('Service Providers', 'understrap'); ?></h3>
						<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do. eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis a ute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', 'understrap'); ?></p>

						<div class="row pt-4">
							<div class="col-lg-6">
								<button class="btn btn-md btn-secondary btn-block waves-effect waves-light" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Learn More', 'understrap') ?></button>
							</div>
						</div>
					</div>
			</div>
		</div>
	</section>
	<!-- ******************* END Providers Area ******************* -->

	<!-- ******************* The Sponsors Area ******************* -->
	<section id="sponsors">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title wow fadeIn" date-wow-offset="200">Our Sponsors <span>&amp;</span> Donors</h3>
					<p class="section-lead lead text-center wow fadeIn" data-wow-duration="2s" data-wow-offset="200"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap'); ?></p>
				</div>
			</div>
		</div>

		<div class="container-fluid">
			<div class="row mt-5 mb-3 pt-4">
				<div class="logos col-12 px-0">
					<ul class="bxslider">
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-1.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-2.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-3.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-4.jpg" /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-5.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-6.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-7.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-8.jpg" /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-9.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-10.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-11.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-12.jpg" /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-13.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-14.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-15.jpg" /></li>
					  <li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-16.jpg" /></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/img/logos/logo-17.jpg" /></li>
							<!-- Backup Row for Loading -->

					</ul>
				</div>
			</div>
		</div>
	</section>

	<section id="counters">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title wow fadeIn" date-wow-offset="200">A Record of Success</h3>
					<p class="section-lead lead text-center wow fadeIn" data-wow-duration="2s" data-wow-offset="200"><?php echo esc_html_e('Building Hope for Today\'s Homeless', 'understrap'); ?></p>
				</div>
			</div>

			<div id="stats" class="row wow fadeIn" date-wow-offset="200">
				<div class="col-12">
					<ul class="d-flex justify-content-center">
						<li><div class="holder"><div class="number-box"><span class="counter">25</span></div></div><i class="fa fa-home fa-3x mt-2"></i><h4 class="mt-3">Shelters Built or Renovated</h4></li>

						<li><div class="holder"><div class="number-box">&#x24;<span class="counter">33,150,000</span></div></div><i class="fa fa-balance-scale fa-3x mt-2"></i><h4 class="mt-3">Project Value</h4></li>

						<li><div class="holder"><div class="number-box">&#x24;<span class="counter">5,364,000</span></div></div><i class="fa fa-heart fa-3x mt-2"></i><h4  class="mt-3">In-Kind Donations</h4></li>

						<li><div class="holder"><div class="number-box">~<span class="counter">153,000</span></div></div><i class="fa fa-balance-scale fa-3x mt-2"></i><h4 class="mt-3">Sqaure Feet</h4></li>

						<li><div class="holder"><div class="number-box"><span class="counter">711</span></div></div><i class="fa fa-bed fa-3x mt-2"></i><h4 class="mt-3">New Permanent Beds</h4></li>

						<li><div class="holder"><div class="number-box"><span class="counter">259,515</span></div></div><i class="fa fa-moon-o fa-3x mt-2"></i><h4 class="mt-3">Annual Bed Nights</h4></li>

						<li><div class="holder"><div class="number-box"><span class="counter">6</span></div></div><i class="fa fa-wrench fa-3x mt-2"></i><h4 class="mt-3">Shelter Projects in Pre-Development</h4></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<!-- ******************* The Welcome Area ******************* -->
	<section id="welcome">
		<div class="absolute">
			<div class="container-fluid">
				<div class="row">
				  <div class="col-md-2">
				  	<div class="md-blue rellax"
				  		data-rellax-speed="1"
				  		style="transform: rotate(45deg)">
				  	</div>

						<div class="sm-blue-dark rellax"
				  		data-rellax-speed="2"
				  		style="transform: rotate(45deg); margin-top:500px; margin-left:150px">
				  	</div>
				  </div>

					<div class="col-md-2">
				  	<div class="sm-grey rellax"
				  		data-rellax-speed="3"
				  		style="transform: rotate(45deg); margin-top:800px; margin-left:-30px">
				  	</div>
				  </div>

					<div class="col-md-2 ml-auto">
				  	<div class="md-blue rellax"
				  		data-rellax-speed="2"
				  		style="transform: rotate(45deg); margin-top:1200px; margin-left:-30px">
				  	</div>
				  </div>

				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-12 wow fadeIn" data-wow-offset="150">
					<h2 class="section-title text-center"><?php echo esc_html_e('Need Meets Opportunity', 'understrap') ?></h2>
					<p class="section-lead lead text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.', 'understrap') ?></p>
				</div>
			</div>
			<div class="row align-items-center pt-3 pb-5 my-3 wow fadeIn" data-wow-offset="230">
				<div class="col-md-4">
						<img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/home-hand-icon.png" alt="<?php echo esc_html_e('Needs Meet Opportunity', 'understrap') ?>">
				</div>

				<div class="col-md-4">
					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Victims', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>

					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Family', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Children', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>

					<div class="content-box d-flex align-items-center">
						<div class="icon">
							<i class="fa fa-star-o" aria-hidden="true"></i>
						</div>
						<div class="content">
							<h4><?php echo esc_html_e('Veterans', 'understrap') ?></h4>
							<p><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.', 'understrap') ?></p>
						</div>
					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-md-5">
					<button class="btn-lg btn-primary btn-block waves-effect waves-light btn" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Get Involved', 'understrap') ?></button>
				</div>
			</div>

		</div><!-- .container end -->
	</section><!-- Section #Welcome end -->

<!-- ******************* The Testimonials Area ******************* -->
	<section id="testimonials">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h3 class="text-center section-title wow fadeInUp" data-wow-duration="1.5s" date-wow-offset="200"><?php echo esc_html_e('What People Are Saying', 'understrap'); ?></h3>

				</div>
			</div>
		</div>

		<div id="carouselQuotes" class="carousel slide wow fadeInUp" data-wow-duration="1.5s" wow-data-offset="200" data-ride="carousel">

			<ol class="carousel-indicators">
		    <li data-target="#carouselQuotes" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselQuotes" data-slide-to="1"></li>
		  </ol>

			<div class="carousel-inner" role="listbox">

				<div id="quote-1" class="widget_text carousel-item active">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-10 mx-auto">
								<blockquote class="text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 'understrap') ?></blockquote>
								<span class="author text-center"><?php echo esc_html_e('Jane Doe', 'understrap') ?> <span><?php echo esc_html_e('Sponsor', 'understrap') ?></span></span>
							</div>
						</div>
					</div>
				</div><!-- .quote -->

				<div id="quote-2" class="widget_text carousel-item">
					<div class="container">
						<div class="row align-items-center">
							<div class="col-md-10 mx-auto">
								<blockquote class="text-center"><?php echo esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis.', 'understrap') ?></blockquote>
								<span class="author text-center"><?php echo esc_html_e('Jane Doe', 'understrap') ?> <span><?php echo esc_html_e('Sponsor', 'understrap') ?></span></span>
							</div>
						</div>
					</div>
				</div><!-- .quote -->

			</div><!-- .carousel-inner -->

		</div><!-- .carousel -->

	</section>

<!-- ******************* The Donate CTA ******************* -->
<section id="donate">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-3">
				<img class="img-fluid d-block mx-auto pt-5 wow zoomIn" data-wow-offset="200" data-wow-duration="1.5s" src="<?php echo get_template_directory_uri(); ?>/img/donate-heart.png" alt="<?php echo esc_html_e('Your Donation Could Save a Life', 'understrap') ?>">
			</div>

			<div class="col-md-6">
				<h3 class="wow fadeIn" data-wow-duration="2.7s" data-wow-offset="200">Your Donation Could Save a Life</h3>
				<p class="lead wow fadeIn" data-wow-duration="3.3s" data-wow-offset="200">Every dollar donated to HomeAid San Diego goes directly towards the building or renovation of a shelter or housing project.</p>
			</div>

			<div class="col-md-3">
				<button class="btn btn-lg btn-primary btn-block wow fadeIn" data-wow-duration="2s" data-wow-offset="200" href="<?php echo esc_url( home_url('/') ); ?>"><?php esc_html_e('Donate Today', 'understrap') ?></button>
			</div>
		</div>
	</div>
</section>
</div><!-- Wrapper end -->

<?php get_footer(); ?>
