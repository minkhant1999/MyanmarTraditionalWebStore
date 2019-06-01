<?php
function loginCheck(){
    //$usr = $_POST['email'];
    //$pwd = $_POST['password'];
    require "connection.php";
    //echo "Connected!";
    //$email = mysqli_real_escape_string($con,$_POST['email']);
    //$password = mysqli_real_escape_string($con,$_POST['password']);
    echo "Testing with Wrong login:";
    echo "\n";
    $user_authentication_query="select email,password from users where email='unittest@gil.com' and password='12121212'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    //echo "Fetched";
    if($rows_fetched== true){
        echo "Pass";
    }else{
        echo "Fail";
    }
    echo "<br>";
    echo "Testing with Correct login:";
    echo "\n";
    $user_authentication_query="select email,password from users where email='unittest@gmail.com' and password='12345678'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    //echo "Fetched";
    if($rows_fetched== true){
        echo "Pass";
    }else{
        echo "Fail";
    }
}
loginCheck();
?>