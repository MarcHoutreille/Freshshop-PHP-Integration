<?php

// LOGIN VIEW
session_start();

include('views/header.php');
include('views/top.php');




?>

<div class="box-add-products">
    <div class="container">


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="offer-box-products">
                    <h2 class="m-5 p-5 text-center fw-bold">

                        <?php
                        if (isset($_POST['submit'])) {

                            $newUser = new UsersContr();
                            $newUser->tryCreateUser($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$_POST['password_confirm']); 
                            $newUser->tryLoginUser($_POST['email'], $_POST['password']);                           
                        } else {
                            echo "Our apologies, there was an error. Please try again.";
                        }


                        ?>


                    </h2>
                </div>
            </div>

        </div>
    </div>

</div>



<?php

include('views/bottom.php');
