<!DOCTYPE html>
<html lang="en">

<head>
    <title>Myanmar Traditional Web Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <!--yangoods-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=EB+Garamond:400|Karla:400,700,700i,400i|Raleway:600,700,700i,400i,400,200">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!--everything in body-->
    <div class="site-wrap">
        <?php
            require "connection.php";
            echo "connected!!!!!";
            require "header.php";
        ?>

        <!--body part start-->
        <div class="site-blocks-cover" style="background-image: url(images/home.jpg);" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                        <h1 class="mb-2">Text</h1>
                        <div class="intro-text text-center text-md-left">
                            <p class="mb-4">Text--Text--Text--Text--Text</p>
                            <p>
                                <a href="products.php" class="btn btn-sm btn-primary">Shop Now</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--body part end-->
        <!--service part start-->
        
        <!--service part end-->

        <!--collection part start-->
        <div class="site-section site-blocks-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                        <a class="block-2-item" href="#">
                            <figure class="image">
                                <img src="images/mmharp.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Musical Instruments</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                        <a class="block-2-item" href="#">
                            <figure class="image">
                                <img width="800" height="300" src="images/painting.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Paintings</h3>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                        <a class="block-2-item" href="#">
                            <figure class="image">
                                <img src="images/shanbag.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Others</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--collection part end-->

        <!--
        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="nonloop-block-3 owl-carousel">
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/cloth_1.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Tank Top</a></h3>
                                        <p class="mb-0">Finding perfect t-shirt</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Corater</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/cloth_2.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Polo Shirt</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/cloth_3.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">T-Shirt Mockup</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="block-4 text-center">
                                    <figure class="block-4-image">
                                        <img src="images/shoe_1.jpg" alt="Image placeholder" class="img-fluid">
                                    </figure>
                                    <div class="block-4-text p-4">
                                        <h3><a href="#">Corater</a></h3>
                                        <p class="mb-0">Finding perfect products</p>
                                        <p class="text-primary font-weight-bold">$50</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        featured products part end-->

        <!--
        <div class="site-section block-8">
            <div class="container">
                <div class="row justify-content-center  mb-5">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Big Sale!</h2>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7 mb-5">
                        <a href="#"><img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
                    </div>
                    <div class="col-md-12 col-lg-5 text-center pl-md-5">
                        <h2><a href="#">50% less in all items</a></h2>
                        <p class="post-meta mb-4">By <a href="#">Carl Smith</a> <span class="block-8-sep">&bullet;</span> September 3, 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iste dolor accusantium facere corporis ipsum animi deleniti fugiat. Ex, veniam?</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Shop Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        big sale part end-->
        <!--footer part start-->
        <?php
        require "footer.php";
        ?>
        <!--footer part end-->
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>

    <script src="js/main.js"></script>

</body>

</html>