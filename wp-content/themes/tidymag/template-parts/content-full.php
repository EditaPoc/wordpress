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

<div id="post-<?php the_ID(); ?>" class="tidymag-full-post">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(tidymag_get_option('hide_thumbnail')) ) { ?>
    <div class="tidymag-full-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( esc_html__( 'Permanent Link to %s', 'tidymag' ), the_title_attribute( 'echo=0' ) ) ); ?>" class="tidymag-full-post-thumbnail-link"><?php the_post_thumbnail('tidymag-large-image', array('class' => 'tidymag-full-post-thumbnail-img')); ?></a>
    </div>
    <?php } ?>
    <?php } ?>

    <?php if((has_post_thumbnail()) && !(tidymag_get_option('hide_thumbnail'))) { ?><div class="tidymag-full-post-details"><?php } ?>
    <?php if(!(has_post_thumbnail()) || (tidymag_get_option('hide_thumbnail'))) { ?><div class="tidymag-full-post-details-full"><?php } ?>

    <?php if ( !(tidymag_get_option('hide_post_categories')) ) { ?><?php tidymag_full_cats(); ?><?php } ?>

    <?php the_title( sprintf( '<h3 class="tidymag-full-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php tidymag_full_postmeta(); ?>

    <div class="tidymag-full-post-snippet clearfix">
    <?php
    the_content( sprintf(
        wp_kses(
            /* translators: %s: Name of current post. Only visible to screen readers */
            __( 'Continue reading<span class="screen-reader-text"> "%s"</span> <span class="meta-nav">&rarr;</span>', 'tidymag' ),
            array(
                'span' => array(
                    'class' => array(),
                ),
            )
        ),
        get_the_title()
    ) );

    wp_link_pages( array(
     'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'tidymag' ) . '</span>',
     'after'       => '</div>',
     'link_before' => '<span>',
     'link_after'  => '</span>',
     'separator'   => '',
     ) );
    ?>
    </div>

    <footer class="tidymag-full-post-footer">
        <?php if ( !(tidymag_get_option('hide_post_tags')) ) { ?><?php tidymag_post_tags(); ?><?php } ?>
    </footer>

    <?php if(!(has_post_thumbnail()) || (tidymag_get_option('hide_thumbnail'))) { ?></div><?php } ?>
    <?php if((has_post_thumbnail()) && !(tidymag_get_option('hide_thumbnail'))) { ?></div><?php } ?>

</div>