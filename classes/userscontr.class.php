<?php 
// USER CONTROLLER 

class UsersContr extends Users {

    public function createUser($email,$firstname,$lastname,$password) {
        $this->setUser($email,$firstname,$lastname,$password);
    }

    public function verifySignUp($firstname,$lastname,$email,$password,$password_confirm) {

        if ((!empty($firstname)) & (!empty($lastname)) & (!empty($email)) & (!empty($password)) & (!empty($password_confirm))) {
            echo "All info are there";
            if ($password == $password_confirm) {
                echo "Passwords are matching";
            } else {
                echo "Password don't match :(";
            }
        } else {
            echo "NO :(";
        }
    
    }
    
}