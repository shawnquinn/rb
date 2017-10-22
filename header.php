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

<div class="hfeed site" id="page">

	<a href="#page" class="scrollToTop">
		<span class="fa-stack fa-2x">
		  <i class="fa fa-circle fa-stack-2x"></i>
		  <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
		</span>
	</a>

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light bg-light">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
				<div class="button-box">
					<button href="#" type="button" name="donate">Donate</button>
					<button href="#" type="button" name="donate">Need Shelter?</button>
				</div>
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

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse justify-content-center',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				); ?>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->

	<!-- ******************* The Secondary Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar-secondary">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<nav class="navbar navbar-expand-md navbar-light bg-blue-gradient z-depth-2">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

				<!-- The WordPress Secondary Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location' 	=> 'secondary',
						'container_class' => 'navbar-collapse justify-content-center d-none d-md-block ',
						'container_id'    => 'navbarNavNoDropdown',
						'menu_class' 			=> 'navbar-nav secondary-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'secondary-menu',
						'walker'          => new WP_Bootstrap_Navwalker(),
					)
				);?>

				<ul class="social-media justify-content-center">
					<li><a href="<?php echo esc_url('#'); ?>" target="_blank"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="<?php echo esc_url('#'); ?>" target="_blank"><i class="fa fa-instagram fa-lg"></i></a></li>
					<li><a href="<?php echo esc_url('#'); ?>" target="_blank"><i class="fa fa-linkedin fa-lg"></i></a></li>
					<li><a href="<?php echo esc_url('#'); ?>" target="_blank"><i class="fa fa-facebook fa-lg"></i></a></li>
				</ul>

				<div class="donate-involve">
					<button class="btn btn-lg btn-secondary btn-block" href="<?php echo esc_url( home_url( '/' ) ) ?>" hidden><?php esc_html_e( 'Get Involved','understrap' ); ?></button>
				</div>

			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- .wrapper-navbar end -->
