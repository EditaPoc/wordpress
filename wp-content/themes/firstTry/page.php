<?php get_header();?>

<?php the_post();?>
    <main>
        <section  class="four">
            <div class="block">
            <h3><?php the_title(); ?></h3>
            <p>
            <?php the_content();?>
            </p>
            
            </div>
            
        </section>
        
   
    </main>
    <?php get_footer()?>
    
