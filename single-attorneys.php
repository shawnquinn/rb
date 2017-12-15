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
			<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php echo esc_html_e('', 'understrap') ?>">
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
						<div id="about-bio" class="row d-flex align-items-center">
						  <div class="col-lg-4 px-0">
								<div class="social-share">
									<ul class="py-2 px-3 flex-md-row flex-column">
										<li><a href="javascript:void(0)"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/share.svg"> </a></li>
										<li><a href="<?php the_field('linkedin_url') ?>"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/linkedin.svg"> </a></li>
										<li><a href="javascript:void(0)"><img class="d-block mx-auto" src="<?php echo get_template_directory_uri(); ?>/img/svg/friend.svg"> </a></li>
									</ul>
								</div>
								<img class="img-fluid d-block mx-auto w-100" src="<?php the_field('bio_img') ?>" alt="<?php echo esc_html_e('', 'understrap') ?>">
						  </div>

							<div class="col-lg-8 my-4 my-lg-0">
						  	<div class="row mx-4">
									<?php the_field('bio_content') ?>
						  	</div>
								<div id="bio-links" class="row mx-4 mt-3">
								  <div class="col-sm-6 px-0 py-3 py-sm-0">
								  	<a href="<?php the_field('case_list') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/cases.svg"><h5><?php echo esc_html_e('View List of Trial Cases', 'understrap') ?></h5></a>
								  </div>

									<div class="col-sm-6 px-0 py-3 py-sm-0">
								  	<a href="<?php the_field('resume') ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/pdf.svg"><h5><?php echo esc_html_e('Download Resume', 'understrap') ?></h5></a>
								  </div>
								</div>
						  </div>
						</div><!-- #about-bio -->

						<div id="about-content" class="row credentials px-0">
								<div class="col-md-4 col-sm-6 pl-0">
									<h3><?php echo esc_html_e('Experience', 'understrap') ?></h3>
									<?php the_field('bio_experience') ?>
								</div>

								<div class="col-md-4 col-sm-6">
									<h3>Credentials</h3>
									<?php the_field('bio_creds') ?>
								</div>

								<div id="bio-contact" class="col-md-4 col-sm-12 text-md-right pr-0">
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
