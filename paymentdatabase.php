<?php
session_start();
$b=$_SESSION['book_id'];
$d=$_SESSION['amount'];
$c=date("d-m-y");
$e="Success";
$connect = mysqli_connect("localhost", "root", "", "miniprojects6"); 
if(isset($_POST['pay_id']))
{
 $a=$_POST['pay_id'];
$query = "insert into payment(transaction_id,book_id,date,amount,status)values('$a','$b','$c','$d','$e')";  
$query1 = "update booking set payment='Success' where booking_id='$b'";
//$query = "SELECT start,end from booking WHERE booking_id='$id'";
$result1 = mysqli_query($connect, $query1);
$result = mysqli_query($connect, $query);
}
?>