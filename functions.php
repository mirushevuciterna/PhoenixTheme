<?php 
function phoenix_script_enqueue(){
   
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), true);
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri().'/css/main.css');

    wp_enqueue_script( 'jquery');
    wp_enqueue_script('boortstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/rronekko.js', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'phoenix_script_enqueue');

function phoenix_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primarymenu', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'phoenix_theme_setup' );