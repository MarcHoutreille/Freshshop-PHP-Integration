<?php 
// USER CONTROLLER 

class UsersContr extends Users {

    public function createUser_base($email,$firstname,$lastname,$password) {
        $this->setUser($email,$firstname,$lastname,$password);
    }

    public function createUser($firstname,$lastname,$email,$password,$password_confirm) {

        if ((!empty($firstname)) & (!empty($lastname)) & (!empty($email)) & (!empty($password)) & (!empty($password_confirm))) {
            echo "All info are there <br>";
            if ($password != $password_confirm) & (preg_match({
                echo "But passwords don't match ! <br>";
            } else {
                echo 
            }
        } else {
            echo "NO :(";
        }
    
    }
    
}