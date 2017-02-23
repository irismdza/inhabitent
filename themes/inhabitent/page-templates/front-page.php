<?php
/**
 * Template Name: Home Template
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
     <section class="home-hero">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-full.svg" alt="Image of Inhabitent logo" />
    </section>
    <?php  //shop stuff on front page
                            $arg = array( 'taxonomy' => 'product_type',
                                          'hide_empty' => true);
                            $terms = get_terms( $arg );
                        ?>

                        <div class="product-list-style">
                            <ul>
                                <?php foreach ( $terms as $term ) : ?>
                                    <li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?></a></li>
                                <?php endforeach; ?>
                            </ul>

                            <?php
                                the_archive_description( '<div e="taxonomy-description">', '</div>' );
                            ?>
                        </div><!-- .product-list-style -->


    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">



    


     

   <div class="journal-3">
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
   </div> <!-- journal-3 -->
   </main><!--main-->
   </div><!-- #primary -->

<?php get_sidebar('custom'); ?>
<?php get_footer(); ?>
 