<?php

namespace Model;

class PageRepository
{
    private $PDO;

    public function __construct(\PDO $PDO){
        $this->PDO = $PDO;
    }

    public function modifier($data){
        $sql ="UPDATE
                    `page`
               SET
                    `slug` = :slug,
                    `body` = :body,
                    `title` = :title
               WHERE
                    `id` = :id
               LIMIT 1
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$data->id,\PDO::PARAM_STR);
        $stmt->bindParam(':slug',$data->slug,\PDO::PARAM_STR);
        $stmt->bindParam(':body',$data->body,\PDO::PARAM_STR);
        $stmt->bindParam(':title',$data->title,\PDO::PARAM_STR);
        $stmt->execute();
    }

    public function supprimer(int $id){
        $sql ="DELETE
                FROM
                    `page`
                WHERE
                    `id` = :id
                LIMIT 1
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_STR);
        $stmt->execute();
    }

    public function inserer($data){
        $sql ="INSERT INTO
                    `page`
                    (`id`,
                    `slug`,
                    `body`,
                    `title`)
               VALUES
                    (:id,
                    :slug,
                    :body,
                    :title)
               ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$data->id,\PDO::PARAM_STR);
        $stmt->bindParam(':slug',$data->slug,\PDO::PARAM_STR);
        $stmt->bindParam(':body',$data->body,\PDO::PARAM_STR);
        $stmt->bindParam(':title',$data->title,\PDO::PARAM_STR);
        $stmt->execute();
    }

    /**
     * @param $slug
     * @return stdClass|bool
     */
    public function getBySlug($slug)
    {
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

    /**
     * @param $id
     * @return \stdClass|bool
     */
    public function getById($id)
    {
        $sql ="SELECT
                    `id`,
                    `slug`,
                    `body`,
                    `title`
                FROM
                    `page`
                WHERE
                    `id` = :id
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(':id',$id,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public function findAll()
    {
        $sql = "SELECT
                    `id`,
                    `slug`,
                    `title`
                FROM
                    `page`
                ";
        $stmt = $this->PDO->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

}