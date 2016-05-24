<?php

//Inclusion de l'autoload composer
require_once "vendor/autoload.php";

include_once"View/nav.php";

//connexion à la BDD
try{
    $pdo = new \PDO("mysql:host=localhost;dbname=kandt","root","root");
    $pdo->query("SET NAMES 'UTF8';");
}catch(PDOException $e){
    die($e->getMessage());
}
//Démarrer notre appli
$page = new \Controller\PageController($pdo);
//Affichage de la page demandée
$page->displayAction();