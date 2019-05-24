<?php
    function register(){
        require "connection.php";
        
        //submit name
        $name= mysqli_real_escape_string($con,$_POST['name']);
        //submit email
        $email=mysqli_real_escape_string($con,$_POST['email']);
        //submit password
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $user_registration_query="insert into users(name,email,password) values ('$name','$email','$password')";
        //
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        echo "User successfully registered";
    }

register();
?>