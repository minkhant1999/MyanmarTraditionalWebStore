<?php
    require 'connection.php';
    session_start();
    if(isset($_SESSION['email'])){
        header('location: products.php');
    }
?>

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
                require 'admin_header.php';
                //insert image
                $msg = '';
                if($_SERVER['REQUEST_METHOD']=='POST'){
                $image = $_FILES['image']['tmp_name'];
                $img = file_get_contents($image);
                $con = mysqli_connect('localhost','root','','agile') or die('Unable To connect');
                //
                //submit name
                $name= mysqli_real_escape_string($con,$_POST['name']);
                //submit code
                $code= mysqli_real_escape_string($con,$_POST['code']);
                //submit image
                $price=mysqli_real_escape_string($con,$_POST['image']);
                //submit price
                $price=mysqli_real_escape_string($con,$_POST['price']);
                //submit category
                $category= mysqli_real_escape_string($con,$_POST['category']);              
                $sql = "insert into tblproduct (name,code,image,price,category) values('$name','$code','$image','$price','$category')";

                $stmt = mysqli_prepare($con,$sql);

                mysqli_stmt_bind_param($stmt, "s",$img);
                mysqli_stmt_execute($stmt);

                $check = mysqli_stmt_affected_rows($stmt);
                if($check==1){
                    $msg = 'Image Successfullly Uploaded';
                }else{
                    $msg = 'Error uploading image';
                }
                mysqli_close($con);
            }
        ?>
        
        <?php
            echo $msg;
            ?>

        <br><br>
        
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