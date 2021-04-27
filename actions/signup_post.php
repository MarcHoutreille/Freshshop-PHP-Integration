<?php

function verifySignUp($firstname,$lastname,$email,$password,$password_confirm) {

    if ((!empty($firstname)) & (!empty($lastname)) & (!empty($email)) & (!empty($password)) & (!empty($password_confirm))) {
        echo "All info are there";
    } else {
        echo "NO :(";
    }

}

verifySignUp($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$_POST['password_confirm']);
