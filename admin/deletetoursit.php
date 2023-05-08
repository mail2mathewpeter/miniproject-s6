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
    <title></title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style>
    .error {
        color: red;
    }
    </style>
    <script>
    $(document).ready(function() {
        var mod1 = 0;
        var mod2 = 0;
        var mod3 = 0;
        var mod4 = 0;
        var mod5 = 0;
        var mod6 = 0;
        var mod7 = 0;
        $("#txt1").keyup(function() {
                var n = document.getElementById("txt1");
                var letter = /^[A-Za-z]+$/;
                if (n.value == "") {
                    document.getElementById("text1").innerHTML =
                        "<span class='error'>Please enter a valid Tourist Place name</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (!n.value.match(letter)) {
                    document.getElementById("text1").innerHTML =
                        "<span class='error'>This is not a Tourist Place name. Please try again</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (n.value.match(letter)) {
                    mod1 = 0;
                    document.getElementById("text1").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });

                }
            }),
            $("#txt2").keyup(function() {
                var n = document.getElementById("txt2");
                var letter = /^[A-Za-z0-9]+$/;
                if (n.value == "") {
                    mod2 = 1;
                    document.getElementById("text2").innerHTML =
                        "<span class='error'>Please enter a caravn model name</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                } else if (!n.value.match(letter)) {
                    mod2 = 1;
                    document.getElementById("text2").innerHTML =
                        "<span class='error'>This is not a valid caravn model name. Please try again</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                } else if (n.value.match(letter)) {
                    document.getElementById("text2").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });
                    mod2 = 0;
                }
            }),
            $("#txt3").keyup(function() {
                var n = document.getElementById("txt3");
                var letter = /^[A-Za-z]+$/;
                if (n.value == "") {
                    mod3 = 1;
                    document.getElementById("text3").innerHTML =
                        "<span class='error'>Please enter a caravn type</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                } else if (!n.value.match(letter)) {
                    mod3 = 1;
                    document.getElementById("text3").innerHTML =
                        "<span class='error'>This is not a valid caravn type. Please try again</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                } else if (n.value.match(letter)) {
                    document.getElementById("text3").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });
                    mod3 = 0;
                }
            }),




            $("#register").click(function() {
                if (mod1 == 1 || mod2 == 1 || mod3 == 1 || mod4 == 1 || mod5 == 1 || mod6 == 1) {
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                }
            })



    });
    $(document).ready(function() {
        $('#txt4').keyup(function() {
            var txt4 = $(this).val();
            if (txt4 == "") {
                $('#availability').html('');
            } else {
                $.ajax({
                    url: 'caravandatabase.php',
                    method: "POST",
                    data: {
                        txt4: txt4
                    },
                    success: function(data) {
                        if (data != '0') {

                            //  $('#availability').html('<span class="text-danger">Username Already exist</span>');
                            document.getElementById("availability").innerHTML =
                                "<span class='error'>Username Already exist</span>";

                            $('#availability').css("color", "red");
                            $('#register').attr("disabled", true);
                            $('#register').css("background", "lightblue");


                        } else {
                            var n = document.getElementById("txt4");
                            p = /^[A-Za-z0-9]+$/;
                            if (n.value == "") {
                                document.getElementById("availability").innerHTML =
                                    "<span class='error'>Please enter a valid Reg Number</span>";
                                $('#register').attr("disabled", true);
                                $('#register').css("background", "lightblue");
                                mod3 = 1;
                            } else if (!n.value.match(p)) {
                                document.getElementById("availability").innerHTML =
                                    "<span class='error'>This is not a valid Reg Number. Please try again</span>";
                                $('#register').attr("disabled", true);
                                $('#register').css("background", "lightblue");
                                mod3 = 1;
                            } else if (n.value.match(p)) {
                                document.getElementById("availability").innerHTML =
                                    "<span class='error'></span>";
                                $('#register').attr("disabled", false);
                                //$('#availability').html('<span class="text-success">Username valid</span>');
                                $('#availability').css("color", "green");
                                document.getElementById("availability").innerHTML =
                                    "<span class='error1'>Caravan Reg number is valid</span>";
                                $('#availability').css("color", "green");
                                $('#register').attr("disabled", false);
                                $('#register').css("background", "#4272d7");
                                $('#register').hover(function() {
                                    $(this).css("background-color", "green");
                                }, function() {
                                    $(this).css("background-color", "#4272d7");
                                });
                                $('#register').css("background", "#4272d7");
                                $('#register').hover(function() {
                                    $(this).css("background-color", "green");
                                }, function() {
                                    $(this).css("background-color", "#4272d7");
                                });
                                mod3 = 0;
                            }


                        }
                    }
                })
            }
        });
    });

    $('.btn btn').click(function(e) {
        e.preventDefault();
        var userId = $(this).data('id');
        console.log("Triggering")
        $.ajax({
            url: 'retrieve_data.php',
            type: 'POST',
            data: {
                id: userId
            },
            dataType: 'json',
            success: function(data) {
                console.log("data: ", data)
                var name = '<p>' + data.value1 + '</p>';
                var email = '<p>' + data.value2 + '</p>';
                var mob = '<p>' + data.value3 + '</p>';
                var dob = '<p>' + data.value4 + '</p>';
                var image = data.value5;
                var lno = '<p>' + data.value6 + '</p>';
                var exdate = '<p>' + data.value7 + '</p>';
                var loc = '<p>' + data.value8 + '</p>';
                $('#modal-name').html(name);
                $('#modal-email').html(email);
                $('#modal-mob').html(mob);
                $('#modal-dob').html(dob);
                $('#modal-lno').html(lno);
                $('#modal-exdate').html(exdate);
                $('#modal-loc').html(loc);
                $('#modal-image').attr('src', 'Uploads/' + image);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log("Catch", textStatus, errorThrown);
            }
        });
    });

    $(function() {
        var dtToday = new Date();

        var month = dtToday.getMonth() + 1;
        var day = dtToday.getDate();
        var year = dtToday.getFullYear();
        if (month < 10)
            month = '0' + month.toString();
        if (day < 10)
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
            $('#register').attr("disabled", true);
            $('#register').css("background", "lightblue");
            return false;
            mod6 = 1;
        } else {
            document.getElementById("text17").innerHTML = "<span class='error'></span>";
            $('#register').attr("disabled", false);
            $('#register').css("background", "#4272d7");
            mod6 = 0;
        }
    }

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
            $('#register').css("background", "lightblue");
            return false;
            mod5 = 1;
        } else {
            document.getElementById("text16").innerHTML = "<span class='error'></span>";
            $('#register').attr("disabled", false);
            $('#register').css("background", "#4272d7");
            mod5 = 0;
        }
    }
    </script>
    </script>
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
                                    <a href="admindashboard/dashboard.php">
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
                                            <span class="pcoded-micon"><i class="fas fa-user-cog"></i></span>
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
                                    <li class="">
                                        <a href="bookingviewadmin.php">
                                            <span class="pcoded-micon"><i class="fa-solid fa-caravan"></i></i></span>
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
                                        <span class="pcoded-micon"><font color="blue"><i class="ti-layout-grid2-alt"></i></font></span>
                                        <span class="pcoded-mtext" data-i18n="nav.basic-components.main"><font color="blue">Tourist
                                            Place</font></span>
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
                                        <li class="">
                                            <a href="editplace1.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Tourist
                                                    Place</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="deletetoursit.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs"><font color="blue">Delete Tourist</font>
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
                                            <a href="caravninput.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="deletecaravanadmin/editcaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext"
                                                    data-i18n="nav.basic-components.breadcrumbs">Edit Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="deletecaravanadmin/Deletecaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Delete
                                                    Caravan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="addimagescaravan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add images caravan
                                                    </span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="viewaddimages.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Update Images caravan</span>
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
                                              
                                                <div style="margin-left:600px;margin-top:-10px;"> <h5>Search:<input type="search" id="myInput" onkeyup="searchTable()" placeholder="Search for names.."></div>
                                                <h5>Delete Tourist Details</h5>
                                                <div style="margin-left:650px;margin-top:-10px;"><a href="/mathew\miniproject-s6/generate/placegenerate.php"class="btn btn-orange btn-sm"target=_blank><Font color="blue"size="2">Generate PDF</font></a></div></div>
                                                <div class="card-header-right">

                                                <div style="margin-top:-40px">

                                            </div>
    
                                            <form action="" method="POST">
                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table" id="myTable">
                                                            <thead>
                                                                <tr>
                                                                    <th>SN</th>
                                                                    <th>Tourist Place</th>

                                                               <!--     <th>Opening Time</th>
                                                                    <th>Closing Time</th>
                                                                    <th>Amount</th>-->
                                                                    <th>Image</th>
                                                                    <th>Status</th>
                                                                    <th>Enable/Disable</th>


                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                            
                            $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
                            $query="select *from place";
                        
                            $result=mysqli_query($conn,$query);
                        $i=1;
                            while($data=mysqli_fetch_array($result))
                            {
                          
                            ?>

                                                                    <td><?php echo $i++?></td>


                                                                    <td><?php echo $data['place_name'] ?></td>
                                                                   <!-- <td><?php echo $data['place_open'] ?></td>
                                                                    <td><?php echo $data['place_closetime'] ?></td>
                                                                    <td><?php echo $data['place_amount'] ?></td>-->

                                                                    <td> <img src="uploads/<?php echo $data['file'];?>"
                                                                            width="68" height="70" alt="Cinque Terre"
                                                                            class="k"></td>

                                                                    <td><?php echo $data['status'] ?></td>
                                                                    <td><?php echo "<a href='deletetoursit1.php?id=$data[id]'>"?>
                                                                        <font color="Red">Change</a></font>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                </tr>
                                                                <?php
                            }
                            ?>
                                                            </tbody>
                                                        </table>
                                            </form>
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
                            <script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js">
                            </script>
                            <!-- modernizr js -->
                            <script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
                            <script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

                            <!-- Custom js -->
                            <script type="text/javascript" src="assets/js/script.js"></script>
                            <script src="assets/js/pcoded.min.js"></script>
                            <script src="assets/js/vartical-demo.js"></script>
                            <script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>