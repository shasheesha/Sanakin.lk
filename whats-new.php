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
include "./partials/home-header.php";?>

<body>

    <div class="section hero2-sec">
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
                        <h1 class="main-title">What's New to Marcket</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                        <!-- <div class="search-bar">
                            <input type="search" class="search" name="Search" placeholder="Search Here Shop or Product" id="">
                            <input type="button" id="search-btn" class="search-btn btn primary" value="Search">
                        </div> -->

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="section products">
        <div class="container">
            <div class="row">
                <!-- <div class="filter-tool col-md-3">
                    <div class="tool reset-btn-sec">
                        <h5>Filter</h5>
                        <input type="button" class="min-btn" value="Reset">
                    </div>
                    <div class="tool price-filter">
                        <h5>Price</h5>
                        <div class="range-selector">
                            <input type="range" name="" id="priceRangeInput" value="100000" min="0" max="100000">
                            <p>max price Rs.<span id="rangeValue">100000</span></p>
                        </div>
                        <select name="" id="priceVariant">
                            <option value="l-h">Lower to Higher</option>
                            <option value="h-l">Higher to Lower</option>
                        </select>

                    </div>
                    <div class="tool cat-filter">
                        <h5>Category</h5>
                        <div class="cat-values">
                            <div class="cat-item">
                                <input type="checkbox" name="category" id="10" value="cat1">
                                <label for="cat1">Category 1</label>
                            </div>
                            <div class="cat-item">
                                <input type="checkbox" name="category" id="11" value="cat2">
                                <label for="cat2">Category 2</label>
                            </div>
                            <div class="cat-item">
                                <input type="checkbox" name="category" id="12" value="cat3">
                                <label for="cat3">Category 3</label>
                            </div>
                            <div class="cat-item">
                                <input type="checkbox" name="category" id="13" value="cat4">
                                <label for="cat4">Category 4</label>
                            </div>
                        </div>
                    </div>
                    <div class="tool city-filter">
                        <h5>City</h5>
                        <div class="city-values">
                            <div class="city-item">
                                <input type="checkbox" name="a" id="0" value="cat1">
                                <label for="city1">city 1</label>
                            </div>
                            <div class="cat-item">
                                <input type="checkbox" name="a" id="1" value="cat2">
                                <label for="city2">city 2</label>
                            </div>
                            <div class="cat-item">
                                <input type="checkbox" name="a" id="2" value="cat3">
                                <label for="city3">city 3</label>
                            </div>
                            <div class="cat-item">
                                <input type="checkbox" name="a" id="3" value="cat4">
                                <label for="city4">city 4</label>
                            </div>
                        </div>
                    </div>
                    <input type="button" id="apply-btn" value="Apply" onclick="filterApply(3,13)">
                </div> -->

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
    <script src="./js/tools.js"></script>
    <script src="./js/product-pagination.js"></script>
</body>

</html>