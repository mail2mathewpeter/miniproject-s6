<?php
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:\mathew\miniproject-s6\login.php");
}
$j=$_SESSION['name1'];
$_SESSION['name1']=$j;
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
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

/* The container must be positioned relative: */
.custom-select {
    position: relative;
    font-family: Arial;
}

.custom-select select {
    display: none;
    /*hide original SELECT element: */
}

.select-selected {
    background-color: DodgerBlue;
}

/* Style the arrow inside the select element: */
.select-selected:after {
    position: absolute;
    content: "";
    top: 14px;
    right: 10px;
    width: 0;
    height: 0;
    border: 6px solid transparent;
    border-color: #fff transparent transparent transparent;
}

/* Point the arrow upwards when the select box is open (active): */
.select-selected.select-arrow-active:after {
    border-color: transparent transparent #fff transparent;
    top: 7px;
}

/* style the items (options), including the selected item: */
.select-items div,
.select-selected {
    color: #ffffff;
    padding: 8px 16px;
    border: 1px solid transparent;
    border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
    cursor: pointer;
}

/* Style items (options): */
.select-items {
    position: absolute;
    background-color: DodgerBlue;
    top: 100%;
    left: 0;
    right: 0;
    z-index: 99;
}

/* Hide the items when the select box is closed: */
.select-hide {
    display: none;
}

.select-items div:hover,
.same-as-selected {
    background-color: rgba(0, 0, 0, 0.1);
}
</style>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<body>

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
                                    <img src="/mathew\miniproject-s6\admin\uploads/50.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                            </li>
                            <li>
                                <a href="/mathew\miniproject-s6\admin\account view.php">
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
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="dashboard.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">user &amp; employee &amp; Booking
                                </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                    <li class="">
                                        <a href="/mathew\miniproject-s6\admin\userdetailsviewadmin\admin.php">
                                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">User Details</font>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/mathew\miniproject-s6\admin\employee.php">
                                            <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">Add Employee</FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/mathew\miniproject-s6\admin\viewemployee/viewemployee.php">
                                            <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">view Employees </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/mathew\miniproject-s6\admin\bookingviewadmin.php">
                                            <span class="pcoded-micon"><i class="fa-solid fa-caravan"></i></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">View Booking </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/mathew\miniproject-s6\admin\view feedback\viewfeedback.php">
                                            <span class="pcoded-micon"><i class='fas fa-comment-dots'></i></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">View Feedback </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="/mathew\miniproject-s6\admin\transaction.php">
                                            <span class="pcoded-micon"><i class='fas fa-key'></i></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">Transaction Details </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>



                                </ul>


                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">Tourist Place &amp;
                                    Caravan</div>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Tourist
                                            Place</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/mathew\miniproject-s6\admin\place.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Tourist Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/mathew\miniproject-s6\admin\editplace1.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Tourist
                                                    Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/mathew\miniproject-s6\admin\deletetoursit.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Delete Tourist
                                                    Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="ti-layout-grid2-alt"></i></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">Caravan</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/mathew\miniproject-s6\admin\caravninput.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/mathew\miniproject-s6\admin\deletecaravanadmin/editcaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/mathew\miniproject-s6\admin\deletecaravanadmin/Deletecaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Delete
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/mathew\miniproject-s6\admin\addimagescaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add images caravan
                                                    </span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="/mathew\miniproject-s6\admin\viewaddimages.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Update Images caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>





                                    </ul>
                                    

                    </nav>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="k">
                                                <?php
                                        $f=0;
                                        $s=0;
                                        $k=0;
                                        $p=0;
                                        $q=0;
                                        $r=0;
                                          $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                                          $query="select *from booking";
                                          $query1="select *from deletebooking";
                                          $result=mysqli_query($conn,$query);
                                          $result1=mysqli_query($conn,$query1);
                                          while($data=mysqli_fetch_array($result))
                                          {
                                          
                                                $s=$s+1;
                                              
                                                    $p=$p+1;
                                            
                                                if ($data['amount'])
                                                {
                                                                    $q=$q+$data['amount'];
                                                }

                                          }
                                          while($data1=mysqli_fetch_array($result1))
                                          {
                                          
                                                $s=$s+1;
                                                if ($data1['status']=="0")
                                                {
                                                                    $f=$f+1;
                                                }
                                            }
                                          ?>
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Total Booking</h6>
                                                    <h2 class="text-right"><i class="fa-solid fa-truck"></i>
                                                        <span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $s?></span>
                                                    </h2>
                                                    <p class="m-b-0">Cancel Booking<span class="f-right">&nbsp<font
                                                                size="4"><?php echo $f?></font></span></p>
                                                </div>
                                            </div>



                                            <div class="k1">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Success </h6>
                                                    <h2 class="text-right"><i
                                                            class="ti-tag f-left"></i><span><?php echo $p?></span>
                                                    </h2>
                                                    <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                                </div>
                                            </div>
                                            <div class="k2">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Revenue</h6>
                                                    <h2 class="text-right"><i
                                                            class="ti-reload f-left"></i><span><span><font size="5">$<?php echo $q?></span></font></h2>
                                                    <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                                </div>
                                            </div>

                                            <div class="k3">
                                                <div class="card-block">
                                                    <h6 class="m-b-20">Total Profit</h6>
                                                    <h2 class="text-right"><i
                                                            class="ti-wallet f-left"></i><span><font size="5">$<?php echo $q?></font></span></h2>
                                                    <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                                </div>
                                            </div>
                                            <!-- order-card start -->

                                            <!-- order-card end -->

                                            <!-- statustic and process start -->
                                            <!--<div class="col-lg-8 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Statistics</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <canvas id="Statistics-chart" height="200"></canvas>
                                                    </div>
                                                </div>
                                            </div>-->
                                            <?php
                                            $g=0;
                                            $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                                          $query="select *from feedback";
                                       
                                          $result=mysqli_query($conn,$query);
                                          while($data=mysqli_fetch_array($result))
                                          {
                                          
                                                $g=$g+1;
                                          }
                                          $k=($g*100)/$g;
                                          ?>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Customer Feedback</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <span
                                                            class="d-block text-c-blue f-24 f-w-600 text-center"><?php echo $g?></span>
                                                        <!--<canvas id="feedback-chart" height="100"></canvas>-->
                                                        <div class="row justify-content-center m-t-15">
                                                            <div class="col-auto b-r-default m-t-5 m-b-5">
                                                                <h4><?php echo $k?>%</h4>
                                                                <p class="text-success m-b-0"><i
                                                                        class="ti-hand-point-up m-r-5"></i>Positive</p>
                                                            </div>
                                                            <div class="col-auto m-t-5 m-b-5">
                                                                <h4>0%</h4>
                                                                <p class="text-danger m-b-0"><i
                                                                        class="ti-hand-point-down m-r-5"></i>Negative
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <font color="green" size="4"> <a href="/mathew/miniproject-s6/admin/view%20feedback/viewfeedback.php">view
                                                                details</font></a><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        $f=0;
                                        $s=0;
                                        $k=0;
                                        $p=0;
                                        $q=0;
                                        $r=0;
                                          $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                                          $query="select *from login where status!='2'";
                                          $result=mysqli_query($conn,$query);
                                          while($data=mysqli_fetch_array($result))
                                          {
                                          
                                                $s=$s+1;
                                                if($data['status']=='1')
                                                {
                                                    $p=$p+1;
                                                }
                                                elseif($data['status']=='0')
                                                {
                                                    $k=$k+1;
                                                }

                                          }
                                          $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                                          $query="select *from employee";
                                          $result=mysqli_query($conn,$query);
                                          while($data=mysqli_fetch_array($result))
                                          {
                                            $f=$f+1;
                                            if($data['employee_status']=='Active')
                                            {
                                                $q=$q+1;
                                            }
                                            elseif($data['employee_status']=='Inactive')
                                            {
                                                $r=$r+1;
                                            }


                                          }
                                          ?>

                                            <div class="col-lg-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Employee Details</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <span
                                                            class="d-block text-c-blue f-24 f-w-600 text-center"><?php echo $f ?></span>
                                                        <!--<canvas id="feedback-chart" height="100"></canvas>-->
                                                        <div class="row justify-content-center m-t-15">
                                                            <div class="col-auto b-r-default m-t-5 m-b-5">
                                                                <h4><?php echo $q ?></h4>
                                                                <p class="text-success m-b-0"><i
                                                                        class="ti-hand-point-up m-r-5"></i>Active</p>
                                                            </div>
                                                            <div class="col-auto m-t-5 m-b-5">
                                                                <h4><?php echo $r?></h4>
                                                                <p class="text-danger m-b-0"><i
                                                                        class="ti-hand-point-down m-r-5"></i>Inactive
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <font color="green" size="4"> <a href="/mathew/miniproject-s6/admin/viewemployee/viewemployee.php">view
                                                                details</font></a><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5> Customer Details</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <span
                                                            class="d-block text-c-blue f-24 f-w-600 text-center"><?php echo $s ?></span>
                                                        <!--<canvas id="feedback-chart" height="100"></canvas>-->
                                                        <div class="row justify-content-center m-t-15">
                                                            <div class="col-auto b-r-default m-t-5 m-b-5">
                                                                <h4><?php echo $p ?></h4>
                                                                <p class="text-success m-b-0"><i
                                                                        class="ti-hand-point-up m-r-5"></i>Active</p>
                                                            </div>
                                                            <div class="col-auto m-t-5 m-b-5">
                                                                <h4><?php echo $k ?></h4>
                                                                <p class="text-danger m-b-0"><i
                                                                        class="ti-hand-point-down m-r-5"></i>Inactive
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <font color="green" size="4"> <a href="/mathew/miniproject-s6/admin/userdetailsviewadmin/admin.php">view details
                                                        </font></a><br>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- statustic and process end -->
                                            <!-- tabs card start -->
                                            <div class="col-sm-12">
                                                <div class="card tabs-card">
                                                    <div class="card-block p-0">
                                                        <!-- Nav tabs -->
                                                        <ul class="nav nav-tabs md-tabs" role="tablist">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab"
                                                                    href="#home3" role="tab"><i
                                                                        class="fa fa-home"></i>Pending Request</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#profile3"
                                                                    role="tab"><i class="fa fa-key"></i>Transaction
                                                                    Details</a>
                                                                <div class="slide"></div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#messages3"
                                                                    role="tab"><i
                                                                        class="fa fa-play-circle"></i>Feedback</a>
                                                                <div class="slide"></div>
                                                            </li>

                                                        </ul>
                                                        <!-- Tab panes -->
                                                        <form action="" method="POST">
                                                            <div class="tab-content card-block">
                                                                <div class="tab-pane active" id="home3" role="tabpanel">

                                                                    <div class="table-responsive">
                                                                        <table class="table">
                                                                            <tr>
                                                                                <th>Id</th>
                                                                                <th>Customer</th>
                                                                                <th>Caravan</th>
                                                                                <th>Start Date</th>
                                                                                <th>End Date</th>
                                                                                <th>Allocate Driver</th>
                                                                                <th>Status</th>
                                                                            </tr>
                                                                            <?php
                                                        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                            $query="select *from employee ";
                            $query1="select *from booking where status='pending' and payment='Success'";
                            $query="select *from caravan";
                         
                            $id=1;
                            $result=mysqli_query($conn,$query1);
                         
                            while($data=mysqli_fetch_array($result))
                            {
                                $a=$data['customer_id'];
                                $b=$data['caravan_id'];
                                 $caravan="select *from caravan where id='$b'";
                                 $driver="select *from employee where employee_designation='Driver'";
                                $customer="select *from customer where id='$a'";
                              ?> <td> <input type="hidden" value="<?php echo  $data['booking_id']?>" id="book"
                                                                                    name="book"></td><?php
                                $result1=mysqli_query($conn,$customer);
                                $result2=mysqli_query($conn,$caravan);
                                $result3=mysqli_query($conn,$driver);
                                while($data1=mysqli_fetch_array($result1))
                                {

                                    while($data2=mysqli_fetch_array($result2))
                                {
                                  $c=$data['status'];
                                  $d=$data['start'];
                                  $e=$data['end'];
                                  
                                ?>
                                 
                                                                            <tr>
                                                                                <td><?php echo $id?></td>
                                                                                <span hidden id="start<?php echo $data['booking_id'] ?>"><?php echo $d;?></span>
                                  <span hidden id="end<?php echo $data['booking_id'] ?>"><?php echo $e?></span>
                                                                                <td><span id="caravan_name<?php echo $data['booking_id'] ?>"><?php echo $data1['first_name']," ", $data1['last_name'];?></span></td>

                                                                                <td><?php echo $data2['caravan_name'];?>
                                                                                </td>
                                                                                <?php   $a4= date("d-m-Y", strtotime($d));?>
                                                                              
                                                                                <td><?php echo $a4;?>
                                                                                <?php   $a5= date("d-m-Y", strtotime($e));?>
                                                                              
                                                                                <td><?php echo $a5?></td>
                                                                                <td>


                                                                                  <?php echo $data['driver'];?>
                                </td>
                                                                                    <?php
                                                                            if($c=='pending')
                                                                            {
                                                                                ?>


                                                                                 
                                                                                    <td><button type="button" class="btn btn-success btn-sm edit " value="<?php echo $data['booking_id'];?>"><span class="glyphicon glyphicon-edit"></span> Allocate Driver</button></td>
                                                                                    <?php
                                                                            } 
                                                                           
                                                                           ?>

                                                                                </td>


                                                                            </tr>
                                                        </form>
                                                        <?php
                                                                            
                                                                       
                                                            $id++;
                                                         
                           break;
                        }
                        break;
                    }
                 
                    }
                    
             
                            ?>

                                                        </table>
                                                    </div>
                                                    <div class="text-center">
                                                        <button class="btn btn-outline-primary btn-round btn-sm">Load
                                                            More</button>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="profile3" role="tabpanel">

                                                    <div class="table-responsive">
                                                                    <table class="table">
                                                                        <tr>
                                                                            <th>Id</th>
                                                                         
                                                                            <th>Customer Name</th>
                                                                            <th>Caravan Name</th>
                                                                            <th>Transaction Date</th>
                                                                            <th>Amount</th>
                                                                         
                                                                            <th>Transaction Id</th>
                                                                            <th>Status</th>
                                                                        </tr>
                                                                      
                                                                        <?php
                                                        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                            $query="select *from employee ";
                            $query1="select *from booking where status='pending' and payment='Success'";
                            $query="select *from caravan";
                      
                         
                            $id=1;
                            $result=mysqli_query($conn,$query1);
                         
                            while($data=mysqli_fetch_array($result))
                            {
                                $ab=$data['booking_id'];
                                $a=$data['customer_id'];
                                $b=$data['caravan_id'];
                                 $caravan="select *from caravan where id='$b'";
                                 $driver="select *from employee where employee_designation='Driver'";
                                $customer="select *from customer where id='$a'";
                                $payment2="select *from payment where book_id='$ab'";
                              ?> <td> <input type="hidden" value="<?php echo  $data['booking_id']?>" id="book"
                                                                                    name="book"></td><?php
                                $result1=mysqli_query($conn,$customer);
                                $result2=mysqli_query($conn,$caravan);
                                $result3=mysqli_query($conn,$driver);
                                $payment=mysqli_query($conn,$payment2);
                                while($data1=mysqli_fetch_array($result1))
                                {

                                    while($data2=mysqli_fetch_array($result2))
                                {
                                  $c=$data['status'];
                                  $d=$data['start'];
                                  $e=$data['end'];
                                  while($data7=mysqli_fetch_array($payment))
                                  {
                                  
                                ?>
                                 
                                                                            <tr>
                                                                                <td><?php echo $id?></td>
                                                                                <span hidden id="start<?php echo $data['booking_id'] ?>"><?php echo $d;?></span>
                                  <span hidden id="end<?php echo $data['booking_id'] ?>"><?php echo $e?></span>
                                                                                <td><span id="caravan_name<?php echo $data['booking_id'] ?>"><?php echo $data1['first_name']," ", $data1['last_name'];?></span></td>

                                                                                <td><?php echo $data2['caravan_name'];?>
                                                                                </td>
                                                                                <?php
                                                                                
                                                                                $e= $data7['date']?> 
                                                                                <?php   $a5= date("y-m-20d", strtotime($e));?>
                                                                              
                                                                                <td><?php echo $a5?> </td>
                                                                                
                                                                              
                                                                          
                                                                                <td>               <?php echo $data7['amount'];?>    </td>


                                                                                <td>  <?php echo $data7['transaction_id'];?>
                                                                                <td> <span class="label label-primary"> <?php echo $data7['status'];?></span>
                                                                                    
                                                                                </td>


                                                                            </tr>
                                                        </form>
                                                        <?php
                                                                            
                                                                       
                                                            $id++;
                                                            break;

                                                                        }                              
                           break;
                        }
                        break;
                    }
                 
                    }
                    
             
                            ?>

                                                        </table>
                                                    </div>
                                                                  
                                                                <div class="text-center">
                                                                    <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>
                                                                </div>
                                                            </div>
                                                           
                                                <div class="text-center">
                                                    <!-- <button class="btn btn-outline-primary btn-round btn-sm">Load More</button>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- tabs card end -->

                                <!-- social statustic start -->
                                <div class="col-md-12 col-lg-4">
                                    <div class="card">
                                        <div class="card-block text-center">
                                            <i class="fa fa-envelope-open text-c-blue d-block f-40"></i>
                                            <h4 class="m-t-20"><span class="text-c-blue">8.62k</span>
                                                Subscribers</h4>
                                            <p class="m-b-20">Your main list is growing</p>
                                            <button class="btn btn-primary btn-sm btn-round">Manage
                                                List</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-block text-center">
                                            <i class="fa fa-twitter text-c-green d-block f-40"></i>
                                            <h4 class="m-t-20"><span class="text-c-blgreenue">+40</span>
                                                Followers</h4>
                                            <p class="m-b-20">Your main list is growing</p>
                                            <button class="btn btn-success btn-sm btn-round">Check them
                                                out</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card">
                                        <div class="card-block text-center">
                                            <i class="fa fa-puzzle-piece text-c-pink d-block f-40"></i>
                                            <h4 class="m-t-20">Business Plan</h4>
                                            <p class="m-b-20">This is your current active plan</p>
                                            <button class="btn btn-danger btn-sm btn-round">Upgrade to
                                                VIP</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- social statustic end -->

                                <!-- users visite and profile start -->
                                <!--  <div class="col-md-4">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5>Profile</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="usre-image">
                                                            <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                                        </div>
                                                        <h6 class="f-w-600 m-t-25 m-b-10">Alessa Robert</h6>
                                                        <p class="text-muted">Active | Male | Born 23.05.1992</p>
                                                        <hr/>
                                                        <p class="text-muted m-t-15">Activity Level: 87%</p>
                                                        <ul class="list-unstyled activity-leval">
                                                            <li class="active"></li>
                                                            <li class="active"></li>
                                                            <li class="active"></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                        <div class="bg-c-blue counter-block m-t-10 p-20">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <i class="ti-comments"></i>
                                                                    <p>1256</p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <i class="ti-user"></i>
                                                                    <p>8562</p>
                                                                </div>
                                                                <div class="col-4">
                                                                    <i class="ti-bag"></i>
                                                                    <p>189</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="m-t-15 text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                        <hr/>
                                                        <div class="row justify-content-center user-social-link">
                                                            <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                                            <div class="col-auto"><a href="#!"><i class="fa fa-twitter text-twitter"></i></a></div>
                                                            <div class="col-auto"><a href="#!"><i class="fa fa-dribbble text-dribbble"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Activity Feed</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <ul class="feed-blog">
                                                            <li class="active-feed">
                                                                <div class="feed-user-img">
                                                                    <img src="assets/images/avatar-3.jpg" class="img-radius " alt="User-Profile-Image">
                                                                </div>
                                                                <h6><span class="label label-danger">File</span> Eddie uploaded new files: <small class="text-muted">2 hours ago</small></h6>
                                                                <p class="m-b-15 m-t-15">hii <b> @everone</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                                <div class="row">
                                                                    <div class="col-auto text-center">
                                                                        <img src="assets/images/blog/blog-r-1.jpg" alt="img" class="img-fluid img-100">
                                                                        <h6 class="m-t-15 m-b-0">Old Scooter</h6>
                                                                        <p class="text-muted m-b-0"><small>PNG-100KB</small></p>
                                                                    </div>
                                                                    <div class="col-auto text-center">
                                                                        <img src="assets/images/blog/blog-r-2.jpg" alt="img" class="img-fluid img-100">
                                                                        <h6 class="m-t-15 m-b-0">Wall Art</h6>
                                                                        <p class="text-muted m-b-0"><small>PNG-150KB</small></p>
                                                                    </div>
                                                                    <div class="col-auto text-center">
                                                                        <img src="assets/images/blog/blog-r-3.jpg" alt="img" class="img-fluid img-100">
                                                                        <h6 class="m-t-15 m-b-0">Microphone</h6>
                                                                        <p class="text-muted m-b-0"><small>PNG-150KB</small></p>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="diactive-feed">
                                                                <div class="feed-user-img">
                                                                    <img src="assets/images/avatar-4.jpg" class="img-radius " alt="User-Profile-Image">
                                                                </div>
                                                                <h6><span class="label label-success">Task</span>Sarah marked the Pending Review: <span class="text-c-green"> Trash Can Icon Design</span><small class="text-muted">2 hours ago</small></h6>
                                                            </li>
                                                            <li class="diactive-feed">
                                                                <div class="feed-user-img">
                                                                    <img src="assets/images/avatar-2.jpg" class="img-radius " alt="User-Profile-Image">
                                                                </div>
                                                                <h6><span class="label label-primary">comment</span> abc posted a task:  <span class="text-c-green">Design a new Homepage</span>  <small class="text-muted">6 hours ago</small></h6>
                                                                <p class="m-b-15 m-t-15"hii <b> @everone</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                            </li>
                                                            <li class="active-feed">
                                                                <div class="feed-user-img">
                                                                    <img src="assets/images/avatar-3.jpg" class="img-radius " alt="User-Profile-Image">
                                                                </div>
                                                                <h6><span class="label label-warning">Task</span>Sarah marked : <span class="text-c-green"> do Icon Design</span><small class="text-muted">10 hours ago</small></h6>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>-->
                                <!-- users visite and profile end -->

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
<script src="custom3.js"></script>
</body>

</html>