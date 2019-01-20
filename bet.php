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

// $query = "SELECT * FROM players WHERE email='$mail'";
// $data = mysqli_query($conn, $query);
// $isValid = mysqli_num_rows($data)>0;
// $result= mysqli_fetch_assoc($data);
// $uname=$result['uname'];
// $chip=$result['chip'];

// get the Participents
// $bquery = "SELECT A.uname, B.amount, B.color,B.number FROM players A right join bets B on A.id=B.uid";
// $bdata = mysqli_query($conn, $query);
// $btotal = mysqli_num_rows($data)>0;
// $result= mysqli_fetch_assoc($data);
//     $buname=$result['uname'];
//     $bamount=$result['amount'];
//     $bnumber=$result['number'];
//     $bcolor=$result['color'];

$bets=[];
$query = $conn->query("SELECT A.uname, B.amount, B.color,B.number FROM players A right join bets B on A.id=B.uid ");
while ($row = $query->fetch_object()) {
    $bets[]=$row;
}

include "views/bet.php";