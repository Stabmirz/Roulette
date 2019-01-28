<?php
// connect to the database and start the session
include "includes/connect.php";

// get ID from the session
$mail = $_SESSION['email'];

// else redirect to login
if(empty($mail)) {
    header("Location: login.php");
    exit;
}


$win_number = rand(0, 35);
$arr = array("Red"=>"red","Green"=>"green","Black"=>"black");
$win_color = (array_rand($arr,1));

$query = $conn->query("INSERT INTO results VALUES ('', '$win_number', '$win_color')");

//redirect to result page
header("Refresh:0; url=result.php");
