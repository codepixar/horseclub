<?php 
/**
 * @Packge 	   : Horseclub
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
// Block direct access
if( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 *
 * Before Wrapper
 *
 * @Preloader
 *
 */
add_action( 'horseclub_preloader', 'horseclub_site_preloader', 10 );

/**
 * Header
 *
 * @Header Menu
 * @Header Bottom
 * 
 */

add_action( 'horseclub_header', 'horseclub_header_cb', 10 );

/**
 * Hook for footer
 *
 */
add_action( 'horseclub_footer', 'horseclub_footer_area', 10 );
add_action( 'horseclub_footer', 'horseclub_back_to_top', 20 );

/**
 * Hook for Blog, single, page, search, archive pages wrapper.
 */
add_action( 'horseclub_wrp_start', 'horseclub_wrp_start_cb', 10 );
add_action( 'horseclub_wrp_end', 'horseclub_wrp_end_cb', 10 );

/**
 * Hook for Blog, single, search, archive pages column.
 */
add_action( 'horseclub_blog_col_start', 'horseclub_blog_col_start_cb', 10 );
add_action( 'horseclub_blog_col_end', 'horseclub_blog_col_end_cb', 10 );

/**
 * Hook for blog posts thumbnail.
 */
add_action( 'horseclub_blog_posts_thumb', 'horseclub_blog_posts_thumb_cb', 10 );

/**
 * Hook for blog posts title.
 */
add_action( 'horseclub_blog_posts_title', 'horseclub_blog_posts_title_cb', 10 );

/**
 * Hook for blog posts meta.
 */
add_action( 'horseclub_blog_posts_meta', 'horseclub_blog_posts_meta_cb', 10 );

/**
 * Hook for blog posts bottom meta.
 */
add_action( 'horseclub_blog_posts_bottom_meta', 'horseclub_blog_posts_bottom_meta_cb', 10 );

/**
 * Hook for blog posts excerpt.
 */
add_action( 'horseclub_blog_posts_excerpt', 'horseclub_blog_posts_excerpt_cb', 10 );

/**
 * Hook for blog posts content.
 */
add_action( 'horseclub_blog_posts_content', 'horseclub_blog_posts_content_cb', 10 );

/**
 * Hook for blog sidebar.
 */
add_action( 'horseclub_blog_sidebar', 'horseclub_blog_sidebar_cb', 10 );

/**
 * Hook for blog single post social share option.
 */
add_action( 'horseclub_blog_posts_share', 'horseclub_blog_posts_share_cb', 10 );

/**
 * Hook for blog single post meta category, tag, next - previous link and comments form.
 */
add_action( 'horseclub_blog_single_meta', 'horseclub_blog_single_meta_cb', 10 );

/**
 * Hook for page content.
 */
add_action( 'horseclub_page_content', 'horseclub_page_content_cb', 10 );


/**
 * Hook for 404 page.
 */
add_action( 'horseclub_fof', 'horseclub_fof_cb', 10 );
