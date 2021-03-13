<?php
/**
* Author bio box
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="tidymag-author-bio">
            <div class="tidymag-author-bio-top">
            <div class="tidymag-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="tidymag-author-bio-text">
                <h4>'.esc_html__( 'Author: ', 'tidymag' ).'<span>'. get_the_author_link() .'</span></h4>'. get_the_author_meta('description',get_query_var('author') ) .'
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}