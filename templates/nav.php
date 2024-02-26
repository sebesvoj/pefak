<nav class="navbar fixed-top navbar-expand-sm" style="background-color: #C80C0F;">
    <div class="container-sm">
        <?php
        if (has_custom_logo()) {
            the_custom_logo();
        } else { ?>
            <a class="navbar-brand site-title" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a> <!--home_url() is a WordPress function that returns the URL of the home page.-->
        <?php }
        ?>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'header-menu',
                    'container' => '',
                    'menu_class' => 'navbar-nav ms-auto mb-3 mb-lg-0',
                    'walker' => new header_menu_walker(),
                )
            );
            ?>
        </div>
    </div>
</nav>