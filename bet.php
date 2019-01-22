<?php


$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;
// connect to the database and start the session
include "includes/connect.php";

// get ID from the session
$mail = $_SESSION['email'];

// else redirect to login
if(empty($mail)) {
    header("Location: index.php");
    exit;
}

// get the player
$query = $conn->query("SELECT * FROM players WHERE email='$mail'");
while ($row = $query->fetch_object()) {
    $player[]=$row;
    $chip=$player[0]->chip;
    $uname=$player[0]->uname;
    $id=$player[0]->id;
}


// get the Participents
$bets=[];
$query = $conn->query("SELECT A.uname, B.amount, B.color,B.number FROM players A right join bets B on A.id=B.uid ");
while ($row = $query->fetch_object()) {
    $bets[]=$row;
}

include "views/bet.php";
