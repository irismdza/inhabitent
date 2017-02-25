<?php
/**
 * Template Name: About Page
 *
 * @package Inhabitent Theme
 */

get_header(); ?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <img src="<?php echo CFS()->get('about_header_image'); ?>" />
	</header><!-- .entry-header -->

    <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <h2>Our Story</h2>
        <?php echo CFS()->get('about_our_story'); ?>
        <h2>Our Team</h2>
        <?php echo CFS()->get('about_our_team'); ?>
    </main>
    </div>
    
<?php get_footer(); ?>