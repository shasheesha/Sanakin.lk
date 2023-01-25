<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/">
    <link rel="stylesheet" href="./css/main.css">
    <title>Sanakin.LK | Trusted Shops</title>
</head>
<?php include "./partials/home-navigation.php"; ?>

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
                            <input type="search" class="search" name="Search" placeholder="Search Here Shop or Product" id="">
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
    <div class="section">
        <div class="container">
            <h2 class="section-header">Shop Our Top Categories</h2>
            <div class="horizontal-scroll ">

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
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                </div>";
                }
                ?>

            </div>
        </div>
    </div>
    <div class="section shops">
        <div class="container baoth-sides-margin-14">
            <h2 class="section-header">Most Popular Products</h2>



            <div id="shopsIndicators" class="carousel slide" data-bs-interval="false" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="carousel-item">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                                <div class="card">
                                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                                    <div class="text">
                                        <h5 class="shop-name">Shop Name</h5>
                                        <h6><span id="product-count"></span> Products</h6>
                                    </div>
                                </div>
                            </div>
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
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                </div>";
                }
                ?>

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
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
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
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
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
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
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

            <!-- <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                for ($p1 = 0; $p1 < 4; $p1++) {
                                    echo "<div class='card col-md-3'>
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                </div>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                for ($p1 = 0; $p1 < 4; $p1++) {
                                    echo "<div class='card col-md-3'>
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                </div>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            <div class="row">
                                <?php
                                for ($p1 = 0; $p1 < 4; $p1++) {
                                    echo "<div class='card col-md-3'>
                    <img class='card-img-top' src='./assets/products.png' alt='Card image cap'>
                    <div class='card-body'>
                        <h5 class='card-title'>Product Name</h5>
                        <h6>Rs. <span class='card-price'>100,000.00</span></h6>
                        <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type='button' class='btn primary' value='Add to Cart'>
                    </div>
                </div>";
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div> -->



        </div>
    </div>

    <div class="section ad-banner">
        <div class="container">
            <div id="ad-banner-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#ad-banner-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#ad-banner-carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#ad-banner-carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
                <button class="carousel-control-prev" type="button" data-bs-target="#ad-banner-carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#ad-banner-carousel" data-bs-slide="next">
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
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>