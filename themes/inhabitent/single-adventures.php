<?php
/**
 * The template for displaying all adventure posts.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <div id="hero-image">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'full' ); ?>
                        <?php endif; ?>
                    </div>
                    <div class="header-container">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        <div class="entry-meta">
                            <?php red_starter_posted_by(); ?>
                        </div><!-- .entry-meta -->
                    </div>
                </header><!-- .entry-header -->

                <div class="content-container">
                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php
                            wp_link_pages( array(
                                'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
                                'after'  => '</div>',
                            ) );
                        ?>
                    </div><!-- .entry-content -->
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
                <footer class="entry-footer">
                    <?php red_starter_entry_footer(); ?>
                </footer><!-- .entry-footer -->
            </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
