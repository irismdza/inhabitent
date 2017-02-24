<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php echo CFS()->get('price'); ?>
			<?php echo CFS()->get('product_description'); ?>


		<?php endwhile; // End of the loop. ?>

			<div class="product-social-links">
				<p>
					<a><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
				</p>
				<p>
					<a><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
				</p>
				<p>
					<a><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
				</p>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
