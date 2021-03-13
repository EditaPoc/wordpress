<?php
/**
* More Custom Functions
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function tidymag_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $tidymag_custom_logo_id = get_theme_mod( 'custom_logo' );
    $tidymag_logo = wp_get_attachment_image_src( $tidymag_custom_logo_id , 'full' );
    return $tidymag_logo[0];
}

// Category ids in post class
function tidymag_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'tidymag_category_id_class');

// Change excerpt more word
function tidymag_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'tidymag_excerpt_more');

// Adds custom classes to the array of body classes.
function tidymag_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'tidymag-group-blog';
    }

    if ( is_page_template() ) {

    if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
       $classes[] = 'tidymag-layout-full-width';
    } else {
        $classes[] = 'tidymag-sticky-sidebars';
    }

    }

    if ( !is_page_template() ) {
    if ( is_singular() ) {
        $classes[] = 'tidymag-sticky-sidebars';
    } else {
        $classes[] = 'tidymag-layout-full-width';
    }
    }

    if ( is_404() ) {
        $classes[] = 'tidymag-404-full-width';
    }

    return $classes;
}
add_filter( 'body_class', 'tidymag_body_classes' );


function tidymag_post_style() {
       $post_style = 'grid-2';
        if ( tidymag_get_option('post_style') ) {
                $post_style = esc_html(tidymag_get_option('post_style'));
        }
       return $post_style;
}

if ( ! function_exists( 'wp_body_open' ) ) :
    /**
     * Fire the wp_body_open action.
     *
     * Added for backwards compatibility to support pre 5.2.0 WordPress versions.
     */
    function wp_body_open() { // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedFunctionFound
        /**
         * Triggered after the opening <body> tag.
         */
        do_action( 'wp_body_open' ); // phpcs:ignore WPThemeReview.CoreFunctionality.PrefixAllGlobals.NonPrefixedHooknameFound
    }
endif;