<?php
/**
 * Include template part.
 *
 * @param string $name Name of file.
 */
function rendered_template_part( $name ) {

	/**
	 * Filters the first $slug paramter passed to
	 * get_template_part().
	 *
	 * @since 1.0.0
	 *
	 * @param string       Template part slug.
	 * @param string $name Name of template part file.
	 */
	$slug = apply_filters( 'rendered_template_part_slug', "template-parts/{$name}", $name );

	/**
	 * Filters the first $slug paramter passed to
	 * get_template_part().
	 *
	 * @since 1.0.0
	 *
	 * @param string       Template part name (not used by default).
	 * @param string $slug Template part slug.
	 */
	$name = apply_filters( 'rendered_template_part_name', '', $slug );

	/*
	 * Include template file.
	 */
	get_template_part( $slug );

}
