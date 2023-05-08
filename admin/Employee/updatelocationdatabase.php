<?php
session_start();

$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
 if(isset($_POST["email2"]))
 {
    $a=$_POST["email2"];
        // echo "<script>alert($a);</script>";
    $qu="select *from updatelocation where caravan_id='$a'";
    $r=mysqli_query($conn,$qu);
  while($k=mysqli_fetch_array($r))
{
    $count=$k['location'];
    echo $count;
}

   
    }
?>