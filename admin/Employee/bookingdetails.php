<?php
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:\mathew\miniproject-s6\login.php");
}
$uid=$_SESSION['uid'];
$_SESSION['name1']=$uid;
$_SESSION['loginstatus1']="yes";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>dashboard </title>

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
</head>
<script>
$('#exampleModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})
</script>
<style>
.k {
    width: 200px;
    background: linear-gradient(45deg, #4099ff, #73b4ff);
    color: white;
    padding: 25px 25px;
    margin-bottom: 20px;
    margin-left: 15px;
    float: left;

}

.k:hover {
    box-shadow: 0 0 15px #1c1c1c;
}

.k1:hover {
    box-shadow: 0 0 15px #1c1c1c;
}

.k2:hover {
    box-shadow: 0 0 15px #1c1c1c;
}

.k3:hover {
    box-shadow: 0 0 15px #1c1c1c;
}

.k1 {
    width: 200px;
    background: linear-gradient(45deg, #2ed8b6, #59e0c5);
    color: white;
    padding: 25px 25px;
    margin-bottom: 20px;
    margin-left: 15px;
    float: left;
}

.k2 {
    width: 200px;
    background: linear-gradient(45deg, #FFB64D, #ffcb80);
    color: white;
    padding: 25px 10px;
    margin-bottom: 20px;
    margin-left: 15px;
    float: left;
}

.k3 {
    width: 200px;
    background: linear-gradient(45deg, #FF5370, #ff869a);
    color: white;
    padding: 25px 25px;
    margin-bottom: 20px;
    margin-left: 15px;
    float: left;
}
</style>


<body>
    <?php
       $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
       $query2="select *from employee where id='$uid'";
    $mathew=mysqli_query($conn,$query2);
    while($row=mysqli_fetch_array($mathew))
    {
       ?>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search">
                            <div class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="dashboard.php">
                            <font size="3" color="white"> &nbsp &nbsp &nbspCaravan Kerala</font>
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a>
                                </div>
                            </li>
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">


                            <li class="user-profile header-notification">
                                <a href="#!">
                                    <img src="/mathew\miniproject-s6\admin\uploads\<?php echo $row['employee_image'];?> "
                                        class="img-radius" alt="User-Profile-Image">
                                    <span><?php echo $row['employee_name'];?></span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                            </li>
                            <li>
                                <a href="account view.php">
                                    <i class="ti-user"></i> Profile
                                </a>
                            </li>


                            <li>
                                <a href="\mathew\miniproject-s6\login.php">
                                    <i class="ti-layout-sidebar-left"></i> Logout
                                </a>
                            </li>
                        </ul>
                        </li>
                        </ul>
                    </div>
                </div>
                <?php
    }
    ?>
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="dashboard.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="#">
                                        <span class="pcoded-micon"><i
                                                class="fa-solid fa-location-dot"></i></i><b>D</b></span>
                                        <span button type="button" class="" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo">Update Location</span>

                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="userdetails.php">
                                        <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                            <font size="2">Booked User Details</font>
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="">
                                    <a href="userbookedcaravan.php">
                                        <span class="pcoded-micon"><i class="fa-solid fa-caravan"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                            <font size="1"> User Booked Caravan Details</font>
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="active">
                                    <a href="bookingdetails.php">
                                        <span class="pcoded-micon"><i class="fas fa-shuttle-van"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                            <font size="2">Booking Details</font>
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>


                            </ul>


                    </nav>


                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->

                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Basic table card start -->
                                        <div class="card">
                                            <div class="card-header">
                                                <h5>Booking View</h5>
                                                <div style="margin-left:600px;margin-top:-30px;">
                                                    <h5>Search:<input type="search" id="myInput" onkeyup="searchTable()"
                                                            placeholder="Search for names..">
                                                        <div class="card-header-right">

                                                        </div>

                                                </div>
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table" id="myTable">
                                                            <form action="#" method="post" class="form">

                                                                <thead>
                                                                    <tr>
                                                                        <th>SN</th>

                                                                        <th>Customer</th>
                                                                        <th>Caravan</th>
                                                                        <th>Start Date</th>
                                                                        <th>End Date</th>

                                                                        <th>Allocate Driver</th>
                                                                        <th>More Info</th>


                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    <tr>

                                                                        <?php
                                                        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                            $query="select *from employee ";
                            $query1="select *from booking";
                            $query="select *from caravan";
                         
                            $id=1;
                            $result=mysqli_query($conn,$query1);
                         
                            while($data=mysqli_fetch_array($result))
                            {
                                $a=$data['customer_id'];
                                $b=$data['caravan_id'];
                                $c=$data['driver'];
                    
                                 $caravan="select *from caravan where id='$b'";
                             
                                $customer="select *from customer where id='$a'";
                     
                                $result1=mysqli_query($conn,$customer);
                                $result2=mysqli_query($conn,$caravan);
                             
                                while($data1=mysqli_fetch_array($result1))
                                {

                                    while($data2=mysqli_fetch_array($result2))
                                {
                                
                                  $d=$data['start'];
                                  $e=$data['end'];
                                ?>
                                                                  


                            <?php

                                                                          
                                                    $driver="select *from employee where id='$uid'";
                                                    $result3=mysqli_query($conn,$driver);
                                                    while($data3=mysqli_fetch_array($result3))
                                                    {
                                                        ?>
                                                          <tr>
                                                                        <td><?php echo $id?></td>
                                                                        <td> <span  id="customer<?php echo $data['booking_id']?>"> <?php echo $data1['first_name']," ", $data1['last_name'];?></span>   
 
                                                                        </td>
                                                                        <td> <span  id="caravanname<?php echo $data['booking_id']?>"><?php echo $data2['caravan_name'];?></span>   

                                                                        </td>
                                                                        <?php   $a4= date("d-m-Y", strtotime($d));?>
                                                                        <td> <span  id="start<?php echo $data['booking_id']?>"> <?php echo $a4;?></span>  
                                                                     
                                                                        </td>
                                                                        <?php   $a5= date("d-m-Y", strtotime($e));?>
                                                                        <td> <span  id="end<?php echo $data['booking_id']?>"> <?php echo $a5;?></span>  </td>
                                                                     
                                                                      

                                                                        <td> <span  id="employee<?php echo $data['booking_id']?>"> <?php echo $data3['employee_name']?></span>  </td>
                                                                            
                 <td><button type="button" class="btn btn-success  btn-sm edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> View More</button></td>                                                                            
                                                                            <?php
                                                              break;
                                                        }
                                                        break;
                                                    }
                                                    $id++;
                                                }      
                                            }  
                                                         ?>


                                                                      
                                                                    
                                                                      
                                                                            
                                                                         
                                                         
                                                         
                        
                                   </form>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Basic table card end -->
                                            <!-- Inverse table card start -->

                                            <!-- Inverse table card end -->
                                            <!-- Hover table card start -->

                                            <!-- Hover table card end -->
                                            <!-- Contextual classes table starts -->

                                            <!-- Background Utilities table end -->
                                        </div>
                                        <!-- Page-body end -->
                                    </div>
                                </div>
                                <!-- Main-body end -->

                                <div id="styleSelector">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main-body end -->

        <div id="styleSelector">

        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>




    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <form action="" method="POST">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <?php
       $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
       $query2="select *from employee where id='$uid'";
    $mathew=mysqli_query($conn,$query2);
    while($row=mysqli_fetch_array($mathew))
    {
       ?>
                        <h5 class="modal-title" id="exampleModalLabel">Update Location</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Employee Name:</label>
                                <input type="text" class="form-control" id="recipient-name"
                                    value="<?php echo $row['employee_name']?>" readonly>
                            </div>
                            <?php
          }
          ?>
                            <?php
       $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
       $query3="select *from updatelocation where employee_id='$uid'";
    $mathew=mysqli_query($conn,$query3);
    $count1=mysqli_num_rows($mathew);
  
    if($count1>0)
    {
    while($row=mysqli_fetch_array($mathew))
    {
       ?>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">update Location:</label>
                                <input type="text" class="form-control" id="recipient-name" name="location"
                                    value="<?php echo $row['location']?>">
                            </div>
                            <?php
    }
    ?>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="update" class="btn btn-primary">Update Location</button>
                    </div>
                </div>
            </div>
    </div>
    <?php
    }

if(isset($_POST["update"]))
{
    $a=$_POST["location"];
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query2="update updatelocation set location='$a' where employee_id='$uid'";
    $mathew=mysqli_query($conn,$query2);
    ?>
    <script>
    alert("successfully updated the location");
    window.location.href = 'dashboard.php';
    </script>
    <?php
}

?>

    <!-- Required Jquery -->
    <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
    <!-- am chart -->
    <script src="assets/pages/widget/amchart/amcharts.min.js"></script>
    <script src="assets/pages/widget/amchart/serial.min.js"></script>
    <!-- Chart js -->
    <script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
    <!-- Todo js -->
    <script type="text/javascript " src="assets/pages/todo/todo.js "></script>
    <!-- Custom js -->
   
    <script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    <script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
    <script src="assets/js/vartical-demo.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
    <?php include('modal.php'); ?>
    <script src="custom.js"></script>  
    
</body>

</html>