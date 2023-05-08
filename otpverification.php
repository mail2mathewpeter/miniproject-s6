<?php
session_start();
$otp=$_SESSION["otp"];
$email=$_SESSION["otp1"];
?>
<!DOCTYPE html>
<html>
<head>
	<style>
		.body{
			filter: blur(8px);
			background-image: url("img/71.jpg");
			filter: blur(4px);
		}
		</style>
<title>otp verification</title>
<link href="css/changepassword.css" type="text/css" rel="stylesheet" />
</head>
<body background="img/71.jpg">

	<div class="container">
		<div class="error"></div>
		<form id="frm-mobile-verification"action=""method="POST">
		<div class="form-heading"><font color="red">Caravan Tourism</font></div>
			<div class="form-heading">Enter the OTP Send to <font color="green"><h5><?php echo $email ?></h5></font></div>

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
	$otp=$_SESSION["otp"];
$a=$_POST["otp"];
$_SESSION["otp1"]=$email;
if($a==$otp)
{
	?>
	<script>
		   window.location.href='reenterpassword1.php';
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
