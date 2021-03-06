<?php
/**
 *
 * Template for for displaying all single attorney posts
 *
 * @package understrap
 */

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper-about">

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

				<main class="site-main" id="main" role="main">

					<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<p><?php the_field('sub_title') ?></p>
						</header><!-- .entry-header -->

						


						<div class="container">
						<div id="about-bio" class="row d-flex align-items-stretch">
						  <div class="col-md-4 px-0 animated fadeInLeft">
								<div class="social-share">
									<?php 
										global $post;
										$post_slug=$post->post_name;
									?>
									<ul class="py-2 px-1 flex-md-row flex-column align-items-center">
										<li hidden><a href="javascript:void(0)" class="btn-share" data-container="body" data-toggle="popover" data-placement="bottom"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/share.svg"> </a>
											<span class="popoverContent hidden">
												<p>Share</p>
												<a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=Reiter%20Burns&summary=&source=" class="btn-media linkedin">
													<i class="fa fa-linkedin"></i>
												</a>													
												<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" class="btn-media facebook">
													<i class="fa fa-facebook"></i>
												</a>
												<a target="_blank" href="https://twitter.com/home?status=<?php the_permalink(); ?>" class="btn-media twitter">
													<i class="fa fa-twitter"></i>
												</a>
												<a target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="btn-media google-plus">
													<i class="fa fa-google-plus"></i>
												</a>												
											</span>
										</li>
										<?php if( get_field('linkedin_url') ): ?>
											<li><a href="<?php the_field('linkedin_url') ?>" target="_blank"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/linkedin.svg"> </a></li>
										<?php endif; ?>
										<li><a href="<?php the_field('vcard') ?>"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/friend.svg"></a></li>
									</ul>
									
									
								</div>
								<!-- social-share -->
								<img class="img-fluid d-block mx-auto w-100" src="<?php the_field('bio_img') ?>" alt="<?php echo esc_html_e('', 'understrap') ?>">
						  </div><!-- col -->

							<div class="bio-content col-md-8 py-3 d-flex align-items-center animated fadeInRight">
								<div class="flex-holder">
									<div class="row mx-4 border-dangler">
										<?php the_field('bio_content') ?>
									</div>

									
									<?php if ( get_field('case_list') || get_field('resume') ) : ?>
									<div id="bio-links" class="row justify-content-around mx-4 mt-3">
										<?php if ( get_field('case_list') ) : ?>
											<div class="col-sm-6 px-0 py-3 py-sm-0">
												<a href="<?php the_field('case_list') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/cases.svg"><h5><?php the_field('case_list_title') ?></h5></a>
											</div>
										<?php endif; ?>
										<?php if ( get_field('resume') ) : ?>
											<div class="col-sm-6 px-0 py-3 py-sm-0">
												<a href="<?php the_field('resume') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/pdf.svg"><h5><?php the_field('resume_title') ?></h5></a>
											</div>
										<?php endif; ?>
									</div>
									<!-- Bio Links -->
									<?php endif; ?>

								</div><!-- null div -->
						  	</div><!-- #bio-content -->
						</div><!-- #about-bio -->

						<div id="about-content" class="row credentials px-0 animated fadeIn">
								<div class="col-md-4 col-sm-6 text-center text-sm-left pl-sm-0">
									<h3><?php echo esc_html_e('Experience', 'understrap') ?></h3>
									<?php the_field('bio_experience') ?>
								</div>

								<div class="col-md-4 col-sm-6 text-center text-sm-left pr-sm-0">
									<h3><?php echo esc_html_e('Credentials', 'understrap') ?></h3>
									<?php the_field('bio_creds') ?>
								</div>

								<div id="bio-contact" class="col-md-4 text-center text-md-right pr-sm-0">
									<h3>Contact</h3>
									<p class="phone text-uppercase">Phone <span><?php the_field('contact_phone') ?></span></p>
									<p class="email text-uppercase"><span class="d-block">Email</span> <a href="mailto:<?php the_field('contact_email') ?>"><?php the_field('contact_email') ?></a></p>
								</div>
						</div>
					</div><!-- container -->

						<footer class="entry-footer">

							<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

						</footer><!-- .entry-footer -->

					</article><!-- #post-## -->

				</main><!-- #main -->

			</div><!-- #primary -->

		</div>
	</div><!-- Wrapper end -->

<?php get_footer(); ?>
