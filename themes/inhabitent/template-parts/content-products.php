<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent_Theme
 */

?>

<div class="product-grid-item" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
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