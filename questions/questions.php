<?php
    session_start();
    include("../login/connection.php");
    include("../login/functions.php");
    include("pfunctions.php");
    include("pconnection.php");
    $user_data = check_login($con);
    
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        
        // posted
        $question = $_POST["que"];
        $poster_id = $user_data['user_id'];
        echo $poster_id, $question;
        if (!empty($question)){
            $question_id = randomId(17);
            echo $question_id;
            $querys = "insert into questions (question, question_id, poster_id) values ('$question', '$question_id', '$poster_id')";
            
            mysqli_query($con,  $querys);
            header("Location: ../login/index.php");
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
    <title>Ask</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
    
<div class="container-fluid p-5">
    <div id="id01" class="w3-modals height">
        <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright" style = "z-index: 200; background-color: black; color: white;">&times;</span>

        <div class="container-fluid">
            <form class="card p-5" method = "post">
                <div class="card-header w3-teal">
                    <h1>Your ask question</h1>
                </div>
                <div class="card-content">
                    <br><br>
                    <label for="que">Question</label>
                    <input type="text" name="que" class="w3-input">
                    <br><br>
                    <input type="submit" value= "submit"  class = "btn btn-primary">
                </div>
            </form>
            

        </div>


    </div>
</div>
</body>
</html>
