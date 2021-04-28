<?php

// LOGIN VIEW
include('includes/autoloader.inc.php');

$newUser = new UsersContr();
$newUser->tryLoginUser($_POST['email'],$_POST['password']);


