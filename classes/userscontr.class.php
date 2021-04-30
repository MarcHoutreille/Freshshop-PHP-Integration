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
                        echo "We've sent you an e-mail";
                        echo "Login : " . $email . "<br>";
                        // CAN BE SEGMENTED
                        $to = $email;
                        $subject = "Welcome to FreshShop !";
                        $txt = "Thank you very much for creating your account, you won't be dissapointed ! \r\nYou will received promotions and trash mail every milliseconds of your life, for your whole life ! \r\n Thanks very much !";
                        $headers = "From: wingcorpmail@gmail.com" . "\r\n";
            
                        mail($to, $subject, $txt, $headers);
                        // Add the user to the database
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
            $_SESSION['email'] = $email;
            
        
            echo "Successfully logged in !<br>";
            echo "<strong><a href='index.php'> To index </a></strong><br>";
        } else {
            echo "incorrect username or password !";
        }

    }
    // CHANGE PASSWORD METHOD

    public function tryChangePassword($email,$currentPassword,$newPassword,$newPasswordConfirm) {
        $req = $this->getPassword($email);
        $isPasswordCorrect = password_verify($currentPassword, $req['password']);
        if (($isPasswordCorrect) & ($newPassword == $newPasswordConfirm)) {
            echo "thanks kanye, very cool password change !";
            $this->setNewPassword($email,$newPassword);
        } else {
            echo "Something went very wrong, try again";
        }
    }
    // CONTACT FORM METHOD 
    public function sendFeedback($message,$sender,$subject) {
        $to = "ocuw1n+bgeqbna3f9gyc@sharklasers.com";
        $txt = "New contact form from: " . $sender . "\r\n" . $message;
        $headers = "From: wingcorpmail@gmail.com" . "\r\n";

        mail($to, $subject, $txt, $headers);
    }

}
