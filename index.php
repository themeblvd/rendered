<?php
/**
 * Main Template File
 *
 * This serves as the primary template file,
 * which handles all frontend output.
 *
 * Because the the website end-user is using
 * the site via our React app, the content we
 * actually print here are all hidden to them.
 *
 * The goal of this template file is to provide
 * readable content for search engines and allow
 * any inclusion of scripts for our React app
 * and any other background items like analytics.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<?php
		/**
		 * Fires inside the <head>, but
		 * before wp_head().
		 *
		 * @since 1.0.0
		 */
		do_action( 'rendered_head' );
		?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		/**
		 * Fires just inside the <body> tag, before
		 * any HTML markup.
		 *
		 * @since 1.0.0
		 */
		do_action( 'rendered_before' );
		?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Fires when content should be displayed.
				 *
				 * @since 1.0.0
				 */
				do_action( 'rendered_content' );
				?>


			<?php endwhile; ?>

		<?php endif; ?>

		<?php
		/**
		 * Fires after all HTML markup, but before
		 * wp_footer().
		 *
		 * @since 1.0.0
		 */
		do_action( 'rendered_after' );
		?>

		<?php wp_footer(); ?>

	</body>

</html>
