<?php
/**
 * Single view template.
 *
 * @package AMP
 */

/**
 * Context.
 *
 * @var AMP_Post_Template $this
 */

$this->load_parts( [ 'html-start' ] );
?>

<?php if ( defined( 'G_AD_CLIENT' ) && G_AD_CLIENT ): ?>
    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
    </script>

    <amp-auto-ads type="adsense"
            data-ad-client="<?php echo G_AD_CLIENT; ?>">
    </amp-auto-ads>
<?php endif; ?>

<?php $this->load_parts( [ 'header' ] ); ?>

<style>
    body {
        font-family: 'Montserrat';
    }

    .amp-wp-header {
        background-color: black;
    }

    .amp-wp-header .amp-wp-site-icon {
        border: 0;
        border-radius: 0;
    }

    .amp-site-title {
        color: #e6c619;
        font-weight: bold;
    }

    a {
        color: #c1a300;
    }
</style>

<article class="amp-wp-article">
	<header class="amp-wp-article-header">
		<h1 class="amp-wp-title"><?php echo $this->get( 'post_title' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></h1>
		<?php
		$this->load_parts( apply_filters( 'amp_post_article_header_meta', [ 'meta-author', 'meta-time' ] ) );
		?>
	</header>

	<?php $this->load_parts( [ 'featured-image' ] ); ?>

	<div class="amp-wp-article-content">
		<?php echo $this->get( 'post_amp_content' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>

	<footer class="amp-wp-article-footer">
		<?php
		$this->load_parts( apply_filters( 'amp_post_article_footer_meta', [ 'meta-taxonomy', 'meta-comments-link' ] ) );
		?>
	</footer>
</article>

<?php $this->load_parts( [ 'footer' ] ); ?>

<?php
$this->load_parts( [ 'html-end' ] );
