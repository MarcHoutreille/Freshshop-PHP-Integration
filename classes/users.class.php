<?php 

class Users extends Db {
    public function getUsers() {
        $sql = 'SELECT * from users';
        $stmt = $this->connect()->query();
        while($row = $stmt->fetch()) {
            echo $row['firstname'] . '</br>';*
        }
    }
}