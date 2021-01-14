<?php 

function mytheme_theme_support(){
    //Adds dynamic title tag support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mytheme_theme_support');


function mytheme_menus(){

    $locations = array(
        'primary' => "Header menu items",
        'footer' => "Footer menu items"
    );
    
    register_nav_menus($locations);

}

add_action('init', 'mytheme_menus');

function mytheme_register_styles() {
    $version = wp_get_theme() -> get('Version'); 
    wp_enqueue_style('mytheme-style', get_template_directory_uri() . "/style.css", array('mytheme-bootstrap'), $version, 'all');
    wp_enqueue_style('mytheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css", array(), '4.5.3', 'all');
    wp_enqueue_style('mytheme-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    wp_enqueue_style('mytheme-googlefonts', "https://fonts.googleapis.com/css2?family=Roboto&display=swap", array(), '', 'all');
}

add_action('wp_enqueue_scripts', 'mytheme_register_styles');

function mytheme_register_scripts(){
    wp_enqueue_script('mytheme-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('mytheme-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('mytheme-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('mytheme-main', get_template_directory_uri()."/main.js", array(), '1.0', true);

}
add_action('wp_enqueue_scripts', 'mytheme_register_scripts');

function mytheme_widget_areas(){
    register_sidebar( array(
        'name'          => 'Footer area one',
        'id'            => 'footer_area_one',
        'description'   => 'This widget area discription',
        'before_widget' => '<ul class="social-list list-inline col-sm-3">',
        'after_widget'  => '</ul>',
        'before_title'  => '',
        'after_title'   => '',
    ));

    register_sidebar( array(
        'name'          => 'Footer area two',
        'id'            => 'footer_area_two',
        'description'   => 'Copyright description',
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ));
}

add_action('widgets_init', 'mytheme_widget_areas');

?> 