<?php
/**
 * The template used for displaying page content in page.php.
 *
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if (!is_page_template('page-templates/front-page.php')) : ?>
			<?php the_post_thumbnail(); ?>
			<?php endif; ?>
			<?php if (!is_front_page() && !is_home()) : ?><h1 class="entry-title"><?php the_title(); ?></h1><?php endif; ?>
		</header>

		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages(['before' => '<div class="page-links">'.__('Pages:', 'twentytwelve'), 'after' => '</div>']); ?>
		</div><!-- .entry-content -->

	</article><!-- #post -->
