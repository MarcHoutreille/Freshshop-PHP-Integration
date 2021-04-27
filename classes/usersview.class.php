<?php 
// USERS VIEW
class UsersView extends Users {

    public function showUser($name) {
        $results = $this->getUser($name);
        echo "Name : " . $results[0]['firstname'] . " " . $results[0]['lastname'];

    }
}