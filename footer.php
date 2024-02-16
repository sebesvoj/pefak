<?php wp_footer(); ?>

<footer style="background-color: #C80C0F; color: white;">
    <div class="container-lg">
        <div class="row mx-4">
            <div class="col-md-4 mb-3 mt-3 text-md-start text-center">
                <h5 class="text-uppercase font-weight-bold">
                    Buď PEFák
                </h5>
                <p>Provozně ekonomická fakulta
                    <br>
                    Česká zemědělská univerzita v Praze
                    <br>
                    Kamýcká 129
                    <br>
                    165 00 Praha - Suchdol
                    <br>
                    <small>
                        <small>&copy; <?= currentYear();?> PEF, Česká zemědělská univerzita v Praze
                            <br>
                            Všechna práva vyhrazena
                        </small>
                    </small>
                </p>
            </div>

            <div class="col-md-4 mb-3 d-flex justify-content-center align-items-center">
                <a href="https://www.pef.czu.cz/cs/" target="_blank" title="Oficiální stránka Provozně ekonomické fakulty">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_white.svg" alt="Logo PEF" style="width: 200px; height: 100px;">
                </a>
            </div>

            <div class="col-md-4 mb-3 d-flex justify-content-md-end justify-content-center align-items-center flex-column align-self-center">
                <strong style="text-align: center;">Sleduj nás na sociálních sítích</strong>
                <div class="row">
                    <!-- Web -->
                    <a class="btn btn-social btn-circle btn-circle-sm" href="#!" role="button"><i class="fa-solid fa-house"></i></a>

                    <!-- Facebook -->
                    <a class="btn btn-social btn-circle btn-circle-sm" href="#!" role="button"><i class="fa-brands fa-facebook-f"></i></a>

                    <!-- X -->
                    <a class="btn btn-social btn-circle btn-circle-sm" href="#!" role="button"><i class="fa-brands fa-x-twitter"></i></a>

                    <!-- Instagram -->
                    <a class="btn btn-social btn-circle btn-circle-sm" href="#!" role="button"><i class="fa-brands fa-instagram"></i></a>

                    <!-- Linkedin -->
                    <a class="btn btn-social btn-circle btn-circle-sm" href="#!" role="button"><i class="fa-brands fa-linkedin-in"></i></a>

                    <!-- Youtube -->
                    <a class="btn btn-social btn-circle btn-circle-sm" href="#!" role="button"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>

</html>