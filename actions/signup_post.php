<?php

if ((!empty($_POST['firstname'])) & (!empty($_POST['lastname'])) & (!empty($_POST['email'])) & (!empty($_POST['password'])) & (!empty($_POST['password_confirm']))) {
    echo "All info are there";
} else {
    echo "NO :(";
}