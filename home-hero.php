<?php
/**
 * Home - hero setup.
 *
 * @package understrap
 */

?>

	<!-- ******************* The Hero Area ******************* -->

		<div id="carouselMain" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner" role="listbox">
				<?php //dynamic_sidebar( 'hero' ); ?>
				
				<div id="slide" class="widget_text carousel-item slide-1"></div>
				<div id="slide" class="widget_text carousel-item slide-2"></div>
				<div id="slide" class="widget_text carousel-item slide-3"></div>

			</div>

			 <a class="carousel-control-prev" href="#carouselMain" role="button" data-slide="prev">

			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>

			    <span class="sr-only">Previous</span>

			 </a>

			 <a class="carousel-control-next" href="#carouselMain" role="button" data-slide="next">

			    <span class="carousel-control-next-icon" aria-hidden="true"></span>

			    <span class="sr-only">Next</span>

			</a>

		</div><!-- .carousel -->
