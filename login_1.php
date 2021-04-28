<?php
session_start();
include('views/header.php');
include('views/top.php');
?>




    <div class="box-add-products">
        <div class="container">
            <form method="post" class="m-5" action="login_post.php">
                <input type="email" id="email" class="fadeIn second" name="email" placeholder="email">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>
        </div>



        <?php

include('views/bottom.php');