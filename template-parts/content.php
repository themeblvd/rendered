<?php
/**
 * Template part for post content.
 *
 * This template is not viewable to website
 * visitors. It sits below the React app,
 * to give search engines readable content.
 *
 * @package Rendered
 * @author  Jason Bobich <jasonbobich@gmail.com>
 */
?>

<article <?php post_class(); ?>>

	<header class="entry-header">


		<?php if ( is_single() ) : ?>

			<h1 class="entry-title" itemprop="headline">
				<?php the_title(); ?>
			</h1>

		<?php else : ?>

			<h2 class="entry-title" itemprop="headline">
				<a href="<?php the_permalink(); ?>" class="entry-title-link" rel="bookmark">
					<?php the_title(); ?>
				</a>
			</h2>

		<?php endif; ?>


		<!-- @TODO (publish date, author)
		<p class="entry-meta"></p>
		-->

	</header>

	<div class="entry-content" itemprop="text">

		<?php if ( is_single() ) : ?>
			<?php the_content(); ?>
		<?php else: ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>

	</div><!-- .entry-content -->

	<!-- @TODO (tags, categories)
	<footer class="entry-footer">
		<p class="entry-meta"></p>
	</footer>
	-->

</article>
