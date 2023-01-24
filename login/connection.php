<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "iwakili_login";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)){
    die("failed to connect");
}