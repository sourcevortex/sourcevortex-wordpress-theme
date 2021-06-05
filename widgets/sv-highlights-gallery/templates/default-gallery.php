<?php

$post_ID = $post->ID;
$post_title = $post->post_title;
$post_link = get_permalink( $post_ID );
$post_img = get_the_post_thumbnail_url( $post_ID );

$excerpt = get_the_excerpt();
$excerpt = strlen( $excerpt ) >= $excerpt_limit
    ? substr( $excerpt, 0, $excerpt_limit ) . '<strong> ... [Confira mais!]</strong>'
    : $excerpt . '<strong> [Confira mais!]</strong>';

?>

<div class="hgw_carousel_item">
    <a href="<?= $post_link ?>" class="hgw_anchor_container">
        <div class="hgw_carousel_content_container">
            <div class="hgw_carousel_img">
                <img data-lazy="<?= $post_img ?>" alt="">
                <div class="hgw_category_box">
                    <p><?php echo strtoupper(SV_HG_DEFAULT_CATEGORY); ?></p>
                </div>
                <div class="hgw_img_gradient"></div>
            </div>
            <div class="hgw_title_container">
                <p class="hgw_title"><?php the_title() ?></p>
                <p class="hgw_excerpt"><?= $excerpt; ?></p>
            </div>
        </div>
    </a>
</div>