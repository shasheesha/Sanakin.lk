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
<?php 

include "./partials/home-navigation.php"; 
include "./partials/home-header.php";?>

<body>
    <div class="section hero-sec">
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/hero-slides/slide 1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/hero-slides/slide 2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/hero-slides/slide 1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-caption d-none d-md-block hero-banner-content">
                    <div class="row hero-content">
                        <h1 class="main-title">Find the Best Products<br>with <span class="primarycolor-text">Reliability</h1>
                        <div class="search-bar">
                            <input type="search" class="search" name="Search" placeholder="Search Here Shop or Product" id="Search">
                            <input type="button" id="search-btn" class="search-btn btn primary" value="Search">
                        </div>

                    </div>

                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
    </div>

    <div class="section cat-sec">
        <div class="container">
            <h2 class="section-header">Shop Our Top Categories</h2>
            <div class="horizontal-scroll ">
            <div id="category-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="display: none;">
                <button type="button" data-bs-target="#category-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#category-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <?php 
                    for($c1 = 0; $c1 < 6; $c1++){
                        echo "<div class='card col-2'>
                        <div class='card-content'>
                            <div class='cat-name'>
                                <h5>Category Name</h5>
                            </div>

                        </div>
                        
                    </div>";
                    }
                    ?>
                </div>
                <div class="carousel-item">
                    
                </div>
            </div>

            <!-- <button class="carousel-control-prev" type="button" data-bs-target="#category-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#category-carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
        </div>
            </div>
        </div>
    </div>

    <div class="section best-deals products">
        <div class="container">
            <h2 class="section-header">Best Deals For You!</h2>
            <div class="row">
                <?php
                for ($p1 = 0; $p1 < 4; $p1++) {
                    echo "<div class='card col-md-3'>
                    <div class='product-tile' onclick=location.href='./single-product.php?id=".$p1."'>
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
    
    <div class="section shops">
        <div class="container baoth-sides-margin-14">
            <h2 class="section-header">Choose by Shops</h2>



            <div id="shopsIndicators" class="carousel slide" data-interval="pause" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php
                            for ($p1 = 0; $p1 < 4; $p1++) {
                                echo "<div class='col-md-3'>
                    <div class='card' onclick=location.href='./shop-profile.php?id=".$p1."'>
                        <img class='shop-profile' src='./assets/icons/shop.svg' alt=''>
                        <div class='text'>
                            <h5 class='shop-name'>Shop Name</h5>
                            <h6><span id='product-count'></span> Products</h6>
                        </div>
                    </div>
                    <div class='card' onclick=location.href='./shop-profile.php?id=".$p1."'>
                        <img class='shop-profile' src='./assets/icons/shop.svg' alt=''>
                        <div class='text'>
                            <h5 class='shop-name'>Shop Name</h5>
                            <h6><span id='product-count'></span> Products</h6>
                        </div>
                    </div>
                </div>";
                            }
                            ?>

                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <?php
                            for ($p1 = 0; $p1 < 4; $p1++) {
                                echo "<div class='col-md-3' onclick=location.href='./shop-profile.php?id=".$p1."'>
                    <div class='card'>
                        <img class='shop-profile' src='./assets/icons/shop.svg' alt=''>
                        <div class='text'>
                            <h5 class='shop-name'>Shop Name</h5>
                            <h6><span id='product-count'></span> Products</h6>
                        </div>
                    </div>
                    <div class='card' onclick=location.href='./shop-profile.php?id=".$p1."'>
                        <img class='shop-profile' src='./assets/icons/shop.svg' alt=''>
                        <div class='text'>
                            <h5 class='shop-name'>Shop Name</h5>
                            <h6><span id='product-count'></span> Products</h6>
                        </div>
                    </div>
                </div>";
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#shopsIndicators" data-bs-slide-to="0" class="indicate-line active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#shopsIndicators" data-bs-slide-to="1" class="indicate-line" aria-label="Slide 2"></button>
                </div>
                <!-- <button class="carousel-control-prev" type="button" data-bs-target="#shopsIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#shopsIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button> -->
            </div>
        </div>
    </div>

    <div class="section most-popular products">
        <div class="container">
            <h2 class="section-header">Most Popular Products</h2>
            <div class="row">
                <?php
                for ($p1 = 0; $p1 < 4; $p1++) {
                    echo "<div class='card col-md-3'>
                    <div class='product-tile' onclick=location.href='./single-product.php?id=".$p1."'>
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


    <div class="section ad-banner-1">
        <div id="ad-banner-carousel1" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators" style="display: none;">
                <button type="button" data-bs-target="#ad-banner-carousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#ad-banner-carousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#ad-banner-carousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/hero-slides/slide 1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/hero-slides/slide 2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./assets/hero-slides/slide 1.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
    </div>

    <div class="section deals">
        <div class="container">
            <h2 class="section-header">Today Best Deals For You</h2>

            <div class="row products">

                <ul class="nav nav-pills mb-3 deal-tags" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Search Tag</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Search Tag</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Search Tag</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="row">
                            <?php
                            for ($p1 = 0; $p1 < 8; $p1++) {
                                echo "<div class='card col-md-3'>
                                <div class='product-tile' onclick=location.href='./single-product.php?id=".$p1."'>
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
                            <div class="center-btn">
                                <div class="explore-btn">
                                    Explore More <img src="./assets/icons/more-arrow.svg" alt="" sizes="w-16" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="row">
                            <?php
                            for ($p1 = 0; $p1 < 8; $p1++) {
                                echo "<div class='card col-md-3'>
                                <div class='product-tile' onclick=location.href='./single-product.php?id=".$p1."'>
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
                            <div class="center-btn">
                                <div class="explore-btn">
                                    Explore More <img src="./assets/icons/more-arrow.svg" alt="" sizes="w-16" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="row">
                            <?php
                            for ($p1 = 0; $p1 < 8; $p1++) {
                                echo "<div class='card col-md-3'>
                                <div class='product-tile' onclick=location.href='./single-product.php?id=".$p1."'>
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

                            <div class="center-btn">
                                <div class="explore-btn">
                                    Explore More <img src="./assets/icons/more-arrow.svg" alt="" sizes="w-16" srcset="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            



        </div>
    </div>

    <div class="section ad-banner-2">
        <div class="container">
            <div id="ad-banner-carousel2" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#ad-banner-carousel2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#ad-banner-carousel2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#ad-banner-carousel2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/hero-slides/slide 1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/hero-slides/slide 2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./assets/hero-slides/slide 1.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#ad-banner-carousel2" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#ad-banner-carousel2" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

    <div class="section cat-sec">
        <div class="container">
            <h2 class="section-header">Today Best Deals For You</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="cat-tile">
                        <div class="cat-img">
                            <img src="./assets/hero-slides/slide 1.png" alt="" srcset="">
                        </div>
                        <div class="cat-text">
                            <h4 id="cat-name1">Category Name</h4>
                            <input type="button" class="btn primary" value="Shop Now">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cat-tile">
                        <div class="cat-img">
                            <img src="./assets/hero-slides/slide 1.png" alt="" srcset="">
                        </div>
                        <div class="cat-text">
                            <h4 id="cat-name2">Category Name</h4>
                            <input type="button" class="btn primary" value="Shop Now">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include "./partials/home-footer.php"; ?>
    <?php include "./sign-up.php"; ?>
    <?php include "./sign-in.php"; ?>
    <?php include "./modals/shopping-cart.php"; ?>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>