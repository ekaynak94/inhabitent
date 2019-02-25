<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-image">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
	</div>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
	</header><!-- .entry-header -->

	<div class="entry-content">
		<p class="product-price"><?php echo CFS()->get('product_price'); ?></p>
		<?php the_content(); ?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
