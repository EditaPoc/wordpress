   <?php
    /* Template Name: Paslaugos */
   ?>

<?php get_header();?>
<?php 
    the_post();
    $id=get_the_ID();
    $services=get_pages(['child_of'=>$id, 'sort_column'=>'ID']);

   
?>
<main>
<section  class="services">
            <div class="table">
                <img class="dotsSecond" src="/wordpress/wp-content/themes/firstTry/Nd7/images/element (1).svg">
                <img class="drop" src="/wordpress/wp-content/themes/firstTry/Nd7/images/lasas.svg">
              
                <div class="rowFirst">
                  <?php foreach ($services as $service){?>
                    <div class="card">
                    <img class="glass" src="/wordpress/wp-content/themes/firstTry/Nd7/images/Frame.svg">
                    <h4><a href="<?php the_permalink($service->ID)?>>"><?=$service->post_title?> </a></h4>
                    <p><?= get_post_meta($service->ID,'trumpas_aprasas', true);?> </p>
                </div> 
                 <?php }?>
                
                </div>
            </div>
            
        </section>
        </main>
        <?php get_footer();?>