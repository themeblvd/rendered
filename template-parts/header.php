<?php
/**
 * Template part for header of website.
 *
 * This template is not viewable to website
 * visitors. It sits below the React app,
 * to give search engines readable content.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */
?>
<header class="site-header" itemtype="https://schema.org/WPHeader">

	<?php if ( is_single() ) : ?>

		<p class="site-title" itemprop="headline">
			<a href="<?php echo esc_url( home_url() ); ?>">
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</a>
		</p>

	<?php else : ?>

		<h1 class="site-title" itemprop="headline">
			<a href="<?php echo esc_url( home_url() ); ?>">
				<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
			</a>
		</h1>

	<?php endif; ?>

	<p class="site-description" itemprop="description">
		<?php echo esc_html( get_bloginfo( 'description' ) ); ?>
	</p>

</header><!-- .site-header -->
