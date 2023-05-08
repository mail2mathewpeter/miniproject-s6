<?php
$connect = mysqli_connect("localhost", "root", "", "miniprojects6"); 
if(isset($_POST["txt4"]))
{
$txt = mysqli_real_escape_string($connect, $_POST["txt4"]);
$query = "SELECT * FROM caravan WHERE caravan_regno = '".$txt."'";
$result = mysqli_query($connect, $query);
echo mysqli_num_rows($result);
}
?>