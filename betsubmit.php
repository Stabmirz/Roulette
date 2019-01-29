<?php
ob_start();
include "bet.php";
// get values from POST
$amount = $_POST['amount'];
$color = ucfirst($_POST['color']);
$number = $_POST['number'];


// is Username in Players table
$result = $conn->query("SELECT A.uname, B.amount, B.color,B.number FROM players A join bets B on B.uid = '$id' ");
$isValid = $result->num_rows > 0;

// else user id already exist
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
	VALUES ('0, '$id', '$amount', '$color', '$number')");

// update into database
$conn->query(" UPDATE players SET chip = $chip - $amount WHERE id='$id'");

// redirect to bet screen
header("Location: bet.php");

// is ID in bets table
$result = $conn->query("SELECT * FROM bets ");
$participents = $result->num_rows;

// else not elegible
if( $participents == 5) {
	header("Location: resultCount.php");
}
