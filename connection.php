<?php
$dbhost = "localhost";
$bduser = "root";
$bdpass = "";
$bdname = "useraccounts";

if(!$con = mysqli_connect($dbhost, $bduser, $bdpass, $bdname)){
    die("Failed to connect");
}