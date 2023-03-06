<?php
//modele

function liste_annonces(){
    echo "je suis dans le modele";

     //1. Se connecter à la B.D. ( Modele  )
     $PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');
 
     //2. Recuperer les annonces (Modele)
      
     $sql="select * from annonce";
     $resultat=$PDO->query($sql);
 
     //3 On met les resultats dans un tableau
     $tab=$resultat->fetchAll();

     return $tab;


}

