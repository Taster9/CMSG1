<?php

namespace Controller;

use Model\PageRepository;

class PageController
{
    public function __construct(\PDO $PDO){
        $this->repository = new PageRepository($PDO);
    }

    public function ajoutAction()
    {

    }

    public function supprimerAction()
    {

    }

    public function modifierAction()
    {

    }

    public function detailsAction()
    {

    }

    public function listeAction()
    {

    }

    public function displayAction()
    {
        //definition d'un slug par defaut (en cas d'appel sans parametre dans l'url)
        $slug = "teletubbies";
        //recuperation du slug du parametre d'url si present
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        }
        //recuperation des donnees de la page qui correspond au slug
        $page = $this->repository->getBySlug($slug);
        //si il n'y a pas de donnes, erreur 404
        if(!$page){
            // 404
            include "View/404.php";
            return;
        }
        //Je dois avoir la nav initialisée pour que la vue la montre
        //Si données, les afficher
        include "View/page-display.php";
    }

    private function genererLaNav()
    {
        ob_start();
        //générer la nav
        $nav = ob_get_clean();
        return $nav;
    }
}