<?php


add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('firstTry_font','https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;700&display=swap');
    wp_enqueue_style('firstTry_reset',get_template_directory_uri().'/Nd7/reset.css');
    wp_enqueue_style('firstTry_style',get_template_directory_uri().'/Nd7/style.css');
});

    add_action("init", function(){
      register_nav_menus([
          'top-menu'=>'Viršutinis meniu',
          'bottom-menu-1'=>'Apatinis meniu 1',
          'bottom-manu-2'=>'Apatinis meniu 2'
          
      ]);  
    });
    
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1024, 768);
    add_image_size('post-mini', 320,240);
    
    
    add_action('add_meta_boxes', function($post_type, $post) {
        $template=get_post_meta($post->post_parent, '_wp_page_template', true);
       
        if($template=='templates/services.php'){
            add_meta_box('services', 'Paslaugų nustatymai', function($post){
             ?>
          	 <div>
          	 <?php 
          	 wp_nonce_field(basename(__FILE__), "paslaugos_meta");
          	 ?>
           	<table style="width: 100%;">
           	<tr>
           	<td style="width: 200px;"><label>Paslaugos trumpas aprašymas</label></td>
           	 <td> <input name="trumpas_aprasas" type="text" value="<?=get_post_meta($post->ID, 'trumpas_aprasas', true)?>" style="width: 100%;"></td>
           	</tr>
           	<tr>
           	 <td><label>Paslaugos paveiksliukas</label></td>
           	 <td> <input name="icon" type="text" value="<?=get_post_meta($post->ID, 'icon', true)?>" style="width: 100%;"></td>
           	</tr>
           	</table>
           	</div>
           
           	<?php
            }, 'page', 'normal');
        }
    },10,2) ;
    
    
    add_action('save_post', function ($post_ID, $post, $update){
        if(!isset($_POST['paslaugos_meta']) || wp_verify_nonce($_POST['paslaugos_meta'], basename(__FILE__))){
            return false;
        }
        if(current_user_can('edit_post', $post_ID)){
        
            if(isset($_POST['trumpas_aprasas'])){
                update_post_meta($post_ID, 'trumpas_aprasas',  $_POST['trumpas_aprasas'] );
            }
            if(isset($_POST['icon'])){
                update_post_meta($post_ID, 'icon',  $_POST['icon'] );
            }
        }
    },10,3);
    
        add_action('after_switch_theme', function (){
            add_role('team_member', 'Komandos narys', ['read'=>true, 'edit_posts'=>true]);
        });
        
        
            function bit_showprofile($user){
                ?>
                <h2>Papildoma informacija</h2>
              <table class="form-table" role="presentation">
              	<tbody>
              		<tr>
              			<th><label>Pareigos</label></th>
              			<td><input type="text" name="pareigos" id="pareigos" value="<?php echo get_user_meta($user->ID,'pareigos', true )?>" class="regular-text lrt" > </td>
              		</tr>
              		<tr>
              			<th><label>Linked IN </label></th>
              			<td><input type="text" name="linkedin" id="linkedin" value="<?php echo get_user_meta($user->ID,'linkedin', true )?>" class="regular-text lrt"> </td>
              		</tr>
              		<tr>
              			<th><label>Facebook</label></th>
              			<td><input type="text" name="facebook" id="facebook" value="<?php echo get_user_meta($user->ID,'facebook', true )?>" class="regular-text lrt"> </td>
              		</tr>
              		<tr>
              			<th><label>Instagram</label></th>
              			<td><input type="text" name="instagram" id="instagram" value="<?php echo get_user_meta($user->ID,'instagram', true )?>" class="regular-text lrt" > </td>
              		</tr>
              		<tr>
              			<th><label>Nuotraukos URL</label></th>
              			<td><input type="text" name="photo" id="photo" value="<?php echo get_user_meta($user->ID,'photo', true )?>" class="regular-text lrt" > </td>
              		</tr>
              
              	</tbody>
              </table>  
                
                <?php 
            }
       
        add_action('show_user_profile', 'bit_showprofile');
        add_action('edit_user_profile', 'bit_showprofile');
        
        function bit_updateprofile($id){
           update_user_meta($id,'pareigos',$_POST['pareigos']);
           update_user_meta($id,'linkedin',$_POST['linkedin']);
           update_user_meta($id,'facebook',$_POST['facebook']);
           update_user_meta($id,'instagram',$_POST['instagram']);
           update_user_meta($id,'photo',$_POST['photo']);
        }
        add_action('personal_options_update', 'bit_updateprofile');
        add_action('edit_user_profile_update', 'bit_updateprofile');
           
              
      
    
    
    
    
    
    
    
    