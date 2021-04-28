<?php
// USER CONTROLLER 

class UsersContr extends Users
{

    protected function createUser_base($email, $firstname, $lastname, $password)
    {
        $this->setUser($email, $firstname, $lastname, $password);
    }

    // SIGN UP METHOD (could be better condition wise)
    public function tryCreateUser($firstname, $lastname, $email, $password, $password_confirm)
    {
        
        if ((!empty($firstname)) & (!empty($lastname)) & (!empty($email)) & (!empty($password)) & (!empty($password_confirm))) {
            // continue
            if ($password != $password_confirm) {
                 echo "Passwords don't match <br>";
            } else {
                // email doesn't exist in database already, we can proceed
                if ($this->availableCheck(strtolower($email)) == 0) {
                    if (preg_match("#^([a-zA-Z0-9._-]){1,}@([a-z0-9._-]){2,}\.([a-z]){2,4}$#", $email))  {
                        $this->setUser(strtolower($email), strtolower($firstname), strtolower($lastname), password_hash($password,PASSWORD_DEFAULT));
                    } else {
                        echo "Please enter valid email";
                    }
                    
                } else {
                    // placeholder
                    echo "User already exists ";
                } 
            }
        }
    }

    // LOGIN METHOD 

    public function tryLoginUser($email,$password) {
        
    }

}
