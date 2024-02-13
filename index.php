<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>  

    <?php
    get_template_part('templates/nav');

    if (have_posts()) {
        while (have_posts()) {
            the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_excerpt(); ?></p>
            <hr>
    <?php
        }
    }
    ?>

    <?php wp_footer(); ?>
</body>

</html>