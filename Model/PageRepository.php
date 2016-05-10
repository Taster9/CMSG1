<?php

namespace Model;

class PageRepository
{
    private $PDO;

    public function __construct(\PDO $PDO){
        $this->PDO = $PDO;
    }

    public function lister($id = null){
        return [];
    }

    public function modifier(array $data){
        return true;
    }

    public function supprimer(int $id){
        return true;
    }

    public function Inserer(array $data){
        return 1;
    }

}