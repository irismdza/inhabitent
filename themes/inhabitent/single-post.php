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

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
