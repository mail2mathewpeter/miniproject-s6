<?php
session_start();
if(!isset($_SESSION)) { session_start(); } 
if(  $_SESSION['feedback']=="" )
{
	header("location:\mathew\miniproject-s6\admin\Employee/feedbackclose.php");
}

$name=$_SESSION['name'];
$email=$_SESSION['email'];
$id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gradient Able bootstrap admin template by codedthemes </title>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
        .error{
            color:red;
        }
        </style>
  
      
</script>
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description"
        content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
    <meta name="keywords"
        content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes">
    <!-- Favicon icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <script src="https://kit.fontawesome.com/812d6c8dd3.js" crossorigin="anonymous"></script>
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
<script>
function searchTable() {
    // Declare variables
    var input, filter, table, tr, td, i, j, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    // Loop through all table rows, and hide those that don't match the search query
    for (i = 0; i < tr.length; i++) {
        for (j = 0; j < tr[i].cells.length; j++) {
            td = tr[i].cells[j];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
}
</script>

<body bgcolor="lightblue">
    
    </div>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
   
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
									<!-- Page-header start -->
                                   
                                    <!-- Page-header end -->
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <form action=""method="POST"enctype="multipart/form-data">
                                                <div class="card">
                                                    <div class="card-header">
                                                      
                                                      
                                                        <div class="card-header-right"><i
                                                            class="icofont icofont-spinner-alt-5"></i></div>

                                                            <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>

                                                        </div>
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Customer Feedback</h4>
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Customer Name</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"placeholder=" Name" id="txt1" name="name" value="<?php echo $name ?>"readonly>
                                                                        <span id="text1"></span>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Customer Email </label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="txt2"name="email"value="<?php echo $email ?>"readonly
                                                                        placeholder="email">
                                                                        <span id="text2"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">About Our Trip</label>
                                                                    <div class="col-sm-10">
                                                                    <textarea name="about" rows="6" cols="114"width="677" id="" placeholder="About Our Trip" required=""
                                            id="message"></textarea>
                                                                       
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Things To Improve</label>
                                                                    <div class="col-sm-10">
                                                                    <textarea name="improve" rows="6" cols="114"width="677" id="" placeholder="Things To Improve" required=""
                                            id="message"></textarea>
                                                                    </div>
                                                                </div>
                                                      
                                                                <div class="col-sm-10">
                                                                          
                                                                       <div style="margin-left:250px"> <input type="submit" name="sub"class="btn btn-primary btn-round" id="register"></button>   </div>                                                              
                                                                      
                                                                    </div>
                                                                
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                               
                                                                    </div>
                                                                </div>
                                                            
                                                                <div id="styleSelector">

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

<!-- Required Jquery -->
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>
<?php
if(isset($_POST["sub"]))
{



	$name=$_POST["name"];
	$email=$_POST["email"];
	$about=$_POST["about"];
    $improve=$_POST["improve"];
	
    
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query="INSERT INTO `feedback`(`name`, `email`, `user_id`, `description`, `needs to improve`)  VALUES ('$name','$email','$id','$about','$improve')";
    $mathew=mysqli_query($conn,$query);
    if($mathew)
	{
        
        $_SESSION['feedback']="";    
		?>
        
        <script>

        
        window.location.href='feedbackclose.php';
            </script>
<?php
    }
}
    


   
