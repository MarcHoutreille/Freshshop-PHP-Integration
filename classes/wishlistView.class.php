<?php

class WishlistView extends Webshop {
public function displaywishlist() {
    echo '
                                <tr>
    <td class="thumbnail-img">
        <a href="#">
            <img class="img-fluid" src="images/img-pro-01.jpg" alt="" />
        </a>
    </td>
    <td class="name-pr">
        <a href="#">
            Lorem ipsum dolor sit amet
        </a>
    </td>
    <td class="price-pr">
        <p>$ 80.0</p>
    </td>
    <td class="quantity-box">In Stock</td>
    <td class="add-pr">
        <a class="btn hvr-hover" href="#">Add to Cart</a>
    </td>
    <td class="remove-pr">
        <a href="#">
            <i class="fas fa-times"></i>
        </a>
    </td>
</tr>';


}

    
}