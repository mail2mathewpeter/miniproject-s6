<?php
session_start();
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}

$p=$_GET['cid'];
$_SESSION['caravan']=$p;
$id1=$_SESSION['id'];
$_SESSION['customer']=$id1;
//$caravan=$_SESSION['id'];
//$_SESSION['caravan']=$caravan;
	?>				     
<!DOCTYPE html>
<html lang="en">
<style>
   .k {
        border-radius: 100%;
    }
    .n9 {
        color: black;
        text-decoration: none;
        margin-top: -10px;
        margin-bottom: 10px;

        padding: 10 21;
        text-transform: uppercase;
        float: left;

    }

    .n9:hover {

        text-decoration: none;
        font-weight: bold;
        color: green;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

   


    .desc {
        padding: 15px;
        text-align: center;

    }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-top: -10px;
        margin-left: 40px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 190px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }

    </style>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title></title>

    <!-- Bootstrap core CSS -->
    <link href="caravan/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="caravan/assets/css/fontawesome.css">
    <link rel="stylesheet" href="caravan/assets/css/style 1.css">
    <link rel="stylesheet" href="caravan/assets/css/owl.css">
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->


    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <img src="https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png" alt=""
                    width="200" height="60">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item ">
                            <a class="nav-link" href="userloginpage.php#top">Home
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userloginpage.php#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userloginpage.php#projects">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="caravan2.php">Caravan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userloginpage.php#contact-usl">Contact Us</a>
                        </li> <li> 
                        <div class="dropdown">
              <?php
              $conn=mysqli_connect("localhost","root","","miniprojects6");
							 $query="select *from customer where logid='$id1'";
                             
				$result=mysqli_query($conn,$query);
		                   		while($row=mysqli_fetch_array($result))
            
				{
                    
					?>

                                        <img src="uploads/<?php echo $row['file']; ?>" alt="Cinque Terre" width="70"
                                            height="50" class="k">
                                        <div class="dropdown-content" style="right:0;">

                                            <div class="desc"><a href="account view.php" class=n9
                                                    target="__blank">Manage Account</a></div>

                                            <div style="margin-left:50px">
                                                <div class="desc"><a href="logout.php" class=n9>LOGOUT</a></div>
                                            </div>

                                        </div>
                                    </div>

                                    <?php
								}
								
								?>        
                    </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    $conn=mysqli_connect("localhost","root","","miniprojects6");
							$query="select *from caravan where id='$p'";
							$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
					
?>
    <!-- Page Content -->
    <div class="page-heading header-text">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                 
                </div>
            </div>
        </div>
    </div>
  

    <div class="services">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div>
                          <img src="admin/uploads/<?php echo $row['caravan_image'];?>"width="520"height="250">
                    </div>

                    <br>
</div>
                <div class="col-md-5">
                    <form action="#" method="post" class="form">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Name</span>

                                    <strong class="pull-right"><?php echo $row['caravan_name']?></strong>
                                </div>
                            </li>

                    

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left"> Model</span>

                                    <strong class="pull-right"><?php echo $row['caravan_model']?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Type</span>

                                    <strong class="pull-right"><?php echo $row['caravan_type']?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">caravan Regno</span>

                                    <strong class="pull-right"><?php echo $row['caravan_regno']?></strong>
                                </div>
                            </li>

                            <li class="list-group-item">
                                <div class="clearfix">
                                    <span class="pull-left">Amount per day</span>

                                    <strong class="pull-right"><?php echo $row['amount']?></strong>
                                </div>
                            </li><br>
                            <font size="5"color="red"> <div style="margin-left:245px"> <?php echo "<a href='booking/booking1.php?id=$row[id]'class='btn btn-primary'><div class='filled-button'>Book Now</div></a>"?></div>
                         <font size="5"color="red"> <div style="margin-top:-40px"> <?php echo "<a href='caravan1.php?id=$row[id]'class='btn btn-secondary'><div class='filled-button'>cancel</div></a>"?></div></font>
                           <?php
                           }
                           ?>
                    </form>

                    <br>
                </div>
            </div>

            <br>

   
               
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="caravan/vendor/jquery/jquery.min.js"></script>
    <script src="caravan/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="caravan/assets/js/custom.js"></script>
    <script src="caravan/assets/js/owl.js"></script>
    <script src="caravan/assets/js/slick.js"></script>
    <script src="caravan/assets/js/accordions.js"></script>

    <script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) { //declaring the array outside of the
        if (!cleared[t.id]) { // function makes it static and global
            cleared[t.id] = 1; // you could use true and false, but that's more typing
            t.value = ''; // with more chance of typos
            t.style.color = '#fff';
        }
    }
    </script>

</body>

</html>