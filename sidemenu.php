<?php

list(
    $first_level_menus,
    $second_level_menus
) = process_sidemenu_array( get_menu_items_by_slug( 'primary' ) );

?>

<div class="sidemenu-container">
    <div class="sidemenu-subcontainer">
        <div class="sidemenu-top-icons">
            <?php
                foreach ( $first_level_menus as $f_menu ) {
                    extract( $f_menu );
                    echo "<p class='sidemenu-icon actOpenDrawer' title='{$title}' data-id='sidemenu_{$id}'><i class='{$icon}'></i></p>";
                } 
            ?>
        </div>
    </div>
</div>

<?php 
    foreach ( $first_level_menus as $f_menu ):
        extract( $f_menu );
?>
        <div id="<?php echo "sidemenu_{$id}"; ?>" class="drawer-menu">
            <div class="drawer-subcontainer">
                <a href="<?= $url ?>" class="drawer-title"><?= $title ?></a>

                <div class="drawer-subcategories">
                    <?php
                    foreach ( $second_level_menus[ $id ] as $s_menu):
                        $s_url = $s_menu->url;
                        $s_title = $s_menu->title;
                    ?>    
                        <a href="<?= $s_url ?>"><?= $s_title ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
<?php
    endforeach;
?>