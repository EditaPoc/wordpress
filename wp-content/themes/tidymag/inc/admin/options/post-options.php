<?php
/**
* Post options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_post_options($wp_customize) {

    $wp_customize->add_section( 'sc_tidymag_posts', array( 'title' => esc_html__( 'Post Options', 'tidymag' ), 'panel' => 'tidymag_main_options_panel', 'priority' => 260 ) );

    $wp_customize->add_setting( 'tidymag_options[posts_heading]', array( 'default' => esc_html__( 'Recent Posts', 'tidymag' ), 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field', ) );

    $wp_customize->add_control( 'tidymag_posts_heading_control', array( 'label' => esc_html__( 'HomePage Posts Heading', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[posts_heading]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'tidymag_options[thumbnail_link]', array( 'default' => 'yes', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_thumbnail_link' ) );

    $wp_customize->add_control( 'tidymag_thumbnail_link_control', array( 'label' => esc_html__( 'Thumbnail Link', 'tidymag' ), 'description' => esc_html__('Do you want single post thumbnail to be linked to their post?', 'tidymag'), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[thumbnail_link]', 'type' => 'select', 'choices' => array( 'yes' => esc_html__('Yes', 'tidymag'), 'no' => esc_html__('No', 'tidymag') ) ) );

    $wp_customize->add_setting( 'tidymag_options[post_style]', array( 'default' => 'grid-2', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_post_style' ) );

    $wp_customize->add_control( 'tidymag_post_style_control', array( 'label' => esc_html__( 'Non-Singular Posts Style', 'tidymag' ), 'description' => esc_html__('Select the post style you want for home/categories/tags/archive/search-results pages.', 'tidymag'), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[post_style]', 'type' => 'select', 'choices' => array( 'grid-2' => esc_html__('Grid 2', 'tidymag'), 'full' => esc_html__('Full', 'tidymag') ) ) );

    $wp_customize->add_setting( 'tidymag_options[hide_posted_date]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_posted_date_control', array( 'label' => esc_html__( 'Hide Posted Date', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_posted_date]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_post_author]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_post_author_control', array( 'label' => esc_html__( 'Hide Post Author', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_post_author]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_post_categories]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_post_categories_control', array( 'label' => esc_html__( 'Hide Post Categories', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_post_categories]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_post_tags]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_post_tags_control', array( 'label' => esc_html__( 'Hide Post Tags', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_post_tags]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_comments_link]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_comments_link_control', array( 'label' => esc_html__( 'Hide Comment Link', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_comments_link]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_post_edit]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_post_edit_control', array( 'label' => esc_html__( 'Hide Post Edit Link', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_post_edit]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_thumbnail]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_thumbnail_control', array( 'label' => esc_html__( 'Hide Thumbnails from Every Page', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_thumbnail]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_thumbnail_single]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_thumbnail_single_control', array( 'label' => esc_html__( 'Hide Thumbnails from Posts/Pages', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_thumbnail_single]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[hide_author_bio_box]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_author_bio_box_control', array( 'label' => esc_html__( 'Hide Author Bio Box', 'tidymag' ), 'section' => 'sc_tidymag_posts', 'settings' => 'tidymag_options[hide_author_bio_box]', 'type' => 'checkbox', ) );

}