<?php 
// MODEL

class Db {
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName = "webshop";

    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->pwd);
        // FETCH INTO ASSOCIATIVE ARRAYS
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}