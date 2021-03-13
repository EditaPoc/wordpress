<?php
/**
* The template for displaying 404 pages (not found).
*
* @link https://codex.wordpress.org/Creating_an_Error_404_Page
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class='tidymag-content-outer-container'>
<div class='tidymag-container'>
<div id='tidymag-content-wrapper'>

<div id='tidymag-content-inner-wrapper'>

<div class='tidymag-main-wrapper' id='tidymag-main-wrapper' itemscope='itemscope' itemtype='http://schema.org/Blog' role='main'>
<div class='theiaStickySidebar'>
<div class='tidymag-main-wrapper-inside clearfix'>

<div class='tidymag-posts-wrapper' id='tidymag-posts-wrapper'>

<div class='tidymag-posts tidymag-box'>

<header class="page-header">
    <h1 class="page-title"><?php esc_html_e( 'Oops! That page can not be found.', 'tidymag' ); ?></h1>
</header><!-- .page-header -->

<div class='tidymag-posts-content'>

    <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'tidymag' ); ?></p>

    <?php get_search_form(); ?>

    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
    
    <div>
        <h2><?php esc_html_e( 'Most Used Categories', 'tidymag' ); ?></h2>
        <ul>
        <?php
                wp_list_categories( array(
                        'orderby'    => 'count',
                        'order'      => 'DESC',
                        'show_count' => 1,
                        'title_li'   => '',
                        'number'     => 10,
                ) );
        ?>
        </ul>
    </div>

    <?php
        /* translators: %1$s: smiley */
        $tidymag_archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'tidymag' ), convert_smilies( ':)' ) ) . '</p>';
        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$tidymag_archive_content" );
    ?>

    <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

</div>

</div>

</div><!--/#tidymag-posts-wrapper -->

</div>
</div>
</div>

<?php get_sidebar(); ?>

</div>

</div>
</div>
</div>

<?php get_footer(); ?>