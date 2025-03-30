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
    <div class="post-intern-thumbnail-background">
	    <div class="post-thumbnail-bg-top-mobile"></div>
	    <div class="post-thumbnail-bg"></div>

    	<div class="post-intern-thumbnail-container">
			<?php twentysixteen_post_thumbnail(); ?>	

    		<header class="entry-header post-intern">
    			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>	
				<?php
					if ( $subtitle = get_field( "subtitle" )) {
						echo "<h2>$subtitle</h2>";
					} 
				?>
    		</header>

			<div class="post-pre-date">
				<p>
					<span><?=get_the_date('d\.m\.Y')?></span>
					<span><?=get_the_date('H\Hi')?></span>
				</p>
			</div>
    	</div>
    </div>

	<div class="entry-content post-sourcevortex">
		<div class="post-pre-date-mobile">
			<p>
				<span><?=get_the_date('d\.m\.Y')?></span>
				<span><?=get_the_date('H\Hi')?></span>
			</p>
		</div>

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

	<?php
		if ( get_post_format() !== 'status' ) {
			get_sidebar();
		}
	?>

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
