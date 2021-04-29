<?php

class WebshopView extends Webshop {

    
    public function showArticles() {
        $results = $this->getArticles();
        $arrayLength = count($results) - 1;
        for ($x = 0; $x <= $arrayLength; $x++) {
            if ($results[$x]['discount'] != 0) {
                $discount = $results[$x]['discount'] / 100;
                $discountedPrice = round($results[$x]['price'] - ($results[$x]['price'] * $discount),2);
                
            } else {
                $discount = 0;
                $discountedPrice = $results[$x]['price'];
            }

            echo "Name : " . $results[$x]['name'] . "<br> Price : " . $results[$x]['price'] . "<br> Discounted Price : " . $discountedPrice . "<br> " . $results[$x]['description'] . " <br> Discount : " . $results[$x]['discount']  . "% <br><img src='" . $results[$x]['img'] ."'/> <br> ----- <br>";

            
          }
    }
}
?>

<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
    <div class="products-single fix">
        <div class="box-img-hover">
            <div class="type-lb">
                <p class="new">New</p>
            </div>
            <img src="images/img-pro-02.jpg" class="img-fluid" alt="Image">
            <div class="mask-icon">
                <ul>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                    <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                </ul>
                <a class="cart" href="#">Add to Cart</a>
            </div>
        </div>
        <div class="why-text">
            <h4>Lorem ipsum dolor sit amet</h4>
            <h5> $9.79</h5>
        </div>
    </div>
</div>