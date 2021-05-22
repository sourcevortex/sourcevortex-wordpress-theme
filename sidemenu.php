<?php

// TODO: Improve code quality (cleaning, integrity, mixed code)

list(
    $first_level_menus,
    $second_level_menus
) = process_sidemenu_array( get_menu_items_by_slug( 'primary' ) );

$social_menus = add_social_sidemenu( get_menu_items_by_slug( 'social' ) );

$dark_is_enabled = false;

?>

<div class="sidemenu-container">
    <div class="sidemenu-subcontainer">
        <div class="sidemenu-top-icons">
            <?php
                foreach ( $first_level_menus as $f_menu ) {
                    extract( $f_menu );
                    echo "<p class='sidemenu-icon actOpenDrawer' title='{$flm_title}' data-id='sidemenu_{$flm_id}'>{$flm_icon}</i></p>";
                } 
            ?>
        </div>
        <div class="sidemenu-bottom-icons">
            <p class="sidemenu-icon" style="visibility:hidden;">
                <?php
                    if ( $dark_is_enabled ) {
                        echo '<i class="far fa-sun"></i>';
                    } else {
                        echo '<i class="far fa-moon"></i>';
                    }
                ?>
            </p>
            <?php
                if ( count( $social_menus ) > 0 ) {
                    $sm_title = _('Redes sociais');
                    $sm_icon = file_get_contents( get_template_directory() . '/img/share-alt-square-solid.svg' );
                    echo "<p class='sidemenu-icon actOpenDrawer' title='{$sm_title}' data-id='sidemenu_social'>{$sm_icon}</p>";
                }                   
            ?>
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

    foreach ( $merged_menus as $f_menu ) {
        extract( $f_menu );
        echo "<div id='sidemenu_{$flm_id}' class='drawer-menu'>";
            echo '<div class="drawer-subcontainer">';
                if ( $flm_url ) {
                    echo "<a href='{$flm_url}' class='drawer-title'>{$flm_title}</a>";
                } else {
                    echo "<p class='drawer-title'>{$flm_title}</p>";
                }
                
                echo '<div class="drawer-subcategories">';
                    foreach ( $second_level_menus[ $flm_id ] as $s_menu) {
                        extract( $s_menu );
                        echo "<a href='{$slm_url}' target='{$slm_target}' >{$slm_title}</a>";
                    }
                echo '</div>';
            echo '</div>';
        echo '</div>';
    }
?>