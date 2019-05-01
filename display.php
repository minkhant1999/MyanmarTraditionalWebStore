<?php
    //connect with mysql
    $con = mysqli_connect('localhost','root'.'');
    //select the database
    mysqli_select_db($con,'agile');
    //select query
    $sql = "Delete from products where id='$_GET[id]'";
    //execute the query
    if($records=mysqli_query($con,$sql))
        header("refresh:0.5; url=display_products.php");
    else
        echo "Not Deleted";
?>