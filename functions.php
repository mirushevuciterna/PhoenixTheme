<?php 
function phoenix_script_enqueue(){
   
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri().'/css/main.css');
    wp_enqueue_style('owlcarouselmincss', get_stylesheet_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('owlthemedefaultmincss', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('boortstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style( 'pratafont', '//fonts.googleapis.com/css2?family=Prata&display=swap' );
}

add_action('wp_enqueue_scripts', 'phoenix_script_enqueue');

function wpb_adding_scripts() {
    wp_register_script('jquery2minjs', get_template_directory_uri() . '/js/jquery.2.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery2minjs');
    wp_register_script('owlcarouselminjs', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('owlcarouselminjs');
    wp_register_script('jquerjs', get_template_directory_uri() . '/js/jquer.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquerjs');
    wp_enqueue_script('fadeInFeature', get_template_directory_uri() . '/js/fadeInFeature.js', array('jquery'), '1.1', true);
} 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts'); 


function phoenix_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primarymenu', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'phoenix_theme_setup' );