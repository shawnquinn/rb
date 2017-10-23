<?php
/**
 * Template Name: Home Landing Page
 *
 * Template for Custom Homepage.
 *
 * @package understrap
 */

get_header();

?>

<?php
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="site-wrapper-inner" id="page">
	<?php //get_template_part('home-hero'); ?>

<div class="cover-container">

<div class="wrapper home-page" id="full-width-page-wrapper" hidden>

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

</div><!-- Wrapper end -->

			<main role="main" class="inner cover">
				<h1 class="cover-heading"><img class="img-fluid d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_html_e('', 'understrap') ?>"></h1>
				<p class="lead text-center">Long-term colleagues formed a new law firm to advise clients, try lawsuits, and provide real value in an era of challenge and change.</p>
			</main>

</div><!-- end cover-container -->

</div><!-- end site-wrapper-inner -->

<?php get_footer(); ?>
