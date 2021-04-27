<?php 



class Users extends Db {


    public function getUser($name) {
        $sql = 'SELECT * FROM users WHERE firstname = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    public function setUser($email,$firstname,$lastname,$password,$dateofbirth) {
        $sql = 'INSERT INTO users(email, firstname, lastname, password, dateofbirth) VALUES (?, ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email,$firstname,$lastname,$password,$dateofbirth]);

    }

    }
}
