<?php

$error = isset($_GET['error']) && $_GET['error'] != "" ? $_GET['error'] : false;

session_start();   
if (isset($_SESSION['email'])){   
    header("Location:bet.php");   
}   

include "views/login.php";