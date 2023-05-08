<?php
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:\mathew\miniproject-s6\login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>edit caravan </title>
<style>
    .n5{
        background:red;
        width:90px;
        height:30px;
       padding:10px 10px;
       font-size:14px;
       text-align: center;
       color:white;
      

    }
    
    </style>
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
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
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


$('#exampleModal').on('show.bs.modal', function(event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var recipient = button.data('whatever') // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    modal.find('.modal-title').text('New message to ' + recipient)
    modal.find('.modal-body input').val(recipient)
})
$(document).ready(function() {
    var mod7 = 1;
    $('#email2').blur(function() {
        email2 = document.getElementById("email2").value;
        alert(email2);
        var email1 = $(this).val();
        console.log("mathew");


    });
});
</script>

<body>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
   
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
                                    <img src="uploads/50.jpg" class="img-radius" alt="User-Profile-Image">
                                    <span>Admin</span>
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
            </nav>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Layout</div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="">
                                    <a href="\mathew\miniproject-s6\admin\admindashboard\dashboard.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">user &amp; employee
                                </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                    <li class="">
                                        <a href="userdetailsviewadmin/admin.php">
                                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">User Details</font>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="employee.php">
                                            <span class="pcoded-micon"><i class='fas fa-user-cog'></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">Add Employee</FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="viewemployee/viewemployee.php">
                                            <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">view Employees </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="active">
                                        <a href="bookingviewadmin.php">
                                            <span class="pcoded-micon"><i class="fas fa-truck"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">View Booking </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="\mathew\miniproject-s6\admin\view feedback\viewfeedback.php">
                                            <span class="pcoded-micon"><i  class='fas fa-comment-dots'></i></span>
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
                                            <a href="place.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Tourist Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="editplace1.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Tourist
                                                    Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="deletetoursit.php">
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
                                        <span class="pcoded-micon">
                                            <i class="ti-layout-grid2-alt"></i>
                                        </span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main">
                                         Caravan
                                        </span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class="">
                                            <a href="caravninput.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="editcaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="Deletecaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Delete
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="addimagescaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    images caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="viewaddimages.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Update
                                                    Images caravan</span>
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

                                                <div style="margin-left:600px;margin-top:-10px;">
                                                    <h5>Search:<input type="search" id="myInput" onkeyup="searchTable()"
                                                            placeholder="Search for names.."></div>
                                                            <h5>Booking View</h5>
                                                           
                                                            <div style="margin-left:650px"><a href="/mathew\miniproject-s6/generate/bookviewgenerate.php"class="btn btn-orange btn-sm"target=_blank><Font color="blue"size="2">Generate PDF</font></a></div></div>
                                                     
                                                            <div style="margin-top:-40px">
                                           
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
                                                                        <th>Status</th>
                                                                       

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
                                                                    <tr>
                                                                        <td><?php echo $id?></td>
                                                                        <td><?php echo $data1['first_name']," ", $data1['last_name'];?>
                                                                        </td>

                                                                        <td><?php echo $data2['caravan_name'];?>
                                                                        </td>
                                                                        <?php   $a4= date("d-m-Y", strtotime($d));?>
                                                                        <td><?php echo $a4;?></td>
                                                                        <?php   $a5= date("d-m-Y", strtotime($e));?>
                                                                        <td><?php echo $a5?></td>

                                                                        <td>


                                                                            <?php
                                                                             if($c=="pending")
                                                                             {
                                                                                ?>
                                                                                <?php echo"pending" ?>
                                                                                <?php
                                                                             }
                                                                             else
                                                                             {

                                                                          
                                                    $driver="select *from employee where id='$c'";
                                                    $result3=mysqli_query($conn,$driver);
                                                    while($data3=mysqli_fetch_array($result3))
                                                    {
                                                        ?>
                                                        <?php echo $data3['employee_name']?>   
                                                            <?php
                                                              break;
                                                        }
                                                      
                                                    }
                                                                  
                                                         ?>


                                                                        </td>
                                                                        <?php
                                                                        if($data['status']=="canceled")
                                                                        {
                                                                            ?>
                                                                            <td><div class="btn btn-danger btn-sm"readonly><font size="2"><?php echo $data['status'];?></font></div></td><?php
                                                                        }
                                                                        else if($data['status']=="Approved")
                                                                        {
                                                                            ?><td><div class="btn btn-success btn-sm"readonly><font size="2"><?php echo $data['status'];?><font></td><?php
                                                                        }
                                                                        else if($data['status']=="pending")
                                                                        {
                                                                            ?><td><div class="btn btn-warning" btn-sm"readonly><font size="2"><?php echo $data['status'];?><font></td><?php
                                                                        }
                                                                      
                                                                            
                                                                         
                                                         
                                                         
                           break;
                        }
                        break;
                    }
                 
                
                    $id++;
                    }
                    
             
                            ?>
                                    <?php
                                                        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                            $query="select *from employee ";
                            $query1="select *from deletebooking";
                            $query="select *from caravan";
                         
                          
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
                                                                    <tr>
                                                                        <td><?php echo $id?></td>
                                                                        <td><?php echo $data1['first_name']," ", $data1['last_name'];?>
                                                                        </td>

                                                                        <td><?php echo $data2['caravan_name'];?>
                                                                        </td>
                                                                        <?php   $a4= date("d-m-Y", strtotime($d));?>
                                                                        <td><?php echo $a4;?></td>
                                                                        <?php   $a5= date("d-m-Y", strtotime($e));?>
                                                                        <td><?php echo $a5?></td>

                                                                        <td>


                                                                            <?php
                                                                             if($c=="pending")
                                                                             {
                                                                                ?>
                                                                                <?php echo"pending" ?>
                                                                                <?php
                                                                             }
                                                                             else
                                                                             {

                                                                          
                                                    $driver="select *from employee where id='$c'";
                                                    $result3=mysqli_query($conn,$driver);
                                                    while($data3=mysqli_fetch_array($result3))
                                                    {
                                                        ?>
                                                        <?php echo $data3['employee_name']?>   
                                                            <?php
                                                              break;
                                                        }
                                                      
                                                    }
                                                                  
                                                         ?>


                                                                        </td>
                                                                        <?php
                                                                        if($data['status']==0)
                                                                        {
                                                                            ?>
                                                                            <td><div class="btn btn-danger btn-sm"readonly><font size="2">Canceled</font></div></td><?php
                                                                        }
                                                                        else if($data['status']=="Approved")
                                                                        {
                                                                            ?><td><div class="btn btn-success btn-sm"readonly><font size="2"><?php echo $data['status'];?><font></td><?php
                                                                        }
                                                                        else if($data['status']=="pending")
                                                                        {
                                                                            ?><td><div class="btn btn-warning btn-sm"readonly><font size="2"><?php echo $data['status'];?><font></td><?php
                                                                        }
                                                                      
                                                                            
                                                                         
                                                         
                                                         
                           break;
                        }
                        break;
                    }
                 
                
                    $id++;
                    }
                    
             
                            ?>
                                                            </form>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
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



        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
        <!-- Warning Section Ends -->
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
        <?php include('modal.php'); ?>
        <script src="custom1.js"></script>


</body>

</html>