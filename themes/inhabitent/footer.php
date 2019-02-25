<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
			<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="container">
				<div class='footer-boxes'>
					<div class='footer-text'>
						<div class="footer-contact-info">
							<h3> contact info </h3>
							<p><i class="fas fa-envelope"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('info@inhabitent.com')); ?></a></p>
							<p><i class="fas fa-phone"></i><a href="<?php echo esc_url('#'); ?>"><?php printf(esc_html('778-456-7891')); ?></a></p>
							<p>
								<a href='#'><i class="fab fa-facebook-square"></i></a>
								<a href='#'><i class="fab fa-twitter-square"></i></a>
								<a href='#'><i class="fab fa-google-plus-square"></i></a>
							</p>
						</div>
						<div class="footer-business-hours">
							<h3> business hours </h3>
							<p><strong> Monday-Friday:</strong> 9am to 5pm</p>
							<p><strong> Saturday:</strong> 10am to 2pm</p>
							<p><strong> Sunday:</strong> Closed</p>
						</div>
					</div>
					<div class="footer-logo">
						<a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/logos/inhabitent-logo-text.svg"/></a>	
					</div>
				</div>
				<div class="footer-copyright">
					<p>copyright &copy; 2019 inhabitent </p>
				</div>
			</div>
			</footer><!-- #colophon -->

		<?php wp_footer(); ?>

	</body>
</html>
