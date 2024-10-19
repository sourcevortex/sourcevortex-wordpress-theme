<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

$tag_manager = defined( TAG_MANAGER ) ? TAG_MANAGER : '';

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>

	<script>
		(function() {
			var srcVtxTheme = localStorage.getItem('srcvtx_theme');
			var srcVtxHtml = document.querySelector('html');

			srcVtxHtml.classList.remove('srcvtx_theme_light', 'srcvtx_theme_dark');
			srcVtxHtml.classList.add('srcvtx_theme_'+srcVtxTheme);
		})();
	</script>

	<?php wp_head(); ?>

	<meta name="theme-color" content="#000000" />

	<?php if ( (GA_UA || G_AD_CLIENT) ): ?>
		<meta http-equiv="x-dns-prefetch-control" content="on" />
		<link rel="dns-prefetch" href="//pagead2.googlesyndication.com" />
        <link rel="dns-prefetch" href="//securepubads.g.doubleclick.net" />
        <link rel="dns-prefetch" href="//cm.g.doubleclick.net" />
        <link rel="dns-prefetch" href="//tpc.googlesyndication.com" />
        <link rel="dns-prefetch" href="//www.googletagmanager.com" />
        <link rel="dns-prefetch" href="//www.googletagservices.com" />
        <link rel="dns-prefetch" href="//www.googleadservices.com" />
        <link rel="dns-prefetch" href="//www.google-analytics.com" />
        <link rel="dns-prefetch" href="//www.googleads.g.doubleclick.net" />

		<link rel="preconnect" href="//pagead2.googlesyndication.com" />
        <link rel="preconnect" href="//securepubads.g.doubleclick.net" />
        <link rel="preconnect" href="//cm.g.doubleclick.net" />
        <link rel="preconnect" href="//tpc.googlesyndication.com" />
        <link rel="preconnect" href="//www.googletagmanager.com" />
        <link rel="preconnect" href="//www.googletagservices.com" />
        <link rel="preconnect" href="//www.googleadservices.com" />
        <link rel="preconnect" href="//www.google-analytics.com" />
        <link rel="preconnect" href="//www.googleads.g.doubleclick.net" />
	<?php endif; ?>

    <?php if ( $tag_manager ): ?>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?=$tag_manager?>"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?=$tag_manager?>');
        </script>
    <?php endif;?>

	<?php if ( G_AD_CLIENT ): ?>
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=<?php echo G_AD_CLIENT ?>"
     crossorigin="anonymous"></script>
	<?php endif; ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">

	<?php include __DIR__ . "/sidemenu.php"; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-header-main">
			<div class="only-desktop sidemenu-icon actOpenSidemenu">
				<span class="menuicon"></span>
			</div>

			<div class="only-desktop"></div>

			<div class="site-branding">
				<?php twentysixteen_the_custom_logo(); ?>

				<?php if ( is_front_page() && is_home() ) : ?>
					<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<?php if ( has_nav_menu( 'primary' ) ) : ?>
				<div id="menu-toggle" class="only-mobile sidemenu-icon">
					<span class="menuicon"></span>
				</div>

				<div id="site-header-menu" class="site-header-menu">
					<div class="only-mobile">
						<?php if ( has_nav_menu( 'primary' ) ) : ?>
							<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
								<div class="mobile-search-container only-mobile">
									<?php get_search_form(); ?>
								</div>
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'primary-menu',
										)
									);
								?>
							</nav><!-- .main-navigation -->
						<?php endif; ?>

						<div class="mobile-theme-switcher">
							<p><?= __( 'Tema escuro', 'twentysixteen' ) ?></p>
							<label class="srcvtx-switch">
								<input id="mobile-theme-switch-input" class="actMobileToggleDarkTheme" type="checkbox">
								<span class="srcvtx-slider"></span>
							</label>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="desktop-search-container only-desktop">
				<?php get_search_form() ?>
			</div>
		</div><!-- .site-header-main -->

		<?php if ( get_header_image() ) : ?>
			<?php
				/**
				 * Filters the default twentysixteen custom header sizes attribute.
				 *
				 * @since Twenty Sixteen 1.0
				 *
				 * @param string $custom_header_sizes sizes attribute
				 * for Custom Header. Default '(max-width: 709px) 85vw,
				 * (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px'.
				 */
				$custom_header_sizes = apply_filters( 'twentysixteen_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, 1200px' );
			?>
			<div class="header-image">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				</a>
			</div><!-- .header-image -->
		<?php endif; // End header image check. ?>
	</header><!-- .site-header -->
	<div class="site-inner">
		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentysixteen' ); ?></a>


		<div id="content" class="site-content">
			<?php
				$post_format = get_post_format();
				$post_ad_top = defined( 'POST_AD_TOP' ) ? POST_AD_TOP : '';

				if ( $post_ad_top && is_single() && $post_format !== 'status' ) {
					include __DIR__ . "/ads/{$post_ad_top}";
				}
			?>
