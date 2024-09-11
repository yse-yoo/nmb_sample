<?php
require_once 'app.php';
require_once 'lib/Category.php';

$categories = Category::list();
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crispy Kitchen - Bootstrap 5 HTML Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">
</head>

<body>

    <?php
    include('components/nav.php')
    ?>

    <main>

        <section class="hero">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5 col-12 m-auto">
                        <div class="heroText">

                            <h1 class="text-white mb-lg-5 mb-3">Delicious Steaks</h1>

                            <div class="c-reviews my-3 d-flex flex-wrap align-items-center">
                                <div class="d-flex flex-wrap align-items-center">
                                    <h4 class="text-white mb-0 me-3">4.4/5</h4>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                </div>

                                <p class="text-white w-100">From <strong>1,206+</strong> Customer Reviews</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-7 col-12">
                        <div id="carouselExampleCaptions" class="carousel carousel-fade hero-carousel slide"
                            data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="carousel-image-wrap">
                                        <a href="https://github.com/yse-yoo"><img
                                                src="images/slide/jay-wennington-N_Y88TWmGwA-unsplash.jpg"
                                                class="img-fluid carousel-image" alt=""></a>
                                    </div>

                                    <div class="carousel-caption">
                                        <span class="text-white">
                                            <i class="bi-geo-alt me-2"></i>
                                            Manhattan, New York
                                        </span>

                                        <h4 class="hero-text">Fine Dining Restaurant</h4>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/jason-leung-O67LZfeyYBk-unsplash.jpg"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <h4 class="hero-text">Steak</h4>

                                            <span class="price-tag ms-4"><small>$</small>26.50</span>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">3.8/5</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="carousel-image-wrap">
                                        <img src="images/slide/ivan-torres-MQUqbmszGGM-unsplash.jpg"
                                            class="img-fluid carousel-image" alt="">
                                    </div>

                                    <div class="carousel-caption">
                                        <div class="d-flex align-items-center">
                                            <h4 class="hero-text">Sausage Pasta</h4>

                                            <span class="price-tag ms-4"><small>$</small>18.25</span>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center">
                                            <h5 class="reviews-text mb-0 me-3">4.2/5</h5>

                                            <div class="reviews-stars">
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star-fill reviews-icon"></i>
                                                <i class="bi-star reviews-icon"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>

                            <button class="carousel-control-next" type="button"
                                data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="video-wrap">
                <video autoplay="" loop="" muted="" class="custom-video" poster="">
                    <source src="video/production_ID_3769033.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

            <div class="overlay"></div>
        </section>

        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Special Menus</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <a href="breakfast_setumei.html"><img
                                        src="images/breakfast/brett-jordan-8xt8-HIFqc8-unsplash.jpg"
                                        class="img-fluid menu-image" alt=""></a>

                                <span class="menu-tag bg-warning">Breakfast</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Morning Fresh</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>12.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/lunch/farhad-ibrahimzade-MGKqxm6u2bc-unsplash.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Lunch</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Tooplate Soup</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/dinner/keriliwi-c3mFafsFz2w-unsplash.jpg" class="img-fluid menu-image"
                                    alt="">

                                <span class="menu-tag bg-warning">Dinner</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Premium Steak</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>45</span>

                                <del class="ms-4"><small>$</small>150</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/dinner/farhad-ibrahimzade-ZipYER3NLhY-unsplash.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Dinner</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Seafood Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>86</span>

                                <del class="ms-4"><small>$</small>124</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/breakfast/louis-hansel-dphM2U1xq0U-unsplash.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Breakfast</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Burger Set</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>20.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="images/lunch/farhad-ibrahimzade-D5c9ZciQy_I-unsplash.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Lunch</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Healthy Soup</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                    <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="menu section-padding">
            <div class="container">
                <div class="row">

                    <div class="col-12">
                        <h2 class="text-center mb-lg-5 mb-4">Soft Drinks</h2>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <a href="breakfast_setumei.html"><img
                                        src="MenuList/images/apple.jpg"
                                        class="img-fluid menu-image" alt=""></a>

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Apple Juice</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>12.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/Cola.jpg"
                                    class="img-fluid menu-image" alt="">
                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>
                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Coca Cola</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>24.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">50 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/fig.jpg" class="img-fluid menu-image"
                                    alt="">

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Fig Juice</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>45</span>

                                <del class="ms-4"><small>$</small>150</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">86 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/kyuuri.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Cucumber Juice</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>86</span>

                                <del class="ms-4"><small>$</small>124</del>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">44 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/lemon.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Lemon Juiuce</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>20.50</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">4.3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>

                                    <p class="reviews-text mb-0 ms-4">102 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/lime.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Lime Juice</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                    <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/mango.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Mango Juice</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                    <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="menu-thumb">
                            <div class="menu-image-wrap">
                                <img src="MenuList/images/apple.jpg"
                                    class="img-fluid menu-image" alt="">

                                <span class="menu-tag bg-warning">Drinks</span>
                            </div>

                            <div class="menu-info d-flex flex-wrap align-items-center">
                                <h4 class="mb-0">Lime Juice</h4>

                                <span class="price-tag bg-white shadow-lg ms-4"><small>$</small>34.20</span>

                                <div class="d-flex flex-wrap align-items-center w-100 mt-2">
                                    <h6 class="reviews-text mb-0 me-3">3/5</h6>

                                    <div class="reviews-stars">
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star-fill reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                        <i class="bi-star reviews-icon"></i>
                                    </div>
                                    <p class="reviews-text mb-0 ms-4">64 Reviews</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="BgImage"></section>
    </main>

    <footer class="site-footer section-padding">

        <div class="container">

            <div class="row">

                <div class="col-12">
                    <h4 class="text-white mb-4 me-5">Crispy Kitchen</h4>
                </div>

                <div class="col-lg-4 col-md-7 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Location</h6>

                    <p>横浜</p>

                    <a href="https://goo.gl/maps/wZVGLA7q64uC1s886" class="custom-btn btn btn-dark mt-2">図書</a>
                </div>

                <div class="col-lg-4 col-md-5 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Opening Hours</h6>

                    <p class="mb-2">月曜日 - 金曜日</p>

                    <p>10:00 午前 - 08:00 午後</p>

                    <p>Tel: <a href="tel: 010-02-0340" class="tel-link">010-02-0340</a></p>
                </div>

                <div class="col-lg-4 col-md-6 col-xs-12 tooplate-mt30">
                    <h6 class="text-white mb-lg-4 mb-3">Social</h6>

                    <ul class="social-icon">
                        <li><a href="#" class="social-icon-link bi-facebook"></a></li>

                        <li><a href="#" class="social-icon-link bi-instagram"></a></li>

                        <li><a href="https://twitter.com/search?q=tooplate.com&src=typed_query&f=live" target="_blank"
                                class="social-icon-link bi-twitter"></a></li>

                        <li><a href="#" class="social-icon-link bi-youtube"></a></li>
                    </ul>

                    <p class="copyright-text tooplate-mt60">GS21HMD Team
                        <br>Design: <a rel="nofollow" href="https://www.tooplate.com/" target="_blank">Bikash</a>
                    </p>

                </div>

            </div><!-- row ending -->

        </div><!-- container ending -->

    </footer>

    <!-- Modal -->
    <div class="modal fade" id="BookingModal" tabindex="-1" aria-labelledby="BookingModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="mb-0">Reserve a table</h3>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body d-flex flex-column justify-content-center">
                    <div class="booking">

                        <form class="booking-form row" role="form" action="#" method="post">
                            <div class="col-lg-6 col-12">
                                <label for="name" class="form-label">Full Name</label>

                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="email" class="form-label">Email Address</label>

                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control"
                                    placeholder="your@email.com" required>
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="phone" class="form-label">Phone Number</label>

                                <input type="telephone" name="phone" id="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
                                    class="form-control" placeholder="123-456-7890">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="people" class="form-label">Number of persons</label>

                                <input type="text" name="people" id="people" class="form-control"
                                    placeholder="12 persons">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="date" class="form-label">Date</label>

                                <input type="date" name="date" id="date" value="" class="form-control">
                            </div>

                            <div class="col-lg-6 col-12">
                                <label for="time" class="form-label">Time</label>

                                <select class="form-select form-control" name="time" id="time">
                                    <option value="5" selected>5:00 PM</option>
                                    <option value="6">6:00 PM</option>
                                    <option value="7">7:00 PM</option>
                                    <option value="8">8:00 PM</option>
                                    <option value="9">9:00 PM</option>
                                </select>
                            </div>

                            <div class="col-12">
                                <label for="message" class="form-label">Special Request</label>

                                <textarea class="form-control" rows="4" id="message" name="message"
                                    placeholder=""></textarea>
                            </div>

                            <div class="col-lg-4 col-12 ms-auto">
                                <button type="submit" class="form-control">Submit Request</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer"></div>

            </div>

        </div>
    </div>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>