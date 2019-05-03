<?php

/**

 * @author Divi Space

 * @copyright 2017

 */

if (!defined('ABSPATH')) die();



function ds_ct_enqueue_parent() { 

  
  $cache_buster = date("YmdHi", filemtime( get_template_directory_uri() . '/style.css'));
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css', array(), $cache_buster, 'all' );


  


}

function my_scripts_and_styles(){

$cache_buster = date("YmdHi", filemtime( get_stylesheet_directory() . '/assets/css/screen.css'));
wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/assets/css/screen.css', array(), $cache_buster, 'all' );

}

add_action( 'wp_enqueue_scripts', 'my_scripts_and_styles', 10000);


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




function myprefix_redirect_attachment_page() {
  if ( is_attachment() ) {
    global $post;
    if ( $post && $post->post_parent ) {
      wp_redirect( esc_url( get_permalink( $post->post_parent ) ), 301 );
      exit;
    } else {
      wp_redirect( esc_url( home_url( '/' ) ), 301 );
      exit;
    }
  }
}
add_action( 'template_redirect', 'myprefix_redirect_attachment_page' );



function attachmentpages_noindex() {
if(is_attachment()) {

echo '<meta name="robots" content="noindex" />';

}

if( get_post_type() == 'divi_overlay' ) {
  echo '<meta name="robots" content="noindex" />';
  wp_redirect( esc_url( home_url( '/' ) ), 301 );
} else {
    //do other stuff
}

}
add_action('wp_head', 'attachmentpages_noindex');



include('login-editor.php');




?>