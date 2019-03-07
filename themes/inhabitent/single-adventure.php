<?php
/**
 * The template for adventures.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="adventure-page-image">
                    <?php if ( has_post_thumbnail() ) : ?>
                        <?php the_post_thumbnail( 'large' ); ?>
                    <?php endif; ?>
                </div>
                <div class='adventure-page-info container'>
                    <header class="entry-header">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <p class="adventure-author"><?php ?></p>
                        <?php the_content(); ?>
                    </div><!-- .entry-content -->
                    <div class="archive-links">
                                <a href='#' ><i class="fab fa-facebook-f"></i>like</a>
                                <a href='#' ><i class="fab fa-twitter"></i>tweet</a>
                                <a href='#' ><i class="fab fa-pinterest"></i>pin</a>
                    </div>
                </div>
            </article><!-- #post-## -->
		
			<?php endwhile; // End of the loop. ?>
		<?php else : ?>

			<?php get_template_part( 'template-parts/content','none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
