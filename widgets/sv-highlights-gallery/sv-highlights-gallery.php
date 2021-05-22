<?php
/**
 * @package SourceVortex_Hightlights_Gallery_Widget
 * @version 0.1
 */

/*
Description: A highlight gallery (carousel) widget
Author: Carlos H.
Version: 0.5
Author URI: https://www.linkedin.com/in/chsjr1996/
*/

// Define constants
define( 'SV_HG_WIDGET_DIR_URL', get_template_directory_uri() . '/widgets/sv-highlights-gallery' );
define( 'SV_HG_WIDGET_DIR_PATH', __DIR__ );
define( 'SV_HG_DEFAULT_CATEGORY', 'destaques');

// Load all plugin parts
require_once __DIR__ . '/widget/sv-highlights-gallery-widget.php';

// Load Widget
register_widget( 'sv_hgw_widget' );