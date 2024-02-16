<?php

add_action('init', function(){      //init is a hook that runs after WordPress has finished loading but before any headers are sent

    if (is_admin()) return; //if we are in the admin panel, we don't want to enqueue any styles or scripts

    wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri().'/style.css');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js', ['jquery'], '', true); //true means the script will be placed at the bottom of the page
    wp_enqueue_style('fontawesome', get_template_directory_uri().'/assets/css/all.min.css');
    

});

add_action('after_setup_theme', function(){
    add_theme_support('widgets'); //this will enable the use of widgets in the theme
    add_theme_support('menus'); //this will enable the use of menus in the theme
    add_theme_support('post-thumbnails'); //this will enable the use of featured images in the theme
    add_image_size('post-thumbnail', 280, 180, true); //this will add a custom image size for the featured images
});

function currentYear(){
    return date('Y');
}
