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



include('login-editor.php');

?>