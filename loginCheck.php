<?php

function loginCheck(){
    require "connection.php";
    $email = mysqli_real_escape_string($con,$_POST['email']);
    
    $password = mysqli_real_escape_string($con,$_POST['password']);
    $user_authentication_query="select email,password from users where email='$email' and password='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        return True;
    }else{
        return False;
    }
}

if($_POST['email'] == 'admin@gmail.com' && loginCheck() == TRUE){
        header('location: admin_panel.php');
    }
else{
    echo "Wrong Username";
}
if($_POST['email'] != 'admin@gmail.com' && loginCheck() == TRUE){
    $_SESSION['emailSession']=$_POST['email'];
    
    header('location: index2.php');
    
}
else{
    echo "Wrong Username & Password";
}

?>