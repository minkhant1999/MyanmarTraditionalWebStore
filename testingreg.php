<?php
function registerCheck(){
    
    require "connection.php";
    echo "Testing with registered email:";
    echo "\n";
   
    $duplicate_user_query="select id from users where email='unittest@gmail.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        echo"Fail, email already exists in our database!";   
    } 
    else{
        echo "Pass";
    }
    echo "<br>";
    echo "Testing with new email:";
    echo "\n";
    $duplicate_user_query="select id from users where email='newtest@gmail.com'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        echo"Fail, email already exists in our database!";   
    } 
    else{
        echo "Pass";
    }    
}
registerCheck();
?>