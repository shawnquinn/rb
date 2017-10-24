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
</div><!-- #page we need this extra closing tag here -->
		<footer class="container-fluid mastfoot">
			<div class="row inner">
				<div class="<?php if (is_front_page()) : ?>col-md-8<?php else: ?> col-md-8 col-lg-5<?php endif; ?> mr-auto px-0 d-flex text-center text-md-left align-items-center justify-content-center justify-content-md-start flex-column flex-md-row">
					<div class="logo-mini mb-3 mb-md-0 mr-md-3 mr-md-3">
						<a href="<?php echo esc_url( home_url('') ) ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-mini.png" alt="<?php echo bloginfo() ?>"></a>
					</div>
					<div class="copy">
						<p class="in-touch">GET IN TOUCH:  <span class="d-block d-md-inline-block"><a class="ml-0" href="tel:+1-312-123-4567"><?php echo esc_html_e('312.123.4567', 'understrap') ?></a> / <a href="mailto:kate@reiterburns.com"><?php echo esc_html_e('kate@reiterburns.com', 'understrap') ?></a></span></p>
						<p><?php echo esc_html_e('155 North Wacker Drive, Chicago, IL 60606, USA.', 'understrap') ?></p>
					</div>
				</div>

				<?php if (!is_front_page()) : ?>
					<div id="breadcrumbs" class="col-md-4 mr-auto px-0 align-items-center justify-content-center d-none d-lg-flex">
						<p class="m-0 mr-2"><?php echo esc_html('You Are Viewing:', 'understrap'); ?></p> <?php follow_the_breadcrumbs(); ?>
					</div>
				<?php endif; ?>

				<div class="col-lg-3 col-md-4 px-0 text-center text-md-right mt-4 mt-md-0">
						<p><a href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Terms &amp; Conditions', 'understrap') ?></a> / <a href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Privacy Policy', 'understrap') ?></a>.</p>
						<p><?php echo esc_html_e('Copyright &copy;', 'understrap') ?> <?php echo date('Y'); ?> <?php bloginfo(); echo esc_html_e(' LLC.', 'understrap') ?></p>
				</div>
			</div>
		</footer>



<?php wp_footer(); ?>

</body>

</html>
