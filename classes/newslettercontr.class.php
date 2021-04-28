<?php

class NewsletterContr extends Newsletter {


    public function emailCheck($email) {
        if ($this->availableCheck($email) == 0) {
            $this->setEmail($email);
            echo "Thank you very much for subscribing to our newsletter.";
        } else {
            echo "Your email already exists in our database.";

        }
    }

} 