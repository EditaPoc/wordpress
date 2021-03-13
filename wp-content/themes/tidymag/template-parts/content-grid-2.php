<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package TidyMag WordPress Theme
* @copyright Copyright (C) 2019 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="tidymag-cgrid-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(tidymag_get_option('hide_thumbnail')) ) { ?>
    <div class="tidymag-cgrid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'tidymag' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="tidymag-cgrid-post-thumbnail-link"><?php the_post_thumbnail('tidymag-medium-image', array('class' => 'tidymag-cgrid-post-thumbnail-img')); ?></a>
    </div>
    <?php } else { ?>
    <div class="tidymag-cgrid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'tidymag' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="tidymag-cgrid-post-thumbnail-link"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-3.jpg' ); ?>" class="tidymag-cgrid-post-thumbnail-img"/></a>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="tidymag-cgrid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'tidymag' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="tidymag-cgrid-post-thumbnail-link"><img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/no-image-4-3.jpg' ); ?>" class="tidymag-cgrid-post-thumbnail-img"/></a>
    </div>
    <?php } ?>

    <div class="tidymag-cgrid-post-details">
    <?php if ( !(tidymag_get_option('hide_post_categories')) ) { ?><?php tidymag_cgrid_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="tidymag-cgrid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php tidymag_cgrid_postmeta(); ?>
    </div>

</div>