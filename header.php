<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description') ?>">
    <title>BuďPEFák - <?= get_the_title(get_post()); ?></title>
    <?php wp_head();?>
</head>

<body <?php body_class(); ?> style="padding-top: 4.5rem;">
    <?php wp_body_open(); ?>
    