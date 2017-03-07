<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer footer-inhabitent" role="contentinfo">
				<div class="footer-container">
					<div class="footer-contact">
						<h3>Contact Info</h3>
						<p><i class="fa fa-envelope" aria-hidden="true"></i> <a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
						</p>
						<p><i class="fa fa-phone" aria-hidden="true"></i> <a>778-456-7891</a>
						</p>
						<p><i class="fa fa-facebook-square" aria-hidden="true"></i> <i class="fa fa-twitter-square" aria-hidden="true"></i> <i class="fa fa-google-plus-square" aria-hidden="true"></i></p>
					</div>
					<div class="footer-hours">
						<h3>Business Hours</h3>
						<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
						<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
						<p><span class="day-of-week">Sunday:</span> Closed</p>
					</div>
					<div class="footer-logo">
						<img src="<?php echo get_template_directory_uri() ?>/images/logos/inhabitent-logo-text.svg" />
					</div>
					<div class="footer-copyright">
						<p>Copyright &copy; 2017 Inhabitent</p>
					</div>
				</div>
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
		<script src="js/jquery-3.1.1.min.js"></script>
	</body>
</html>
