<?php

$post_ID = get_the_ID();
$post_link = get_permalink( $post_ID );
$post_img = get_the_post_thumbnail_url( $post_ID );
$post_title = get_the_title( $post_ID );

$excerpt = get_the_excerpt();
$excerpt = strlen( $excerpt ) >= $excerpt_limit
    ? substr( $excerpt, 0, $excerpt_limit ) . '<strong> ... [Confira mais!]</strong>'
    : $excerpt . '<strong> [Confira mais!]</strong>';

?>

<div class="hgw_carousel_item">
    <a href="<?= $post_link ?>" class="hgw_anchor_container">
        <div class="hgw_carousel_content_container">
            <div class="hgw_carousel_img">
                <img src="<?= $post_img ?>" alt="Capa no destaque do post - <?= $post_title ?>" width="1200" height="825">
                <div class="hgw_category_box">
                    <p><?php echo strtoupper(SV_HG_DEFAULT_CATEGORY); ?></p>
                </div>
                <div class="hgw_img_gradient"></div>
            </div>
            <div class="hgw_title_container">
                <div class="hgw_title_first_bg"></div>
                <div class="hgw_title_second_bg"></div>
                <p class="hgw_title"><?= $post_title ?></p>
                <p class="hgw_excerpt"><?= $excerpt; ?></p>
            </div>
        </div>
    </a>
</div>
