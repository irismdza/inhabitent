<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<!--<php get_template_part( 'template-parts/content', 'single' ); ?>

			-->

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<div class="product-image-wrapper">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				</div>
				<div class="product-description-wrapper">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="product-price"><?php echo CFS()->get('price'); ?></p>
					<p><?php echo CFS()->get('product_description'); ?></p>
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
				</div>
			</header><!-- .entry-header -->
		</article><!-- #post-## -->


		<?php endwhile; // End of the loop. ?>

			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
