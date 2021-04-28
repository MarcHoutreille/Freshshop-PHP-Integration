<?php

class NewsletterContr extends Newsletter {

    
    public function emailCheck($email) {
        if ($this->availableCheck($email) == 0) {
            $this->setEmail($email);
            echo "successfully added to db !";
            echo $email;
        } else {
            echo "email is already in db ! ";
            echo $email;
        }
    }

} 