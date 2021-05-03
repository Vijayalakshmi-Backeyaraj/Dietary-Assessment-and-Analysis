<?php 

$link = mysqli_connect("localhost", "User", "Password", "dietary_assessment");  // mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE)

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
