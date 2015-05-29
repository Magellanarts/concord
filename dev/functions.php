<?php
/**
* Enqueue scripts and styles for the front end.
*
*/
function twentyfourteen_scripts() {

//load Roboto
wp_enqueue_style( 'roboto-font', 'http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,400italic' );

// Load our main stylesheet.
    wp_enqueue_style( 'concord-style', get_stylesheet_uri() );

    wp_deregister_script('jquery'); // Remove WordPress core's jQuery
    wp_register_script('jquery', get_template_directory_uri() . '/js/lib/jquery.js', false, 1, true);

    wp_enqueue_script( 'maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBuHZYnKOVFPFfwXuiPeycCKKX6R6l0rE4', array(), 1, true );
    wp_enqueue_script( 'site', get_template_directory_uri() . '/js/site.js', array( 'jquery' ), 1, true );
}
add_action( 'wp_enqueue_scripts', 'twentyfourteen_scripts' );


//Create Custom Post Types

//add_action( 'init', 'create_post_type' );
function create_post_type() {


register_post_type( 'investment',
array(
'labels' => array(
'name'               => __( 'Investments' ),
'singular_name'      => __( 'Investment' ),
'add_new'            => __( 'Add New' ),
'all_items'          => __( 'View All' ),
'add_new_item'       => __( 'Add Investment' ),
'edit_item'          => __( 'Edit Investment' ),
'new_item'           => __( 'New Investment' ),
'view_item'          => __( 'View Investment' ),
'search_items'       => __( 'Search Investments' ),
'not found'          => __( 'No Investments found' ),
'not found_in_trash' => __( 'No Investments found in Trash' )
),
'public'      => true,
'has_archive' => true,
'hierarchical' => true,
'show_ui' => true,
'show_in_menu' => true,
'show_in_nav_menus' => true,
'rewrite'     => array('slug' => 'investment'),
'supports'    => array('title', 'page-attributes', 'post-formats'),
'capability_type' => 'page'
)
);

}


// Set up our menus
register_nav_menus( array(
'primary' => 'Primary Navigation',
) );

?>