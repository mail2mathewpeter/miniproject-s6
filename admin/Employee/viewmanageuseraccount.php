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

.image-upload>input {
  display: none;
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
                var letter = /^[A-Za-z' ']+$/;
                if (n.value == "") {
                    document.getElementById("text1").innerHTML = "<span class='error'>Please enter a valid name</span>";
                    $('#register').attr("disabled", true);
                    mod1=1;
                }
                else if (!n.value.match(letter)) {
                    document.getElementById("text1").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
                    $('#register').attr("disabled", true);
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
                    var letter = /^[A-Za-z0-9 ' ']+$/;
                    if (n.value == "") {
                        mod2=1;
                        document.getElementById("text2").innerHTML = "<span class='error'>Please enter a valid Address</span>";
                        $('#register').attr("disabled", true);
                    }
                    else if (!n.value.match(letter)) {
                        document.getElementById("text2").innerHTML = "<span class='error'>This is not a valid Address. Please try again</span>";
                        $('#register').attr("disabled", true);
                        mod2=1;
                    }
                    else if (n.value.match(letter)) {
                        document.getElementById("text2").innerHTML = "<span class='error'></span>";
                        mod2=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");
                    }
                }),
                $("#txt5").keyup(function () {
                    var n = document.getElementById("txt5");
                    var letter = /^[A-Za-z]+$/;
                    if (n.value == "") {
                        mod2=1;
                        document.getElementById("text5").innerHTML = "<span class='error'>Please enter a Employee Designation</span>";
                        $('#register').attr("disabled", true);
                    }
                    else if (!n.value.match(letter)) {
                        document.getElementById("text5").innerHTML = "<span class='error'>This is not a valid Employee Designation. Please try again</span>";
                        $('#register').attr("disabled", true);
                        mod2=1;
                    }
                    else if (n.value.match(letter)) {
                        document.getElementById("text5").innerHTML = "<span class='error'></span>";
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
                        $('#register').attr("disabled", true);
                        mod3=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("text3").innerHTML = "<span class='error'>This is not a valid Email address. Please try again</span>";
                        $('#register').attr("disabled", true);
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
                    p = /([6789][0-9]{9})+$/;
                    if (n.value == "") {
                        document.getElementById("text4").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
                        $('#register').attr("disabled", true);
                        mod4=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("text4").innerHTML = "<span class='error'>This is not a valid phone number. Please try again</span>";
                        $('#register').attr("disabled", true);
                        mod4=1;
                    }
                    else if (n.value.match(p)) {
                        document.getElementById("text4").innerHTML = "<span class='error'></span>";
                        mod4=0;
                        $('#register').attr("disabled", false);
                    $('#register').css("background","blue");
                    }
                }),
                $("#txt6").keyup(function () {
                    var n = document.getElementById("txt6");
                    p = /^[0-9]$/;
                    if (n.value == "") {
                        document.getElementById("text6").innerHTML = "<span class='error'>Please enter a valid Employee year of Experience</span>";
                        $('#register').attr("disabled", true);
                        mod4=1;
                    }
                    else if (!n.value.match(p)) {
                        document.getElementById("text6").innerHTML = "<span class='error'>This is not a valid Employee year of Experience. Please try again</span>";
                        $('#register').attr("disabled", true);
                        mod4=1;
                    }
                    else if (n.value.match(p)) {
                        document.getElementById("text6").innerHTML = "<span class='error'></span>";
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
                        $('#register').attr("disabled", true);
                        mod5=1;

                    }
                    if (!n6.value.match(ps)) {
                        document.getElementById("text5").innerHTML = "<span class='error'>This is not a valid Password.contains 1 special character ,1 Alphabet must</span>";
                        $('#register').attr("disabled", true);
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
                        $('#register').attr("disabled", true);
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
                        $('#register').attr("disabled", true);
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
function fileValidation1() {
            var fileInput =
                document.getElementById('inputfileupload1');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
                    /(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
              
                document.getElementById("text16").innerHTML = "<span class='error'>invalid file type</span>";
                fileInput.value = '';
                $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                return false;
                mod5=1;
            }
            else
            {
                document.getElementById("text16").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                        $('#register').css("background","#4272d7");
                        mod5=0;
            }
        }
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
                $('#register').attr("disabled", true);
                        $('#register').css("background","lightblue");
                return false;
                mod8=1;
            }
            else
            {
                document.getElementById("text17").innerHTML = "<span class='error'></span>";
                $('#register').attr("disabled", false);
                        $('#register').css("background","#4272d7");
                        mod8=0;
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
<form action="" method="POST"enctype="multipart/form-data">  
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
<img src="/mathew\miniproject-s6\admin\uploads\<?php echo $row['employee_image']; ?>"alt="Cinque Terre" class="k" >

                    </div>
                    
             
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?php echo "$a" ?></h5><span class="author-card-position">Joined on<br><?php echo $k ?></span>
                    </div>         
                  
            <div class="image-upload">
  <label for="inputfileupload">
  <div style="margin-left:-145px;margin-top:55px">  <img src="https://icons.iconarchive.com/icons/dtafalonso/android-lollipop/128/Downloads-icon.png"width="40"height="40"></div>
  </label>

  <input type="file" id="inputfileupload" name="file"accept="image/png,image/gif,image/jpeg" onchange="fileValidation()">
</div>



                </div>
        
        <div style="margin-left:90px;margin-top:0px;"><span id="text17"></span></div>
            </div>
       
            <div class="wizard">
                <nav class="list-group list-group-flush">
                <a class="list-group-item " href="account view.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">over view</div>
                            </div><span class="badge badge-secondary">1</span>
                        </div>
                    </a><a class="list-group-item active" href="viewmanageruseraccount.php"><i class="fe-icon-user text-muted"></i>edit Profile Settings</a>
                    
                    

                    
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
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-fn">Employee Name</label>
                        <input class="form-control" type="text" id="txt1"name="first" value="<?php echo $a?>" required="">
                        <span id="text1"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-ln">Employee Address</label>
                        <input class="form-control" type="text" id="txt2"  name="last"value="<?php echo $b?>"  required="">
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
                        <input class="form-control" type="text" id="phone" name="phone" value="<?php echo $g?>"required="">
                        <span id="text4"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Employee Designation </label>
                        <input class="form-control" type="text" id="txt5" name="designation"value="<?php echo $h?>"readonly>
                        <span id="text5"></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-email">Employee year of Experience</label>
                        <input class="form-control" type="text" id="txt6" name="experience"value="<?php echo $i?>"readonly>
                        <span id="text6"></span>
                    </div>
                </div>
                <div class="form-group row">
                <div class="col-md-6">Employee Driving Licence </label>
                                                                    <div class="form-group">
                                                                   
                                                                        <input type="file" class="form-control" id="inputfileupload1" name="file1"accept="application/pdf" onchange="fileValidation1()"
                                                                        placeholder="upload pdf"disabled>                                                                     
                                                                           <span id="text16"></span>
                                                                    </div>
                                                                </div>
               
              
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="account-phone">Gender</label>
<br>
                        <input  type="radio" name="gender" value="male"<?php if($r=="male"){echo "checked";}?>>Male
                        <input  type="radio" name="gender" value="female"<?php if($r=="female"){echo "checked";}?>>Female
                    </div>
                </div>
               
                <?php
            }
            ?>     
                <div class="col-12">
                    <hr class="mt-2 mb-3">
                    <div class="d-flex flex-wrap justify-content-between align-items-center">
                        <div class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="">
                           <a href="dashboard.php"class="btn btn-style-1 btn-primary" >Back</a>
                        </div>
                        <input type="submit"name="sub" id="register" class="btn btn-style-1 btn-primary" ></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

</style>

<script type="text/javascript">

</script>
</body>
<?php
if(isset($_POST["sub"]))
{
    $conn=mysqli_connect("localhost","root","","miniprojects6");
    $query="select * from employee where id='$j'";
    
    
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($result))
{
      
       $f=$row['employee_image'];
       $g=$row['employee_phone'];
       $h=$row['employee_designation'];
       $i=$row['employee_year'];
       $w=$row['employee_driving'];
       $r=$row['employee_gender'];
}
       echo $r;

	$name=$_POST["first"];
	$address=$_POST["last"];
	$experience=$_POST["experience"];
  
    $pfile=$_FILES["file1"]["name"];
	$gender=$_POST["gender"];
   echo $gender;
	$phone=$_POST["phone"];
    $designation=$_POST["designation"];

    $cfile=$_FILES["file"]["name"];
    if($cfile=="")
                {
                $cfile=(basename($f));
                }
                if($pfile=="")
                {
                $pfile=(basename($w));
                }
	$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query ="update employee set employee_name='$name',employee_address='$address',employee_phone='$phone', employee_designation='$designation',employee_year='$experience',employee_driving='$pfile',employee_image='$cfile',employee_gender='$gender' where id='$j'";
    $mathew=mysqli_query($conn,$query);
 
   
	if($mathew)
	{
      
        $targetdir="uploads/";
				$targetfilepath=$targetdir.basename($cfile);
				move_uploaded_file($_FILES["file"]["tmp_name"],$targetfilepath);
                $targetfilepath=$targetdir.basename($pfile);
                move_uploaded_file($_FILES["file1"]["tmp_name"],$targetfilepath);
          
                ?>
                
                <script>
                    window.location.href='account view.php';
                alert("successfully updated");
          </script>
                <?php
                
				
		
	}
}
?>

</html>
