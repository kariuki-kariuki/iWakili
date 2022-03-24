<?php
    session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);

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
    <link rel="stylesheet" href="style.css">
    <script src="https://code.iconify.design/2/2.2.0/iconify.min.js"></script>
    
</head>
<body>
    <div class="body bg-black">
        <div class="container-fluid bg-dark text-white">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2 ">
                        <h1 class="name">iWakili</h1>
                    </div>
                    <div class="col-sm-4">
                        <div class="-container-fluid d-flex justify-content-around align-items-center height">
                            <i class="fa fa-home fa-fw  size- px-5 text-white"></i>
                            <a href="../questions/questions.php"><i class="fa fa-clipboard-list fa-fw  size- px-5 text-white"></i></a>
                            <a href="../questions/displayq.php"><i class="fa fa-highlighter fa-fw  size- px-5 text-white"></i></a>
                            <i class="fa fa-user-friends fa-fw  size- px-5 text-white"></i>
                            <i class="fa fa-bell fa-fw red size- px-5 "></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="container-fluid d-flex justify-content-between align-items-center height">
                            <input type="search" name="search" id="search" class="bg-black" placeholder="search">
                            <button class="mybtns">learn-more + </button>
                            <span class="iconify" data-icon="bi:person-circle" style="color: #99f;"></span>
                            <a href="logout.php"><button class="btn btn-danger">Log Out</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container bg-black p-0">
            <div class="row">
                <hr>
                <hr>
                <div class="col-sm-3 p-0">
                    <div class="container-fluid bg-dark text-white p-2 overflow-auto rounded-lg another">
                        <div class="p-5  justify-content-around d-flex  height1">
                            <div class="image pb-5 text-center text-white">
                                <div class="image pb-3">
                                    <img src="../Images/confidential.png" alt="" class="img-fluid profile-img bg-black">
                                    <p class="pt-2">
                                        <?php echo $user_data["user_name"]; ?>
                                    </p>
        
                                </div>
                                <div class="proffession">
                                    <p>I am Software developer</p>
                                </div>
                                <div class="about">
                                    <p>I am an alumni of moringa school passionate in Software development and anything tech</p>
                                </div>
                                <br><br>
                                <a href="../profile/profile.php"><button class="btn btn-primary">Edit</button></a>
                            </div>
        
        
                        </div>
                    </div>
                </div>
        
                <div class="col-sm-7 p-0">
                    <div class="container-fluid overflow-auto text-white another ">
                        <hr>
                        <div class="containerfluid ">
                            <div class="ask-more p-3 bg-dark">
                                <h4>Get more with iWakili+</h4>
                                <p>Browse ad-free and access exclusive content from participating creators and Spaces.</p>
                                <button class="btn btn-success px-2">learn-more</button>
                            </div>
                            <hr>
                        </div>
                        <div class="container-fluid answers bg-dark pt-2 mb-2">
                            <div class="poster">
                                <img src="../services_images/man-lawyer1.png" alt="" width="50px" height="50px" class="img-fluid borders">
                            </div>
                            <div class="answer-text py-2">
                                <h3 class="question">
                                    What are the happiest pictures you have seen?
                                </h3>
                                <p>
                                    Finding happiness in life doesn’t have to be complicated. In fact, it can be simple as looking at a picture. A smile
                                    just might creep onto your face, in fact, if you look at any of the 25 photos below. They may be some of the happiest
                                    pictures online, and they’re bound to inspire you to smile. Life is good. Especially when you think about…

                                </p>
                                <button class="btn btn-primary">Readmore</button>
                                <br>
                            </div>
                        </div>

                        <div class="container-fluid answers bg-dark pt-2 mb-2">
                            <div class="poster">
                                <img src="../services_images/man-lawyer1.png" alt="" width="50px" height="50px" class="img-fluid borders">
                            </div>
                            <div class="answer-text py-2">
                                <h3 class="question">
                                    What are the happiest pictures you have seen?
                                </h3>
                                <p>
                                    Finding happiness in life doesn’t have to be complicated. In fact, it can be simple as looking at a picture.
                                    A smile
                                    just might creep onto your face, in fact, if you look at any of the 25 photos below. They may be some of the
                                    happiest
                                    pictures online, and they’re bound to inspire you to smile. Life is good. Especially when you think about…
                        
                                </p>
                                <button class="btn btn-primary">Readmore</button>
                                <br>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-sm-2">
                    <div class="px-4 text-white fit-content">
                        <div class="item1">
                            <p>Spaces</p>
                        </div>
                        <div class="item1">
                            <p>Coporate-law</p>
                        </div>
                        <div class="item1">
                            <p>Civil-law</p>
                        </div>
                        <div class="item1">
                            <p>Pro-bono</p>
                        </div>
                        <div class="item1">
                            <p>Financial-law</p>
                        </div>
                        <div class="item1">
                            <p>International-law</p>
                        </div>
                        <div class="item1">
                            <p>Public-law</p>
                        </div>
                        <div class="item1">
                            <p>Coporate-law</p>
                        </div>
                        <div class="item1">
                            <p>Children-law</p>
                        </div>
                        <div class="item1">
                            <p>Coporate-law</p>
                        </div>
                        <div class="item1">
                            <p>Finance-law</p>
                        </div>
                        <div class="item1">
                            <p>Which-law</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html> 
