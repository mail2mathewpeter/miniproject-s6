<!DOCTYPE html>
<html>
<head><title>df</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
		     $(document).ready(function () {
            var mod1=0;
            var mod2=0;
            var mod3=0;
            var mod4=0;
            var mod5=0;
            var mod6=0;
            var mod7=0;
            $("#txt1").keyup(function () {
                var n = document.getElementById("txt1");
                var letter = /^[A-Za-z]+$/;
                if (n.value == "") {
                    document.getElementById("text1").innerHTML = "<span class='error'>Please enter a valid name</span>";
                    $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                     mod1=1;
                }
                else if (!n.value.match(letter)) {
                    document.getElementById("text1").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
                    $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod1=1;
                }
                else if (n.value.match(letter)) {
                     mod1=0;
                    document.getElementById("text1").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});

                }
            })
		})
			</script>

	

<title>send otp</title>
<link href="css/changepassword.css" type="text/css" rel="stylesheet" />
</head>
<body background="img/71.jpg">
	<div class="container">
		<div class="error"></div>
		<form action="" method="POST"id="frm-mobile-verification">
		<div class="form-heading"><font color="red">Caravan Tourism</font></div>
			<div class="form-heading">Enter your Email Id:</div>
			
			<div class="form-row">
			
				<input type="email" id="txt1" class="form-input"name="email"
					placeholder="Enter the mail id" required>
				
	<span id="text1"></span>
		
					
			</div>
		
			<input type="submit" class="btnSubmit" value="Send OTP"name="submit">
		</form>
	</div>
	
</body>
</html>
<?php
session_start();
if(isset($_POST["submit"]))
{
	$a=$_POST["email"];
	$_SESSION["otp"]=$a;
	?>
<script>
	
		window.location.href='changepasswordcontroller.php';

</script>
<?php
}
?>