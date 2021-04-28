<?php
session_start();
include('views/header.php');
include('views/top.php');
?>





<div class="container text-center" style="width:25%;padding-top:120px;padding-bottom:120px;">
<h1 class="mt-2">CREATE YOUR ACCOUNT</h1>
    <form method="post" action="signuppost.php">
        <div class="row">
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="firstname" placeholder="Your First Name" required data-error="Please enter your first name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <input type="text" class="form-control" id="email" name="lastname" placeholder="Your Last Name" required data-error="Please enter your last name">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required data-error="Please enter your Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12 mb-2">
                <div class="form-group">
                    <input type="password" class="form-control" id="password" name="password_confirm" placeholder="Confirm password" required data-error="Please confirm your Password">
                    <div class="help-block with-errors"></div>
                </div>
            </div>
            <div class="col-md-12">

                <div class="submit-button text-center">
                    <button class="btn hvr-hover" id="submit" name="submit" type="submit">Create account</button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </form>
</div>


<?php

include('views/bottom.php');
