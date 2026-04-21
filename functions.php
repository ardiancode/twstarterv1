<?php
/**
 * Handle form submission and save name option.
 *
 * @package Twstarterv1
 */

if ( isset( $_POST['name'] ) ) {

	// Check nonce exists.
	if ( ! isset( $_POST['_wpnonce'] ) ) {
		return;
	}

	// Verify nonce (unslash + sanitize).
	$nonce = sanitize_text_field( wp_unslash( $_POST['_wpnonce'] ) );

	if ( ! wp_verify_nonce( $nonce, 'save_name_action' ) ) {
		return;
	}

	// Sanitize input properly.
	$name = sanitize_text_field( wp_unslash( $_POST['name'] ) );

	update_option( 'my_name', $name );
}

/**
 * Theme setup
 */
function yourtheme_setup() {

	// Make theme available for translation.
	load_theme_textdomain( 'yourthemename', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable featured images.
	add_theme_support( 'post-thumbnails' );

	// Register navigation menus.
	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'yourthemename' ),
		)
	);

	// Switch default markup to valid HTML5.
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

	// Custom background support.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'ffffff',
		)
	);

	// Custom logo support.
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);

	// Editor styles (optional).
	add_theme_support( 'editor-styles' );

	// Wide & full alignment (for Gutenberg compatibility).
	add_theme_support( 'align-wide' );
}
add_action( 'after_setup_theme', 'yourtheme_setup' );
