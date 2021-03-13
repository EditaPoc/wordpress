<?php
/**
* Header options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_header_options($wp_customize) {

    // Header
    $wp_customize->add_section( 'sc_tidymag_header', array( 'title' => esc_html__( 'Header Options', 'tidymag' ), 'panel' => 'tidymag_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'tidymag_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'tidymag' ), 'section' => 'sc_tidymag_header', 'settings' => 'tidymag_options[hide_header_content]', 'type' => 'checkbox', ) );

}