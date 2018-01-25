<?php
/**
 * Template Name: Bios Index
 *
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="attorneys-index">

	<div class="<?php echo esc_attr( $container ); ?>" id="content">

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
					<header class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<p><?php the_field('sub_title') ?></p>
					</header><!-- .entry-header -->

					<?php 
						// Attorney Posts
						$args = array(
							'post_type' => 'bios',
							'order' => 'ASC'
						);
						$query = new WP_Query( $args );
					?>
					
					<div class="wrap animated fadeIn">
						<div class="frame" id="">
							<ul class="row d-flex">
								<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
									<div class="staff-bio col-md-4 mb-4">
										<div id="about-bio" class="box-holder">
											<a href="<?php the_permalink(); ?>">
												<img class="img-fluid d-block mx-auto w-100" src="<?php the_field('bio_img') ?>" alt="<?php echo esc_html_e('', 'understrap') ?>">	
											</a>
											<div class="social-share" hidden>
												<!-- HIDING -->
												<ul class="py-1 px-1 flex-md-row flex-column">
													<li><a href="javascript:void(0)"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/share.svg"> </a></li>
													<li><a href="<?php the_field('linkedin_url') ?>"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/linkedin.svg"> </a></li>
													<li><a href="javascript:void(0)"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/friend.svg"> </a></li>
												</ul>
											</div><!-- social-share -->

											<div class="bio-holder px-4 pb-4 py-1">
												<h3 class="mt-3 mb-0"><?php the_title() ?></h3>
												<p class="title"><?php the_field('sub_title') ?></p>
												<?php echo custom_field_excerpt(); ?>
												<p class="phone">Phone <span><?php the_field('contact_phone') ?></span></p>
												<p class="email"><span class="">Email:</span> <a href="mailto:<?php the_field('contact_email') ?>"><?php the_field('contact_email') ?></a></p>
											</div>
											<!-- bio-holder -->
										</div>
										<!-- about-bio -->
									</div>
									<!-- column -->
								<?php endwhile; endif; wp_reset_postdata(); ?>
							</ul>
						</div>
						<!-- .frame #basic -->

						<div class="scrollbar" hidden>
							<div class="handle" style="transform: translateZ(0px) translateX(152px); width: 190px;">
								<div class="mousearea"></div>
							</div>
						</div>
						<!-- scrollbar -->
					</div>
					<!-- .wrap -->

					<footer class="entry-footer" >

						<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

					</footer><!-- .entry-footer -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row -->


	</div><!-- #content.container -->

	<div class="controls center" hidden>
		<button class="btn prevPage"><i class=""></i></button>
		<button class="btn nextPage"><i class=""></i></button>
	</div>
	<!-- controls -->

<?php get_footer(); ?>
