<?php 

// Add options button to wp_side
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

// Adds menu option to appearance tab
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

// WordPress Titles
add_theme_support( 'title-tag' );

//featured thumnail 
add_theme_support( 'post-thumbnails' );

// Add scripts and stylesheets
function theme_scripts() {
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap-grid.min.css');
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style( 'browBar', get_template_directory_uri() . '/css/main-style.css',false,'v1','all');
    wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css' );
    wp_enqueue_style('hover', get_template_directory_uri() . '/css/hover.css');
    wp_enqueue_style( 'owl', get_template_directory_uri() . '/css/owl.carousel.css' );
    wp_enqueue_style('animate',get_template_directory_uri() . '/css/animate.css');

}

add_action( 'wp_enqueue_scripts', 'theme_scripts');

function special_nav_class( $classes, $item ){
	
 if( in_array('menu-item', $classes)){

 $classes[] = "hvr-underline-from-left";
 
 }

 if (in_array('current-menu-item', $classes) ){

        $classes[] = 'active ';
}

 return $classes;
}

add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
add_theme_support( 'post-thumbnails' );
// Add scripts and stylesheets
add_action( 'wp_enqueue_scripts', 'yourtheme_scripts');

function yourtheme_scripts(){
	wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.min.js', array(), '1.0.0',true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
	wp_enqueue_script('owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '1.0.0', true );
	wp_enqueue_script('wow', get_template_directory_uri() . "/js/wow.min.js", array(),'1.0.0',true);
	wp_enqueue_script('isotope', get_template_directory_uri() . "/js/isotope.pkgd.min.js", array(),'1.0.0',true);
}

//Creating Custom Post types for Portfolios
function setup_portfolios_cpt(){
    $labels = array(
        'name' => _x('Portfolio', 'post type general name'),
        'singular_name' => _x('Portfolio', 'post type singular name'),
        'add_new' => _x('Add New', 'Portfolio'),
        'add_new_item' => __('Add New Portfolio'),
        'edit_item' => __('Edit Portfolio'),
        'new_item' => __('New Portfolio'),
        'all_items' => __('All Portfolios'),
        'view_item' => __('View Portfolio'),
        'search_items' => __('Search Portfolios'),
        'not_found' => __('No Portfolios Found'),
        'not_found_in_trash' => __('No Portfolios found in the trash'),
        'parent_item_colon' => '',
        'menu_name' => 'Portfolios'
        );
    $args = array(
        'labels' => $labels,
        'description' => 'My Portfolios',
        'rewrite' => array('slug' => 'portfolio'),
        'public' => true,
        'menu_position' => 5,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'has_archive' => true,
        'taxonomies' => array(''),
        'menu_icon' => 'dashicons-admin-multisite', //Find the appropriate dashicon here: https://developer.wordpress.org/resource/dashicons/
        );
    register_post_type('portfolios', $args);
}
add_action('init', 'setup_portfolios_cpt');
 
//The following snippet is used to enable categories for the portfolios CPT. 
function portfolios_taxonomy() {  
    register_taxonomy(  
        'portfolio_categories',  //The name of the taxonomy. Name should be in slug form (no spaces and all lowercase. no caps). 
        'portfolios',        //post type name
        array(  
            'hierarchical' => true,  
            'label' => 'Portfolio Categories',  //Label Displayed in the Admin when creating a new project
            'query_var' => true,
            'rewrite' => array(
                'slug' => 'portfolios', // This controls the base slug that will display before each term
                'with_front' => false // Don't display the category base before 
            )
        )  
    );  
}  
add_action( 'init', 'portfolios_taxonomy');

//exerpt control using filter 
function custom_excerpt_length( $length ) {
  return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );



?>