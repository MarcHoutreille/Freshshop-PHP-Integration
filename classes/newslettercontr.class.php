<?php

class NewsletterContr extends Newsletter
{


    public function emailCheck($email)
    {
        if ($this->availableCheck($email) == 0) {
            $this->setEmail($email);
            $to = $email;
            $subject = "Welcome to the FreshShop Newsletter !";
            $txt = "Thank you very much for subscribing to our newsletter, you won't be dissapointed !";
            $headers = "From: wingcorpmail@gmail.com" . "\r\n";

            mail($to, $subject, $txt, $headers);

            echo "Thank you very much for subscribing to our newsletter.";
        } else {
            echo "Your email already exists in our database.";
        }
    }
}
