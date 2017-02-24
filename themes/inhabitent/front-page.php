<?php
/**
 * The template for the front page.
 *
 * @package Inhabitent Theme
 */

get_header(); ?>
     <section class="front-page-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Inhabitent Camping Supply Logo" />
    </section>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php  //shop stuff links on front page
                    $arg = array( 'taxonomy' => 'product_type',
                                    'orderby' => 'name',
                                    'hide_empty' => true);
                    $terms = get_terms( $arg );
            ?>
            <div class="shop-stuff-links">
                <ul>
                    <?php foreach ( $terms as $term ) : ?>
                        <li>
                            <div class="shop-stuff-taxonomy">
                                <div class="product-icon-image">
                                    <img src="<?php echo get_template_directory_uri();?>/images/product-type-icons/<?php echo $term->slug; ?>.svg" alt="">
                                </div>
                                <div class="taxonomy-description">
                                    <?php echo term_description( $term ) ?>
                                </div>
                            </div>
                            <div class="taxonomy-link"><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?> Stuff</a></div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div><!-- shop-stuff-links -->

            <div class="journal-entry-links">
                <?php
                    //global $post;
                    $args = array( 'posts_per_page' => 3, 'order'=> 'DSC', 'orderby' => 'post_date' );
                    $postslist = get_posts( $args );
                    foreach ( $postslist as $post ) :
                        setup_postdata( $post ); ?> 
                        <div class="a-post">
                            <span class="post-thumbnail">    <?php if ( has_post_thumbnail() ) : ?>
                                    <?php the_post_thumbnail('medium'); ?>
                            </span>
                            <?php endif; ?>
                            <div class="post-meta-data">
                                <span class="post-date"><?php the_date(); ?></span>
                                <br />
                                <h3 class="post-title"><?php the_title(); ?></h3>
                                <p class="read-entry"><a href="<?php the_permalink(); ?>"><div class="link-button">Read Entry</div></a></p>
                            </div><!--post-meta-data -->                
                    </div> <!-- a-post-->
                <?php
                        endforeach; 
                    wp_reset_postdata();
                ?>
            </div> <!-- journal-entry-links -->
        </main><!-- main -->
    </section><!-- #primary -->

<?php get_footer(); ?>
 