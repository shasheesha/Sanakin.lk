<?php
$productID =$_GET['id'];
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
            <div class="col-md-5">
                <div class="product-img">
                    <img src="./assets/products.png" alt="">
                </div>
            </div>
            <div class="info-side col-md-7">
                <div class="info-sec">
                <div class="shopper">
                    <h4>Shop Name</h4>
                    <div class="dr-tag"><span id="dr">9.6</span> DR</div>
                </div>
                <h2 class="product-name">Product Name</h2>
                <p class="product-category">#<span><?php echo"$productID";?></span> - Product Category</p>
                <div class="product-price"><h2>Rs. <span id="product-price">10000.00 </span></h2>Per Piece</div>
                <div class="pr-rate">
                    <h6>Product Ratings</h6>
                    <div class="star-rate">
                        <img src="./assets/icons/star1.svg" alt="">
                        <img src="./assets/icons/star1.svg" alt="">
                        <img src="./assets/icons/star1.svg" alt="">
                        <img src="./assets/icons/star1.svg" alt="">
                        <img src="./assets/icons/star1.svg" alt="">
                    </div>
                    
                </div>
                <div class="product-description">
                        <p class="description">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text.</p>
                    </div>
                </div>
                    <div class="btn-sec">
                        <button class="add-cart">Add to Cart <img src="./assets/icons/shopping-cart.svg" alt=""></button>
                    </div>
            </div>
        </div>
    </div>
</div>
<div class="section products">
    <div class="container">
    <h2 class="section-header">Related Products</h2>
        <div class="row">
        <?php
                for ($p1 = 0; $p1 < 4; $p1++) {
                    echo "<div class='card col-md-3'>
                    <div class='product-tile'>
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                    </div>
                </div>";
                }
                ?>
        </div>
    </div>
</div>














    <?php include "./sign-up.php"; ?>
    <?php include "./partials/home-footer.php"; ?>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>