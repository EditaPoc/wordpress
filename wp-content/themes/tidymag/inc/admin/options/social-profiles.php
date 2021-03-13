<?php
/**
* Social profiles options
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function tidymag_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_tidymag_sociallinks', array( 'title' => esc_html__( 'Social Links', 'tidymag' ), 'panel' => 'tidymag_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'tidymag_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[show_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_checkbox', ) );

    $wp_customize->add_control( 'tidymag_show_footer_social_buttons_control', array( 'label' => esc_html__( 'Show Footer Social Buttons', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[show_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'tidymag_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'tidymag_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'tidymag_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_githublink_control', array( 'label' => esc_html__( 'Github URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_vklink_control', array( 'label' => esc_html__( 'VK Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'tidymag_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'tidymag_sanitize_email' ) );

    $wp_customize->add_control( 'tidymag_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'tidymag_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'tidymag_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'tidymag' ), 'section' => 'sc_tidymag_sociallinks', 'settings' => 'tidymag_options[rsslink]', 'type' => 'text' ) );

}