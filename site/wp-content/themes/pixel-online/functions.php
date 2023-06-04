<?php

 add_action("wp_enqueue_scripts", 'theme_enqueue_styles');
 function theme_enqueue_styles(){
    wp_enqueue_style('parent-style', get_template_directory_uri()."/style.css");
    wp_enqueue_style('load_fa', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css");
 }

//HOOK ACTION
//  function custom_callback_function(){
//     echo "Je me greffe à un hook existant et je réalise une action";
//  }

//  add_action('init', 'custom_callback_function');
 

//HOOK ACTIONS
//  function hide_admin_menus() {
//     if(current_user_can("create_users")) {
//         return;
//     }
//     remove_menu_page('plugins.php');
//     remove_menu_page('themes.php');
//     remove_menu_page('tools.php');
//     remove_menu_page('users.php');
//     remove_menu_page('edit.php?post_type=page');
//     remove_menu_page('options-general.php');
//  }
//  add_action('admin_menu', 'hide_admin_menus');

//HOOK FILTER
 function custom_login_message($message){
    if(empty($message)){
        return "<h2>Vous pouvez vous connecter, en cas de souci contactez <a href=\"https://www.pixel-online.fr\">Pixel Online</a></h2>";
    } else {
        return $message;
    }
 }
 add_filter('login_message', "custom_login_message");


 //HOOK CUSTOM
 if(!function_exists('render_pixel')){
    function render_pixel(){
        echo html_entity_decode(sprintf('%s', ' - Conception WEB : <a href=\"https://www.pixel-online.fr\">Pixel Online</a>'));
    }
 }
 add_action('pixel', 'render_pixel');