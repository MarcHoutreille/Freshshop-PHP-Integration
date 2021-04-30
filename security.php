<?php
session_start();
include('views/header.php');
include('views/top.php');


if (isset($_SESSION['fn'])) {

?>


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Welcome <?= ucwords($_SESSION['fn']) . " " . ucwords($_SESSION['ln']) ?></h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="shop.php">Shop</a></li>
                        <li class="breadcrumb-item active"><a href="my-account.php">My Account</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">


                <div class="row">

                    <div class="col-lg-12 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fas fa-lock"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Login &amp; security</h4>
                                    <div class="ml-5 text-left">
                                        <p>Your name : <?= ucfirst($_SESSION['fn']) . " " . ucfirst($_SESSION['ln']) ?></p>
                                        <p>Your email : <?= $_SESSION['email'] ?></p>

                                        <!-- Password change form -->
                                        <p id="changePwdBtn">Click here to change your password</p>

                                        <div id="changePwdBox" class="d-none ">
                                            <form method="post" action="changepwd.php">
                                                <div class="row pt-3">


                                                    <div class="col-md-3 mb-2">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="password" name="currentPassword" placeholder="Current password" required data-error="Please enter your current password">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-2">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="password" name="newPassword" placeholder="New password" required data-error="Please enter your password">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-3 mb-2">
                                                        <div class="form-group">
                                                            <input type="password" class="form-control" id="password" name="newPasswordConfirm" placeholder="Confirm new password" required data-error="Please enter your password">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">

                                                    <div class="submit-button text-center">
                                                        <button class="btn bg-danger hvr-hover" id="submit" name="submit" type="submit">Change password</button>
                                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                </div>
                                        </div>
                                                                
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- End My Account -->
    <script>
        let changePwdBtn = document.getElementById("changePwdBtn")
        let changePwdBox = document.getElementById("changePwdBox")
        changePwdBtn.addEventListener("click", function() {
            if (changePwdBox.classList.contains("d-none")) {
                changePwdBox.classList.remove("d-none")
                changePwdBox.classList.add("d-inline")
            } else {
                changePwdBox.classList.remove("d-inline")
                changePwdBox.classList.add("d-none")
            }

        })
    </script>
<?php
} else {
    include('views/login.php');
}

include('views/bottom.php');
