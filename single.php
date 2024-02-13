<?php
get_header();
get_template_part('templates/nav');
?>

<div class="p-4 card-group justify-content-center"> <!-- p-4 and card-group are Bootstrap classes for padding and grouping cards.-->
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('templates/single-post');
        }
    }
    ?>
</div>

<?php get_footer(); ?>