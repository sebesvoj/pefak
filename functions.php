<?php

add_action('init', function(){      //init is a hook that runs after WordPress has finished loading but before any headers are sent

    wp_enqueue_style('bootstrapcss', get_template_directory_uri().'/assets/css/bootstrap.min.css');
    wp_enqueue_script('bootstrapjs', get_template_directory_uri().'/assets/js/bootstrap.min.js', ['jquery'], '', true); //true means the script will be placed at the bottom of the page

});

