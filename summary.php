<?php
// connect to the database and start the session
include "includes/connect.php";

// get ID from the session
$mail = $_SESSION['email'];

// else redirect to login
if(empty($mail)) {
    header("Location: index.php");
    exit;
}

//truncate bets table
$query = $conn->query("TRUNCATE TABLE bets");

// get the Summary of the Game
$results=[];
$query = $conn->query("SELECT w_number, w_color, winners, losers FROM scoreboard LIMIT 5 ");
while ($row = $query->fetch_object()) {
    $results[]=$row;
}
include "views/summary.php";