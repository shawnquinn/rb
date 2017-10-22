<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>



<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<div class="col-12">
				<img class="footer-logo img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-white.png" alt="<?php echo esc_html_e('HomeAid San Diego', 'understrap') ?>">
				<address class="homeaid text-center">
					6960 Flanders Dr., San Diego, CA 92121 | (858) 793-6292	|	info@homeaidsd.org
				</address>
			</div>
		</div>

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<?php wp_nav_menu(
						array(
							'theme_location'  => 'footer',
							'container_class' => 'justify-content-center',
							'container_id'    => 'navbarNavDropdown',
							'menu_class'      => 'navbar-nav',
							'fallback_cb'     => '',
							'menu_id'         => 'footer-menu',
							'walker'          => new WP_Bootstrap_Navwalker(),
						)
					); ?>


					<div class="site-info text-center" hidden>

							<a href="<?php  echo esc_url( __( 'http://wordpress.org/','understrap' ) ); ?>"><?php printf(
							/* translators:*/
							esc_html__( 'Proudly powered by %s', 'understrap' ),'WordPress' ); ?></a>
								<span class="sep"> | </span>

							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Theme: %1$s by %2$s.', 'understrap' ), $the_theme->get( 'Name' ),  '<a href="'.esc_url( __('http://understrap.com', 'understrap')).'">understrap.com</a>' ); ?>

							(<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'Version: %1$s', 'understrap' ), $the_theme->get( 'Version' ) ); ?>)
					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>
