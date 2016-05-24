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

    public function getBySlug($slug){
        $sql ="SELECT
                    `body`,
                    `title`
                FROM
                    `page`
                WHERE
                    `slug` = :slug
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':slug',$slug,\PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetchObject();
    }

}