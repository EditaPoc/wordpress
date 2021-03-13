<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<div class="tidymag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'tidymag-top-widgets' ); ?>
</div>

<div class="tidymag-posts-wrapper" id="tidymag-posts-wrapper">

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

    <?php the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'tidymag' ), 'next_text' => esc_html__( '%title &rarr;', 'tidymag' ))); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#tidymag-posts-wrapper -->

<div class='tidymag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'tidymag-bottom-widgets' ); ?>
</div>

</div>
</div>
</div>

<?php get_sidebar(); ?>

</div>

</div>
</div>
</div>

<?php get_footer(); ?>