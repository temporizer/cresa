<?php
/**
 * @package WordPress
 * @subpackage Cresa
 */

// Register Three Menus: Main Menu, Sub Menu, Footer Menu
function register_my_menus() {
	register_nav_menus(
		array('footer-left-menu' => __( 'Footer Left Menu'), 'footer-right-menu' => __( 'Footer Right Menu') 
		)
  	);
}

add_action( 'init', 'register_my_menus' );

// register sidebars
function my_register_sidebars() {
  /* Register the Home sidebar */
  register_sidebar(
    array(
      'id' => 'left_home',
      'name' => __( 'Left Home' ),
      'description' => __( 'Sidebar unique to the home page' ),
      'before_widget' => '<ul class="widget_content">',
      'after_widget' => '</ul>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );

  /* Register the Site sidebar */
  register_sidebar(
    array(
      'id' => 'center_home',
      'name' => __( 'Center Home' ),
      'description' => __( 'Sidebar for the entire site minus home' ),
      'before_widget' => '<ul class="widget_content">',
      'after_widget' => '</ul>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );
    register_sidebar(
    array(
      'id' => 'right_home',
      'name' => __( 'Right Home' ),
      'description' => __( 'Sidebar for the entire site minus home' ),
      'before_widget' => '<ul class="widget_content">',
      'after_widget' => '</ul>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );
      register_sidebar(
    array(
      'id' => 'cta_home',
      'name' => __( 'Call to Action Home' ),
      'description' => __( 'Sidebar for the entire site minus home' ),
      'before_widget' => '<ul class="widget_content">',
      'after_widget' => '</ul>',
      'before_title' => '<h2>',
      'after_title' => '</h2>'
    )
  );
}

add_action( 'widgets_init', 'my_register_sidebars' );



// Add Featured Image Support to Posts and Pages
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
add_theme_support( 'html5', array( 'search-form' ) );
// SHORT CODE: LINE
// Using [line] in a post/page will return <div class="line"></div>

function shortcode_line() {
  return '<div class="line"></div>';
}
add_shortcode('line', 'shortcode_line');

/*
#################################################
CUSTOM POST TYPES: Radio Show
#################################################
*/

function my_custom_post_radio() {
  $labels = array(
    'name'                => _x( 'Radio Shows', 'post type general name' ),
    'singular_name'       => _x( 'Radio Show', 'post type singular name' ),
    'add_new'             => _x( 'Add New', 'book' ),
    'add_new_item'        => __( 'Add New Radio Show' ),
    'edit_item'           => __( 'Edit Radio Show' ),
    'new_item'            => __( 'New Radio Show' ),
    'all_items'           => __( 'All Radio Shows' ),
    'view_item'           => __( 'View Radio Show' ),
    'search_items'        => __( 'Search Radio Shows' ),
    'not_found'           => __( 'No radio shows found' ),
    'not_found_in_trash'  => __( 'No radio shows found in the Trash' ),
    'parent_item_colon'   => '',
    'menu_name'           => 'Radio Shows'
  );
  $args = array(
    'labels'        => $labels,
    'description'   => 'Holds radio shows and radio show specific data',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'custom-fields'),
    'has_archive'   => true
  );
  register_post_type( 'radio-show', $args );
}

add_action( 'init', 'my_custom_post_radio' );

?>