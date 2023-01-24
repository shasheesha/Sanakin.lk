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
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
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
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section shops">
        <div class="container">
            <h2 class="section-header">Most Popular Products</h2>
            <div class="row">
                <div class="card">
                    <div>
                        
                    </div>
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
            <div class="row">
                <div class="card col-md-3">
                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                    <div class="text">
                        <h5 class="shop-name">Shop Name</h5>
                        <h6><span id="product-count"></span> Products</h6>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                    <div class="text">
                        <h5 class="shop-name">Shop Name</h5>
                        <h6><span id="product-count"></span> Products</h6>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                    <div class="text">
                        <h5 class="shop-name">Shop Name</h5>
                        <h6><span id="product-count"></span> Products</h6>
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="shop-profile" src="./assets/icons/shop.svg" alt="">
                    <div class="text">
                        <h5 class="shop-name">Shop Name</h5>
                        <h6><span id="product-count"></span> Products</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section most-popular products">
        <div class="container">
            <h2 class="section-header">Most Popular Products</h2>
            <div class="row">
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>
                <div class="card col-md-3">
                    <img class="card-img-top" src="./assets/products.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Product Name</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <input type="button" class="btn primary" value="Add to Cart">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php include "./partials/home-footer.php"; ?>
    <script src="./js/bootstrap.js"></script>
</body>

</html>