<!DOCTYPE html>
<html>

<head>
    <title>Myanmar Traditional Web Store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <!--yangoods-->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=EB+Garamond:400|Karla:400,700,700i,400i|Raleway:600,700,700i,400i,400,200">
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
    <div>
        <?php
                require 'header.php';
            ?>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><b>SIGN UP</b></h1>
                    <form method="post" action="user_registration_script.php">
                        <!--Name-->
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                        </div>
                        <!--email-->
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="true"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <!--password-->
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"
                                placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                        </div>
                        <!--Sign up botton-->
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Sign Up">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>
        <footer class="footer">
            <div class="container">
                <center>
                    <?php
                    require 'footer.php';
                ?>
                </center>
            </div>
        </footer>

    </div>
</body>

</html>