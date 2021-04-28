<?php
include('includes/autoloader.inc.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test page</title>
</head>
<body>
     <?php
      /*
     $usersObj = new UsersView();
     $usersObj->showUser("John");
    
     $newUser = new UsersContr();
     $newUser->createUser("test@test.com", "The", "Created User", "testtest","1999");
     echo "<br>";
     $showNewUser = new UsersView();
     $showNewUser->showUser("The");
     */

     $signupObj = new UsersContr();
     $signupObj->getpassword("marc.houtreille@gmail.com");
     ?>

     
</body>
</html>