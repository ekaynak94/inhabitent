<?php
/**
 * The template for products.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'product' ); ?>
				<a href='#' ><i class="fab fa-facebook-f"></i>like</a>
				<a href='#' ><i class="fab fa-twitter"></i>tweet</a>
				<a href='#' ><i class="fab fa-pinterest"></i>pin</a>

			<?php endwhile; // End of the loop. ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content','none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
