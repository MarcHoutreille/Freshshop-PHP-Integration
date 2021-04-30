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
                                <?php 
                                $changePwd = new UsersContr();
                                if (isset($_POST['submit'])) {
                                    $changePwd->tryChangePassword($_SESSION['email'],$_POST['currentPassword'],$_POST['newPassword'],$_POST['newPasswordConfirm']);

                                } else {
                                    echo "";
                                }
                                
                                
                                
                                ?>
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

<?php
} else {
    include('views/login.php');
}

include('views/bottom.php');
