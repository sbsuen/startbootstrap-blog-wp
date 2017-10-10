<?php

add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function get_stylesheets(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '4.0.0');
    wp_enqueue_style('blog', get_template_directory_uri() . '/css/blog-home.css');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js');
    wp_enqueue_script('popper', get_template_directory_uri() . '/vendor/popper/popper.min.js');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.js', array('jquery'), '4.0.0');   
}
add_action( 'wp_enqueue_scripts', 'get_stylesheets' );

//Custom function used to dynamically populate the navbar
function get_navbar(){
    $pages = wp_list_pluck(get_pages(), 'post_title');
    
    foreach ($pages as $page){
        echo '<li class="nav-item">';
        echo '<a class="nav-link" href="';
        echo get_bloginfo('wpurl');
        echo "/",$page,'">',$page;
        echo '</a></li>';
    }
}
