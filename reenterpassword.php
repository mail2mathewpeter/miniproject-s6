<?php
session_start();
$otp=$_SESSION["otp"];
$email=$_SESSION["otp1"];
?>
<!DOCTYPE html>
<html>
<head>
<title>New password</title>
<link href="css/changepassword.css" type="text/css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<style>
	  .error {
            color: red;
            font-size:13px;
            position:fixed;
        }
		</style>
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
            }),
                $("#txt2").keyup(function () {
                    var n = document.getElementById("txt2");
                    var letter = /^[A-Za-z]+$/;
                    if (n.value == "") {
                        mod2=1;
                        document.getElementById("text2").innerHTML = "<span class='error'>Please enter a valid name</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                    }
                    else if (!n.value.match(letter)) {
                        mod2=1;
                        document.getElementById("text2").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                    }
                    else if (n.value.match(letter)) {
                        document.getElementById("text2").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod2=0;
                    }
                }),
                $("#Email").keyup(function () {
                    var n = document.getElementById("Email");
                    p = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (n.value == "") {
                        document.getElementById("text3").innerHTML = "<span class='error'>Please enter a valid Email address</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod3=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("text3").innerHTML = "<span class='error'>This is not a valid Email address. Please try again</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod3=1;
                    }
                    else if (n.value.match(p)) {
                        document.getElementById("text3").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod3=0;
                    }
                }),
                $("#phone1" ).keyup(function () {
                    var n = document.getElementById("phone1");
                    var k= document.getElementById("phone2");
                    p = /([789][0-9]{9})+$/;
                    if (n.value == "") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }

                    else if (!n.value.match(p) && k.value=="91") {
                        document.getElementById("text4").innerHTML = "<span class='error'>This is not a valid phone number</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }
                    else if (n.value.match(p) && k.value=="91") {
                        document.getElementById("text4").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
                        $('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod4=0;
                    }
                    else if (n.value.match(p) || k.value=="") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Enter the country code</span>";
                        $('#register').attr("disabled", false);
                        $('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod4=0;
                    }
                }),
                $("#phone2").keyup(function () {
                    var n = document.getElementById("phone1");
                    var k= document.getElementById("phone2");
                    p = /([789][0-9]{9})+$/;
                    if (k.value == "") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }

                    else if (!n.value.match(p) ||  k.value!="91") {
                        document.getElementById("text4").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }
                    else if (!n.value.match(p) &&  k.value=="91") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Enter the valid phone number</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }
                    else if (n.value.match(p) && k.value=="91") {
                        document.getElementById("text4").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
                        $('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod4=0;
                    }
                }),

                $("#password").keyup(function () {
                    var n6 = document.getElementById("password");
                    var ps = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                    if (n6.value == "") {
                        document.getElementById("text5").innerHTML = "<span class='error'>Please enter a valid password</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod5=1;

                    }
                    if (!n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'>This is not a valid Password.contains 1 special character ,1 Alphabet must</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod5=1;

                    }
                    else if (n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod5=0;

                    }
                }),
                $("#cpassword").keyup(function () {
                    var n7 = document.getElementById("password");
                    var n8 = document.getElementById("cpassword");
                    if (n8.value == "") {
                        document.getElementById("text6").innerHTML = "<span class='error'>Please enter a valid password</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod6=1;

                    }
                    if (n7.value == n8.value) {
                       
                        document.getElementById("text6").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod6=0;

                    }
                    else {
                        document.getElementById("text6").innerHTML = "<span class='error'> Password Missmatch</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod6=1;

                    }
               
                }),
                $("#register").click(function () {
                    if(mod1==1 ||mod2==1 ||mod3==1 ||mod4==1 ||mod5==1 ||mod6==1)
{
    $('#register').attr("disabled", true);
    $('#register').css("background","lightblue");
}
                })



        });
        $(document).ready(function(){ 
$('#email1').keyup(function(){
var email1 = $(this).val();
if(email1 ==""){
$('#availability').html('');
}else{
$.ajax({
url:'emaildatabase.php',
method:"POST",
data:{email1:email1},
success:function(data)
{
if(data != '0')
{
    
//  $('#availability').html('<span class="text-danger">Username Already exist</span>');
document.getElementById("availability").innerHTML = "<span class='error'>Username Already exist</span>";
    
$('#availability').css("color","red");
$('#register').attr("disabled", true);
$('#register').css("background","lightblue");

					
}
else
{
    var n = document.getElementById("email1");
                    p = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (n.value == "") {
                        document.getElementById("availability").innerHTML = "<span class='error'>Please enter a valid Email address</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod3=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("availability").innerHTML = "<span class='error'>This is not a valid Email address. Please try again</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod3=1;
                    }
                    else if (n.value.match(p)) {
                        document.getElementById("availability").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
                        //$('#availability').html('<span class="text-success">Username valid</span>');
                        $('#availability').css("color","green");
                        document.getElementById("availability").innerHTML = "<span class='error1'>Username valid</span>";
$('#availability').css("color","green");
$('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod3=0;
                    }


}
}
})
}
});
}); 
function f1()
{
	var n6 = document.getElementById("password");
                    var ps = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                    if (n6.value == "") {
                        document.getElementById("text5").innerHTML = "<span class='error'>Please enter a valid password</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod5=1;

                    }
                    if (!n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'>This is not a valid Password.contains 1 special character ,1 Alphabet must</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod5=1;

                    }
                    else if (n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'></span>";
                        $('#register').attr("disabled", false);
$('#register').css("background","#4272d7");
$('#register').hover(function(){
  $(this).css("background-color", "green");
  }, function(){
  $(this).css("background-color", "#4272d7");
});
mod5=0;

                    }
}
	</script>
</head>
<body background="img/71.jpg">
<div class="container">
<form action=""method="POST"id="frm-mobile-verification">
	
		<div class="error"></div>
	
		<div class="form-heading"><font color="red">Caravan Tourism</font></div>
		<span id="text5"></span>
			<div style="margin-left:-100px"><div class="form-heading">New password</div></div>
			<div class="form-row">
				<input type="text" id="password" class="form-input"name="password"placeholder="Enter new password"Onkeyup="f1()">
			</div>
			<div class="form-heading"><font color="red"><div style="margin-top:1px;"><span id="text5"></span></div><br></font></div>
			<div style="margin-left:-100px">  <div class="form-heading">Confirm Password</div></div>
			<div class="form-row">
				<input type="text" id="cpassword" class="form-input"
					placeholder="confirm password">
					<div style="margin-top:1px;"><span id="text6"></span></div>
			</div>
			<input type="submit" class="btnSubmit" value="submit"name="submit">
		</form>
	</div>

	
	<script src="verification.js"></script>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
$a=$_POST["password"];
$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
$query="update login set password='$a' where email='$email'";
  //  $query1="select *from admin where username='$username' && password='$password'";
    $mathew=mysqli_query($conn,$query);
	if($mathew)
    {
        ?>
	<script>
		 
		alert("Password has been successfully changed");
        window.location.href='login.php';
		</script>
        <?php
    }


}
?>
