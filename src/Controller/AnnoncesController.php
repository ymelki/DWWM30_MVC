<?php
// controller
function getAnnonces(){
    echo "je suis dans le controlleur !";

    // appel du modele
    include __DIR__.'/../Entity/Annonce.php';
    $tab=liste_annonces();

    var_dump($tab);
    // appel de la vue
    include __DIR__.'/../../templates/liste_annonce.php';

}