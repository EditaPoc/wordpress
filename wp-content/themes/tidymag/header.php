<?php
/**
* The header for TidyMag theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> id="tidymag-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">
<?php wp_body_open(); ?>
<a class="skip-link screen-reader-text" href="#tidymag-posts-wrapper"><?php esc_html_e( 'Skip to content', 'tidymag' ); ?></a>

<div class='tidymag-wrapper'>

<div class='tidymag-header-outer-container'>
<div class='tidymag-container'>
<div class="tidymag-header-container" id="tidymag-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="clearfix" id="tidymag-head-content">

<?php if ( get_header_image() ) : ?>
<div class="tidymag-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="tidymag-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="tidymag-header-img"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(tidymag_get_option('hide_header_content')) ) { ?>
<div class="tidymag-header-inside clearfix">

<div id="tidymag-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="tidymag-logo-image-link">
        <img src="<?php echo esc_url( tidymag_custom_logo() ); ?>" alt="" class="tidymag-logo-image"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="tidymag-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="tidymag-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#tidymag-logo -->

<div id="tidymag-header-banner">
<?php dynamic_sidebar( 'tidymag-header-banner' ); ?>
</div><!--/#tidymag-header-banner -->

</div>
<?php } ?>

</div><!--/#tidymag-head-content -->
</div><!--/#tidymag-header -->
</div>
</div>

<div class="tidymag-primary-menu-container clearfix">
<div class="tidymag-primary-menu-container-inside clearfix">
<nav class="tidymag-nav-primary" id="tidymag-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'tidymag' ); ?>">
<div class="tidymag-container">
<button class="tidymag-primary-responsive-menu-icon" aria-controls="tidymag-menu-primary-navigation" aria-expanded="false"><?php esc_html_e( 'Menu', 'tidymag' ); ?></button>
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'tidymag-menu-primary-navigation', 'menu_class' => 'tidymag-primary-nav-menu tidymag-menu-primary', 'fallback_cb' => 'tidymag_fallback_menu', 'container' => '', ) ); ?>

<?php if ( !(tidymag_get_option('hide_header_social_buttons')) ) { ?>
<div class='tidymag-top-social-icons'>
    <?php if ( tidymag_get_option('twitterlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('twitterlink') ); ?>" target="_blank" class="tidymag-social-icon-twitter" title="<?php esc_attr_e('Twitter','tidymag'); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('facebooklink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('facebooklink') ); ?>" target="_blank" class="tidymag-social-icon-facebook" title="<?php esc_attr_e('Facebook','tidymag'); ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('googlelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('googlelink') ); ?>" target="_blank" class="tidymag-social-icon-google-plus" title="<?php esc_attr_e('Google Plus','tidymag'); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('pinterestlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('pinterestlink') ); ?>" target="_blank" class="tidymag-social-icon-pinterest" title="<?php esc_attr_e('Pinterest','tidymag'); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('linkedinlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('linkedinlink') ); ?>" target="_blank" class="tidymag-social-icon-linkedin" title="<?php esc_attr_e('Linkedin','tidymag'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('instagramlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('instagramlink') ); ?>" target="_blank" class="tidymag-social-icon-instagram" title="<?php esc_attr_e('Instagram','tidymag'); ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('flickrlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('flickrlink') ); ?>" target="_blank" class="tidymag-social-icon-flickr" title="<?php esc_attr_e('Flickr','tidymag'); ?>"><i class="fa fa-flickr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('youtubelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('youtubelink') ); ?>" target="_blank" class="tidymag-social-icon-youtube" title="<?php esc_attr_e('Youtube','tidymag'); ?>"><i class="fa fa-youtube" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('vimeolink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('vimeolink') ); ?>" target="_blank" class="tidymag-social-icon-vimeo" title="<?php esc_attr_e('Vimeo','tidymag'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('soundcloudlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('soundcloudlink') ); ?>" target="_blank" class="tidymag-social-icon-soundcloud" title="<?php esc_attr_e('SoundCloud','tidymag'); ?>"><i class="fa fa-soundcloud" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('lastfmlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('lastfmlink') ); ?>" target="_blank" class="tidymag-social-icon-lastfm" title="<?php esc_attr_e('Lastfm','tidymag'); ?>"><i class="fa fa-lastfm" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('githublink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('githublink') ); ?>" target="_blank" class="tidymag-social-icon-github" title="<?php esc_attr_e('Github','tidymag'); ?>"><i class="fa fa-github" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('bitbucketlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('bitbucketlink') ); ?>" target="_blank" class="tidymag-social-icon-bitbucket" title="<?php esc_attr_e('Bitbucket','tidymag'); ?>"><i class="fa fa-bitbucket" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('tumblrlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('tumblrlink') ); ?>" target="_blank" class="tidymag-social-icon-tumblr" title="<?php esc_attr_e('Tumblr','tidymag'); ?>"><i class="fa fa-tumblr" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('digglink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('digglink') ); ?>" target="_blank" class="tidymag-social-icon-digg" title="<?php esc_attr_e('Digg','tidymag'); ?>"><i class="fa fa-digg" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('deliciouslink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('deliciouslink') ); ?>" target="_blank" class="tidymag-social-icon-delicious" title="<?php esc_attr_e('Delicious','tidymag'); ?>"><i class="fa fa-delicious" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('stumblelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('stumblelink') ); ?>" target="_blank" class="tidymag-social-icon-stumbleupon" title="<?php esc_attr_e('Stumbleupon','tidymag'); ?>"><i class="fa fa-stumbleupon" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('redditlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('redditlink') ); ?>" target="_blank" class="tidymag-social-icon-reddit" title="<?php esc_attr_e('Reddit','tidymag'); ?>"><i class="fa fa-reddit" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('dribbblelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('dribbblelink') ); ?>" target="_blank" class="tidymag-social-icon-dribbble" title="<?php esc_attr_e('Dribbble','tidymag'); ?>"><i class="fa fa-dribbble" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('behancelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('behancelink') ); ?>" target="_blank" class="tidymag-social-icon-behance" title="<?php esc_attr_e('Behance','tidymag'); ?>"><i class="fa fa-behance" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('vklink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('vklink') ); ?>" target="_blank" class="tidymag-social-icon-vk" title="<?php esc_attr_e('VK','tidymag'); ?>"><i class="fa fa-vk" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('codepenlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('codepenlink') ); ?>" target="_blank" class="tidymag-social-icon-codepen" title="<?php esc_attr_e('Codepen','tidymag'); ?>"><i class="fa fa-codepen" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('jsfiddlelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('jsfiddlelink') ); ?>" target="_blank" class="tidymag-social-icon-jsfiddle" title="<?php esc_attr_e('JSFiddle','tidymag'); ?>"><i class="fa fa-jsfiddle" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('stackoverflowlink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('stackoverflowlink') ); ?>" target="_blank" class="tidymag-social-icon-stackoverflow" title="<?php esc_attr_e('Stack Overflow','tidymag'); ?>"><i class="fa fa-stack-overflow" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('stackexchangelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('stackexchangelink') ); ?>" target="_blank" class="tidymag-social-icon-stackexchange" title="<?php esc_attr_e('Stack Exchange','tidymag'); ?>"><i class="fa fa-stack-exchange" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('bsalink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('bsalink') ); ?>" target="_blank" class="tidymag-social-icon-buysellads" title="<?php esc_attr_e('BuySellAds','tidymag'); ?>"><i class="fa fa-buysellads" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('slidesharelink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('slidesharelink') ); ?>" target="_blank" class="tidymag-social-icon-slideshare" title="<?php esc_attr_e('SlideShare','tidymag'); ?>"><i class="fa fa-slideshare" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('skypeusername') ) : ?>
            <a href="skype:<?php echo esc_html( tidymag_get_option('skypeusername') ); ?>?chat" class="tidymag-social-icon-skype" title="<?php esc_attr_e('Skype','tidymag'); ?>"><i class="fa fa-skype" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('emailaddress') ) : ?>
            <a href="mailto:<?php echo esc_html( tidymag_get_option('emailaddress') ); ?>" class="tidymag-social-icon-email" title="<?php esc_attr_e('Email Us','tidymag'); ?>"><i class="fa fa-envelope" aria-hidden="true"></i></a><?php endif; ?>
    <?php if ( tidymag_get_option('rsslink') ) : ?>
            <a href="<?php echo esc_url( tidymag_get_option('rsslink') ); ?>" target="_blank" class="tidymag-social-icon-rss" title="<?php esc_attr_e('RSS','tidymag'); ?>"><i class="fa fa-rss" aria-hidden="true"></i></a><?php endif; ?>
    <a href="<?php echo esc_url( '#' ); ?>" title="<?php esc_attr_e('Search','tidymag'); ?>" class="tidymag-social-search-icon"><i class="fa fa-search"></i></a>
</div>
<?php } ?>

<div class='tidymag-social-search-box'>
<?php get_search_form(); ?>
</div>
</div>
</nav>
</div>
</div>