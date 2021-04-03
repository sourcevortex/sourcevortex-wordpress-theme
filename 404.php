<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<?php // TODO: Translate ?>
					<h1 class="page-title"><?php _e( 'Oops! Eu não me recordo deste lugar!', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content not-found-img">
					<img src="<?= get_template_directory_uri() . '/img/hat.png'; ?>" alt="">
					<?php // TODO: Translate ?>
					<p><?php // _e( 'Voltar para página principal' ) ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
