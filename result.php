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
srand ( time(NULL) );
$win_number = rand(0, 35);
$arr = array("Red"=>"red","Green"=>"green","Black"=>"black");
$win_color = (array_rand($arr,1));

$query = $conn->query("SELECT A.id, B.amount, B.number, B.color FROM players A join bets B on A.id=B.uid WHERE A.email='$mail'");
while ($row = $query->fetch_object()) {
    $data[]=$row;
    $amount=$data[0]->amount;
    $number=$data[0]->number;
    $color=$data[0]->color;
}


if ($win_number==$number && $win_color==$color){
    $win= $amount*20;
    $winner = sprintf("Congratulation!!! You have won %s", $win);
}
else if ($win_number == $number){
    $win= $amount*10;
    $winner = sprintf("Congratulation!!! You have won %s", $win);
}
else if ($win_color==$color){
    $win=$amount*1.5;
    $winner = sprintf("Congratulation!!! You have won %s", $win);
}
else {
    $winner = "Aw... you lose.  Better luck next time";
}

include "views/result.php";