<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


		<div id="preloader">
		  <div id="status">
				<img id="preload-logo" class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png" alt="<?php echo bloginfo() ?>">
			</div>
			<div id="progressive">
        <div class="progress" >
            <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
        </div>
     </div>
		</div>


	<div id="left"></div>
	<div id="right"></div>
	<div id="top"></div>
	<div id="bottom"></div>

	<div id="slideoutnav" class="sidenav">
	  <a href="javascript:void(0)" id="close-button" class="closebtn nav-button" onclick="closeNav()"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-left.svg" /><span>Close Menu</span></a>

		<header id="slide-nav" class="container-fluid px-0">
			<div class="row">
				<div class="col-12">
					<img class="menu-logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo bloginfo() ?>">
					<h3>How Can We Help?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">

					<div class="row pt-3">
						<div class="col-4">
							<h4>Practice Areas</h4>
							<h5>Litigation</h5>
							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'litigation',
									'container_class' => 'justify-content-center',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu'
									//'walker'          => new WP_Bootstrap_Navwalker(),
								)
							); ?>

							<h5>Corporate</h5>
							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'corporate',
									'container_class' => 'justify-content-center',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu'
									//'walker'          => new WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>

						<div class="col-4">
							<h4>Attorneys</h4>
							<!-- The WordPress Menu goes here -->
							<?php wp_nav_menu(
								array(
									'theme_location'  => 'attorneys',
									'container_class' => 'justify-content-center',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu'
									//'walker'          => new WP_Bootstrap_Navwalker(),
								)
							); ?>
						</div>

						<div class="col-4">
							<h4>Contact Us</h4>
						</div>
					</div>
				</div>
			</div>
	  </header>

	</div>

<div class="site-wrapper" id="panel">
<a href="javascript:void(0)" id="open-button" class="openbtn nav-button" onclick="openNav()"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/hamburger.svg" /><span>How Can We Help?</span></a>

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar" hidden>

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light bg-light">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">

		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>


			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->

	<div class="site-wrapper-inner" id="page">
		<?php //get_template_part('home-hero'); ?>
		<div class="bxslider">
			<div class="slides slide-1"></div>
			<div class="slides slide-2"></div>
			<div class="slides slide-3"></div>
		</div>

		<div class="cover-container">
