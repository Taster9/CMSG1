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
        if(count($_POST) === 0){
            require "View/admin/pageAjout.php";
        } else {
            $data = (object) [
                "slug" => $_POST["slug"],
                "title" => $_POST["title"],
                "body" => $_POST["body"]
            ];
            $this->repository->inserer($data);
            header('Location: ?a=liste');
        }
    }

    public function supprimerAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('Pas d\'id');
        }
        $this->repository->supprimer($_GET['id']);
        header('Location: ?a=liste');
    }

    public function modifierAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('Pas d\'id');
        }
        // recuperation de donnees
        $data = $this->repository->getById($_GET['id']);
        if(count($_POST) === 0){
            require "View/admin/pageModifier.php";
        } else {
            $data = (object) [
                "id" => $_POST["id"],
                "slug" => $_POST["slug"],
                "title" => $_POST["title"],
                "body" => $_POST["body"]
            ];
            $this->repository->modifier($data);
            header('Location: ?a=liste');
        }
    }

    public function detailsAction()
    {
        if(!isset($_GET['id'])){
            throw new \Exception('Pas d\'id');
        }
        // recuperation de donnees
        $data = $this->repository->getById($_GET['id']);
        // affichage des donnees
        require "View/admin/pageDetails.php";
    }

    public function listeAction()
    {
        // recuperer les donnees
        $data = $this->repository->findAll();
        // afficher les donnees
        require "View/admin/pageListe.php";
    }

    public function displayAction()
    {
        //definition d'un slug par defaut (en cas d'appel sans parametre dans l'url
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
        $nav = $this->genererLaNav($slug);
        //Si données, les afficher
        include "View/page-display.php";
    }

    private function genererLaNav($slug)
    {
        ob_start();
        $data = $this->repository->findAll();
        //generer la nav
        include_once "View/nav.php";
        $nav = ob_get_clean();
        return $nav;
    }
}