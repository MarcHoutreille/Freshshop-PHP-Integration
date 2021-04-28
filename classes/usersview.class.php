<?php 
// USERS VIEW

class UsersView extends Users {

    public function showUser($name) {
        $results = $this->getUserInfo($name);
        echo "Name : " . $results[0]['firstname'] . " " . $results[0]['lastname'];

    }

    public function userAlreadyExists($email) {
        $results = $this->availableCheck($email);
        if ($results != 0) {
            echo "email already exists !";
        } else {
            echo "email does not exist";
        }
    }
    
}