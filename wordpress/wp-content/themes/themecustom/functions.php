<?php
function custom_theme_assets() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

function my_scripts() {
    wp_enqueue_style('bootstrap-3', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css');
    wp_enqueue_script( 'jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', array( 'jquery' ),'',true );
    wp_enqueue_script( 'boostrap-js','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js', array( 'jquery' ),'',true );
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );       
