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
                        <h1 class="main-title">Shop Online</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
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

    <div class="section products">
        <div class="container">
            <div class="filter-tool col-md-3">
                <div class="reset-btn-sec">
                    <h6>Filter</h6>
                    <input type="button" value="Reset">
                </div>
                <div class="tool price-filter">
                    <h6>Price</h6>
                    <div class="range-selector">
                        <input type="range" name="price-range" id="price-range" value="100000" min="0" max="100000" onmousemove="showPriceRange(this.value)">
                        <p>max price Rs.<span id="rangeValue"></span></p>
                    </div>
                    <select name="" id="priceVariant">
                        <option value="l-h">Lower to Higher</option>
                        <option value="h-l">Higher to Lower</option>
                    </select>

                </div>
                <div class="tool cat-filter">
                    <h6>Category</h6>
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
                    <h6>City</h6>
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
                <input type="button" value="Apply" onclick="filterApply(3,13)">
            </div>
        </div>
    </div>

    <?php include "./partials/home-footer.php"; ?>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/tools.js"></script>
</body>

</html>