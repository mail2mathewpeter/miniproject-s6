<?php
session_start();
$host="localhost";
$username="root";
$pass="";
$db="miniprojects6";
 
$conn=mysqli_connect($host,$username,$pass,$db);
if(!$conn){
	die("Database connection error");
}
 
 
?>