<?php
include('includes/autoloader.inc.php');
$email = $_POST['email'];

$newNews = new NewsletterContr();
$newNews->emailCheck($email);