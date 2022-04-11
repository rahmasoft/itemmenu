<?php
$servername = "localhost";
$username = "root";
$password = "";
$db= "example";

$conn = mysqli_connect($servername,$username,$password,$db);
if(!$conn){

    die("could not connect to the database:".mysqli_connect_error());
}

?>