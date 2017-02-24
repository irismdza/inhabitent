<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );

// Custom WP login logo
function inhabitent_login_logo() { 
    echo '<style type="text/css">
        #login h1 a {
            background: url(' . get_template_directory_uri() . '/images/logos/inhabitent-logo-text-dark.svg) no-repeat !important;
			background-size: 300px 53px !important;
			width: 300px !important;
			height: 53px !important; 
        }
		#login .button.button-primary {
			background-color: #248a83;
		}
    </style>';
}
add_action( 'login_head', 'inhabitent_login_logo' );

// Custom URL for WP login
// @param string $url The URL the logo image link points to.
// @return string

function inhabitent_login_logo_url($url) {
    return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_login_logo_url' );

// Custom title attribute for login logo link
// @return string
function inhabitent_login_title() {
	return 'Inhabitent';
}
add_filter( 'login_headertitle', 'inhabitent_login_title' );

// Custom css for About page
function inhabitent_about_css() {
	if ( !is_page_template( 'page-templates/about.php' ) ) {
		return;
	}
	$image = CFS()->get('about_hero_image');

	if ( !$image ) {
		return;
	}
	$hero_css = ".page-template-about .entry-header {
        background:
            linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ),
            url({$image}) no-repeat center bottom;
        background-size: cover, cover;
	}";
	wp_add_inline_style( 'red-starter-style', $hero_css );
}
add_action( 'wp_enqueue_scripts', 'inhabitent_about_css');

// Remove "Editor" links from sub-menus
function inhabitent_remove_submenus() {
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'inhabitent_remove_submenus', 110 );

// Sort Product Archive alphabetically
function sort_product_archive( $query ) {
    if ( $query->is_post_type_archive('products') && $query->is_main_query() ) {
		$query->set( 'posts_per_page', 16 );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
		return;
    }
}
add_action( 'pre_get_posts', 'sort_product_archive' );

// Sort Product Taxonomies alphabetically
function sort_product_type( $query ) {
    if ( $query->is_tax('product_type') && $query->is_main_query() ) {
		$query->set( 'posts_per_page', -1 );
        $query->set( 'orderby', 'title' );
        $query->set( 'order', 'ASC' );
		return;
    }
}
add_action( 'pre_get_posts', 'sort_product_type' );

// Change Product Archive title
function change_product_archive_title( $title ) {
	if ( is_post_type_archive( 'products') ) {
        $title = 'Shop Stuff';
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'change_product_archive_title' );

// Remove Product Type title
function remove_product_type_title( $title ) {
	if ( is_tax( 'product_type' ) ) {
        $title = single_term_title( '', false);
	}
	return $title;
}
add_filter( 'get_the_archive_title', 'remove_product_type_title' );