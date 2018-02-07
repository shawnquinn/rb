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

	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicons/manifest.json">
	<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicons/safari-pinned-tab.svg" color="#174ca1">
	<meta name="theme-color" content="#ffffff">

	<!-- TypeKit -->
	<script src="https://use.typekit.net/rgx3fsq.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

	<?php if (is_front_page()) : ?>

	<script>
	
		var images = new Array();
		function preloadimages(){
			for (i=0; i< preloadimages.arguments.length; i++){
				images[i]=new Image()
				images[i].src=preloadimages.arguments[i]
			}
		}
		preloadimages( window.location.href + "/wp-content/themes/reiterburns/img/sequence-new30fps.jpg");

		console.log(window.location.href + "/wp-content/themes/reiterburns/img/sequence-new30fps.jpg");

	</script>

	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php if (is_front_page()) : ?>
		<div id="preloader">
		  <div id="status">
		  <a id="rb-sign" class="play" href="#" target="_blank"></a>
		  <div hidden><img id="preload-logo" class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png" alt="<?php echo bloginfo() ?>"></div>
			</div>
			<div id="progressive" hidden>
        <div class="progress" >
            <div class="progress-bar" role="progressbar" data-transitiongoal="100"></div>
        </div>
     	</div>
		</div>

	<?php else : ?>
		<!-- <div id="preloader-inside" hidden></div> -->
	<?php endif; ?>

	<div id="framed-body">
		<div id="left"></div>
		<div id="right"></div>
		<div id="top"></div>
		<div id="bottom"></div>
	</div>

	<div id="slideoutnav" class="sidenav">

	  	<a href="javascript:void(0)" id="close-button" class="closebtn nav-button"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-left.svg" /><span>Close Menu</span></a>


		<a href="<?php echo home_url( '/'); ?>" class="home-button"><span><i class="fa fa-home"></i> HOME</span></a>
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
				echo '<a href="'. get_home_url('/') .'"><img class="menu-logo" src="'. esc_url( $logo[0] ) .'"></a>';
			}
		?>

		<header id="slide-nav" class="container-fluid px-0">
			<div class="row">
				<div class="col-12">
					<h3 hidden>How Can We Help?</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-12">

					<div class="row pt-3 px-4">
						<div class="col-sm-4 mb-3 mb-sm-0">
							<a href="<?php echo home_url( '/practice-areas/' ) ?>"><h4><?php echo esc_html( 'Practice Areas' ) ?></h4></a>
							<a href="<?php echo home_url( '/practice-areas/' ) ?>"><h5><?php echo esc_html( 'Litigation' ) ?></h5></a>
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

							<a href="<?php echo home_url( '/practice-areas/' ) ?>"><h5><?php echo esc_html( 'Corporate' ) ?></h5></a>
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

						<div class="col-sm-4 mb-3 mb-sm-0">
						<a href="<?php echo home_url( '/attorneys/' ) ?>"><h4><?php echo esc_html( 'Attorneys' ) ?></h4></a>
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
							<a href="<?php echo home_url( '/staff/' ) ?>"><h5><?php echo esc_html( 'Staff' ) ?></h5></a>
						</div>

						<div id="nav-contact-info" class="col-sm-4 mb-5 mb-sm-0">
							<a href="<?php echo home_url( '/contact/' ) ?>"><h4><?php echo esc_html( 'Contact Us' ) ?></h4></a>
							<p>Phone <span class="tel"><a href="tel:+1-312-982-0090">312 982 0090</a></span></p>

							<p>Fax <span class="tel"><a href="tel:+1-312-429-0644">312 429 0644</a></span></p>

							<p>Email <span class="email"><a href="mailto:kate@reiterburns.com">kate@reiterburns.com</a></span></p>

							<p>Offices</p> <address>
								311 S Wacker Drive<br/>
								Suite 5200<br/>
								Chicago IL 60606<br/>
							</address>
							<a target="_blank" href="<?php echo esc_url("https://spothero.com/search?latitude=41.8774376&longitude=-87.6359115&search_string=311%20S%20Wacker%20Dr%2C%20Chicago%2C%20IL%2060606%2C%20USA") ?>"><img class="spot-hero img-fluid mr-auto d-block pb-5 mb-5" src="<?php echo get_template_directory_uri(); ?>/img/spot-hero.png" alt="<?php echo bloginfo(); ?> | Spot Hero" /></a>
						</div>
					</div>
				</div>
			</div>
	  </header>

	</div><!-- SlideoutNav -->
	<div class="stack-1"></div>
	<div class="stack-2"></div>


<?php if ( !is_front_page() && has_post_thumbnail() ) : ?>

<?php
	$content = '';
	$thumb_id = get_post_thumbnail_id();
	$thumb_url = wp_get_attachment_image_src($thumb_id,'full', true);

	$content .= '<div class="site-wrapper" id="panel" style="background-image: url('.$thumb_url[0].')">';
	echo $content; 
?>

<?php else : ?>

<?php
	$content = '';
	$content .= '<div class="site-wrapper" id="panel">';
	echo $content; 
?>

<?php endif; ?>

<a href="javascript:void(0)" id="open-button" class="openbtn nav-button"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/hamburger.svg" /><span>How Can We Help?</span></a>

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

	<?php if ( is_front_page() ) : ?>
		<div data-relative-input="true" id="plx">
			<div class="bxslider" data-depth="0.033">
				<div class="slides slide-1"></div>
				<div class="slides slide-2" hidden></div>
				<div class="slides slide-3" hidden></div>
			</div>
		</div>
	
	<?php endif; ?>
