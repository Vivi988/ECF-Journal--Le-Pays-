<?php

function lepays_supports (){
    add_theme_support('title-tag');
    add_theme_support('thumbnails');
};

function lepays_supports_register_assets(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js', ['popper','jquery'], false, true);
    
    wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], null, true);
    wp_deregister_script('jquery');
    wp_register_script('jquery','https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', [], false, true);

    wp_enqueue_script('bootstrap');
    wp_enqueue_style('bootstrap');

};


function register_my_menus() {
    register_nav_menus(
      array(
        'header-menu' => __( 'Header Menu' ),
        'extra-menu' => __( 'Extra Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

add_action('after_setup_theme', 'lepays_supports');
add_action('wp_enqueue_scripts','lepays_supports_register_assets');

add_theme_support('thumbnails');

// add_theme_support( 'custom-logo' );

?>