<?php
if(ENV=='dev'){
    $serveurBD = "localhost:8888";
    $nomUtilisateur = "root";
    $motDePasse = "root";
    $baseDeDonnees = "casino";
}else{
    $serveurBD = "ec2-54-163-228-0.compute-1.amazonaws.com";
    $nomUtilisateur = "puecnxpywhyifz";
    $motDePasse = "pONg0Qh-TgyhEJ-InlZigt9eCP";
    $baseDeDonnees = "d1nttj2qfni6tg";
}
$idConnexion = mysql_connect($serveurBD,
    $nomUtilisateur,
    $motDePasse);

$connexionBase = mysql_select_db($baseDeDonnees);
