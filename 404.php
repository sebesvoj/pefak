<?php

get_header(); // Include the header template

get_template_part('templates/nav');

?>

<div class="d-flex justify-content-center text-center py-5" style="min-height: 70vh;">
    <div>
        <img src="<?= get_template_directory_uri() ?>/assets/images/sova.svg" height="200px" alt="404 obrázek - stránka nenalezena">
        <div class="container">
            <h1 class="pt-5">Stránka nenalezena (E404)</h1>
            <p>Stránka, kterou hledáte, nebyla nalezena. Zkus se houknout jinam.</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>