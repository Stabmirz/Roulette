<?php

// get values from POST
$id= $player[0]->id;
$chip= $player[0]->chip;
$amount = $_POST['amount'];
$color = $_POST['color'];
$number = $_POST['number'];
// connect to the database and start the session
include "includes/connect.php";

// is Username in Players table
$result = $conn->query("SELECT A.uname, B.amount, B.color,B.number FROM players A right join bets B on A.id=B.uid ");
$isValid = $result->num_rows > 0;

// else username already taken
if($isValid) {
	header("Location: bet.php?error=You have already bet");
	exit;
}
//chick available chip amount
if($chip<$amount){
	header("Location: bet.php?error=You don't have enough chip to bet");
	exit;
}

// add it to the database
$conn->query("
	INSERT INTO bets(id, uid, amount, color, number) 
	VALUES ('', '{$id}', '$amount', '$color', '$number')");
// update into database

$conn->query(" UPDATE players SET chip = {$chip} - {$amount} WHERE id='$id'");
// redirect to bet screen
header("Location: bet.php");
