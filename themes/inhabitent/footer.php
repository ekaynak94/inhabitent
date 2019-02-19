<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-contact-info">
			  <?php echo "<h3> contact info </h3>";?>
			  	<p><i class="fas fa-envelope"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('info@inhabitent.com')); ?></a></p>
			  	<p><i class="fas fa-phone"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('778-456-7891')); ?></a></p>
			  	<p>
			  		<span><i class="fab fa-facebook-square"></i></span>
			  		<span><i class="fab fa-twitter-square"></i></span>
			  		<span><i class="fab fa-google-plus-square"></i></span>
			  	</p>
		 	</div>
			<div class="footer-business-hours">
				<?php echo "<h3> business hours </h3>";?>
				<?php echo "<p><strong> Monday-Friday:</strong> 9am to 5pm</p>";?>
				<?php echo "<p><strong> Saturday:</strong> 10am to 2pm</p>";?>
				<?php echo "<p><strong> Sunday:</strong> Closed</p>";?>
      		</div>
			<div class="footer-logo">
        		<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text-dark.svg"/></a>	
      		</div>
			<div class="footer-copyright">
      			<p>copyright &copy; 2019 inhabitent </p>
    		</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
