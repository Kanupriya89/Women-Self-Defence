<?php
$server = 'localhost';
$serverpass = '';
$servername = 'root';
$serevrdb = 'airport';
$sql_connection  = mysqli_connect($server,$servername,$serverpass,$serevrdb)or die(); //use the instance of that class
//$mydb = mysqli_select_db($sql_connection ,$serevrdb)or die();

$name = $_POST["name"];    //when values are not given in the URL
$email = $_POST["email"];
$subject = $_POST["comments"];


$insertd = "INSERT INTO architect VALUES('$name','$email','$subject')";

mysqli_query($sql_connection,$insertd)or die();
?>