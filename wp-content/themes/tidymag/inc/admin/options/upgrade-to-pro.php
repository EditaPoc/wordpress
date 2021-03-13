<?php
/**
* Upgrade to pro options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_upgrade_to_pro($wp_customize) {

    $wp_customize->add_section( 'sc_tidymag_upgrade', array( 'title' => esc_html__( 'Upgrade to Pro Version', 'tidymag' ), 'priority' => 400 ) );
    
    $wp_customize->add_setting( 'tidymag_options[upgrade_text]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );
    
    $wp_customize->add_control( new TidyMag_Customize_Static_Text_Control( $wp_customize, 'tidymag_upgrade_text_control', array(
        'label'       => esc_html__( 'TidyMag Pro', 'tidymag' ),
        'section'     => 'sc_tidymag_upgrade',
        'settings' => 'tidymag_options[upgrade_text]',
        'description' => esc_html__( 'Do you enjoy TidyMag? Upgrade to TidyMag Pro now and get:', 'tidymag' ).
            '<ul class="tidymag-customizer-pro-features">' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Color Options', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Font Options', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Layout Options', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Page Templates', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '10+ Custom Post Templates', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '8 Different Posts Styles', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '7 Different Featured Posts Widgets(each widget displays recent/popular/random posts or posts from a given category or tag.)', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Featured Posts Slider Widget(this widget displays recent/popular/random posts or posts from a given category or tag.)', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Tabbed Widget', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Social Profiles Widget and About Me Widget', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( '2 Header Layouts (full-width header or header+728x90 ad)', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Post Share Buttons', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Related Posts with Thumbnails', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Author Bio Box with Social Buttons', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Sticky Menu/Sticky Sidebars with enable/disable capability', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'WooCommerce Support', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'Search Engine Optimized', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Customizer options', 'tidymag' ) . '</li>' .
                '<li><i class="fa fa-check"></i> ' . esc_html__( 'More Features...', 'tidymag' ) . '</li>' .
            '</ul>'.
            '<strong><a href="'.TIDYMAG_PROURL.'" class="button button-primary" target="_blank"><i class="fa fa-shopping-cart"></i> ' . esc_html__( 'Upgrade To TidyMag PRO', 'tidymag' ) . '</a></strong>'
    ) ) ); 

}