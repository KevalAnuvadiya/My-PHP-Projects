<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "cms";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if(!$conn){
    die("Something went wrong, Datbase is not connected.");
}

?>