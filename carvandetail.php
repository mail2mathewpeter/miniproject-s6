<?php
session_start();
$id=$_GET['id'];
					        $conn=mysqli_connect("localhost","root","","miniprojects6");
							$query="select *from caravan where id='$id'";
							$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
					
?>
<!DOCTYPE html>
<html lang="en">
<style>
    


</style>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title></title>
<script>
    function login()
	{
		alert("please Login the website and try again");
		window.location.href = 'login2.php';
	
		
	}
    </script>
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
                            <a class="nav-link" href="index.html#top">Home
                                <span class="sr-only"></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#projects">About</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="caravandetail.php">Caravan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html#contact-usl">Contact Us</a>
                        </li>   <li>  <a href="login.php"><img src="img/23.png "width="40"height="35"></a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

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
                                    <span class="pull-left">Amount</span>

                                    <strong class="pull-right"><?php echo $row['amount']?></strong>
                                </div>
                            </li><br>
                            <font size="5"color="red"> <div style="margin-left:245px"> <?php echo "<a href='login2.php?id1=$row[id]'class='btn btn-primary'><div onclick=login()>Book Now</div></a></div>"?>
                         <font size="5"color="red"> <div style="margin-top:-40px"> <?php echo "<a href='caravanhome.php?id=$row[id]'class='btn btn-secondary'><div class='filled-button'>cancel</div></a>"?></div></font>
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