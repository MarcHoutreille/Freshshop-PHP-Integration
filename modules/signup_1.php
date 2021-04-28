<?php
session_start();
include('views/header.php');
include('views/top.php');
?>





<div class="container text-center">

    <form class="form-horizontal" action='signuppost.php' method="POST">
        <fieldset>
            <div id="legend">
                <legend class="">Register</legend>
            </div>
            <div class="control-group">
                <!-- First Name -->
                <label class="control-label" for="username">First name</label>
                <div class="controls">
                    <input type="text" id="username" name="firstname" placeholder="" class="input-xlarge">

                </div>
            </div>
            <div class="control-group">
                <!-- Last Name -->
                <label class="control-label" for="username">Last name</label>
                <div class="controls">
                    <input type="text" id="username" name="lastname" placeholder="" class="input-xlarge">

                </div>
            </div>


            <div class="control-group">
                <!-- E-mail -->
                <label class="control-label" for="email">E-mail</label>
                <div class="controls">
                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge">

                </div>
            </div>

            <div class="control-group">
                <!-- Password-->
                <label class="control-label" for="password">Password</label>
                <div class="controls">
                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
                    <p class="help-block">Password should be at least 8 characters</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Password -->
                <label class="control-label" for="password_confirm">Password (Confirm)</label>
                <div class="controls">
                    <input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
                    <p class="help-block">Confirm password</p>
                </div>
            </div>

            <div class="control-group">
                <!-- Button -->
                <div class="controls">
                    <button class="btn btn-success">Register</button>
                </div>
            </div>
        </fieldset>
    </form>

</div>


<?php

include('views/bottom.php');
