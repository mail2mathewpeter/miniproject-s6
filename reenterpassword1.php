<?php
session_start();
$email=$_SESSION["otp1"];
echo $email;
?>	
<!doctype html>
<html lang="en">
  <head>
  	<title>Login </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/loginstyle.css">
    
    <script src="https://kit.fontawesome.com/812d6c8dd3.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	</head>
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
</script>
    <style>
		  .error {
            color: red;
            font-size: 15px;
           
        }
        nav1{
	background:;
	width: 100%;
	height: 75px;
	overflow: hidden;
	
	z-index: 1000;
	position:fixed;
	top: 0;
	left: 0px;
}
.social{
	font-size:30px;
	padding:10px;
	margin-left:1060px;
    margin-top:-57px;
}
.body{
	background-image:url("img/71.jpg")
}
</style>
	<body>
		
	<img src="img/71.jpg"width="100%"height="500px">
	<div style="margin-top:-480px;margin-left:200px">
	<section class="ftco-section">
		<div style="margin-top:-100px">
		<div style="margin-left:000px">
		<div class="container">
		
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
                      <p class="social-media d-flex justify-content-end">
                                                    <a href="#"
                                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                                            class="fa fa-facebook"></span></a>
                                                    <a href="#"
                                                        class="social-icon d-flex align-items-center justify-content-center"><span
                                                            class="fa fa-twitter"></span></a>
                                                </p>
                                            </div>
                         
								
			      	</div>
                      <div class="w-100">

							<form action="" method="POST"class="signin-form">
			      		<div class="form-group mb-3">
                        <div style="margin-left:50px;margin-top:-40px"><label class="label"> <font color="red"> Caravan tourism</font></label><br></div>
						
			      			<label class="label" for="name">New password</label>
			      			<input type="text" class="form-control" id="password" placeholder="new password" name="email" required>
                              <div style="margin-top:1px;"><span id="text5"></span></div>
			      		</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Confirm password</label>
		              <input type="password" id="cpassword"class="form-control" name="password"placeholder=" confirm Password" required>
                      <div style="margin-top:1px;"><span id="text6"></span></div>
					 
		            </div>
		            <div class="form-group">
		            	<input type="submit"name="submit" value="submit"class="form-control btn btn-primary submit px-3">
		            </div>
		           
		          </form>

		        </div>
		      </div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</div>
<nav1>
       <div style="margin-left:50px"><font color="white"size="5"><i><img src="https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png" alt=""width="200"height="60"></i></font></div>
       
   
	</div>
	</div>
    </nav1>
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
