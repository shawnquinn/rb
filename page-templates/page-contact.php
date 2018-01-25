<?php
/**
* Template Name: Contact
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
$sidebar_pos = get_theme_mod( 'understrap_sidebar_position' );

?>

<div class="wrapper" id="contact-page">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="logo-inside">
		<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
			if ( has_custom_logo() ) {
				echo '<a href="'. get_home_url('/') .'"><img src="'. esc_url( $logo[0] ) .'"></a>';
			}
		?>
		</div>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">

					<?php while ( have_posts() ) : the_post(); ?>

						<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					<?php endwhile; // end of the loop. ?>

				</main><!-- #main -->

			</div><!-- .content-area col #primary -->

		</div><!-- .row -->

		<div id="contact-info" class="row mb-5 pb-4">
			<div id="phone" class="col-sm-4 col-6">
				<img class="d-block mb-3" src="<?php echo get_template_directory_uri(); ?>/img/svg/phone.svg">
				<h4 class="text-uppercase">Phone</h4>
				<p><a href="tel:+1-312-982-0090">312.982.0090</a></p>
			</div>

			<div id="email" class="col-sm-4 col-6 mb-4">
				<img class="d-block mb-3" src="<?php echo get_template_directory_uri(); ?>/img/svg/email.svg">
				<h4 class="text-uppercase">Email</h4>
				<p><a href="mailto:kate@reiterburns.com">kate@reiterburns.com</a></p>
			</div>

			<div id="office" class="col-sm-4">
				<img class="d-block mb-3" src="<?php echo get_template_directory_uri(); ?>/img/svg/office.svg">
				<h4 class="text-uppercase">Offices <span><a target="_blank" href="<?php echo esc_url('https://goo.gl/maps/t3k6PLVTxqE2') ?>">Get Directions</a></span></h4>
				<p>311 S Wacker Drive,<br/> 
				Suite 5200,<br/>  Chicago, IL 60606
				</p>
				<a target="_blank" href="<?php echo esc_url("https://spothero.com/search?starts=2018-01-25T04%3A00&ends=2018-01-25T07%3A00&latitude=41.8774376&longitude=-87.6359115&search_string=311%20S%20Wacker%20Dr%2C%20Chicago%2C%20IL%2060606%2C%20USA") ?>"><img class="spot-hero img-fluid mr-auto d-block" src="<?php echo get_template_directory_uri(); ?>/img/spot-hero.png" alt="<?php echo bloginfo(); ?> | Spot Hero" /></a>
			</div>
		</div>

	</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
