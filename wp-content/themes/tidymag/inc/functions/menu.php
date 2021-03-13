<?php
/**
* Menu Functions
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get our wp_nav_menu() fallback, wp_page_menu(), to show a "Home" link as the first item
function tidymag_page_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'tidymag_page_menu_args' );

function tidymag_fallback_menu() {
   wp_page_menu( array(
        'sort_column'  => 'menu_order, post_title',
        'menu_id'      => 'tidymag-menu-primary-navigation',
        'menu_class'   => 'tidymag-primary-nav-menu tidymag-menu-primary',
        'container'    => 'ul',
        'echo'         => true,
        'link_before'  => '',
        'link_after'   => '',
        'before'       => '',
        'after'        => '',
        'item_spacing' => 'discard',
        'walker'       => '',
    ) );
}