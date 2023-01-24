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
<style>
    .container-fluid {
        overflow: hidden;
        position: relative;
    }

    .container {
        background-color: red;
    }

    .slider-services {
        background-color: blue;
        position: initial;
        /*important, allows container-fluid to be the relative*/
    }

    .slick-slide {
        height: 150px;
    }

    .slick-slide .col-xs-12>div {
        background-color: orange;
    }

    .slick-list {
        overflow: visible;
        /*important, allows overflow slides to be visible*/
    }

    .slick-next:before,
    .slick-prev:before {
        color: black;
    }

    .slick-next,
    .slick-prev {
        height: 100%;
        width: 150px;
        z-index: 2;
    }

    .slick-prev,
    .slick-prev:hover {
        left: 0;
        background-image: linear-gradient(to right, #fff, rgba(255, 255, 255, 0));
    }

    .slick-next,
    .slick-next:hover {
        right: 0;
        background-image: linear-gradient(to left, #fff, rgba(255, 255, 255, 0));
    }

    .slick-next.slick-disabled:before,
    .slick-prev.slick-disabled:before {
        display: none;
    }

    .slider-dots {
        position: relative;
    }

    .slick-dots {
        bottom: 5px;
    }
</style>

<body>
    <div class="container">
        This is a reference text

    </div>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="slider-services">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>1</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>2</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>3</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>4</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>5</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>6</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>7</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>8</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>9</div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div>10</div>
                    </div>
                </div>
                <div class="slider-dots"></div>
            </div>

        </div>
    </div>
    <script>
        $(function() {
            $('.slider-services').slick({
                dots: true,
                appendDots: '.slider-dots',
                arrows: true,
                infinite: false,
                slidesToScroll: 3,
                slidesToShow: 3,
                accessibility: true,
                variableWidth: false,
                focusOnSelect: false,
                centerMode: false,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToScroll: 2,
                            slidesToShow: 2
                        }
                    },
                    {
                        breakpoint: 600,
                        settings: {
                            slidesToScroll: 1,
                            slidesToShow: 1
                        }
                    }
                ]
            });
        });
    </script>
</body>

</html>