<?php
$shopID =$_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/main.css">
    <title>Sanakin.LK | Trusted Shops</title>
</head>
<?php include "./partials/home-navigation.php";
include "./partials/home-header.php"; ?>

<body>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="shop-header col-md-12">
                    <img id="shop-banner" src="./assets/hero-slides/slide 1.png" alt="">
                    <img id="shop-dp" src="./assets/products.png" alt="">
                </div>
                <div class="shop-info">
                    <div class="shop-details">
                        <div class="shopper">
                            <h1>Shop Name</h1>
                            <div class="dr-tag"><span id="dr">9.6</span> DR</div>
                        </div>
                        <div class="star-rate">
                            <img src="./assets/icons/star1.svg" alt="">
                            <img src="./assets/icons/star1.svg" alt="">
                            <img src="./assets/icons/star1.svg" alt="">
                            <img src="./assets/icons/star1.svg" alt="">
                            <img src="./assets/icons/star1.svg" alt="">
                            <p id="shop-id">#<?php echo"$shopID"; ?></p>
                        </div>
                    </div>
                    <a href="">Report This</a>

                </div>
<div class="shop-description">
    <h3>Nature of Business</h3>
    <p id="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</div>
            </div>
        </div>
    </div>
    <div class="section products">
        <div class="container">
            <h2 class="section-header">Products</h2>
            <div class="row">

                <div class="col-md-12">
                <ul id="paginated-list" class="row" data-current-page="1" aria-live="polite"  style="padding-left: 0px !important;">
                    <?php

                    
                        for ($p1 = 0; $p1 < 20; $p1++) {
                            echo "<li class='card col-md-3' >
                            <div class='product-tile' onclick=location.href='./single-product.php?id=".$p1."'>
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <!--<p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>-->
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                    </div>
                </li>";
                        }
                    ?>
                </ul>
                </div>

                <nav class="pagination-container justify-content-end">
                    <button class="pagination-button" id="prev-button" title="Previous page" aria-label="Previous page">
                        &lt;
                    </button>

                    <div id="pagination-numbers">
                    </div>

                    <button class="pagination-button" id="next-button" title="Next page" aria-label="Next page">
                        &gt;
                    </button>
                </nav>
            </div>
        </div>
    </div>














    <?php include "./sign-up.php"; ?>
    <?php include "./partials/home-footer.php"; ?>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>    
    <script src="./js/product-pagination.js"></script>
</body>

</html>