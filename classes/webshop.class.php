<?php

class Webshop extends Db
{
    protected function getArticles()
    {
        $sql = 'SELECT * FROM webshop';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        $results = $stmt->fetchAll();
        return $results;
    }
}
