<?php

class WebshopView extends Webshop
{


    public function showAllArticles()
    {
        $results = $this->getAllArticles();
        $arrayLength = count($results) - 1;
        for ($x = 0; $x <= $arrayLength; $x++) {
            if ($results[$x]['discount'] != 0) {
                $discount = $results[$x]['discount'] / 100;
                $discountedPrice = round($results[$x]['price'] - ($results[$x]['price'] * $discount), 2);
            } else {
                $discount = 0;
                $discountedPrice = $results[$x]['price'];
            }
            //
            //echo "Name : " . $results[$x]['name'] . "<br> Price : " . $results[$x]['price'] . "<br> Discounted Price : " . $discountedPrice . "<br> " . $results[$x]['description'] . " <br> Discount : " . $results[$x]['discount']  . "% <br><img src='" . $results[$x]['img'] . "'/> <br> ----- <br>";
            echo '<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
            <div class="products-single fix">
                <div class="box-img-hover">
                    <div class="type-lb">
                        
                    </div>
                    <img src="' . $results[$x]['img'] . '" class="img-fluid" alt="Image">
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
                    <h4>'. ucfirst($results[$x]['name']) .'</h4>
                    <h5> '. $discountedPrice .'€/kg </h5>
                </div>
            </div>
        </div>';
        }
    }

    public function showFeaturedArticles() {
        $results = $this->getAllArticles();
        $arrayLength = count($results) - 1;
        for ($x = 0; $x <= $arrayLength; $x++) {
            if ($results[$x]['discount'] != 0) {
                $discount = $results[$x]['discount'] / 100;
                $discountedPrice = round($results[$x]['price'] - ($results[$x]['price'] * $discount), 2);
            } else {
                $discount = 0;
                $discountedPrice = $results[$x]['price'];
            }
            echo '
            

                
                    <div class="item">
                        <div class="products-single fix">
                            <div class="box-img-hover">
                                <img src="'. $results[$x]['img'] .'" class="img-fluid" alt="Image">
                                <div class="mask-icon">
                                    <ul>
                                        <li><a href="?item='. $results[$x]['id'] .'" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                    </ul>
                                    <a class="cart" href="#">Add to Cart</a>
                                </div>
                            </div>
                            <div class="why-text">
                                <h4>'. ucfirst($results[$x]['name']) . '</h4>
                                <h5> '. $discountedPrice .'€/kg</h5>
                            </div>
                        </div>
                    </div>

                
            
        ';
        }
    }
}
