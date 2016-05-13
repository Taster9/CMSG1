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
        $slug = "teletubbies";
        if(isset($_GET['p'])){
            $slug = $_GET['p'];
        }
        $page = $this->repository->getBySlug($slug);
        if(!$page){
            // 404
            include "View/404.php";
            return;
        }
        include "View/page-display.php";
    }

}