<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="product-grid-item">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href=<?php echo get_permalink();?>><?php the_post_thumbnail( 'medium' ); ?></a>
		<?php endif; ?>
		<div class="product-grid-text">
			<?php the_title( '<p class="entry-title">', '</p>' ); ?>
			<p><?php echo CFS()->get('product_price'); ?></p>
		</div>
	</div><!-- .entry-header -->
</div><!-- #post-## -->