<?php
session_start();
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
</head>
<style>
.error {
    color: red;
    font-size: 15px;
}

nav1 {
    background: transparent;
    width: 100%;
    height: 75px;
    overflow: hidden;

    z-index: 1000;
    position: fixed;
    top: 0;
    left: 0px;
}

.social {
    font-size: 30px;
    padding: 10px;
    margin-left: 1060px;
    margin-top: -57px;
}

.body {
    background-image: url("img/71.jpg")
}
</style>

<body>

    <img src="img/71.jpg" width="100%" height="495px">
    <div style="margin-top:-510px;margin-left:200px">
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
                                        <div class="w-100">

                                        </div>
                                        <div style="margin-top:-30px">
                                            <div class="w-100">
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
                                    </div>
                                    <form action="" method="POST" class="signin-form">
                                   
                                        <div class="form-group mb-3">
                                            <div style="margin-left:10px"> <span id="text2"></span></div>
                                            <label class="label" for="name">Email</label>
                                            <input type="text" class="form-control" placeholder="Email" id="email"name="email"
                                                required>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="label" for="password">Password</label>
                                            <input type="password" class="form-control" id="password"name="password"
                                                placeholder="Password" required>

                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit"id="submit" value="sign in"
                                                class="form-control btn btn-primary submit px-3">
                                        </div>
                                        <div class="form-group d-md-flex">
                                            <div class="w-50 text-left">
                                                <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                    <input type="checkbox" checked>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="w-50 text-md-right">
                                                <a href="changepasswordnew.php">Forgot Password</a>
                                            </div>

                                        </div>
                                        <a href="registeruser1.php">
                                            <font color="orange">New user?Register here</font>
                                        </a>

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
        <div style="margin-left:50px">
            <font color="white" size="5"><i><img
                        src="https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png" alt=""
                        width="200" height="60"></i></font>
        </div>


        </div>
        </div>
    </nav1>
</body>

</html>
<?php
 $_SESSION['loginstatus']="";
if(isset($_POST["submit"]))
{
    $username=$_POST["email"];
    $password=$_POST["password"];
	$id=0;
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
	$query="select *from login where email='$username' && password='$password' && status='1'";
	$query1="select *from login where email='$username' && password='$password' && status='2'";
	$query2="select *from employee where employee_email='$username' && password='$password' && employee_status='Active'";
    $mathew=mysqli_query($conn,$query);
    $mathew1=mysqli_query($conn,$query1);
    $count=mysqli_num_rows($mathew);
	$count1=mysqli_num_rows($mathew1);
	$mathew2=mysqli_query($conn,$query2);
    $count2=mysqli_num_rows($mathew2);
    if($count>0)
        {
			$uid="select id from login where email='$username'";
			$mathew=mysqli_query($conn,$uid);
          
            $_SESSION['loginstatus']="yes";
			while($row=mysqli_fetch_array($mathew))
			{
				$uid=$row['id'];
          
			}
			$_SESSION['uid'] = $uid;
       
            ?>
<script>
window.location.href = 'userloginpage.php';
</script>
<?php
        }
       else if($count1>0)
        {
			$uid="select id from login where email='$username'";
			$mathew=mysqli_query($conn,$uid);
          
            $_SESSION['loginstatus']="yes";
			while($row=mysqli_fetch_array($mathew))
			{
				$uid=$row['id'];
			}
            $_SESSION['name1'] = $uid;
           
            ?>
<script>
window.location.href = 'admin/admindashboard/dashboard.php';
</script>
<?php
        }
		else if($count2>0)
        {
			$status="select * from employee where employee_email='$username'";
			$mathew=mysqli_query($conn,$status);
			while($row=mysqli_fetch_array($mathew))
				{
						$status=$row['status'];
				}
				echo $status;
				
			if($status=="0")
			{
				$_SESSION['loginstatus']="yes";
				$_SESSION['email1'] =$username;
				echo "mathew";
				?>



<script>
window.location.href = 'admin/employeereenterpassword.php';
</script>
<?php
			}
			else if($status=="1")
			{
			
				$status="select * from employee where employee_email='$username'";
			$mathew=mysqli_query($conn,$status);
				$_SESSION['loginstatus']="yes";
				while($row=mysqli_fetch_array($mathew))
				{
					$uid=$row['id'];
					$_SESSION['uid']=$uid;
					
					?>
					

<script>
window.location.href = 'admin/Employee/dashboard.php';
</script>
<?php
		 }
					
		}
			
      
	

}
else{
    ?>
<script>
document.getElementById("text2").innerHTML = "<span class='error'>Invalid username or password</span>";
</script>
<?php
}
}
?>