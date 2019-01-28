<?php

// get values from POST
$email= $_POST['email'];
$pass= $_POST['pass'];

// connect to the database and start the session
include "includes/connect.php";

// is email in Players table
$result = $conn->query("SELECT email FROM players WHERE email='$email'");
$isValid = $result->num_rows > 0;

// else not elegible
if( ! $isValid) {
	header("Location: login.php?error=Wrong Email");
	exit;
}

// is pass in Players table
$result = $conn->query("SELECT pass FROM players WHERE pass='$pass'");
$rightpass = $result->num_rows > 0;

// else wrong password
if(!$rightpass) {
	header("Location: login.php?error=Wrong Password");
	exit;
}

// start a session
$_SESSION['email'] = $email;

// redirect to bet screen
header("Location: bet.php");
