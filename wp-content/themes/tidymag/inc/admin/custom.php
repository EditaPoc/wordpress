<?php
/**
* Customizer Options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Customizer Options
function tidymag_customizer_css() {
    ?>
    <style type="text/css">
    <?php if ( tidymag_get_option('hide_header_content') ) { ?>#tidymag-head-content{padding:0;min-height:auto;} .tidymag-header-image{margin:0;}<?php } ?>
    </style>
    <?php
}
add_action( 'wp_head', 'tidymag_customizer_css' );

// Header styles
if ( ! function_exists( 'tidymag_header_style' ) ) :
function tidymag_header_style() {
    $header_text_color = get_header_textcolor();
    if ( get_theme_support( 'custom-header', 'default-text-color' ) === $header_text_color ) { return; }
    ?>
    <style type="text/css">
    <?php if ( ! display_header_text() ) : ?>
        .tidymag-site-title, .tidymag-site-description {position: absolute;clip: rect(1px, 1px, 1px, 1px);}
    <?php else : ?>
        .tidymag-site-title, .tidymag-site-title a, .tidymag-site-description {color: #<?php echo esc_attr( $header_text_color ); ?>;}
    <?php endif; ?>
    </style>
    <?php
}
endif;