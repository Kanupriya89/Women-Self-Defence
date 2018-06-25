<?php
$server = 'localhost';
$serverpass = '';
$servername = 'root';
$serevrdb = 'airport';
$sql_connection  = mysqli_connect($server,$servername,$serverpass,$serevrdb)or die();
//$mydb = mysqli_select_db($sql_connection ,$serevrdb)or die();

echo $name = $_POST["name"];
echo $email = $_POST["email"];
echo $subject = $_POST["comments"];

echo $insertd = "INSERT INTO `authority`(`name`,`email`,`comments`) VALUES('".$name"','".$email"','".$subject"')";

mysqli_query($sql_connection,$insertd)or die();
?>