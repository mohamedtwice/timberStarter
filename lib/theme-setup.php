<?php
/**
 * This function applies some fundamental WordPress setup, as well as our functions to include custom post types and taxonomies.
 */
function timberStarter_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change '_s' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'timberStarter', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Editor style for nicer typography in TinyMCE editor.
	if ( WP_DEBUG ) {
		add_editor_style( get_template_directory_uri() . '/dist/css/editor-style.css' );
	} else {
		add_editor_style( get_template_directory_uri() . '/dist/css/editor-style.min.css' );
	}

	// Reduce image quality a link_title
	add_filter( 'jpeg_quality', function() { return 85; } );

}
add_action( 'after_setup_theme', 'timberStarter_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function timberStarter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'timberStarter_content_width', 640 );
}
add_action( 'after_setup_theme', 'timberStarter_content_width', 0 );

// Don't allow users to change files from WP Admin
define( 'DISALLOW_FILE_EDIT', true );
