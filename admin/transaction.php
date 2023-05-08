<?php
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>delete caravan </title>

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

<body>

    </div>
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
                                    <img src="\mathew\miniproject-s6\admin\uploads/50.jpg" class="img-radius"
                                        alt="User-Profile-Image">
                                    <span>Admin</span>
                                    <i class="ti-angle-down"></i>
                                </a>
                                <ul class="show-notification profile-notification">

                            </li>
                            <li>
                                <a href="\mathew\miniproject-s6\admin\account view.php">
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
                                    <a href="\mathew\miniproject-s6\admin\admindashboard/dashboard.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>

                                <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms">user &amp; employee
                                    &amp; Booking
                                </div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li>
                                    <li class="">
                                        <a href="\mathew\miniproject-s6\admin\userdetailsviewadmin/admin.php">
                                            <span class="pcoded-micon"><i class="fa fa-users"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">User Details</font>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="\mathew\miniproject-s6\admin\employee.php">
                                            <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">Add Employee</FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="\mathew\miniproject-s6\admin\viewemployee/viewemployee.php">
                                            <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">view Employees </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="\mathew\miniproject-s6\admin\bookingviewadmin.php">
                                            <span class="pcoded-micon"><i class="fa-solid fa-caravan"></i></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">View Booking </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="\mathew\miniproject-s6\admin\view feedback\viewfeedback.php">
                                            <span class="pcoded-micon"><i class='fas fa-comment-dots'></i></span>
                                            <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">
                                                <font size="2">View Feedback </FONT>
                                            </span>
                                            <span class="pcoded-mcaret"></span>
                                        </a>
                                    </li>
                                    <li class="active">
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
                                            <a href="\mathew\miniproject-s6\admin\place.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Tourist Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="\mathew\miniproject-s6\admin\editplace1.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Tourist
                                                    Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="\mathew\miniproject-s6\admin\deletetoursit.php">
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
                                            <a href="\mathew\miniproject-s6\admin\caravninput.php">
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
                                        <li class="">
                                            <a href="Deletecaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Delete
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="\mathew\miniproject-s6\admin\addimagescaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    images caravan
                                                </span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="\mathew\miniproject-s6\admin\viewaddimages.php">
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
                                           
                                                <div style="margin-left:600px;margin-top:-0px;">
                                                    <h5>Search:<input type="search" id="myInput" onkeyup="searchTable()"
                                                            placeholder="Search for names.."></div>
                                                            <h5>Transaction Details</h5>
                                                            <div style="margin-left:650px;margin-top:-10px"><a href="/mathew\miniproject-s6/generate/usergenerate.php"class="btn btn-orange btn-sm"target=_blank><Font color="blue"size="2.5">Generate PDF</font></a></div>
                                                        <div class="card-header-right">

                                                        </div>

                                                </div>
                                                <div style="margin-top:-43px">
                                        
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table" id="myTable">
                                                            <thead>
                                                                <tr>
                                                                <th>Id</th>
                                                                         
                                                                         <th>Customer Name</th>
                                                                         <th>Mobile</th>
                                                                         <th>Transaction Date</th>
                                                                         <th>Amount</th>
                                                                      
                                                                         <th>Transaction Id</th>
                                                                         <th>Status</th>
</tr>
                                                            
                                                            </thead>
                                                            <tbody>
                                                             
                                                                <?php
                                                        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                            $query="select *from employee ";
                            $query1="select *from booking where payment='Success'";
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

                                                                                <td><?php echo $data1['phone'];?>
                                                                                </td>
                                                                                <?php
                                                                                
                                                                                $e= $data7['date']?> 
                                                                                <?php   $a5= date("y-m-20d", strtotime($e));?>
                                                                              
                                                                                <td><?php echo $a5?> </td>
                                                                                
                                                                              
                                                                          
                                                                                <td>               <?php echo $data7['amount'];?>    </td>


                                                                                <td>  <?php echo $data7['transaction_id'];?></td>
                                                                                <td> <span class="label label-primary"> <?php echo $data7['status'];?></span>
                                                                                    
                                                                                </td>


                                                                         
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
    <script src="custom.js"></script>
</body>

</html>