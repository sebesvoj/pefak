<?php
get_header();
get_template_part('templates/nav');
if (is_front_page()) get_template_part('templates/slider');
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
<br>
<div class="d-flex mx-auto justify-content-center"><?php the_posts_pagination();?></div> <!-- viz video 10, kde vysvětluje, jak se to dělá -->
<br>



<?php get_footer(); ?>