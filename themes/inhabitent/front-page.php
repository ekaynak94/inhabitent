<?php
/**
 * The template for the front page
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>
<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
         <section class="front-page-banner" style="
         background: linear-gradient(180deg,rgba(0,0,0,.4) 0,rgba(0,0,0,.4)),#969696 url(<?php echo get_template_directory_uri().'/assets/images/home-hero.jpg'?>) no-repeat top;
         background-size: cover,cover;
         display:flex;
         justify-content:center;
         width:100%;
         height:100vh;"
         >
            <img src="<?php echo get_template_directory_uri().'/assets/images/logos/inhabitent-logo-full.svg'?>">
         </section>
         <section class="container shop-products">
            <h2>Shop Stuff</h2>
            <ul class="front-page-terms">
              
               <?php $product_types=get_terms('product_type');?>
               <?php foreach ( $product_types as $product_type ) : setup_postdata( $product_type ); ?>
                  <li>
                     <img src=<?php echo get_template_directory_uri().'/assets/images/product-type-icons/' . $product_type->slug . '.svg';?>>
                     <p><?php echo $product_type->description ?></p>
                     <a href=<?php echo get_term_link($product_type)?>> <?php echo $product_type->name?> stuff</a>
                  </li>
               <?php endforeach; wp_reset_postdata(); ?>
            </ul>
         </section>  
         <section class="container journal-posts">
         <h2>Inhabitent Journal</h2>   
         <ul class="front-page-posts">
            
               <?php $product_posts=inhabitent_get_latest_posts();?>
               <?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
                  <li>
                     <?php the_post_thumbnail('medium',['class'=>'thumbnail']);?>
                     <div class='journal-text'>
                        <span>
                           <?php the_date();?>
                           <?php echo '/';?>
                           <?php comments_number(); ?>
                        </span>
                        <h3>
                           <a href=<?php the_permalink();?>>
                              <?php the_title();?>
                           </a>
                        </h3>
                        <a class="link-button" href=<?php the_permalink();?>>Read Entry</a>
                     </div>
                  </li>
               <?php endforeach; wp_reset_postdata(); ?>
         </ul>
         </section>
         <section class="container latest-adventures">
            <h2>Latest Adventures</h2>   
            <ul class="front-page-adventures">
                  <?php $loop = new WP_Query(array('post_type'=>'adventure','order'=>'ASC','posts_per_page'=>4));?>
                  <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
                     <li>
                     <?php the_post_thumbnail('large',['class'=>'thumbnail']);?>
                        <div class='adventure-text'>
                           <h3>
                              <a href=<?php the_permalink();?>>
                                 <?php the_title();?>
                              </a>
                           </h3>
                           <a class="link-button" href=<?php the_permalink();?>>Read More</a>
                        </div>
                     </li>
                     <?php endwhile; wp_reset_query(); ?>
            </ul>
         </section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
