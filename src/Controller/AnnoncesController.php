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

function  getUneannonces(){
    // appel du modele
    include __DIR__.'/../Entity/Annonce.php';

    // recupere l'identifiant via l'url ?id=3 => $id=3
    $id=$_GET['id'];
    // on l'envoie en parametre 3
    $tab=liste_une_annonce($id);
    var_dump($tab);
    include __DIR__.'/../../templates/uneannonce.php';

}

function delAnnonces(){

     // appel du modele
     include __DIR__.'/../Entity/Annonce.php';

     // recupere l'identifiant via l'url ?id=3 => $id=3
     $id=$_GET['id'];
     // on l'envoie en parametre 3
     supprimer_annonce($id);
     header('Location: index.php/liste_annonces');
}

function ajouter_annonce() {

    include __DIR__.'/../../templates/ajouter_annonce.php';

}

function traiter_ajouter_annonce(){
        
    $titre=$_POST['titre'];
    $description=$_POST['description'];
    // appel du modele
    include __DIR__.'/../Entity/Annonce.php';
    ajouter_annonce_bd($titre, $description);


    header('Location: index.php/liste_annonces');


}