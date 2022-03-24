<?php
    session_start();
    include("connection.php");
    include("functions.php");
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        // posted
        $full_name = $_POST["fName"];
        $user_name = $_POST["userName"];
        $password = $_POST['psswd'];
         echo $full_name, $user_name, $password;
        if (!empty($user_name)  && !empty($password) && !is_numeric($user_name ) && !empty($full_name)){
            $user_id = random_num(15);
            $query = "insert into users (user_id, user_name, full_name, password) values ('$user_id', '$user_name', '$full_name', '$password')";
            
            mysqli_query($con,  $query);
            header("Location: login.php");
            die;
        } else {

        }
    }
 
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
    <link rel="stylesheet" href="../CSS/login.css">
</head>
<body>
    <div class="container-fluid pt-5  text-white height">
        <div class="container d-flex justify-content-center ">
            <form  method="post" class="half pt-5 w3-container bg-dark w3-card"> 
                <div class="w3-card-header p-3 w3-teal text-center">
                    <h1>SignUp</h1>
                </div>
                <br>
                <label for="fName">Full Name</label>
                <input type="text" name = "fName" class="w3-input" required>

                <br>
                <label for="userName">Choose userName</label>
                <input type="text" name = "userName" class="w3-input" requred>

                <br>
                <label for="psswd">Choose Password</label>
                <input type="password" name="psswd" class="w3-input" required>

                <br>
                <!-- <label for="psswd2" >Confirm Password</label> -->
                <!-- <input type="password" password_hash class="w3-input" required password_hash> -->

                <br>
                <input type="submit" value="Submit" class="btn btn-primary">
                <br><br>
            </form>
        </div>
    </div>

</body>
</html>