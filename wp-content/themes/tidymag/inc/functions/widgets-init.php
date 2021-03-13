<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_widgets_init() {

register_sidebar(array(
    'id' => 'tidymag-header-banner',
    'name' => esc_html__( 'Header Banner', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'tidymag-left-sidebar',
    'name' => esc_html__( 'Sidebar 1', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the left-hand side of web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-side-widget widget tidymag-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-right-sidebar',
    'name' => esc_html__( 'Sidebar 2', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the right-hand side of web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-side-widget widget tidymag-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'tidymag' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-main-widget widget tidymag-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'tidymag' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-main-widget widget tidymag-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'tidymag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-main-widget widget tidymag-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'tidymag' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-main-widget widget tidymag-box %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-footer-1',
    'name' => esc_html__( 'Footer 1', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-footer-2',
    'name' => esc_html__( 'Footer 2', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-footer-3',
    'name' => esc_html__( 'Footer 3', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'tidymag-footer-4',
    'name' => esc_html__( 'Footer 4', 'tidymag' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'tidymag' ),
    'before_widget' => '<div id="%1$s" class="tidymag-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="tidymag-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'tidymag_widgets_init' );