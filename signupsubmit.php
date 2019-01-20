<?php

// get values from POST
$uname = ucfirst($_POST['uname']);
$email = $_POST['email'];
$pass = $_POST['pass'];
$repass = $_POST['repass'];
// connect to the database and start the session
include "includes/connect.php";

//check if both password match
if (!$pass === $repass) {
	header("Location: signup.php?error=Password does not match");
	exit;

}
// is Username in Players table
$result = $conn->query("SELECT uname FROM players WHERE uname='$uname'");
$isValid = $result->num_rows > 0;

// else username already taken
if($isValid) {
	header("Location: signup.php?error=Username already taken");
	exit;
}

// is Username in Players table
$result = $conn->query("SELECT uname FROM players WHERE email='$email'");
$isValid = $result->num_rows > 0;

// else not elegible
if($isValid) {
	header("Location: signup.php?error=Email Address is already registered ");
	exit;
}

// add it to the database
$conn->query("
	INSERT INTO players(id, uname, email, pass, chip) 
	VALUES (' ', '$uname', '$email', '$pass', '100')");

// redirect to login
header("Location: login.php");
