<?php
    get_header();  // inclusion de header.php
?>



    <?php
        if(have_posts()) :
            while (have_posts()) : the_post();
    ?>

            <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2> 
            <div class="col-lg-12 info">
                <span>Code postal : </span><?php the_field('code_postal'); ?>
            </div>    
                  
            <div class="col-lg-12 info">
                <span>Ville : </span><?php the_field('ville'); ?>
                <hr>
            </div>

    <?php
            endwhile;

        else :
            echo '<p>Aucun contenu ne correspond à votre demande...</p>';
        endif;
    ?>


<?php
get_footer(); // inclusion de footer.php
?>