<div class="card m-4 shadow border rounded-3 text-center" style="max-width: 280px; min-width: 280px;">
    <?php if (has_post_thumbnail()) the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top rounded-top-3', 'alt' => 'Logo oboru'], ['style' => 'object-fit: cover;']); 
        else echo '<img src="'.get_template_directory_uri().'/assets/images/placeholder.png" class="card-img-top rounded-top-3" alt="Placeholder image">';
    ?>

    <div class="card-body d-flex flex-column">
        <p class="card-text"><?= substr(get_the_excerpt(), 0, 280) ?></p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary mt-auto">Čti dál</a>
    </div>
</div>