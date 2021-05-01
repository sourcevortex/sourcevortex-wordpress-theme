<?php

// TODO: Improve code quality (cleaning, integrity, mixed code)

list(
    $first_level_menus,
    $second_level_menus
) = process_sidemenu_array( get_menu_items_by_slug( 'primary' ) );

$social_menus = add_social_sidemenu( get_menu_items_by_slug( 'social' ) );

?>

<div class="sidemenu-container">
    <div class="sidemenu-subcontainer">
        <div class="sidemenu-top-icons">
            <?php
                foreach ( $first_level_menus as $f_menu ) {
                    extract( $f_menu );
                    echo "<p class='sidemenu-icon actOpenDrawer' title='{$flm_title}' data-id='sidemenu_{$flm_id}'><i class='{$flm_icon}'></i></p>";
                } 
            ?>
        </div>
        <div class="sidemenu-bottom-icons">
            <?php if ( count( $social_menus ) > 0 ): ?>
                <p class="sidemenu-icon actOpenDrawer" data-id="sidemenu_social">
                    <i class="fas fa-share-alt-square"></i>
                </p>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
    $social_sidemenu_item = [];
    $social_sidemenu_item[ count( $first_level_menus ) ] = [
        'flm_id' => 'social',
        'flm_url' => '',
        'flm_title' => 'Redes sociais'
    ];

    $merged_menus = array_merge( $first_level_menus, $social_sidemenu_item );
    $second_level_menus[ 'social' ] = $social_menus;    

    foreach ( $merged_menus as $f_menu ):
        extract( $f_menu );
?>
        <div id="<?php echo "sidemenu_{$flm_id}"; ?>" class="drawer-menu">
            <div class="drawer-subcontainer">
                <?php if ( $flm_url ): ?>
                    <a href="<?= $flm_url ?>" class="drawer-title"><?= $flm_title ?></a>
                <?php else: ?>
                    <p class="drawer-title"><?= $flm_title ?></p>
                <?php endif; ?>

                <div class="drawer-subcategories">
                    <?php
                    foreach ( $second_level_menus[ $flm_id ] as $s_menu):
                        extract( $s_menu );
                    ?>    
                        <a href="<?= $slm_url ?>" target="<?= $slm_target ?>" ><?= $slm_title ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
<?php
    endforeach;
?>