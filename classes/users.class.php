<?php 



class Users extends Db {


    protected function getUserInfo($name) {
        $sql = 'SELECT * FROM users WHERE firstname = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$name]);

        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getUserInfoFromMail($email) {
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();
        return $results;
    }


    protected function setUser($email,$firstname,$lastname,$password) {
        $sql = 'INSERT INTO users(email, firstname, lastname, password) VALUES ( ?, ?, ?, ?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email,$firstname,$lastname,$password]);

    }

    // Check if the user input email already exists in database, used in the usersview
    protected function availableCheck($email) {
        $sql = 'SELECT * FROM users WHERE email = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);


        $results = $stmt->fetch();
        // returns 0 if the email is not in DB and you can proceed to creation
        return $results;
    }

    public function getPassword($email) {
        $sql = 'SELECT password FROM users WHERE email = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);
        $results = $stmt->fetch();
        // returns the hashed pass if the user exists, otherwise returns 0
        return $results;
    }

}
