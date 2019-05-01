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
    <table border=1 cellpadding=1 cellspacing=1>
        <tr>
            <th>Name</th>
            <th>Category</th>
            <th>price</th>
            <th>image</th>
            <th>Delete</th>
        </tr>
        <?php
            //connect with mysql
            $con = mysqli_connect('localhost','root'.'');
            //select the database
            mysqli_select_db($con,'agile');
            //select query
            $sql = "select * from products";
            //execute the query
            $records=mysqli_query($con,$sql);

            while($row = mysqli_fetch_array($records))
            {   
                echo "<tr>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['category']."</td>";
                echo "<td>".$row['price']."</td>";
                echo "<td>";?><img src="<?php echo $row['image']; ?>" height="100" width="100"><?php echo "</td>";
                echo "<td><a href=display.php?id=".$row['id'].">Delete</a></td>";
                
            }

        ?>
    </table>

</body>
</html>