<?php
/**
 * The template for the front page
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <section>
            <?php while ( have_posts() ) : the_post(); ?>

               <?php get_template_part( 'template-parts/content', 'page' ); ?>

            <?php endwhile; // End of the loop. ?>
         </section>
         <section>
            <?php $product_types=get_terms('product_type');?>
            <?php foreach ( $product_types as $product_type ) : setup_postdata( $product_type ); ?>
               <div>
                  <?php $icon_url= get_template_directory_uri().'/assets/images/product-type-icons/' . $product_type->slug . '.svg';?>
                  <img src=<?php echo $icon_url?>>
                  <p><?php echo $product_type->description ?></p>
                  <a href='#'> <?php echo $product_type->name?> stuff</a>
               </div>
            <?php endforeach; wp_reset_query(); ?>
         </section>  
         <section>
            <?php $product_posts=inhabitent_get_latest_posts();?>
            <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
               <div>
                  <?php the_post_thumbnail('medium',['class'=>'thumbnail']);?>
                  <span>
                     <?php the_date();?>
                     <?php echo '/';?>
                     <?php comments_number(); ?>
                  </span>
                  <h3>
                     <?php the_title();?>
                  </h3>
                  <a href=<?php the_permalink();?>>Read Entry</a>
            </div>
            <?php endforeach; wp_reset_postdata(); ?>
         </section>
  
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
