<?php
/**
 * The template for displaying archive for the products post type (Shop page).
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="product-grid">
				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<div class="product-image-wrapper">
								<?php if ( has_post_thumbnail() ) : ?>
									<a class="product-image-link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'large' ); ?></a>
								<?php endif; ?>
							</div>
							<div class="product-text-wrapper">
								<?php the_title( sprintf( '<span class="entry-title">', esc_url( get_permalink() ) ), '</span>' ); ?>
								<span class="product-price"><?php echo CFS()->get('price'); ?></span>
							</div>
						</header><!-- .entry-header -->
					</article><!-- #post-## -->
					
				<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
