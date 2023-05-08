<?php
session_start();
$email=$_SESSION['email'];
$id=$_SESSION['id']
?>
<!DOCTYPE html>
<html>
<head>
<title>otp</title>
<link href="css/changepassword.css" type="text/css" rel="stylesheet" />
</head>
<body background="img/71.jpg"height="500px">

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification"action=""method="POST">
		<div class="form-heading"><font color="red">Caravan Tourism</font></div>
			<div class="form-heading"> Confirm mail enter the OTP Send to <font color="green"><h5><?php echo $email ?></h5></font></div>

			<div class="form-row">
				<input type="text" id="mobile"name="otp" class="form-input"placeholder="Enter your otp">
				<span id="text5"></span>
			</div>

			<input type="submit" class="btnSubmit" value="submit"name="send">
		</form>
	</div>


	
	<script src="verification.js"></script>
</body>
</form>
</html>

<?php
if(isset($_POST["send"]))
{
	$otp=$_SESSION["code"];
$a=$_POST["otp"];
$s='active';
if($a==$otp)
{
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
  
   $query1="update customer set code=1 where logid='$id'";
   $query2="update login set status=1,code1=1,active='active' where id='$id'";
   
   $mathew1=mysqli_query($conn,$query1);
   $mathew2=mysqli_query($conn,$query2);
	?>
    <script>
         alert("User has been successfully registered");
         window.location.href='login.php';
         </script>
         <?php
}
else
{
	?>
	<script>
  document.getElementById("text5").innerHTML="Invalid OTP try again";
		</script>
		<?php
}

}

?>
