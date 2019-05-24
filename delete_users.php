<?php
    function deleteUsers()
    {
    //connect with mysql
    $con = mysqli_connect('localhost','root'.'');
    //select the database
    mysqli_select_db($con,'agile');
    //select query
    $sql = "Delete from users where id='$_GET[id]'";
    //execute the query
    if($records=mysqli_query($con,$sql))
        header("refresh:0.5; url=delete_users_by_admin.php");
    else
        echo "Not Deleted";
    }
    deleteUsers();
?>