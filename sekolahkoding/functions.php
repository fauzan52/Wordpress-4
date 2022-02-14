<?php

//load script
function load_file(){
 wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'load_file');

 function get_excerpt_length() {
 	return 5;
 }


 function return_excerpt_text () {
 	return '';
 }

 add_filter('excerpt_more', 'return_excerpt_text');
 add_filter('excerpt_length', 'get_excerpt_length');

function init_setup () {
    register_nav_menus(array(
        'main_menu' => 'Menu Utama',
        'footer_menu' => 'Menu Footer'
    ));
    // Add featured image
    add_theme_support('post-thumbnails');
    add_image_size ('small_thumbnail', '150', '150', 'true');
    add_image_size ('big_thumbnail', '1500', '1500', 'true');

    // Add Post Format Wordpress
    add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
}

add_action('after_setup_theme', 'init_setup');

// Add Widget
function widget_setup (){
    register_sidebar(array (
       'name' => "Sidebar Pertama",
       'id' => "sidebar1"
    ));

    register_sidebar(array (
        'name' => "Sidebar Kedua",
        'id' => "sidebar2"
    ));
}
add_action('widgets_init', 'widget_setup');

?>