<?php get_header();?>


<section id="providers"  class="providers">
            <img class="Two" src="<?php  the_post_thumbnail('post-mini')?>" >
            <div class="text">
            <h3><?php the_title();?></h3>
            <p>
                <?php the_content();?>
            </p>
            
            </div> 
            <img class="dotsThird" src="/wordpress/wp-content/themes/firstTry/Nd7/images/dots.svg">
    </section>

 <?php get_footer()?>
