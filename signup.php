<?php

// connect to the database and start the session
include "includes/connect.php";

$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;

if (isset($_SESSION['email'])){   
    header("Location:bet.php");   
}   

include "views/signup.php";
