<?php
    function register(){
        //take the database connection
        require "connection.php";
        
        //submit name
        $name= mysqli_real_escape_string($con,$_POST['name']);
        $pattern='/^[A-Za-z]+/';
        if(!preg_match($pattern,$name)){
        echo "Only Letters allowed";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
    }
        //submit email
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
        if(!preg_match($regex_email,$email)){
        echo "Incorrect email. Redirecting you back to registration page";
        ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
        <?php
        
    }
        //submit password
        $password=md5(md5(mysqli_real_escape_string($con,$_POST['password'])));
        //contact
        $contact=mysqli_real_escape_string($con,$_POST['contact']);
        //address
        $postal_code=mysqli_real_escape_string($con,$_POST['postal_code']);
        //check duplicate email
        $duplicate_user_query="select id from users where email='$email'";
        $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
        $rows_fetched=mysqli_num_rows($duplicate_user_result);
        if($rows_fetched>0){
            echo "E mail is already in exist";
        }else{
        $user_registration_query="insert into users(name,email,password,contact,postal_code) values ('$name','$email','$password','$contact','$postal_code')";
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        }
        ?>
<script>
window.alert("User registration Successful");
</script>

<meta http-equiv="refresh" content="0.1;url=index2.php" />;
<?php
    }

register();
?>