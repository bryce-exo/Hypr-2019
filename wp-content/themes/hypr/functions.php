<?php

/**

 * @author Divi Space

 * @copyright 2017

 */

if (!defined('ABSPATH')) die();



function ds_ct_enqueue_parent() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); }



function ds_ct_loadjs() {

	wp_enqueue_script( 'ds-theme-script', get_stylesheet_directory_uri() . '/ds-script.js',

        array( 'jquery' )

    );

}

function wpse_enqueue_page_template_styles() {
   
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles');

function mycustomscript_enqueue() {
    wp_enqueue_script( 'custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array ( 'jquery') );
}
add_action( 'wp_enqueue_scripts', 'mycustomscript_enqueue' );

function plugins_enqueue() {
    wp_enqueue_script( 'plugin-scripts', get_stylesheet_directory_uri() . '/assets/js/plugins.js', array ( 'jquery') );
}
add_action( 'wp_enqueue_scripts', 'plugins_enqueue' );



add_action( 'wp_enqueue_scripts', 'ds_ct_enqueue_parent' );

add_action( 'wp_enqueue_scripts', 'ds_ct_loadjs' );

add_action('init', function() {

  

  register_post_type( 'resource', array(
    'labels'  => array(
      'name' => "Resources",
      'singular_name'=> "Resource"
    ),
    'public' => true,
    'has_archive' => true,
    'menu_icon'   => 'dashicons-book',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields')
  ));


  register_taxonomy(
    'uc_type',
    array('resource'),
    array(
      'label' => __( 'Type' ),
      'rewrite' => array( 'slug' => 'uc-type' ),
      'hierarchical' => true,
    )
  );  

  register_taxonomy(
    'uc_category',
    array('resource'),
    array(
      'label' => __( 'Category' ),
      'show_admin_column' => true,
      'rewrite' => array( 'slug' => 'uc-category' ),
      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'uc_tag',
    array('resource'),
    array(
      'label' => __( 'Tag' ),
      'show_admin_column' => true,
      'rewrite' => array( 'slug' => 'uc-tag' ),
      'hierarchical' => false,
    )
  );
});




include('login-editor.php');




?>