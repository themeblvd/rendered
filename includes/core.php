<?php
/**
 * Core setup, site hooks and filters.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */

namespace Rendered\Core;

/**
 * Set up theme defaults and register supported
 * WordPress features.
 *
 * @since 1.0.0
 *
 * @return void
 */
function setup() {

	$namespace = function( $function ) {
		return __NAMESPACE__ . "\\$function";
	};

	add_action( 'after_setup_theme', $namespace( 'i18n' ) );

	add_action( 'after_setup_theme', $namespace( 'theme_setup' ) );

	add_action( 'wp_enqueue_scripts', $namespace( 'scripts' ) );

	add_action( 'wp_enqueue_scripts', $namespace( 'styles' ) );

}

/**
 * Makes theme available for translation.
 *
 * Translations can be added to the /languages
 * directory.
 *
 * @since 1.0.0
 *
 * @return void
 */
function i18n() {

	load_theme_textdomain( 'rendered', RENDERED_PATH . '/languages' );

}

/**
 * Sets up theme defaults and registers support
 * for various WordPress features.
 *
 * @since 1.0.0
 *
 * @return void
 */
function theme_setup() {

	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'html5' );

	add_theme_support( 'custom-logo' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'rendered' ),
	) );

}

/**
 * Enqueue scripts for front-end.
 *
 * @return void
 */
function scripts() {

	$min = '.min';

	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$min = '';
	}

	wp_enqueue_script(
		'frontend',
		esc_url( RENDERED_TEMPLATE_URL . "/assets/js/frontend{$min}.js" ),
		[],
		RENDERED_VERSION,
		true
	);

}

/**
 * Enqueue styles for front-end.
 *
 * @return void
 */
function styles() {

	$min = '.min';

	if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
		$min = '';
	}

	wp_enqueue_style(
		'styles',
		esc_url( RENDERED_TEMPLATE_URL . "style{$min}.css" ),
		[],
		RENDERED_VERSION
	);

}
