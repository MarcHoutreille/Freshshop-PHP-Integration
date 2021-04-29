<?php

include('views/header.php');
include('views/top.php');
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

    $newNews = new NewsletterContr();
    $newNews->addToNewsletter($email);
} else {
    
}

?>



<div class="box-add-products">
    <div class="container">


        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="offer-box-products">
                    <h2 class="m-5 p-5 text-center"> Thank you very much for subscribing to our </h2>
                </div>
            </div>

        </div>
    </div>

</div>



<?php

include('views/bottom.php');
