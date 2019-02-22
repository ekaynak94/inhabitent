<?php
/**
 * Template part for displaying products.
 *
 * @package Inhabitent_Theme
 */

?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<a href=<?php echo get_permalink();?>><?php the_post_thumbnail( 'medium' ); ?></a>
		<?php endif; ?>

		<?php the_title( '<p class="entry-title">', '</p>' ); ?>
		<p><?php echo CFS()->get('product_price'); ?></p>
		
	</header><!-- .entry-header -->


	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</div><!-- #post-## -->