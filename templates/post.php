<div class="card m-4 shadow border" style="max-width: 280px; min-width: 280px; min-height: 300px; max-height: 300px;">
    <img src="<?= get_template_directory_uri() . '/assets/images/info.webp' ?>" class="card-img-top" alt="...">
    <div class="card-body d-flex flex-column">
        <h5 class="card-title"><?php the_title()?></h5>
        <p class="card-text"><?= substr(get_the_excerpt(), 0, 100)?>..</p>
        <a href="<?php the_permalink()?>" class="btn btn-primary mt-auto">Čti dál</a>
    </div>
</div>