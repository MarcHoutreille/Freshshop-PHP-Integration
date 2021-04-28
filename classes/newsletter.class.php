<?php 

class Newsletter extends Db {

    
    protected function setEmail($email) {
        $sql = 'INSERT INTO newsletter(email) VALUES (?)';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

    }

    protected function availableCheck($email) {
        $sql = 'SELECT * FROM newsletter WHERE email = ?';
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);


        $results = $stmt->fetch();
        // returns 0 if the email is not in DB and you can proceed to adding to newsletter db
        return $results;
    }
}