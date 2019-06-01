<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "agile");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
		//$image_text = mysqli_real_escape_string($db, $_POST['image_text']);
		//Get name
		$name = mysqli_real_escape_string($db, $_POST['name']);                                                                                  
		//Get code
		$code = mysqli_real_escape_string($db, $_POST['code']);
		//Get price
		$price = mysqli_real_escape_string($db, $_POST['price']);
		//Get category
		$category = mysqli_real_escape_string($db, $_POST['category']);

  	// image file directory
  	$target = "images/".basename($image);

	  $sql = "INSERT INTO tblproduct (name,image,code,price,category) VALUES ('$name','$image','$code','$price','$category')";
	  echo "Uploaded Successfully";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }
   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>
</head>
<body>
<div id="content">
 
  <form method="POST" action="" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
		<div>
  	  <input type="text" name="name" placeholder="Item Name">
  	</div>
		<div>
  	  <input type="text" name="code" placeholder="Code">
  	</div>
		<div>
  	  <input type="text" name="price" placeholder="US$">
  	</div>
		<div>
  	  <input type="text" name="category" placeholder="Category">
  	</div>
  	<div>
  		<button type="submit" name="upload">ADD</button>
  	</div>
  </form>
</div>
</body>
</html>