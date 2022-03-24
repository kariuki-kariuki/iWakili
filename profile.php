<?php
	session_start();
    include("login/connection.php");
    include("login/functions.php");
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

  	// image file directory
  	$target = "images-uploads/".basename($image);

  	$sql = "INSERT INTO images (image, text, user_id) VALUES ('$image', '$image_text', $user_id)";
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

while($row2 = $results -> fetch_assoc() && $row3 = $result3 -> fetch_assoc()){
                                            $count += 1;
                                            echo "working";
                                            if($row['question_id'] === $row2['question_id'] && $row2['responder_id'] === $row3['user_id']) {
                                                echo '
                                                <p> ' .$count.'
                                                <p>
                                                    '.$row2['answer'].'
                                                </p>';
                                            } else {
                                                echo '<p> Not answerd</p>';
                                            }
                                                
                                        }

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
</head>
<body>
      <form method="POST" action="profile.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="text" 
      	placeholder="Enter your proffession..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>

</body>