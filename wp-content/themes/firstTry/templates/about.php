 <?php
    /* Template Name: About */
   ?>

<?php get_header();?>
<?php 
    the_post();
   
?>
<main>
<section  class="services">
            <div class="table">
                <img class="dotsSecond" src="/wordpress/wp-content/themes/firstTry/Nd7/images/element (1).svg">
                <img class="drop" src="/wordpress/wp-content/themes/firstTry/Nd7/images/lasas.svg">
              
                <div class="rowFirst">
                  <?php 
                  foreach (get_users(['role'=>'team_member'])as $user){
                   ?>
                    <div class="card">
                    <img class="glass" src="<?php echo get_user_meta($user->ID,'photo', true )?>">
                    <h4><?php echo $user->data->display_name ?></h4>
                    <span><?php echo get_user_meta($user->ID,'pareigos', true )?></span>
                    
                </div> 
                
                <?php }?>
                </div>
            </div>
            
        </section>
        </main>
        <?php get_footer();?>