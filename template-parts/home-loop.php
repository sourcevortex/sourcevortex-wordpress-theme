<?php
/**
 * The template part for displaying posts list
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen Child
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'line-separator' ); ?>>
	<div class="post-box">
		<div class="post-thumbnail-container">
			<?php twentysixteen_post_thumbnail(); ?>
			<?php twentysixteen_get_first_category() ?>
			<div class="line-separator only-mobile"></div>
		</div>

		<div class="post-title-excerpt sourcevortex">
			<header class="entry-header">
				<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
					<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
				<?php endif; ?>

				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header><!-- .entry-header -->

			<!-- Resumo -->
			<?php twentysixteen_excerpt(); ?>

			<footer class="entry-footer sourcevortex">
				<?php twentysixteen_entry_meta( false ); ?>
				<?php
					// edit_post_link(
					// 	sprintf(
					// 		/* translators: %s: Post title. */
					// 		__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
					// 		get_the_title()
					// 	),
					// 	'<span class="edit-link">',
					// 	'</span>'
					// );
					?>
			</footer><!-- .entry-footer -->
		</div>
	</div>
	<div class="box-separator-mobile">
		<div class="line-separator-mobile"></div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->

