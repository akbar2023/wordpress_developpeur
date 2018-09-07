

<div id="region-droite">
    <?php 
        dynamic_sidebar('colonne-droite'); // on appelle la zone de widget crée dans functions.php dont l'id est "colonne-droite"
    ?>
</div>

<hr>

<?php
// Affichage de la dernière annonce parue :

// On fait notre propre requête en BDD pour sélectionner le premièr post de type "annonce" :

$arg = array(
    'post_type' => 'annonce', // slug du CPT "annonce"
    'posts_per_page' => 1 // correspond à LIMIT 1 dans SQL pour sélectionner le premier élément
);

$query = query_posts($arg); // SELECT * FROM post WHERE post_type = 'annonce' ORDER BY date DESC LIMIT 1


?>

<div>
    <h2>Dernière annonce</h2>

    <?php
        if (have_posts()) : 
            while (have_posts()) : the_post(); 
    ?>

    <div>
        <a href="<?php the_permalink(); ?>"><img class="img-fluid" src="<?php the_field('photo'); ?>"></a>

        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

        <div>Au prix de <?php the_field('prix'); ?> €</div>
                
    </div>

    <?php
        endwhile;
    else : 
        echo 'Pas encore d\'annonce...';
    endif;
    ?>

</div>

<?php
wp_reset_query(); // on n'oublie pas de reestaurer la requête principale après un query_posts()
