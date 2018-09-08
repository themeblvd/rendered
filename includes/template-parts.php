<?php
/**
 * Include template parts.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */

namespace Rendered\Templates;

/**
 * Website <head>.
 *
 * @since 1.0.0
 */
function head() {

	rendered_template_part( 'head' );

}
add_action( 'rendered_head', __NAMESPACE__ . '\head' );

/**
 * Website header.
 *
 * @since 1.0.0
 */
function header() {

	rendered_template_part( 'header' );

}
add_action( 'rendered_before', __NAMESPACE__ . '\header' );

/**
 * Website footer.
 *
 * @since 1.0.0
 */
function footer() {

	rendered_template_part( 'footer' );

}
add_action( 'rendered_after', __NAMESPACE__ . '\footer' );

/**
 * Post content.
 *
 * @since 1.0.0
 */
function content() {

	rendered_template_part( 'content' );

}
add_action( 'rendered_content', __NAMESPACE__ . '\content' );
