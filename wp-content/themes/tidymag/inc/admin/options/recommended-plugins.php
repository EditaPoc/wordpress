<?php
/**
* Recommended plugins options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_recomm_plugin_options($wp_customize) {

    // Customizer Section: Recommended Plugins
    $wp_customize->add_section( 'sc_recommended_plugins', array( 'title' => esc_html__( 'Recommended Plugins', 'tidymag' ), 'panel' => 'tidymag_main_options_panel', 'priority' => 880 ));

    $wp_customize->add_setting( 'tidymag_options[recommended_plugins]', array( 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_recommended_plugins' ) );

    $wp_customize->add_control( new TidyMag_Customize_Recommended_Plugins( $wp_customize, 'tidymag_recommended_plugins_control', array( 'label' => esc_html__( 'Recommended Plugins', 'tidymag' ), 'section' => 'sc_recommended_plugins', 'settings' => 'tidymag_options[recommended_plugins]', 'type' => 'tdna-recommended-wpplugins' ) ) );

}