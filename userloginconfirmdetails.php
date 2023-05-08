<?php
session_start();
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['booking']=="")
{
	header("location:userloginpage.php");
}
$_SESSION['booking']="booking";
$id=$_SESSION['customer'];
$_SESSION['customer']=$id;

$caravan=$_SESSION['caravan'];



$a=$_SESSION["email1"];
$a1=$a;
$a4= date("d-m-Y", strtotime($a1));
$b=$_SESSION["email2"];
$a2=$b;
$b4= date("d-m-Y", strtotime($a2));

$c=$_SESSION["tourist"];
$d=$_SESSION["adults"];
$e=$_SESSION["children"];

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
                        </li>
                        <li>
                            <div class="dropdown">
                                <?php
                                $id=$_SESSION['customer1'];
                              
              $conn=mysqli_connect("localhost","root","","miniprojects6");
							 $query="select *from customer where logid='$id'";
				$result=mysqli_query($conn,$query);
		                   		while($row=mysqli_fetch_array($result))
				{

                    $first=$row['first_name'];
                    $last=$row['last_name'];
                    $phone=$row['phone'];
                    $name=$first." ".$last;
					?>

                                <img src="uploads/<?php echo $row['file']; ?>" alt="Cinque Terre" width="70" height="50"
                                    class="k">
                                <div class="dropdown-content" style="right:0;">

                                    <div class="desc"><a href="account view.php" class=n9 target="__blank">Manage
                                            Account</a></div>

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
							$query="select *from caravan where id='$caravan'";
                            $query1="select *from imagescaravan where caravan_id='$caravan'";
							$result=mysqli_query($conn,$query);
                            $result1=mysqli_query($conn,$query1);
while($row=mysqli_fetch_array($result))
{
					$amount=$row['amount'];
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
            <div style="margin-left:400px;margin-top:-30px"><b><i>
                        <font color="red" size="5">Confirm </font>
                        <font color="green" size="5">Booking</font>
            </div></b></i>
            <div style="margin-top:50px">
                <div class="row">
                    <div class="col-md-7">
                        <div>
                            <img src="admin/uploads/<?php echo $row['caravan_image'];?>" width="520"
                                class="img-fluid wc-image">
                        </div>

                        <br>

                        <div class="row">
                            <?php
            while($row1=mysqli_fetch_array($result1))
{
    ?>
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="admin/uploads/<?php echo $row1['file1']?>" alt="" width="200"height="100"class="img-fluid">
                                </div>
                                <br>
                            </div>
                         
             
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="admin/uploads/<?php echo $row1['file2']?>" alt="" class="img-fluid">
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="admin/uploads/<?php echo $row1['file3']?>" alt="" class="img-fluid">
                                </div>
                                <br>
                            </div>

                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="admin/uploads/<?php echo $row1['file4']?>" alt="" class="img-fluid">
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="admin/uploads/<?php echo $row1['file5']?>"alt="" class="img-fluid">
                                </div>
                                <br>
                            </div>
                            <div class="col-sm-4 col-6">
                                <div>
                                    <img src="admin/uploads/<?php echo $row1['file6']?>" alt="" class="img-fluid">
                                </div>
                                <br>
                            </div>
                            <?php
                    break;
                }
                ?>
                       
                        </div>
                       <br>
                    </div>
                  
                    <div class="col-md-5">
                        <form action="#" method="post" class="form">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Customer Name</span>

                                        <strong class="pull-right"><?php echo $name?></strong>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Mobile Number</span>

                                        <strong class="pull-right"><?php echo $phone?></strong>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Adults</span>

                                        <strong class="pull-right"><?php echo $d?></strong>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Children</span>

                                        <strong class="pull-right"><?php echo $e?></strong>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Caravan Name</span>

                                        <strong class="pull-right"><?php echo $row['caravan_name']?></strong>
                                    </div>
                                </li>



                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left"> Caravan Model</span>

                                        <strong class="pull-right"><?php echo $row['caravan_model']?></strong>
                                    </div>
                                </li>

                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Caravan Type</span>

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
                                        <span class="pull-left">Start Date</span>

                                        <strong class="pull-right"><?php echo $a4?></strong>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">End Date</span>

                                        <strong class="pull-right"><?php echo $b4?></strong>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Destination</span>

                                        <strong class="pull-right"><?php echo $c?></strong>
                                    </div>
                                </li>


                                <li class="list-group-item">
                                    <div class="clearfix">
                                        <span class="pull-left">Total Amount</span>
                                        <?php 
                                  
  
                                    // Function to find the difference 
                                    // between two dates.
                                    function dateDiffInDays($date1, $date2) 
                                    {
                                        // Calculating the difference in timestamps
                                        $diff = strtotime($date2) - strtotime($date1);
                                    
                                        // 1 day = 24 hours
                                        // 24 * 60 * 60 = 86400 seconds
                                        return abs(round($diff / 86400));
                                    }
                                    
                                    // Start date
                                    $date1 =$a;
                                    
                                    // End date
                                    $date2 = $b;
                                    
                                    // Function call to find date difference
                                    $dateDiff = dateDiffInDays($date1, $date2);
                                    
                                    // Display the result
                                   
                                   
                                   $day=($dateDiff*$amount)+$amount;
                                         ?>
                                        <strong class="pull-right"><?php echo $day?></strong>
                                    </div>
                                </li><br>
                                <font size="5" color="red">
                                    <div style="margin-left:245px">
                                        <?php echo "<input type='submit'name='check'value='Pay Now'class='btn btn-primary'><div class='filled-button'></div></a>"?>
                                    </div>
                                    <font size="5" color="red">
                                        <div style="margin-top:-40px">
                                            <?php echo "<a href='caravan1.php?id=$row[id]'class='btn btn-secondary'><div class='filled-button'>cancel</div></a>"?>
                                        </div>
                                    </font>
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
<?php
if(isset($_POST["check"]))
{
   
	/*$a=$_POST["email1"];
	$b=$_POST["email2"];
	$c=$_POST["tourist"];
	$d=$_POST["adults"];
	$e=$_POST["children"];

    //session passing//
    $_SESSION["email1"]=$a;
    $_SESSION["email2"]=$a;
    $_SESSION["tourist"]=$a;
    $_SESSION["adults"]=$a;
    $_SESSION["children"]=$a;
    //$status="pending";*/

    //end//
   

	$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    $query="select *from customer where logid='$id'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_array($result))
{
    $p=$row['id'];
}
$status="pending";
	$insert="insert into booking(customer_id,caravan_id,start,end,adults,children,place,status,driver,amount)values('$p','$caravan','$a','$b','$d','$e','$c','$status','pending','$day')";
  $k=mysqli_query($conn,$insert);

	?>
<script>
alert("Successfully booked the caravan");
window.location.href = '/mathew/miniproject-s6/userloginpage.php';
</script>

<?php

}
?>


</html>