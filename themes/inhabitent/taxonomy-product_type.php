
<?php
/**
 * The template for displaying archive pages for products.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header --> 
		<div class="products-grid container">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(array("product-grid-item")); ?>>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class='product-image-wrapper'>
							<a href=<?php echo get_permalink();?>>
								<?php the_post_thumbnail( 'medium' ); ?>
							</a>
						</div>
					<?php endif; ?>
					<div class="product-grid-text">
						<?php the_title( '<p class="entry-title">', '</p>' ); ?>
						<p><?php echo CFS()->get('product_price'); ?></p>
					</div>
				</div><!-- #post-## -->

			<?php endwhile; ?>
		</div>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content','none' ); ?>

		<?php endif; ?>
		
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

