<?php 

function load_stylesheets(){
    wp_register_style('bootstrap_stylesheet', get_template_directory_uri() . '/css/bootstrap.min.css', array(),false,'all');
    wp_enqueue_style('bootstrap_stylesheet');

    wp_register_style('custom_stylesheet', get_template_directory_uri() . '/css/styles.css', array(),false,'all');
    wp_enqueue_style('custom_stylesheet');
}

add_action('wp_enqueue_scripts','load_stylesheets');

function load_scripts(){

    wp_register_script('bootstrap_javascript', get_template_directory_uri() . '/js/bootstrap.bundle.min.js', array('jquery'),1,true);
    wp_enqueue_script('bootstrap_javascript');
    
    wp_register_script('custom_javascript', get_template_directory_uri() . '/js/script.js', '',1,true,);
    wp_enqueue_script('custom_javascript');

}
add_action('wp_enqueue_scripts','load_scripts');

function aryabhatta_custom_logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true, 
    );
 
    add_theme_support( 'custom-logo', $defaults );
}
 
add_action( 'after_setup_theme', 'aryabhatta_custom_logo_setup' );



add_theme_support('menus'); 
add_theme_support('post-thumbnails');
add_image_size( 'slider_image','1024','720',true);


include 'bootstrap-5-wordpress-navbar-walker.php';