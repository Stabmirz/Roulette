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

//truncate bets and results table
$query = $conn->query("TRUNCATE TABLE bets");
$query = $conn->query("TRUNCATE TABLE results");



// get the Summary of the Game
$scores=[];
$query = $conn->query("SELECT * FROM scoreboard ORDER BY date DESC LIMIT 5 ");
while ($row = $query->fetch_object()) {
    $scores[]=$row;
}

// get the player
$query = $conn->query("SELECT * FROM players WHERE email='$mail'");
while ($row = $query->fetch_object()) {
    $players[]=$row;
    $uname=$players[0]->uname;
}

$query=$conn->query("SELECT users FROM (SELECT users FROM scoreboard ORDER BY date DESC LIMIT 5) scoreboard WHERE users='$uname'" );
$user = $query->num_rows > 0 ;

if(!$user){
    header("Location: bet.php");
}
include "views/summary.php";