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
            
            require "header2.php";
        ?>

        <!--body part start-->
        <div class="site-blocks-cover" style="background-image: url(images/home.jpg);" data-aos="fade">
            <div class="container">
                <div class="row align-items-start align-items-md-center justify-content-end">
                    
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
                    <!--musical instruments-->
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                        <a class="block-2-item" href="#">
                            <figure class="image">
                                <img width="800" height="300" src="images/mmharp.jpg" alt="" class="img-fluid">
                            </figure>
                            <div class="text">
                                <span class="text-uppercase">Collections</span>
                                <h3>Musical Instruments</h3>
                                <input type="radio" name="gender" id="male" value="male">
                            </div>
                        </a>
                    </div>
                    <!--paintings-->
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
                    <!--others-->
                    <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                        <a class="block-2-item" href="#">
                            <figure class="image">
                                <img width="800" height="300" src="images/shanbag.jpg" alt="" class="img-fluid">
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