<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$show_next_previous = false;

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main no-margin-bottom" role="main">
		<?php
		// Start the loop.
		while ( have_posts() ) :
			the_post();

			// Include the single post content template.
			$post_format = get_post_format();

			if (! $post_format ) {
				$post_format = 'single';
			}

			get_template_part( 'template-parts/post-formats/content', $post_format );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}

			if ( is_singular( 'attachment' ) ) {
				// Parent post navigation.
				the_post_navigation(
					array(
						'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
					)
				);
			} elseif ( is_singular( 'post' ) && $show_next_previous ) {
				// Previous/next post navigation.
				the_post_navigation(
					array(
						'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
							'<span class="post-title">%title</span>',
						'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
							'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
							'<span class="post-title">%title</span>',
					)
				);
			}

			// End the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php get_sidebar( 'content-bottom' ); ?>

</div><!-- .content-area -->

<?php
	$sticky_ad_footer = defined( 'STICKY_AD_FOOTER' ) ? STICKY_AD_FOOTER : '';
	
	if ( $sticky_ad_footer ) {
		include __DIR__ . "/ads/{$sticky_ad_footer}";
	}
?>

<?php
	if ( $post_format !== 'status' ) {
		get_sidebar();
		get_footer();
	}
?>
