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
    <?php
    wp_body_open();
    get_template_part('templates/nav');
    get_template_part('templates/slider');
    ?>

    <div class="p-4 card-group justify-content-center"> <!-- p-4 and card-group are Bootstrap classes for padding and grouping cards.-->
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('templates/post');
        
            }
        }
        ?>
    </div>

    <?php wp_footer(); ?>
</body>

</html>