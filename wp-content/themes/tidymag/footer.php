<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<?php if ( (tidymag_get_option('show_footer_social_buttons')) ) { ?>
<div class='tidymag-social-icons-outer-container'>
<div class='tidymag-container clearfix'>
<div class="tidymag-social-icons clearfix">
<div class="tidymag-social-icons-inner clearfix">
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
</div>
</div>
</div>
</div>
<?php } ?>


<?php if ( !(tidymag_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'tidymag-footer-1' ) || is_active_sidebar( 'tidymag-footer-2' ) || is_active_sidebar( 'tidymag-footer-3' ) || is_active_sidebar( 'tidymag-footer-4' ) ) : ?>
<div class='tidymag-footer-outer-container'>
<div class='tidymag-container'>
<div id='tidymag-footer-container' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='clearfix' id='tidymag-footer-widgets'>

<div class='tidymag-footer-widgets-column'>
<?php dynamic_sidebar( 'tidymag-footer-1' ); ?>
</div>

<div class='tidymag-footer-widgets-column'>
<?php dynamic_sidebar( 'tidymag-footer-2' ); ?>
</div>

<div class='tidymag-footer-widgets-column'>
<?php dynamic_sidebar( 'tidymag-footer-3' ); ?>
</div>

<div class='tidymag-footer-widgets-column'>
<?php dynamic_sidebar( 'tidymag-footer-4' ); ?>
</div>

</div>
</div>
</div>
</div>
<?php endif; ?>
<?php } ?>


<div class='tidymag-copyrights-outer-container'>
<div class='tidymag-container'>
<div id='tidymag-copyrights-container'>
<div id='tidymag-copyrights'>
<?php if ( tidymag_get_option('footer_text') ) : ?>
  <?php echo esc_html(tidymag_get_option('footer_text')); ?>
<?php else : ?>
  <?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'tidymag' ), esc_html(date_i18n(__('Y','tidymag'))) . ' ' . esc_html(get_bloginfo( 'name' )) ); ?>
<?php endif; ?>
</div>
<div id="tidymag-credits"><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'tidymag' ), 'ThemesDNA.com' ); ?></a></div>
</div>
</div>
</div>


</div><!-- .tidymag-wrapper -->

<button class="tidymag-scroll-top" title="<?php esc_attr_e('Scroll to Top','tidymag'); ?>"><span class="fa fa-arrow-up" aria-hidden="true"></span><span class="screen-reader-text"><?php esc_html_e('Scroll to Top', 'tidymag'); ?></span></button>

<?php wp_footer(); ?>
</body>
</html>