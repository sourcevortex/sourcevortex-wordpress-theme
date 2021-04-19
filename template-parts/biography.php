<?php
/**
 * The template part for displaying an Author biography
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<div class="line-separator"></div>

<div class="author-info">
	<div class="author-avatar">
		<?php
		/**
		 * Filters the Twenty Sixteen author bio avatar size.
		 *
		 * @since Twenty Sixteen 1.0
		 *
		 * @param int $size The avatar height and width size in pixels.
		 */
		$author_bio_avatar_size = apply_filters( 'twentysixteen_author_bio_avatar_size', 96 );

		echo get_avatar( get_the_author_meta( 'user_email' ), $author_bio_avatar_size );
		?>
	</div><!-- .author-avatar -->

	<div class="author-description">
		<h2 class="author-title">
			<a class="author-link" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" rel="author">
				<?php echo get_the_author(); ?>
			</a>
		</h2>

		<p class="author-bio">
			<?php the_author_meta( 'description' ); ?>
			<?php twentysixteen_entry_date( true, true ); ?>
		</p><!-- .author-bio -->
	</div><!-- .author-description -->
	<div style="clear:both"></div>
</div><!-- .author-info -->

<div class="line-separator" style="margin-bottom: 20px;"></div>