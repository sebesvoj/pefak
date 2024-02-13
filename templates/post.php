<div class="card m-4 shadow border rounded-3" style="max-width: 280px; min-width: 280px; height: 450px;">

    <img src="<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
                if ($image == true) echo $image[0];
                else echo get_template_directory_uri() . '/assets/images/placeholder.png'; ?>" class="card-img-top rounded-top-3" alt="Logo oboru">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title"><?php the_title() ?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(), 0, 100) ?>..</p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary mt-auto">Čti dál</a>
    </div>
</div>