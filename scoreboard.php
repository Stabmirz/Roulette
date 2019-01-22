<?php

// connect to the database and start the session
include "includes/connect.php";

// get the Summary of the Game
$scores=[];
$query = $conn->query("SELECT * FROM scoreboard LIMIT 100 ");
while ($row = $query->fetch_object()) {
    $scores[]=$row;
}

include "views/scoreboard.php";
