<?php
session_start();
$email=$_SESSION['email'];
$_SESSION['email']=$email;
$code=$_SESSION["otp"];
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
                                            <input type="text" class="form-control" placeholder="Email" name="email"
                                                value="<?php echo $email?>" readonly>
                                        </div>
                                        <div class="form-group mb-3">
                                            <label class="label" for="password">Password</label>
                                            <input type="text" class="form-control" name="password"
                                                value="<?php echo $code?>" placeholder="Password" readonly>

                                        </div>
                                        <div class="form-group">
                                            <input type="submit" name="submit" value="sign in"
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
                                                <a href="change password.php">Forgot Password</a>
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
 $_SESSION['loginstatus']="Yes";
if(isset($_POST["submit"]))
{
    $username=$_POST["email"];
    $password=$_POST["password"];
    ?>
<script>
window.location.href = 'admin/employeereenterpassword.php';
</script>
<?php
}


        
      
	



?>