<?php
session_start();
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="assets/css/accounts.css" rel="stylesheet">
<style>
     .error {
            color: red;
            font-size: 15px;
        }
    .k{
    border-radius:10%;
}
</style>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            var mod1=0;
            var mod2=0;
            var mod3=0;
            var mod4=0;
            var mod5=0;
            var mod6=0;
            $("#txt1").keyup(function () {
                var n = document.getElementById("txt1");
                var letter = /^[A-Za-z]+$/;
                if (n.value == "") {
                    document.getElementById("text1").innerHTML = "<span class='error'>Please enter a valid name</span>";
                    mod1=1;
                }
                else if (!n.value.match(letter)) {
                    document.getElementById("text1").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
                    mod1=1;
                }
                else if (n.value.match(letter)) {
                    document.getElementById("text1").innerHTML = "<span class='error'></span>";
                    mod1=0;
                    $('#register').attr("disabled", false);
                    $('#register').css("background","blue");
                }
            }),
                $("#txt2").keyup(function () {
                    var n = document.getElementById("txt2");
                    var letter = /^[A-Za-z]+$/;
                    if (n.value == "") {
                        mod2=1;
                        document.getElementById("text2").innerHTML = "<span class='error'>Please enter a valid name</span>";
                    }
                    else if (!n.value.match(letter)) {
                        document.getElementById("text2").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
                        mod2=1;
                    }
                    else if (n.value.match(letter)) {
                        document.getElementById("text2").innerHTML = "<span class='error'></span>";
                        mod2=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");
                    }
                }),
                $("#Email").keyup(function () {
                    var n = document.getElementById("Email");
                    p = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (n.value == "") {
                        document.getElementById("text3").innerHTML = "<span class='error'>Please enter a valid Email address</span>";
                        mod3=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("text3").innerHTML = "<span class='error'>This is not a valid Email address. Please try again</span>";
                        mod3=1;
                    }
                    else if (n.value.match(p)) {
                        document.getElementById("text3").innerHTML = "<span class='error'></span>";
                        mod3=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");
                    }
                }),
                $("#phone").keyup(function () {
                    var n = document.getElementById("phone");
                    p = /([789][0-9]{9})+$/;
                    if (n.value == "") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
                        mod4=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("text4").innerHTML = "<span class='error'>This is not a valid phone number. Please try again</span>";
                        mod4=1;
                    }
                    else if (n.value.match(p)) {
                        document.getElementById("text4").innerHTML = "<span class='error'></span>";
                        mod4=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");
                    }
                }),

                $("#password").keyup(function () {
                    var n6 = document.getElementById("password");
                    var ps = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                    if (n6.value == "") {
                        document.getElementById("text5").innerHTML = "<span class='error'>Please enter a valid password</span>";
                        mod5=1;

                    }
                    if (!n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'>This is not a valid Password.contains 1 special character ,1 Alphabet must</span>";
                        mod5=1;
                    }
                    else if (n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'></span>";
                        mod5=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");

                    }
                }),
                $("#cpassword").keyup(function () {
                    var n7 = document.getElementById("password");
                    var n8 = document.getElementById("cpassword");
                    if (n8.value == "") {
                        document.getElementById("text6").innerHTML = "<span class='error'>Please enter a valid password</span>";
                        mod6=1;

                    }
                    if (n7.value == n8.value) {

                        document.getElementById("text6").innerHTML = "<span class='error'></span>";
                        mod6=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");

                    }
                    else {
                        document.getElementById("text6").innerHTML = "<span class='error'> Password Missmatch</span>";
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
    <meta charset="utf-8">
    
    <title>edit</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover" style="background-image: url(uploads/1.jpg);"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar">
                         <?php

$j=$_SESSION['name1'];

             $conn=mysqli_connect("localhost","root","","miniprojects6");
             $query="select * from employee where id='$j'";
             
             
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{
                $a=$row['employee_name'];
                $b=$row['employee_address'];
                $d=$row['employee_email'];
                $f=$row['employee_image'];
                $g=$row['employee_phone'];
                $h=$row['employee_designation'];
                $i=$row['employee_year'];
                $w=$row['employee_driving'];
                $r=$row['employee_gender'];
                $k=$row['date']
    ?>
	<img src="uploads\<?php echo $row['employee_image']; ?>"alt="Cinque Terre" class="k" >
    <?php
                }
                ?>
                    </div>
                    
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?php echo $a ?></h5><span class="author-card-position">Joined on<br><?php echo $k; ?></span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                <a class="list-group-item active " href="view account.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">over view</div>
                            </div><span class="badge badge-secondary">1</span>
                        </div>
                    </a><a class="list-group-item" href="viewmanageuseraccount.php"><i class="fe-icon-user text-muted"></i>edit Profile Settings</a>
                    
                    
                   
                    
                    
                    <a class="list-group-item" href="dashboard.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Home page</div>
                            </div><span class="badge badge-secondary"></span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
        <!-- Profile Settings-->
        <div class="col-lg-8 pb-5">
            <form class="row" action="" method="POST"enctype="multipart/form-data">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Employee Name</label>
                        <input class="form-control" type="text" id="txt1"name="first" value="<?php echo $a?>" required=""disabled>
                        <span id="text1"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Employee Address</label>
                        <input class="form-control" type="text" id="txt2"  name="last"value="<?php echo $b?>"  required=""disabled>
                        <span id="text2"></span></td>
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Employee E-mail </label>
                        <input class="form-control" type="email" id="Email" name="email"value="<?php echo $d?>"disabled>
                        <span id="text3"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Employee Phone </label>
                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $g?>"required=""disabled>
                        <span id="text4"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Employee Designation </label>
                        <input class="form-control" type="email" id="Email" name="email"value="<?php echo $h?>"disabled>
                        <span id="text3"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Employee year of Experience</label>
                        <input class="form-control" type="text" id="Email" name="email"value="<?php echo $i?>"disabled>
                        <span id="text3"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Employee Driving license</label> 
                        <input class="form-control" type="text" id="Email" name="email"value="<?php echo $w?>"disabled>
                        <span id="text3"></span>
                    </div>
                </div>
               
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Gender</label>
<br>
                        <input  type="radio" name="gender"disabled=""value="male"<?php if($r=="male"){echo "checked";}?>>Male
                        <input  type="radio" name="gender"disabled=""value="female"<?php if($r=="female"){echo "checked";}?>>Female
                    </div>
                </div>
               
                
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="">
                           <a href="dashboard.php"class="btn btn-style-1 btn-primary" >Back</a>
                        </div>
                        <a href="viewmanageuseraccount.php"class="btn btn-style-1 btn-primary" >Edit</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
if(isset($_POST["sub"]))
{
	$first_name=$_POST["first"];
	$last_name=$_POST["last"];
	$birthday=$_POST["birthday"];
	$gender=$_POST["gender"];
    $email=$_POST["email"];
	$phone=$_POST["phone"];
    $password=$_POST["pass"];

    $cfile=$_FILES["file"]["name"];
    echo $email;
    if($password=="")
                {
                $password=$i;
                }
    if($cfile=="")
                {
                $cfile=(basename($f));
                }
	$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query ="update customer set first_name='$first_name',last_name='$last_name'gender='$gender',email='$email', phone='$phone'file='$cfile' where username='$e'";
    $mathew=mysqli_query($conn,$query);
    echo $query;
   
	if($mathew)
	{
      
        $targetdir="uploads/";
				$targetfilepath=$targetdir.basename($cfile);
				move_uploaded_file($_FILES["file"]["tmp_name"],$targetfilepath);
                ?>
                <script>alert("successfully updated");
                window.location.href = 'account.php';</script>
                <?php
                
				
		
	}
}
?>

</html>
