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

// is ID in bets table
$query = $conn->query("SELECT * FROM bets ");
$participents = $query->num_rows;

// else not elegible
if( $participents !== 5) {
	header("Location: bet.php");
}

// get results from results table
$result = $conn->query("SELECT * FROM results ");
while ($row = $result->fetch_object()) {
    $values[]=$row;
    $win_number=$values[0]->win_number;
    $win_color=$values[0]->win_color;

}


$query = $conn->query("SELECT A.id, A.uname, A.chip, B.amount, B.number, B.color FROM players A join bets B on A.id=B.uid ");
$datas=[];
while ($row = $query->fetch_object()) {
    $datas[]=$row;

}
foreach ($datas as $data){

    $chip=$data->chip;
    $amount=$data->amount;
    $number=$data->number;
    $color=$data->color;
    $uname=$data->uname;

    if ($win_number == $number && $win_color==$color){
        $win_amount = $amount*20;
        $message = "Congratulation!!! You have won $win_amount chips";
    }
    else if ($win_number == $number){
        $win_amount = $amount*10;
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
    
    //update chip into players table
    $query = $conn->query("UPDATE players SET chip = ($chip + $win_amount) WHERE uname='$uname'");

    //redirect to summery 
    header("Refresh:3; url=summary.php");

    //insert data into scoreboard table

    date_default_timezone_set('America/New_York');
    $date = date("Y/m/d h:i:sa");

    if($win_amount){
        $query = $conn->query("INSERT INTO scoreboard VALUES ('', '$win_number', '$win_color', '$uname', 'Winner', '$amount','$number', '$color','$win_amount', '$date')");
    }else{
        $query = $conn->query("INSERT INTO scoreboard VALUES ('', '$win_number', '$win_color', '$uname', 'Loser', '$amount', '$number', '$color','$win_amount', '$date')");
    }
}
include "views/result.php";