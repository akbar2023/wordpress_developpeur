<?php

get_header();

?>



<div class="col-lg-9">

    <?php
        if (have_posts()) : 
            while (have_posts()) : the_post();
    ?>
    <h2><?php the_title(); ?></h2>

    <div class="contenu">
        <?php the_content(); ?>
    </div>
    
    <div class="info">
        <span>Code postal : </span><?php the_field('code_postal'); ?>
    </div>

    <div class="info">
        <span>Ville : </span><?php the_field('ville'); ?>
    </div>

    <div class="info">
        <span>Téléphone : </span><?php the_field('telephone'); ?>
    </div>

    <?php
            endwhile;
        else : 
            echo '<p>Aucune annonce ne correspond à vos critères !</p>';
        endif;
    ?>

    <a href="<?php bloginfo('url'); echo '/professionnel'; ?>">Retour à la page des professionnels</a>
</div>

<div class="col-lg-3">

<?php
    get_sidebar('droite');  // inclusion du fichier qui s'appelle sidebar-droite.php
?>

</div>


<?php
get_footer();

?>