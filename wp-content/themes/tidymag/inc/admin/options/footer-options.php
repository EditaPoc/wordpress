<?php
/**
* Footer options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_tidymag_footer', array( 'title' => esc_html__( 'Footer', 'tidymag' ), 'panel' => 'tidymag_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'tidymag_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_html', ) );

    $wp_customize->add_control( 'tidymag_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'tidymag' ), 'section' => 'sc_tidymag_footer', 'settings' => 'tidymag_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'tidymag' ), 'section' => 'sc_tidymag_footer', 'settings' => 'tidymag_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}