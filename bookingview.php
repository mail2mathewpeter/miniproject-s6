<?php
session_start();
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}
$id=$_SESSION['uid'];
$_SESSION['uid']=$id ;
$_SESSION['id']=$id;
$_SESSION["booking"]="yes";

?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="caravan/assets/css/style.css">
    <link rel="stylesheet" href="caravan/assets/css/owl.css">
</head>
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
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

<link rel="stylesheet" href="bookingview/fonts/icomoon/style.css">

<link rel="stylesheet" href="bookingview/css/owl.carousel.min.css">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="bookingview/css/bootstrap.min.css">

<!-- Style -->
<link rel="stylesheet" href="bookingview/css/style.css">

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
                            <a class="nav-link" href="userloginpage.php#projects">Images</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="caravan1.php">Booking Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userloginpage.php#contact-us">Contact Us</a>
                        </li>
                        <div class="dropdown">
                            <?php
                            $conn=mysqli_connect("localhost","root","","miniprojects6");
                            $query5="select *from login where id='$id'";
                            $result5=mysqli_query($conn,$query5);
		                   		while($row5=mysqli_fetch_array($result5))
				{
                    $email=$row5['email'];
                }
                $_SESSION["email"]=$email;
              $conn=mysqli_connect("localhost","root","","miniprojects6");
							 $query="select *from customer where logid='$id'";
				$result=mysqli_query($conn,$query);
		                   		while($row=mysqli_fetch_array($result))
				{
                    $customerid=$row['id'];
                 
                   $_SESSION['customer1']=$customerid;
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
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
            <!-- Item -->
            <div class="item item-1">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome Caravan Booking website</h6>

                        <p>Caravan Tourism policy is unique for many reasons. For one, it facilitates travellers to
                            embark on a once-in-a-lifetime-experience involving the luxury of caravans, the idyllic
                            setting of caravan parks and Village Life Experience (VLE) packages powered by Kerala
                            Responsible Tourism Mission.</p>
                        <a href="userloginpage.php#about" class="filled-button">About</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-2">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome Caravan Booking website</h6>

                        <p>Caravan Tourism policy is unique for many reasons. For one, it facilitates travellers to
                            embark on a once-in-a-lifetime-experience involving the luxury of caravans, the idyllic
                            setting of caravan parks and Village Life Experience (VLE) packages powered by Kerala
                            Responsible Tourism Mission.</p>
                        <a href="userloginpage.php#about" class="filled-button">About</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item item-3">
                <div class="img-fill">
                    <div class="text-content">
                        <h6>Welcome Caravan Booking website</h6>

                        <p>Caravan Tourism policy is unique for many reasons. For one, it facilitates travellers to
                            embark on a once-in-a-lifetime-experience involving the luxury of caravans, the idyllic
                            setting of caravan parks and Village Life Experience (VLE) packages powered by Kerala
                            Responsible Tourism Mission.</p>
                        <a href="userloginpage.php#about" class="filled-button">About</a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->

    <div style="margin-top:-100px">
        <div class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-heading">
                            <h2>Booking <em>Details</em></h2>
                            <div style="margin-left:800px;margin-top:-39px"><a href="generate/print.php"class="section-heading"target=_blank>Generate PDF</a></div>
                        </div>
                       
                    </div>

                    <div style="margin-top:-160px">
                        <div class="content">

                            <div class="container">

                                <table class="table table-striped custom-table">
                                    <thead>
                                        <tr>

                                            <th scope="col">Id</th>

                                            <th scope="col">Customer Name</th>

                                            <th scope="col">Caravan Name</th>
                                            <th scope="col">Start Date</th>
                                            <th scope="col">End Date</th>
                                           
                                            <th scope="col">Payment</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">More </th>
                                            <th scope="col">Receipt </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php
                
                $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
               
                $query1="select *from booking where customer_id='$customerid' && status='pending'";
               

                $i=1;
                $result=mysqli_query($conn,$query1);
                while($data=mysqli_fetch_array($result))
                {
                    echo '<tr scope="row">';
                    $a=$data['customer_id'];
                    $d=$data['caravan_id'];
                    $e=$data['driver'];
                    $query="select *from customer where id='$a'";
                    $query2="select *from caravan where id='$d'";
                    $query3="select *from employee where id='$e'";
                    $result1=mysqli_query($conn,$query);
                    $result2=mysqli_query($conn,$query2);
                    $result3=mysqli_query($conn,$query3);
                
                                      



                                      
                    while($data1=mysqli_fetch_array($result1))
                    {
                        $b=$data1['first_name'];
                        $c=$data1['last_name'];
                        $start=$data['start'];
                        $end=$data['end'];
                        $payment=$data['payment'];
                       $a4= date("d-m-Y", strtotime($start));
                        $a5= date("d-m-Y", strtotime($end));

                        ?>


                                        <td>
                                            <?php echo $i?>
                                        </td>
                                        <td>
                                        <span id="customer_name<?php echo $data['booking_id'] ?>"> <?php echo $b." " .$c?></span>
                                        </td>
                                        <?php
                        while($data2=mysqli_fetch_array($result2))
                        {
                            ?>



                                        <td>
                                        <span id="caravan_name<?php echo $data['booking_id'] ?>">   <?php echo $data2['caravan_name']?></span>


                                        </td>
                                        <?php
                            while($data3=mysqli_fetch_array($result3))
                        {
                           
                      ?>
                        <td>
                        <span id="start_date<?php echo $data['booking_id'] ?>">   <?php echo $a4?></span>


                  </td>
                  <td>
                  <span id="end_date<?php echo $data['booking_id'] ?>">    <?php echo $a5?></span>

                  <span hidden id="place<?php echo $data['booking_id']?>">  <?php echo $data['place']?></span>
                  <span hidden id="number<?php echo $data['booking_id']?>">  <?php echo $data1['phone']?></span>
                  <span hidden id="adults<?php echo $data['booking_id']?>">  <?php echo $data['adults']?></span>
                  <span hidden id="children<?php echo $data['booking_id']?>">  <?php echo $data['children']?></span>  </td>
                  <?php
                  if($payment=="Success")
                  {
                    ?>
                    <td> <span  id="payment<?php echo $data['booking_id']?>"> <font color="green"> <?php echo $data['payment']?></span></td>
                    <?php
                  }
    ?>
                

                
                  <td>   <span id="amount<?php echo $data['booking_id'] ?>">  <?php echo $data['amount']?></span></td>
                                       <?php
                                       if($data['status']=="canceled")
                                       {
                                        ?>
                                                          <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="Approved")
                                       {
                                        ?>
                                         <span hidden id="driver<?php echo $data['booking_id']?>">  <?php echo $data3['employee_name']?></span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">  <?php echo $data3['employee_phone']?></span>
                                        <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="pending")
                                       {
                                        ?>
                                                             <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td> <font color="orange"><?php echo $data['status']?></font></td><?php
                                       }
                                       
            
                                       ?>
                                        <td><button type="button" class="btn btn-success edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                        <td><?php echo "<a href='generate/userreceipt.php?id=$data[booking_id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                        </tr>

                                        <?php
                                        $i++;
                                            break;
                    }
                    if ($data['driver']=='pending')
                    {
                        ?>
                        
              
                        <td>
                        <span id="start_date<?php echo $data['booking_id'] ?>">   <?php echo $a4?></span>


                  </td>
                  <td>
                  <span id="end_date<?php echo $data['booking_id'] ?>">    <?php echo $a5?></span>

                  <span hidden id="place<?php echo $data['booking_id']?>">  <?php echo $data['place']?></span>
                  <span hidden id="number<?php echo $data['booking_id']?>">  <?php echo $data1['phone']?></span>
                  <span hidden id="adults<?php echo $data['booking_id']?>">  <?php echo $data['adults']?></span>
                  <span hidden id="children<?php echo $data['booking_id']?>">  <?php echo $data['children']?></span>
                 

                 <span hidden id="amount<?php echo $data['booking_id'] ?>">  <?php echo $data['amount']?></span></td>
                <?php if($payment=="Success")
                  {
                    ?>
                 <td> <span  id="payment<?php echo $data['booking_id']?>"> <font color="orangegreen"> <?php echo $data['payment']?></span></td>
                
                        <?php
                          } 
                          else
                          {
                            ?>
                            <td><?php echo "<a href='paymentlater.php?id=$data[booking_id]' class='btn btn-secondary'>"?><font color="white">Pay</a></font></td>
                         <?php
                          } 
                                       if($data['status']=="canceled")
                                       {
                                        ?>
                                                          <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="Approved")
                                       {
                                        ?>
                                         <span hidden id="driver<?php echo $data['booking_id']?>">  <?php echo $data3['employee_name']?></span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">  <?php echo $data3['employee_phone']?></span>
                                        <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="pending")
                                       {
                                        ?>
                                                             <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                                          <td><?php echo "<a href='cancelbooking.php?id=$data[booking_id]' class='btn btn-danger'>"?><font color="white">Cancel</a></font></td>
                                                        
                                                    <?php
                                       }
                                       
            
                                       ?>
                                       
                                        <td><button type="button" class="btn btn-success edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                        <td><?php echo "<a href='generate/userreceipt.php?id=$data[booking_id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                        </tr>

                                        <?php
                                        $i++;
                                        break;
                                          
                    }
                    if($data['cancel']==0)
                    {
                        ?>
                        
              
                        <td>
                        <span id="start_date<?php echo $data['booking_id'] ?>">   <?php echo $a4?></span>


                  </td>
                  <td>
                  <span id="end_date<?php echo $data['booking_id'] ?>">    <?php echo $a5?></span>

                  <span hidden id="place<?php echo $data['booking_id']?>">  <?php echo $data['place']?></span>
                  <span hidden id="number<?php echo $data['booking_id']?>">  <?php echo $data1['phone']?></span>
                  <span hidden id="adults<?php echo $data['booking_id']?>">  <?php echo $data['adults']?></span>
                  <span hidden id="children<?php echo $data['booking_id']?>">  <?php echo $data['children']?></span>

                  </td>
                  <td>   <span hidden id="amount<?php echo $data['booking_id'] ?>">  <?php echo $data['amount']?></span></td>
                                       <?php
                                       if($data['status']=="canceled")
                                       {
                                        ?>
                                                          <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="Approved")
                                       {
                                        ?>
                                         <span hidden id="driver<?php echo $data['booking_id']?>">  <?php echo $data3['employee_name']?></span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">  <?php echo $data3['employee_phone']?></span>
                                        <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="pending")
                                       {
                                        ?>
                                                             <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                                          <td><button type="button" class="btn btn-danger edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Cancel</button></td><?php
                                       }
                                       
            
                                       ?>
                                        <td><button type="button" class="btn btn-success edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                        <td><?php echo "<a href='generate/userreceipt.php?id=$data[booking_id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                        </tr>

                                        <?php
                                        $i++;
                    }
                    break;
                }
                break;
            }
                   
                }
                $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
               
                $query1="select *from booking where customer_id='$customerid' && status='Approved'";
               

               
                $result=mysqli_query($conn,$query1);
                while($data=mysqli_fetch_array($result))
                {
                    echo '<tr scope="row">';
                    $a=$data['customer_id'];
                    $d=$data['caravan_id'];
                    $e=$data['driver'];
                    $query="select *from customer where id='$a'";
                    $query2="select *from caravan where id='$d'";
                    $query3="select *from employee where id='$e'";
                    $result1=mysqli_query($conn,$query);
                    $result2=mysqli_query($conn,$query2);
                    $result3=mysqli_query($conn,$query3);
                
                                      



                                      
                    while($data1=mysqli_fetch_array($result1))
                    {
                        $b=$data1['first_name'];
                        $c=$data1['last_name'];
                        $start=$data['start'];
                        $end=$data['end'];
                       $a4= date("d-m-Y", strtotime($start));
                        $a5= date("d-m-Y", strtotime($end));

                        ?>


                                        <td>
                                            <?php echo $i?>
                                        </td>
                                        <td>
                                        <span id="customer_name<?php echo $data['booking_id'] ?>"> <?php echo $b." " .$c?></span>
                                        </td>
                                        <?php
                        while($data2=mysqli_fetch_array($result2))
                        {
                            ?>



                                        <td>
                                        <span id="caravan_name<?php echo $data['booking_id'] ?>">   <?php echo $data2['caravan_name']?></span>


                                        </td>
                                        <?php
                            while($data3=mysqli_fetch_array($result3))
                        {
                           
                      ?>
                        <td>
                        <span id="start_date<?php echo $data['booking_id'] ?>">   <?php echo $a4?></span>


                  </td>
                  <td>
                  <span id="end_date<?php echo $data['booking_id'] ?>">    <?php echo $a5?></span>

                  <span hidden id="place<?php echo $data['booking_id']?>">  <?php echo $data['place']?></span>
                  <span hidden id="number<?php echo $data['booking_id']?>">  <?php echo $data1['phone']?></span>
                  <span hidden id="adults<?php echo $data['booking_id']?>">  <?php echo $data['adults']?></span>
                  <span hidden id="children<?php echo $data['booking_id']?>">  <?php echo $data['children']?></span>

                  </td>
                  <td>   <span hidden id="amount<?php echo $data['booking_id'] ?>">  <?php echo $data['amount']?></span>
                  <span  id="payment<?php echo $data['booking_id'] ?>"> <font color="orangegreen"><?php echo $data['payment']?></font></span></td>
                                       <?php
                                       if($data['status']=="canceled")
                                       {
                                        ?>
                                                          <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="Approved")
                                       {
                                        ?>
                                         <span hidden id="driver<?php echo $data['booking_id']?>">  <?php echo $data3['employee_name']?></span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">  <?php echo $data3['employee_phone']?></span>
                                        <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="pending")
                                       {
                                        ?>
                                                             <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td> <font color="orange"><?php echo $data['status']?></font></td><?php
                                       }
                                       
            
                                       ?>
                                        <td><button type="button" class="btn btn-success edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                        <td><?php echo "<a href='generate/userreceipt.php?id=$data[booking_id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                        </tr>

                                        <?php
                                        $i++;
                                            break;
                    }
                    if ($data['driver']=='pending')
                    {
                        ?>
                        
              
                        <td>
                        <span id="start_date<?php echo $data['booking_id'] ?>">   <?php echo $a4?></span>


                  </td>
                  <td>
                  <span id="end_date<?php echo $data['booking_id'] ?>">    <?php echo $a5?></span>

                  <span hidden id="place<?php echo $data['booking_id']?>">  <?php echo $data['place']?></span>
                  <span hidden id="number<?php echo $data['booking_id']?>">  <?php echo $data1['phone']?></span>
                  <span hidden id="adults<?php echo $data['booking_id']?>">  <?php echo $data['adults']?></span>
                  <span hidden id="children<?php echo $data['booking_id']?>">  <?php echo $data['children']?></span>

                  </td>
                  <td>   <span hidden id="amount<?php echo $data['booking_id'] ?>">  <?php echo $data['amount']?></span>
                  <td>   <span  id="payment<?php echo $data['booking_id'] ?>">  <?php echo $data['payment']?></span></td>
                                       <?php
                                       if($data['status']=="canceled")
                                       {
                                        ?>
                                                          <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                        <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="Approved")
                                       {
                                        ?>
                                         <span hidden id="driver<?php echo $data['booking_id']?>">  <?php echo $data3['employee_name']?></span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">  <?php echo $data3['employee_phone']?></span>
                                        <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                       }
                                       else if($data['status']=="pending")
                                       {
                                        ?>
                                                             <span hidden id="driver<?php echo $data['booking_id']?>">Pending</span>
                                                          <span hidden id="employeeno<?php echo $data['booking_id']?>">Pending</span>
                                                          <td><?php echo "<a href='cancelbooking.php?id=$data[booking_id]' class='btn btn-danger'>"?><font color="white">Cancel</a></font></td>
                                                        
                                                    <?php
                                       }
                                       
            
                                       ?>
                                       
                                        <td><button type="button" class="btn btn-success edit" value="<?php echo $data['booking_id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                        <td><?php echo "<a href='generate/userreceipt.php?id=$data[booking_id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                        </tr>

                                        <?php
                                        $i++;
                                        break;
                                          
                    }
                }
            }
        }
                


$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
               
               $query1="select *from deletebooking where customer_id='$customerid'";
            
               $result=mysqli_query($conn,$query1);
               while($data=mysqli_fetch_array($result))
               {

                echo '<tr scope="row">';
                $a=$data['customer_id'];
                $d=$data['caravan_id'];
                $e=$data['driver'];
                $query="select *from customer where id='$a'";
                $query2="select *from caravan where id='$d'";
                $query3="select *from employee where id='$e'";
                $result1=mysqli_query($conn,$query);
                $result2=mysqli_query($conn,$query2);
                $result3=mysqli_query($conn,$query3);
            
                                  



                                  
                while($data1=mysqli_fetch_array($result1))
                {
                    $b=$data1['first_name'];
                    $c=$data1['last_name'];
                    $start=$data['start'];
                    $end=$data['end'];
                   $a4= date("d-m-Y", strtotime($start));
                    $a5= date("d-m-Y", strtotime($end));

                    ?>


                                    <td>
                                        <?php echo $i?>
                                    </td>
                                    <td>
                                    <span id="customer_name<?php echo $data['id'] ?>"> <?php echo $b." " .$c?></span>
                                    </td>
                                    <?php
                    while($data2=mysqli_fetch_array($result2))
                    {
                        ?>



                                    <td>
                                    <span id="caravan_name<?php echo $data['id'] ?>">   <?php echo $data2['caravan_name']?></span>


                                    </td>
                                    <?php
                        while($data3=mysqli_fetch_array($result3))
                    {
                       
                  ?>
                    <td>
                    <span id="start_date<?php echo $data['id'] ?>">   <?php echo $a4?></span>


              </td>
              <td>
              <span id="end_date<?php echo $data['id'] ?>">    <?php echo $a5?></span>

              <span hidden id="place<?php echo $data['id']?>">  <?php echo $data['place']?></span>
              <span hidden id="number<?php echo $data['id']?>">  <?php echo $data1['phone']?></span>
              <span hidden id="adults<?php echo $data['id']?>">  <?php echo $data['adults']?></span>
              <span hidden id="children<?php echo $data['id']?>">  <?php echo $data['children']?></span>

              </td>
              <td>   <span hidden id="amount<?php echo $data['id'] ?>">  <?php echo $data['amount']?></span>
              <span  id="payment<?php echo $data['booking_id'] ?>">  <?php echo $data['payment']?></span></td>
                                   <?php
                                   if($data['status']=="canceled")
                                   {
                                    ?>
                                                      <span hidden id="driver<?php echo $data['id']?>">Pending</span>
                                                      <span hidden id="employeeno<?php echo $data['id']?>">Pending</span>
                                    <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                   }
                                   else if($data['status']=="Approved")
                                   {
                                    ?>
                                     <span hidden id="driver<?php echo $data['id']?>">  <?php echo $data3['employee_name']?></span>
                                                      <span hidden id="employeeno<?php echo $data['id']?>">  <?php echo $data3['employee_phone']?></span>
                                    <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                   }
                                   else if($data['status']=="pending")
                                   {
                                    ?>
                                                         <span hidden id="driver<?php echo $data['id']?>">Pending</span>
                                                      <span hidden id="employeeno<?php echo $data['id']?>">Pending</span>
                                    <td> <font color="orange"><?php echo $data['status']?></font></td><?php
                                   }
                                   
        
                                   ?>
                                    <td><button type="button" class="btn btn-success edit" value="<?php echo $data['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                    <td><?php echo "<a href='generate/userreceipt.php?id=$data[id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                    </tr>

                                    <?php
                                    $i++;
                                        break;
                }
                if ($data['driver']=='pending')
                {
                    ?>
                    
          
                    <td>
                    <span id="start_date<?php echo $data['id'] ?>">   <?php echo $a4?></span>


              </td>
              <td>
              <span id="end_date<?php echo $data['id'] ?>">    <?php echo $a5?></span>

              <span hidden id="place<?php echo $data['id']?>">  <?php echo $data['place']?></span>
              <span hidden id="number<?php echo $data['id']?>">  <?php echo $data1['phone']?></span>
              <span hidden id="adults<?php echo $data['id']?>">  <?php echo $data['adults']?></span>
              <span hidden id="children<?php echo $data['id']?>">  <?php echo $data['children']?></span>

              </td>
              <td>   <span hidden id="amount<?php echo $data['id'] ?>"> <?php echo $data['amount']?></span>
              
            <span  id="payment<?php echo $data['id'] ?>"> <font color="red"> <?php echo $data['payment']?></font></span></td>
                                   <?php
                                   if($data['status']=="canceled")
                                   {
                                    ?>
                                                      <span hidden id="driver<?php echo $data['id']?>">Pending</span>
                                                      <span hidden id="employeeno<?php echo $data['id']?>">Pending</span>
                                    <td><font color="red"> <?php echo $data['status']?></font></td><?php
                                   }
                                   else if($data['status']=="Approved")
                                   {
                                    ?>
                                     <span hidden id="driver<?php echo $data['id']?>">  <?php echo $data3['employee_name']?></span>
                                                      <span hidden id="employeeno<?php echo $data['id']?>">  <?php echo $data3['employee_phone']?></span>
                                    <td> <font color="lightgreen"><?php echo $data['status']?></font></td><?php
                                   }
                                   else if($data['status']==0)
                                   {
                                    ?>
                                                         <span hidden id="driver<?php echo $data['id']?>">Pending</span>
                                                      <span hidden id="employeeno<?php echo $data['id']?>">Pending</span>
                                                      <td><font color="red">Canceled</a></font></td>
                                                    
                                                <?php
                                   }
                                   
        
                                   ?>
                                   
                                    <td><button type="button" class="btn btn-success edit" value="<?php echo $data['id']; ?>"><span class="glyphicon glyphicon-edit"></span> Details</button></td>
                                    <td><?php echo "<a href='generate/userreceiptdelted.php?id=$data[id]'target=_blank>"?><img src="booking/img/1.png"width="30"height="30"></a></td>
                                    </tr>

                                    <?php
                                    $i++;
                                    break;
                                      
                }
               
                                  
                                    $i++;
                }
                break;
            }
           
        }
               
?>

                                    </tbody>
                                </table>
                            </div>


                        </div>

                    </div>


                    <script src="bookingview/js/jquery-3.3.1.min.js"></script>
                    <script src="bookingview/js/popper.min.js"></script>
                    <script src="bookingview/js/bootstrap.min.js"></script>
                    <script src="bookingview/js/main.js"></script>
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

<?php include('modal.php'); ?>
<script src="custom.js"></script>
</body>

</html>