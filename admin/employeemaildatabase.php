<?php
$connect = mysqli_connect("localhost", "root", "", "miniprojects6"); 
if(isset($_POST["email1"]))
{
$email = mysqli_real_escape_string($connect, $_POST["email1"]);
$query = "SELECT * FROM employee WHERE employee_email = '".$email."'";
$result = mysqli_query($connect, $query);
echo mysqli_num_rows($result);
}
?>