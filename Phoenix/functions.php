<?php 
function phoenix_script_enqueue(){
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri().'/css/main.css');
}

add_action('wp_enqueue_scripts', 'phoenix_script_enqueue');