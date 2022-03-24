<?php
	session_start();
    include("../login/connection.php");
    include("../login/functions.php");
    $user_data = check_login($con);

  // Create database connection
  	$db = mysqli_connect("localhost", "root", "", "iwakili_login");
	
  	// Initialize message variable
  	$msg = "";
	
  	// If upload button is clicked ...
  	if (isset($_POST['upload'])) {
  		// Get image name
  		$image = $_FILES['image']['name'];
  		// Get text
		$user_id = $user_data['user_id'];
  		$image_text = mysqli_real_escape_string($db, $_POST['text']);
  		$image_text2 = mysqli_real_escape_string($db, $_POST['text2']);
	
  		// image file directory
  		$target = "../images-uploads/".basename($image);
	
  		$sql = "INSERT INTO profile (image, text, user_id, location) VALUES ('$image', '$image_text', '$user_id', '$image_text2')";
  		// execute query
  		mysqli_query($db, $sql);
            header("Location: ../login/index.php");
		
  		if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  			$msg = "Image uploaded successfully";
  		}else{
  			$msg = "Failed to upload image";
  		}
  	}
  	$result = mysqli_query($db, "SELECT * FROM profile");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="profile.css">
</head>
<body>
  		<div class="container-fluid bg-dark one d-flex align-items-center">
			  
      		<div class="container-fluid fifty bg-black text-white p-0">
				 <div class="card-header w3-teal text-center">
					  <h1>PROFILE</h1>
			  	</div>
				<form method="POST" action="profile.php" class="container-fluid" enctype="multipart/form-data">
  					<input type="hidden" name="size" value="1000000">
  					<div class="p-2">

						<label for="">Choose Image</label>
						<br><br>
  					  	<input type="file" name="image" class = "btn btn-secondary form-control">
  					</div>
					  <hr>
  					<div class="p-2">
						  <label for="">Proffession</label><br><br>
    				  	<input 
						  class = "w3-input"
    				  		id="text" 
    				  		name="text" 
    				  		placeholder="Enter your proffession...">
  					</div>
					  <hr>

					  <div class="p-2">
						  	<label for="">Location</label>
							  <br><br>
    				  		<input class = "w3-input" id="text2" name="text2" placeholder="Enter your Location...">
  					</div>
  					<div class= "pb-5 pt-2">
  						<button type="submit" name="upload" class="btn btn-primary m-2">POST</button>

  					</div>
  				</form>
			</div>
		</div>
</body>
</html>

</body