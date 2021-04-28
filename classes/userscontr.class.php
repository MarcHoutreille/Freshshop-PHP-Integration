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
                        echo "User sucessfully created <br>";
                        echo "Email : " . $email;
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
        $req = $this->getPassword($email);
        $isPasswordCorrect = password_verify($password, $req['password']);
        if ($isPasswordCorrect) {
            
            $results = $this->getUserInfoFromMail($email);
            $firstname = $results[0]['firstname'];
            $lastname = $results[0]['lastname'];   
            $_SESSION['fn'] = $firstname;
            $_SESSION['ln'] = $lastname;
            
        
            echo " successfully logged in !";
            echo "<a href='index.php'> to index </a>";
        } else {
            echo "incorrect username or password !";
        }

    }

}
