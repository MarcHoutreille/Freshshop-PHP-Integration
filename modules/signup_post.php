<?php
// SIGNUP VIEW
include('includes/autoloader.inc.php');

$newUser = new UsersContr();
$newUser->tryCreateUser($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$_POST['password_confirm']);


