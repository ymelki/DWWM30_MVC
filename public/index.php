<?php
//var_dump($_SERVER);
// routeur
  // la page des annonces liste_annonces
if ($_SERVER['PATH_INFO']=="/liste_annonces"){
    // appeller un controlleur
    echo 'vous etes sur la page des annonces ! ';

    include __DIR__.'/../src/Controller/AnnoncesController.php';

    getAnnonces();
}

elseif ($_SERVER['PATH_INFO']=="/supprimer"){

    echo 'vous etes sur la page supprimer une annonce ! ';
    include __DIR__.'/../src/Controller/AnnoncesController.php';

    delAnnonces();


}
elseif( $_SERVER['PATH_INFO']=="/uneannonce") {
    echo "page une annonce !";
    include __DIR__.'/../src/Controller/AnnoncesController.php';
    getUneannonces();

}
elseif( $_SERVER['PATH_INFO']=="/ajouter_annonce") {
    include __DIR__.'/../src/Controller/AnnoncesController.php';
    ajouter_annonce();


}
elseif( $_SERVER['PATH_INFO']=="/enregistrer_annonce") {
    include __DIR__.'/../src/Controller/AnnoncesController.php';
    traiter_ajouter_annonce();


}
