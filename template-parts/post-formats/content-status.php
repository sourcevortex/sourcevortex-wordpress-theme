<?php
/**
 * The template part for displaying single posts
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'sourcevortex-intern' ); ?>>
	<div class="post-header-container">
		<div class="post-intern-thumbnail-container">
			<?php twentysixteen_post_thumbnail(); ?>
		</div>

		<div class="post-header-informations-box">
			<div class="srcvtx-category-box">
				<?php srcvtx_get_categories() ?>
			</div>
			<div class="post-header-sub-box">
				<header class="entry-header post-intern">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header>
				<?php srcvtx_get_author_and_date(); ?>
			</div>
		</div>
	</div>

	<div class="post-bottom-container">
		<div class="entry-content post-sourcevortex">
			<?php
				the_content();
	
				wp_link_pages(
					array(
						'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
						'after'       => '</div>',
						'link_before' => '<span>',
						'link_after'  => '</span>',
						'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
						'separator'   => '<span class="screen-reader-text">, </span>',
					)
				);
			?>
		</div><!-- .entry-content -->
		<?php get_sidebar(); ?>
		<div style="clear:both"></div>
	</div>

	<div class="go-to-top-btn actGoToTop" title="Voltar para o topo"></div>

	<?php
	$sun_icon = file_get_contents( get_template_directory() . '/img/sun-regular.svg' );
	$moon_icon = file_get_contents( get_template_directory() . '/img/moon-regular.svg' );

	$sun_title = __( 'Tema claro', 'twentysixteen' );
	$moon_title = __( 'Tema escuro', 'twentysixteen' );
	echo "<div class='srcvtx-toggle-theme-post'>";
	echo 	"<div class='srcvtx-toggle-light actChangeSrcVtxTheme' data-theme='light' title='{$sun_title}'>{$sun_icon}</div>";
	echo	"<div class='srcvtx-toggle-dark actChangeSrcVtxTheme' data-theme='dark' title='{$moon_title}'>{$moon_icon}</div>";
	echo "</div>";
	?>

</article><!-- #post-<?php the_ID(); ?> -->
