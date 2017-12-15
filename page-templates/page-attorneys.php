<?php
/**
 * Template Name: Attorneys Index
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="attorneys-index">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="logo-inside">
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_html_e('', 'understrap') ?>">
		</div>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<p><?php the_field('sub_title') ?></p>
					</header><!-- .entry-header -->

					<?php 
						$args = array(
							'post_type' => 'attorneys'
						);
						$query = new WP_Query( $args );
					?>

					<div class=" no-gutters">
						<div class="row d-flex align-items-center">

							<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

							<div class="col-md-4 attorneys animated fadeInLeft">
								<div id="about-bio" class="box-holder">
									<a href="<?php the_permalink(); ?>">
										<img class="img-fluid d-block mx-auto w-100" src="<?php the_field('bio_img') ?>" alt="<?php echo esc_html_e('', 'understrap') ?>">	
									</a>

									<div class="bio-holder px-4 pb-4">
										<h3 class="mt-3"><?php the_title() ?></h3>
										<p><?php the_field('sub_title') ?></p>
										<?php echo custom_field_excerpt(); ?>
										<a class="btn btn-large btn-secondary" href="<?php the_permalink(); ?>"><?php _e('Read More') ?></a>
									</div>
									<!-- bio-holder -->
								</div>
								<!-- about-bio -->
							</div>
							<!-- colomn -->

							<?php endwhile; endif; wp_reset_postdata(); ?>

						</div><!-- row -->

					</div><!-- container -->

					<footer class="entry-footer">

						<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

					</footer><!-- .entry-footer -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->

	</div><!-- #content.container -->

<?php get_footer(); ?>
