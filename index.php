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
 * and any other background items like analytics,
 * og data, meta tags, etc.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */
?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>" />

		<link rel="profile" href="http://gmpg.org/xfn/11" />

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php get_template_part( 'template-parts/header' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

		<?php endif; ?>

		<?php get_template_part( 'template-parts/footer' ); ?>

		<?php wp_footer(); ?>

	</body>

</html>
