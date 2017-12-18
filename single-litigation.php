<?php
/**
 *
 * Template for for displaying all single litigation posts
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="litigation-single">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

		<div class="logo-inside">
			<a href="<?php echo home_url('/') ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_html_e('', 'understrap') ?>"></a>
		</div>

		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<p><?php the_field('sub_title') ?></p>
						</header><!-- .entry-header -->

						<div class="container">
						<div id="about-bio" class="row d-flex align-items-stretch">
							<div class="col-lg-4 px-0 animated fadeInLeft">
								<img class="img-fluid d-block mx-auto w-100" src="<?php the_field('bio_img') ?>" alt="<?php echo esc_html_e('', 'understrap') ?>">
							</div>

							<div class="bio-content col-lg-8 my-4 my-lg-0 d-flex align-items-center animated fadeInRight">
								<div class="flex-holder">
									<div class="row mx-4">
										<?php the_field('bio_content') ?>
									</div>
									<div id="bio-links" class="row mx-4 mt-3">
										<div class="col-12 px-0 py-3 py-sm-0 border-0">
											<a href="<?php the_field('case_list') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/cases.svg"><h5><?php echo esc_html_e('Representative Trial Cases', 'understrap') ?></h5></a>
										</div>
									</div><!-- bio-links -->
								</div><!-- flex-holder -->
						  </div>
						</div><!-- #about-bio -->

						<div id="about-content" class="row credentials px-0 animated fadeIn">
								<div class="col-md-7 col-sm-6 pl-0">
									<h3><?php echo esc_html_e('Other Practice Areas', 'understrap') ?></h3>
									<div class="row">
										<div class="col-md-5">
											<h4 class="text-uppercase"><?php echo esc_html_e('Litigation', 'understrap') ?></h4>
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
										</div><!-- col -->	
										<div class="col-md-7">
											<h4 class="text-uppercase"><?php echo esc_html_e('Corporate', 'understrap') ?></h4>
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
										</div><!-- col -->	
									</div><!-- row -->
								</div><!-- col -->

								<div id="bio-contact" class="col-md-5 col-sm-12 text-left pr-0">
									<h3><?php echo _e( 'Practice Lead', 'understrap' ) ?></h3>
									<?php
										$post_object = get_field('lead_attorney');
										if( $post_object ) : 
									?>
										<div id="practice-lead" class="row align-items-center">
											<div class="col-sm-6">
												<img class="img-fluid d-block mx-auto w-100" src="<?php the_field('bio_img', $post_object->ID) ?>" alt="<?php echo get_the_title($post_object->ID); ?>">
											</div><!-- col -->
											<div class="col-sm-6">
											<h4><?php echo get_the_title($post_object->ID); ?></h4>
											<p><?php the_field('sub_title', $post_object->ID) ?></p>
											<a class="btn btn-large btn-primary" href="<?php the_permalink($post_object->ID); ?>"><?php _e('Learn More') ?></a>
											</div><!-- col -->
										</div><!-- row -->
										<?php wp_reset_postdata(); ?>
									<?php endif; ?>
								</div><!-- bio-contact -->
						</div><!-- about-content -->
					</div><!-- container -->

						<footer class="entry-footer">

							<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

						</footer><!-- .entry-footer -->

					</article><!-- #post-## -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- row -->

	</div><!-- container -->

<?php get_footer(); ?>
