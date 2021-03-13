    <?php get_header();?>
    
    <?php 
    if (have_posts()){
        while(have_posts()){
            the_post();
    ?>

	<section id="providers"  class="providers">
           <img class="Two" <?php  the_post_thumbnail('post-mini')?> >
            <div class="text">
            <h3><?php the_title();?></h3>
            <p>
                <?php the_excerpt();?>
            </p>
            <a  href="<?php the_permalink();?>" class="button">Skaityti</a>
            </div> 
            <img class="dotsThird" src="/wordpress/wp-content/themes/firstTry/Nd7/images/dots.svg">
    </section>
        <?php 
             }
            }
         ?>
	




 <?php get_footer()?>