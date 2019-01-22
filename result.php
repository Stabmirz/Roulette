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

$win_number = rand(0, 35);
$arr = array("Red"=>"red","Green"=>"green","Black"=>"black");
$win_color = (array_rand($arr,1));

$query = $conn->query("SELECT A.id, A.uname, A.chip, B.amount, B.number, B.color FROM players A join bets B on A.id=B.uid WHERE A.email='$mail'");
while ($row = $query->fetch_object()) {
    $data[]=$row;
    $chip=$data[0]->chip;
    $amount=$data[0]->amount;
    $number=$data[0]->number;
    $color=$data[0]->color;
    $uname=$data[0]->uname;
}

if ($win_number==$number && $win_color==$color){
    $win_amount= $amount*20;
    $message = "Congratulation!!! You have won $win_amount chips";
}
else if ($win_number == $number){
    $win_amount= $amount*10;
    $message = "Congratulation!!! You have won $win_amount chips";
}
else if ($win_color==$color){
    $win_amount=$amount*1.5;
    $message = "Congratulation!!! You have won $win_amount chips";
}
else {
    $win_amount=$amount*0;
    $message = "Aw... you lose.  Better luck next time";
}

//redirect to summery 
header("Refresh:5; url=summary.php");

//update chip into players table
$query = $conn->query("UPDATE players SET chip = ($chip + $win_amount) WHERE uname='$uname'");

//insert data into scoreboard table

date_default_timezone_set('America/New_York');
$date = date("Y/m/d h:i:sa");

if($win_amount){
    $winner=$uname;
    $query = $conn->query("INSERT INTO scoreboard VALUES ('', '$win_number', '$win_color', '$winner', '', '$amount', '$win_amount', '$date')");
}else{
    $loser=$uname;
    $query = $conn->query("INSERT INTO scoreboard VALUES ('', '$win_number', '$win_color', '', '$loser', '$amount', '$win_amount', '$date')");
}

include "views/result.php";