<?php

// Création des zones de widgets :
function eprojet_init_sidebar() { //Notre fonction qui contient la déclaration des zone de widgets

    register_sidebar(array(
        'name' => 'région entête', // nom qui apparaît dans le BO 
        'id'   => 'region-entete',  // identifiant unique de la zone pour pouvoir l'appeler dans un template
        'description' => 'Cette zone de widget est en entête de la page d\'accueil'  // description qui apparaît dans le BO
    ));

    register_sidebar(array(
        'name' => 'colonne de droite', 
        'id'   => 'colonne-droite', 
        'description' => 'Cette zone de widget est dans la barre latérale de droite'
    ));

    register_sidebar(array(
        'name' => 'footer de gauche', 
        'id'   => 'footer-gauche', 
        'description' => 'Cette zone de widget est dans le footer gauche'
    ));

}

add_action('widgets_init', 'eprojet_init_sidebar'); // j'exécute ma fonction nommée "eprojet_init_sidebar()" lors de l'initialisation des widgets effectué par WP : notre fonction est accrochée à celle du coeur de WP (hook)



// ----------------------
// Création des zones de menu :

function eprojet_init_menu() {
    register_nav_menu('primary', 'menu principal'); // on déclare une zone de menu d'id "primary" et de nom "menu principal" dans le back-office

    register_nav_menu('secondary', 'menu secondaire');
}

add_action('init', 'eprojet_init_menu'); // WP exécute notre fonction eprojet_init_menu() lors de son initialisation

