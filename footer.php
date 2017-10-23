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

		<footer class="container-fluid mastfoot">
			<div class="row inner">
				<div class="col-6 mr-auto px-0 d-flex align-items-center">
					<div class="logo-mini mr-3">
						<a href="<?php echo esc_url( home_url('') ) ?>"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo-mini.png" alt="<?php echo bloginfo() ?>"></a>
					</div>
					<div class="copy">
						<p class="in-touch">GET IN TOUCH:  <a href="tel:+1-312-123-4567"><?php echo esc_html_e('312.123.4567', 'understrap') ?></a> / <a href="mailto:kate@reiterburns.com"><?php echo esc_html_e('kate@reiterburns.com', 'understrap') ?></a></p>
						<p><?php echo esc_html_e('155 North Wacker Drive, Chicago, IL 60606, USA.', 'understrap') ?></p>
					</div>
				</div>

				<div class="col-6 px-0 text-right">
						<p><a href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Terms &amp; Conditions', 'understrap') ?></a> / <a href="<?php echo esc_url( home_url('') ) ?>"><?php echo esc_html_e('Privacy Policy', 'understrap') ?></a>.</p>
						<p>Copyright &copy; <?php echo date('Y'); ?> Reiter Burns LLC.</p>
				</div>
			</div>
		</footer>

		</div><!-- end cover-container -->

	</div><!-- end site-wrapper-inner -->

</div><!-- #page we need this extra closing tag here -->

<script src="https://use.typekit.net/rgx3fsq.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

<?php wp_footer(); ?>

</body>

</html>
