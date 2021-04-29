<?php
session_start();
include('views/header.php');
include('views/top.php');
?>

<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2>Shop Detail</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Shop</a></li>
                    <li class="breadcrumb-item active">Shop Detail </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->

<!-- Start Shop Detail  -->
<div class="shop-detail-box-main">
    <?php
    if (isset($_GET['item'])) {
        $getArticle = new WebshopView();
        $getArticle->showArticleDetails($_GET['item']);
    } else {
        $getArticle = new WebshopView();
        $getArticle->showArticleDetails(1);
    }

    ?>

    <div class="row my-5">
        <div class="col-lg-12">
            <div class="title-all text-center">
                <h1>Featured Products</h1>
                <p>Just buy, already.</p>
            </div>
            <div class="featured-products-box owl-carousel owl-theme">
                <?php
                $featuredArticles = new WebshopView();
                $featuredArticles->showFeaturedArticles();

                ?>

            </div>
        </div>
    </div>

</div>
</div>
<!-- End Cart -->
<?php

include('views/bottom.php');
