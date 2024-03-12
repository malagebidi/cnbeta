<?php
/**
 * cnBeta functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cnBeta
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cnbeta_setup() {

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	/*
		* A Post Format is a piece of meta information
		* that can be used by a theme to customize its presentation of a post.
		*/
	add_theme_support( 'post-formats', array( 'video', 'audio' ) );

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

}
add_action( 'after_setup_theme', 'cnbeta_setup' );


/**
 * Set Image Sizes
 */
set_post_thumbnail_size( 72, 72, true );
add_image_size( 'med_thumbnail', 144, 144, true );
add_image_size( 'big_thumbnail', 216, 216, true );


/**
 * Enqueue scripts and styles.
 */
function cnbeta_scripts() {
	wp_enqueue_style( 'cnbeta-style', get_stylesheet_uri(), array(), null );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.min.css', array(), '5.3.3' );
	// wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bootstrap/bootstrap.bundle.min.js', array(), '5.3.3', true );
}
add_action( 'wp_enqueue_scripts', 'cnbeta_scripts' );


/**
 * Add css class to newer post used in the next_posts_link() functions.
 */
add_filter('next_posts_link_attributes', 'newer_posts');
 
function newer_posts() {
    return 'class="next_posts btn btn-primary" role="button"';
}
