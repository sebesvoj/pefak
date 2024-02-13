<div class="text-center justify-content-center">
    <div style="text-align: center;">
        <?php if (has_post_thumbnail()) the_post_thumbnail('post-preview', ['class' => '', 'alt' => 'Logo oboru', 'style' => 'width: 50%; height: 100%; display: inline-block;']);
        else echo '<img src="' . get_template_directory_uri() . '/assets/images/placeholder.png" class="card-img-top rounded-top-3" alt="Placeholder image">';
        ?>
    </div>
    <h5 class="card-title"><?= the_title() ?></h5>
    <div class="card-body">
        <p class="card-text"><?= substr(get_the_excerpt(), 0, 280) ?></p>
        <a href="<?php the_permalink() ?>" class="btn btn-primary">Čti dál</a>
    </div>
</div>