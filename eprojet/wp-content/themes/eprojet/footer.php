    
        </div> <!-- cette balise ferme un div ouvert dans header.php -->
    </section> <!-- cette balise ferme un div ouvert dans header.php -->

    <footer class="container-fluid align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <?php
                        dynamic_sidebar('footer-gauche'); // appelle la zone de widget d'id "footer-gauche" déclaré dans functions.php 
                    ?>
                </div>

                <div class="col-lg-4">
                    <p>&copy; Mes petites annonces - 2018</p>
                </div>

                <div class="col-lg-4">
                    <?php 
                        wp_nav_menu('secondary'); // on appelle la zone de menu d'id "secondary" directement dans un string (sans array()) quand il n'y a que l'id en argument
                    ?>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </footer>

    <?php 
    wp_footer();  // permet d'inclure les éventuelles script avant la fermeture du body s'ils sont déclarés dans le fichier functions. Cette inclusion est obligatoire.
    ?>
</body>
</html>



