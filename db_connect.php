<?php 

$link = mysqli_connect("localhost", "Viji", "Viji2001@bms", "dietary_assessment");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>