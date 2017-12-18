<?php
/**
 * Template Name: Practice Areas
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="practices-areas-page">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="logo-inside">
			<a href="<?php echo home_url('/'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_html_e('', 'understrap') ?>"></a>
		</div>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main">
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<p><?php the_field('sub_title') ?></p>
					</header><!-- .entry-header -->

					<div class="entry-content my-3 py-2">
						<div class="row d-flex align-items-stretch">
							<div class="col-md-6 practice-areas d-flex animated fadeInLeft">
								<div class="box-holder">
									<img src="<?php the_field('litigation_image') ?>" class="img-fluid d-block mx-auto w-100" />
									<div class="p-3">
										<h2><?php the_field('litigation_title') ?></h2>
										<p><?php the_field('litigation_content') ?></p>
										<?php 
											// Attorney Posts
											$args1 = array(
												'post_type' => 'litigation',
												'order' => 'ASC'
											);
											$query1 = new WP_Query( $args1 );
										?>
										<ul class="areas-list">
											<?php if( $query1->have_posts() ) : while( $query1->have_posts() ) : $query1->the_post(); ?>
												<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
											<?php endwhile; endif; wp_reset_postdata(); ?>
										</ul>
									</div><!-- spacer -->
								</div><!-- box-holder -->
							</div><!-- practice-areas -->

							<div class="col-md-6 practice-areas d-flex animated fadeInRight">
								<div class="box-holder">
									<img src="<?php the_field('corporate_image') ?>" class="img-fluid d-block mx-auto w-100" />
									<div class="p-3">
										<h2><?php the_field('corporate_title') ?></h2>
										<p><?php the_field('corporate_content') ?></p>
										<?php 
											// Attorney Posts
											$args2 = array(
												'post_type' => 'corporate',
												'order' => 'ASC'
											);
											$query2 = new WP_Query( $args2 );
										?>
										<ul class="areas-list">
											<?php if( $query2->have_posts() ) : while( $query2->have_posts() ) : $query2->the_post(); ?>
												<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>
											<?php endwhile; endif; wp_reset_postdata(); ?>
										</ul>
									</div><!-- spacer -->
								</div><!-- box-holder -->
							</div><!-- practice-areas -->
						</div><!-- row -->

					</div><!-- entry-content -->

					<footer class="entry-footer">

						<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

					</footer><!-- .entry-footer -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->


	</div><!-- #content.container -->

<?php get_footer(); ?>
