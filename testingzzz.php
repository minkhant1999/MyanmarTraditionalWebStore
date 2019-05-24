<?php
function loginCheck($usr, $pwd){
    require "connection.php";
    $email = mysqli_real_escape_string($con,$usr);
    
    $password = mysqli_real_escape_string($con,$pwd);
    $user_authentication_query="select email,password from users where email='$email' and password='$password'";
    $user_authentication_result=mysqli_query($con,$user_authentication_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($user_authentication_result);
    if($rows_fetched==0){
        return True;
    }else{
        return False;
    }
}
$check = loginCheck('asdasdasail.com', '12345678');
if ($check==True) {
    echo "Pass";
}
else{
    echo "Fail";

}
loginCheck($usr, $pwd);
?>