<?php
    get_header();  // inclusion de header.php
?>



    <?php
        if(have_posts()) :
            while (have_posts()) : the_post();
    ?>

            <h2 class="col-lg-12"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="col-lg-12"><?php the_content(); ?></div>


    <?php
            endwhile;

        else :
            echo '<p>Aucun contenu ne correspond à votre demande...</p>';
        endif;
    ?>


<!-- ************* Div gauche ************* -->
<div class="row">
    <div class="col-lg-6">
        <?php
            $arg = array(
                'post_type' => 'annonce',
                'posts_per_page' => 1
            );
            $query = query_posts($arg);
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
        wp_reset_query();
        ?>
    </div> <!-- fin gauche -->




    <!-- ************  Div droite  ************ -->
    <div class="col-lg-6">
        <?php
            $arg = array(
                'post_type' => 'professionnel',
                'posts_per_page' => 3
            );
            $query = query_posts($arg);
        ?>
        <div>
            <h2>Les 3 derniers Profesionnels inscrits</h2>
            <?php
                if (have_posts()) : 
                    while (have_posts()) : the_post(); 
            ?>
            <div>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div><?php the_content(); ?></div>
                <div><?php the_field('code_postal'); ?></div>
                <div><?php the_field('ville'); ?></div>     
            </div>
            <?php
                    endwhile;
                else : 
                    echo 'Pas encore d\'annonce...';
                endif;
            ?>
        </div>
        <?php
            wp_reset_query();
        ?>
    </div> <!-- fin droite -->
</div>



<?php
    get_footer(); // inclusion de footer.php
?>