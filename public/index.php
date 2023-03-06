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

if ($_SERVER['PATH_INFO']=="/supprimer_annonces"){

    echo 'vous etes sur la page supprimer une annonce ! ';


}
