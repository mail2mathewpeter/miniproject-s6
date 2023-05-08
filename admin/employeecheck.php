<?php
session_start();

$connect = mysqli_connect("localhost", "root", "","miniprojects6"); 
if(isset($_POST["email1"]))
{

$email=199;
$query = "SELECT * FROM booking  booking_id='$email'";
//$query = "SELECT start,end from booking WHERE booking_id='$id'";

$result = mysqli_query($connect,$query);
echo mysqli_num_rows($result);

}  
?>