<?php

class Webshop extends Db
{
    protected function getAllArticles()
    {
        $sql = 'SELECT * FROM webshop';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getArticles($limit)
    {
        $sql = ("SELECT * FROM `webshop` LIMIT '$limit' ");
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
}
