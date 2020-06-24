<?php 

function phoenix_script_enqueue(){
   
    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' );
    wp_enqueue_style('customstyle', get_stylesheet_directory_uri().'/css/main.css');
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/css/portfolio.css');
    wp_enqueue_style('owlcarouselmincss', get_stylesheet_directory_uri().'/css/owl.carousel.min.css');
    wp_enqueue_style('owlthemedefaultmincss', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css');
    wp_enqueue_script( 'jquery');
    wp_enqueue_script('boortstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_style( 'pratafont', '//fonts.googleapis.com/css2?family=Prata&display=swap' );
    wp_enqueue_style( 'Montserrat', '//fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap' );
    wp_enqueue_style( 'w3animright', '//www.w3schools.com/w3css/4/w3.css');
    wp_enqueue_style('causescomponentstyle', get_stylesheet_directory_uri().'/modules/assets/css/causescomponent.css');
    wp_enqueue_style('questioncomponentstyle', get_stylesheet_directory_uri().'/modules/assets/css/questioncomponent.css');
    wp_enqueue_style('volunteerscomponentstyle', get_stylesheet_directory_uri().'/modules/assets/css/volunteerscomponent.css');


}

add_action('wp_enqueue_scripts', 'phoenix_script_enqueue');

function wpb_adding_scripts() {
    wp_register_script('jquery2minjs', get_template_directory_uri() . '/js/jquery.2.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquery2minjs');
    wp_register_script('owlcarouselminjs', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'),'1.1', true);
    wp_enqueue_script('owlcarouselminjs');
    wp_register_script('jquerjs', get_template_directory_uri() . '/js/jquer.js', array('jquery'),'1.1', true);
    wp_enqueue_script('jquerjs');
    wp_register_script('fadeInFeature', get_template_directory_uri() . '/js/fadeInFeature.js', array('jquery'), '1.1', true);
    wp_enqueue_script('fadeInFeature');
    wp_enqueue_script('fadeInFeature', get_template_directory_uri() . '/js/fadeInFeature.js', array('jquery'), '1.1', true);
    wp_register_script('causescomponentjs', get_template_directory_uri() . '/modules/assets/js/causescomponent.js', array('jquery'),'1.1', true);
    wp_enqueue_script('causescomponentjs');
    wp_register_script('questioncomponentjs', get_template_directory_uri() . '/modules/assets/js/questioncomponent.js', array('jquery'),'1.1', true);
    wp_enqueue_script('questioncomponentjs');
    wp_register_script('volunteerscomponentjs', get_template_directory_uri() . '/modules/assets/js/volunteerscomponent.js', array('jquery'),'1.1', true);
    wp_enqueue_script('volunteerscomponentjs');


} 

add_action( 'wp_enqueue_scripts', 'wpb_adding_scripts'); 


function phoenix_theme_setup() {
    add_theme_support( 'menus' );
    register_nav_menu( 'primarymenu', 'Primary Header Navigation' );
    register_nav_menu( 'secondary', 'Footer Navigation' );
}
add_action( 'init', 'phoenix_theme_setup' );

/* 
    ====================================
        Custom Post Type
    ====================================
*/

function phoenix_custom_post_type() {
    $labels = array(
        'name' => 'Portfolio',
        'singullar_name' => 'Portfolio',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Portfolio',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item' 
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array(
            'category',
            'post_tag'
        ),
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('portfolio', $args);
}
add_action('init', 'phoenix_custom_post_type');

function phoenix_custom_post_tools_used() {
    $labels = array(
        'name' => 'Tools Used',
        'singular_name' => 'Tools Used',
        'add_new' => 'Add Item',
        'all_items' => 'All Items',
        'add_new_item' => 'Add Item',
        'edit_item' => 'Edit Item',
        'new_item' => 'New Item',
        'view_item' => 'View Item',
        'search_item' => 'Search Tool',
        'not_found' => 'No items found',
        'not_found_in_trash' => 'No items found in trash',
        'parent_item_colon' => 'Parent Item' 
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => false,
        'publicly_queryable' => false,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array('title'),
        'menu_position' => 5,
        'exclude_from_search' => true
    );
    register_post_type('tools_used', $args);
}
add_action('init', 'phoenix_custom_post_tools_used');

/* 
    ====================================
        Theme support
    ====================================
*/
add_theme_support('post-thumbnails');


/* 
    ====================================
        Breadcrumb
    ====================================
*/
function get_breadcrumb() {
    // Settings
    $separator          = '<i class="fa fa-angle-right"></i>';
    $breadcrums_id      = 'breadcrumbs';
    $breadcrums_class   = 'breadcrumbs';
    $home_title         = 'Home';
      
    // If you have any custom post types with custom taxonomies, put the taxonomy name below (e.g. product_cat)
    $custom_taxonomy    = 'product_cat';
       
    // Get the query & post information
    global $post,$wp_query;
       
    // Do not display on the homepage
    if ( !is_front_page() ) {
       
        // Build the breadcrums
        echo '<ul id="' . $breadcrums_id . '" class="' . $breadcrums_class . '">';
           
        // Home page
        echo '<li class="item-home"><a class="bread-link bread-home" href="' . get_home_url() . '" title="' . $home_title . '">' . $home_title . '</a></li>';
        echo '<li class="separator separator-home"> ' . $separator . ' </li>';
           
        if ( is_archive() && !is_tax() && !is_category() && !is_tag() ) {
              
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . post_type_archive_title($prefix, false) . '</strong></li>';
              
        } else if ( is_archive() && is_tax() && !is_category() && !is_tag() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            $custom_tax_name = get_queried_object()->name;
            echo '<li class="item-current item-archive"><strong class="bread-current bread-archive">' . $custom_tax_name . '</strong></li>';
              
        } else if ( is_single() ) {
              
            // If post is a custom post type
            $post_type = get_post_type();
              
            // If it is a custom post type display name and link
            if($post_type != 'post') {
                  
                $post_type_object = get_post_type_object($post_type);
                $post_type_archive = get_post_type_archive_link($post_type);
              
                echo '<li class="item-cat item-custom-post-type-' . $post_type . '"><a class="bread-cat bread-custom-post-type-' . $post_type . '" href="' . $post_type_archive . '" title="' . $post_type_object->labels->name . '">' . $post_type_object->labels->name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
              
            }
              
            // Get post category info
            // $category = get_the_category();
             
            // if(!empty($category)) {
              
            //     // Get last category post is in
            //     $last_category = end(array_values($category));
                  
            //     // Get parent any categories and create array
            //     $get_cat_parents = rtrim(get_category_parents($last_category->term_id, true, ','),',');
            //     $cat_parents = explode(',',$get_cat_parents);
                  
            //     // Loop through parent categories and store in variable $cat_display
            //     $cat_display = '';
            //     foreach($cat_parents as $parents) {
            //         $cat_display .= '<li class="item-cat">'.$parents.'</li>';
            //         $cat_display .= '<li class="separator"> ' . $separator . ' </li>';
            //     }
             
            // }
              
            // If it's a custom post type within a custom taxonomy
            $taxonomy_exists = taxonomy_exists($custom_taxonomy);
            if(empty($last_category) && !empty($custom_taxonomy) && $taxonomy_exists) {
                   
                $taxonomy_terms = get_the_terms( $post->ID, $custom_taxonomy );
                $cat_id         = $taxonomy_terms[0]->term_id;
                $cat_nicename   = $taxonomy_terms[0]->slug;
                $cat_link       = get_term_link($taxonomy_terms[0]->term_id, $custom_taxonomy);
                $cat_name       = $taxonomy_terms[0]->name;
               
            }
              
            // Check if the post is in a category
            if(!empty($last_category)) {
                echo $cat_display;
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            // Else if post is in a custom taxonomy
            } else if(!empty($cat_id)) {
                  
                echo '<li class="item-cat item-cat-' . $cat_id . ' item-cat-' . $cat_nicename . '"><a class="bread-cat bread-cat-' . $cat_id . ' bread-cat-' . $cat_nicename . '" href="' . $cat_link . '" title="' . $cat_name . '">' . $cat_name . '</a></li>';
                echo '<li class="separator"> ' . $separator . ' </li>';
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
              
            } else {
                  
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '" title="' . get_the_title() . '">' . get_the_title() . '</strong></li>';
                  
            }
              
        } else if ( is_category() ) {
               
            // Category page
            echo '<li class="item-current item-cat"><strong class="bread-current bread-cat">' . single_cat_title('', false) . '</strong></li>';
               
        } else if ( is_page() ) {
               
            // Standard page
            if( $post->post_parent ){
                   
                // If child page, get parents 
                $anc = get_post_ancestors( $post->ID );
                   
                // Get parents in the right order
                $anc = array_reverse($anc);
                   
                // Parent page loop
                if ( !isset( $parents ) ) $parents = null;
                foreach ( $anc as $ancestor ) {
                    $parents .= '<li class="item-parent item-parent-' . $ancestor . '"><a class="bread-parent bread-parent-' . $ancestor . '" href="' . get_permalink($ancestor) . '" title="' . get_the_title($ancestor) . '">' . get_the_title($ancestor) . '</a></li>';
                    $parents .= '<li class="separator separator-' . $ancestor . '"> ' . $separator . ' </li>';
                }
                   
                // Display parent pages
                echo $parents;
                   
                // Current page
                echo '<li class="item-current item-' . $post->ID . '"><strong title="' . get_the_title() . '"> ' . get_the_title() . '</strong></li>';
                   
            } else {
                   
                // Just display current page if not parents
                echo '<li class="item-current item-' . $post->ID . '"><strong class="bread-current bread-' . $post->ID . '"> ' . get_the_title() . '</strong></li>';
                   
            }
               
        } else if ( is_tag() ) {
               
            // Tag page
               
            // Get tag information
            $term_id        = get_query_var('tag_id');
            $taxonomy       = 'post_tag';
            $args           = 'include=' . $term_id;
            $terms          = get_terms( $taxonomy, $args );
            $get_term_id    = $terms[0]->term_id;
            $get_term_slug  = $terms[0]->slug;
            $get_term_name  = $terms[0]->name;
               
            // Display the tag name
            echo '<li class="item-current item-tag-' . $get_term_id . ' item-tag-' . $get_term_slug . '"><strong class="bread-current bread-tag-' . $get_term_id . ' bread-tag-' . $get_term_slug . '">' . $get_term_name . '</strong></li>';
           
        } elseif ( is_day() ) {
               
            // Day archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month link
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><a class="bread-month bread-month-' . get_the_time('m') . '" href="' . get_month_link( get_the_time('Y'), get_the_time('m') ) . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('m') . '"> ' . $separator . ' </li>';
               
            // Day display
            echo '<li class="item-current item-' . get_the_time('j') . '"><strong class="bread-current bread-' . get_the_time('j') . '"> ' . get_the_time('jS') . ' ' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_month() ) {
               
            // Month Archive
               
            // Year link
            echo '<li class="item-year item-year-' . get_the_time('Y') . '"><a class="bread-year bread-year-' . get_the_time('Y') . '" href="' . get_year_link( get_the_time('Y') ) . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</a></li>';
            echo '<li class="separator separator-' . get_the_time('Y') . '"> ' . $separator . ' </li>';
               
            // Month display
            echo '<li class="item-month item-month-' . get_the_time('m') . '"><strong class="bread-month bread-month-' . get_the_time('m') . '" title="' . get_the_time('M') . '">' . get_the_time('M') . ' Archives</strong></li>';
               
        } else if ( is_year() ) {
               
            // Display year archive
            echo '<li class="item-current item-current-' . get_the_time('Y') . '"><strong class="bread-current bread-current-' . get_the_time('Y') . '" title="' . get_the_time('Y') . '">' . get_the_time('Y') . ' Archives</strong></li>';
               
        } else if ( is_author() ) {
               
            // Auhor archive
               
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );
               
            // Display author name
            echo '<li class="item-current item-current-' . $userdata->user_nicename . '"><strong class="bread-current bread-current-' . $userdata->user_nicename . '" title="' . $userdata->display_name . '">' . 'Author: ' . $userdata->display_name . '</strong></li>';
           
        } else if ( get_query_var('paged') ) {
               
            // Paginated archives
            echo '<li class="item-current item-current-' . get_query_var('paged') . '"><strong class="bread-current bread-current-' . get_query_var('paged') . '" title="Page ' . get_query_var('paged') . '">'.__('Page') . ' ' . get_query_var('paged') . '</strong></li>';
               
        } else if ( is_search() ) {
           
            // Search results page
            echo '<li class="item-current item-current-' . get_search_query() . '"><strong class="bread-current bread-current-' . get_search_query() . '" title="Search results for: ' . get_search_query() . '">Search results for: ' . get_search_query() . '</strong></li>';
           
        } elseif ( is_404() ) {
               
            // 404 page
            echo '<li>' . 'Error 404' . '</li>';
        }
       
        echo '</ul>';
           
    }
       
}

function dd($obj){
    echo '<pre>';
    print_r($obj);
    echo '</pre>';
    die();
}

function meks_time_ago() {
	return human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ).' '.__( 'ago' );
}
