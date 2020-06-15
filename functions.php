<?php 
function phoenix_script_enqueue(){
   
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri().'/css/main.css');

    wp_enqueue_script( 'jquery');
    wp_enqueue_script('boortstrapjs', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('customjs', get_template_directory_uri() . '/assets/js/rronekko.js', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'phoenix_script_enqueue');