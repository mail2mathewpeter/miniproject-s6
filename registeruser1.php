<?php
 session_start();
 $otp=$_SESSION["otp"];
$email=$_SESSION["otp1"];
 ?>
<!DOCTYPE html>
<html>
<head>
    <style>
        .social{
	font-size:30px;
	
	padding:10px;
	margin-left:1060px;
    margin-top:-10px;
}

body{
					background-image: url(img/1.jpg);
						background-repeat:no-repeat;
						background-size: cover;
                        backdrop-filter: blur(2px);
                        font-size: xx-large;
					}

                    .social{
	font-size:30px;
	padding:10px;
	margin-left:1060px;
    margin-top:-70px;
}

nav1 {
	background:white;
	width: 100%;
	height: 70px;
	overflow: hidden;
	
	z-index: 1000;
	position:fixed;
	top: 0;
	left: 0px;
}
.col-9 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 75%;
  -moz-box-flex: 0;
  -ms-flex: 0 0 75%;
  flex: 0 0 75%;
  margin-left:10px;
  max-width:70%;
}

@media (max-width: 767px) {
  .col-9 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 65%;
    -moz-box-flex: 0;
    -ms-flex: 0 0 65%;
    flex: 0 0 65%;
    max-width: 65%;
  }
}
.col-3,
.col-9 {
  padding: 0 15px;
  position: relative;
  width: 100%;
  min-height: 1px;
}

.col-3 {
  -webkit-box-flex: 0;
  -webkit-flex: 0 0 25%;
  -moz-box-flex: 0;
  -ms-flex: 0 0 25%;
  flex: 0 0 25%;
  max-width: 35%;
  
}

@media (max-width: 767px) {
  .col-3 {
    -webkit-box-flex: 0;
    -webkit-flex: 0 0 35%;
    -moz-box-flex: 0;
    -ms-flex: 0 0 35%;
    flex: 0 0 35%;
    max-width: 35%;
  }
}


        .error {
            color: red;
            font-size:13px;
            position:fixed;
        }
        .error1 {
            color: green;
            font-size:13px;
            position:fixed;
        }
        p {
            color: red;
            font-size: 15px;
        }
    </style>
<script src="https://kit.fontawesome.com/812d6c8dd3.js" crossorigin="anonymous"></script>
    <title>Register </title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet">
    
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
                    p = /([6789][0-9]{9})+$/;
                    if (n.value == "") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }

                    else if (!n.value.match(p)) {
                        document.getElementById("text4").innerHTML = "<span class='error'>This is not a valid phone number</span>";
                        $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                        mod4=1;
                    }
                    else if (n.value.match(p)) {
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

$(function(){
    var dtToday = new Date();
 
    var month = dtToday.getMonth() + 1;
    var day = dtToday.getDate();
    var year = dtToday.getFullYear();
    if(month < 10)
        month = '0' + month.toString();
    if(day < 10)
     day = '0' + day.toString();
    var maxDate = year + '-' + month + '-' + day;
    $('#inputdate').attr('max', maxDate);
});

function fileValidation() {
            var fileInput =
                document.getElementById('inputfileupload');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.jpg|\.jpeg|\.png|\.gif)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
              
                document.getElementById("text17").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                return false;
            }
            else
            {
                document.getElementById("text17").innerHTML = "<span class='error'></span>";
            }
        }
</script>
    </script>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Registration Form</h2>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">first name</label>
                                    <input class="input--style-4" type="text" id="txt1" name="first_name" id="txt1"required>
                                   <div style="margin-top:8px;"> <span id="text1"></span></td></div>
                                    </tr>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">last name</label>
                                    <input class="input--style-4" type="text" id="txt2" name="last_name"required>
                                    <div style="margin-top:8px;margin-left:10px">  <span id="text2"></span></td></div>
                                    </tr>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                        <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Gender</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Male
                                            <input type="radio" checked="checked" name="gender"value="male"required>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Female
                                            <input type="radio" name="gender"value="female"required>
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                          
                           
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Mobile No </label>
                                    <input class="input--style-4" type="text" id="phone1" name="phone1"maxlength="10"required>
                                    <div style="margin-top:3px;"> <font size="2"><span id="text4"></span></font></div>
                                </div>
                            </div>   
                        
    </div>

                            <div class="row row-space">
                            
                            </div> 
                            <div class="row row-space">
                        
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">Email</label>
                                    <input class="input--style-4" type="email" id="email1" name="email"required>
                                    <div style="margin-top:1px;"> <span id="availability"></span></div>
                                </div>
                            </div>
                           
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">upload photo</label>
                                    <input class="input--style-4" type="file" id="inputfileupload" name="file"accept="image/png,image/gif,image/jpeg" onchange="fileValidation()"required>
                                    <div style="margin-top:1px;"> <span id="text17"></span></td></div>
    </div>

                                </div>
                            </div>
                           
                            <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">password</label>
                                    <input class="input--style-4" type="password" id="password" name="pass"required>
                                    <div style="margin-top:1px;"><span id="text5"></span></div>

                                </div>
                            </div>
   
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">confirm password</label>
                                    <input class="input--style-4" type="password" id="cpassword" name="cpass"required>
                                    <div style="margin-top:1px;"><span id="text6"></span></div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button type="submit"class="btn btn--radius-2 btn--blue disabled" name="sub" id="register" >Submit</button>
                          <a  href="login.php" class="btn btn--radius-2 btn--red">cancel</a>
                        </div>
                     
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
   
	<nav1>
    <div style="margin-left:60px;margin-top:5px"><i><font size="5"color="orange"><img src="https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png" alt=""width="200"height="60"></font></i></div>  
    <div class="social">
	<i class="fa-brands fa-instagram"></i>
		<i class="fa-brands fa-facebook"></i>
		<i class="fa-brands fa-twitter"></i>
	</div>
    </nav>
    
   
</body>
<?php
if(isset($_POST["sub"]))
{
   
	$first_name=$_POST["first_name"];
	$last_name=$_POST["last_name"];
	$birthday=$_POST["birthday"];
	$gender=$_POST["gender"];
    $id=0;
   // $username=$_POST["username"];
    $email=$_POST["email"];
	$phone=$_POST["phone1"];
    $password=$_POST["pass"];
    $cpassword=$_POST["cpass"];
    $cfile=$_FILES["file"]["name"];
    $otp=0;
    $y=rand(time(),100000000);
    $u='Offline now';
    $date=date("d-m-y");

    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $login="select *from login where email='$email'";
  $k=mysqli_query($conn,$login);
  $count=mysqli_num_rows($k);
    if($cpassword!=$password)
    {
       
    }
    else if($count>0) 
    {
        alert("user already exit");
    }
	else
	{
        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
        $login="insert into login(email,password,status,code1)values('$email','$password','$id','$otp')";
      $k=mysqli_query($conn,$login);
       $kid = mysqli_insert_id($conn);
      
	$query="insert into customer(logid,first_name,last_name,dob,gender,phone,file,date,code,unique_id,status)values('$kid','$first_name','$last_name','$birthday','$gender','$phone','$cfile','$date','$otp','$y','$u')";
    $mathew=mysqli_query($conn,$query);
    if($mathew)
	{
        $targetdir="uploads/";
				$targetfilepath=$targetdir.basename($cfile);
				move_uploaded_file($_FILES["file"]["tmp_name"],$targetfilepath);
				
		?>
        
        <script>
        window.location.href='registeremail.php';
           	window.location.href = 'registeremail.php';
            </script>
<?php



      $_SESSION['email']=$email;
      $_SESSION['id']=$kid;
    }
       
    }
}

   