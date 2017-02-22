<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

<footer class="footer-inhabitent">
	<div class="footer-container">
	<div class="footer-contact">
		<h3>Contact Info</h3>
		<p><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
		<p><a>778-456-7891</a></p>
	</div>
	<div class="footer-hours">
		<h3>Business Hours</h3>
		<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
		<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
		<p><span class="day-of-week">Sunday:</span> Closed</p>
	</div>
	<div class="footer-logo">
		<img src="../images/logos/inhabitent-tent-dark.svg" />
	</div>
	<div class="footer-copyright">
		<p>Copyright &copy; 2017 Inhabitent</p>
	</div>
</footer>

	</body>
</html>
