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

function liste_une_annonce($id){
     // 1. conneceter a la B.D. Modele
     $PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');

     // 2. RECUPERER L'annonce (une seul pas un fetchall mais un fetch) correspondant à mon click en GET Modele
      
     $sql="select * from annonce where id=$id";
     $resultat=$PDO->query($sql);
 
     //3 On met les resultats dans un tableau
     $tab=$resultat->fetch();
  
     return $tab;
}
function supprimer_annonce($id){
    //* 1. Se connecter à la B.D
    $PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');
   
    //2. Appliquer la requête de suppression
    //recuperation de l'identifiant dans l'URL
     $sql="delete from annonce where id=$id";
    $PDO->query($sql);
}
function ajouter_annonce_bd($titre, $description){
    //2. SE CONNECTER A LA B.D.
    $PDO=new PDO('mysql:host=127.0.0.1;port=3306;dbname=dwwm30', 'root','');

    //3. FAIRE LA REQUETE
    // INSERT INTO table VALUES ('valeur 1', 'valeur 2', ...)
    $sql="INSERT INTO annonce VALUES (NULL, '$titre', '$description')";
    
    $PDO->query($sql);


}