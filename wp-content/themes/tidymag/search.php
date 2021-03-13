<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

<?php if(is_home() && !is_paged()) { ?>
<div class="tidymag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'tidymag-home-top-widgets' ); ?>
</div>
<?php } ?>

<div class="tidymag-featured-posts-area clearfix">
<?php dynamic_sidebar( 'tidymag-top-widgets' ); ?>
</div>

<div class="tidymag-posts-wrapper" id="tidymag-posts-wrapper">

<div class="tidymag-posts tidymag-box">

<header class="page-header">
<h1 class="page-title"><?php /* translators: %s: search query. */ printf( esc_html__( 'Search Results for: %s', 'tidymag' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</header>

<div class="tidymag-posts-content">

<?php if (have_posts()) : ?>

    <div class="tidymag-posts-container">
    <?php while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', tidymag_post_style() ); ?>

    <?php endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php tidymag_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#tidymag-posts-wrapper -->

<?php if(is_home() && !is_paged()) { ?>
<div class='tidymag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'tidymag-home-bottom-widgets' ); ?>
</div>
<?php } ?>

<div class='tidymag-featured-posts-area clearfix'>
<?php dynamic_sidebar( 'tidymag-bottom-widgets' ); ?>
</div>

</div>
</div>
</div>

<?php //get_sidebar(); ?>

</div>

</div>
</div>
</div>

<?php get_footer(); ?>