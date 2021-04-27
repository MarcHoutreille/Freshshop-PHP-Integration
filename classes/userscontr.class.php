<?php 
// USER CONTROLLER 

class UsersContr extends Users {

    public function createUser($email,$firstname,$lastname,$password) {
        $this->setUser($email,$firstname,$lastname,$password);
    }


}