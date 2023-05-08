<?php
session_start();

if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}
$id=$_SESSION['uid'];
if($id=="")
{
    $id=$_SESSION['customer'];
}
$_SESSION['uid']=$id ;

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Breezed HTML Bootstrap Template</title>
    <style>
    .error {
        color: red;

        font-size: 15px;
    }

    .k {
        border-radius: 100%;
    }

    .desc {
        padding: 15px;
        text-align: center;

    }

    .dropdown {
        position: relative;
        display: inline-block;
        margin-top: -15px;
        margin-left: 20px;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 190px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
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

    k {
        position: absolute;
        text-indent: 50px;
        top: -25;
        left: 53;
        color: #7ab700;
        font: bold 100px urw gothic l;
        background-color: #2cac23;
        background: white;
        width: 96%;
        size: 10px;
        height: 45px;
    }

    a.text-button-icon1 {
        text-transform: uppercase;
        color: green;
        font-size: 20px;
        font-weight: 600;
        letter-spacing: 1px;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    a.text-button-icon1 i {
        margin-left: 5px;
        -webkit-transition: all 0.3s ease-in-out 0s;
        -moz-transition: all 0.3s ease-in-out 0s;
        -o-transition: all 0.3s ease-in-out 0s;
        transition: all 0.3s ease-in-out 0s;
    }

    a.text-button-icon1:hover {
        color: #5fb759;
    }

    a.text-button-icon1:hover i {
        padding-left: 5px;
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
        $("#name").keyup(function() {
                var n = document.getElementById("name");
                var letter = /^[A-Za-z ' ']+$/;
                if (n.value == "") {
                    document.getElementById("text1").innerHTML =
                        "<span class='error'>Please enter a valid name</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (!n.value.match(letter)) {
                    document.getElementById("text1").innerHTML =
                        "<span class='error'>This is not a valid name. Please try again</span>";
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
            $("#email1").keyup(function() {
                var n = document.getElementById("email1");
                var letter = /\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                if (n.value == "") {
                    document.getElementById("text3").innerHTML =
                        "<span class='error'>Please enter a valid email</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (!n.value.match(letter)) {
                    document.getElementById("text3").innerHTML =
                        "<span class='error'>This is not a valid email. Please try again</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (n.value.match(letter)) {
                    mod1 = 0;
                    document.getElementById("text3").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });

                }
            }),


            $("#message").keyup(function() {
                var n = document.getElementById("message");
                var letter = /^[A-Za-z0-9 ' ']+$/;
                if (n.value == "") {
                    document.getElementById("text4").innerHTML =
                        "<span class='error'>Please enter a valid message</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (!n.value.match(letter)) {
                    document.getElementById("text4").innerHTML =
                        "<span class='error'>This is not a valid message. Please try again</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (n.value.match(letter)) {
                    mod1 = 0;
                    document.getElementById("text4").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });

                }
            }),
            $("#subject").keyup(function() {
                var n = document.getElementById("subject");
                var letter = /^[A-Za-z ' ']+$/;
                if (n.value == "") {
                    document.getElementById("text5").innerHTML =
                        "<span class='error'>Please enter a valid subject</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (!n.value.match(letter)) {
                    document.getElementById("text5").innerHTML =
                        "<span class='error'>This is not a valid subject. Please try again</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod1 = 1;
                } else if (n.value.match(letter)) {
                    mod1 = 0;
                    document.getElementById("text5").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });

                }
            }),
            $("#phone1").keyup(function() {
                var n = document.getElementById("phone1");
                p = /([789][0-9]{9})+$/;
                if (n.value == "") {
                    document.getElementById("text2").innerHTML =
                        "<span class='error'>Please enter a valid phone number</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod4 = 1;
                } else if (!n.value.match(p)) {
                    document.getElementById("text2").innerHTML =
                        "<span class='error'>This is not a valid phone number</span>";
                    $('#register').attr("disabled", true);
                    $('#register').css("background", "lightblue");
                    mod4 = 1;
                } else if (n.value.match(p)) {
                    document.getElementById("text2").innerHTML = "<span class='error'></span>";
                    $('#register').attr("disabled", false);
                    $('#register').css("background", "#4272d7");
                    $('#register').hover(function() {
                        $(this).css("background-color", "green");
                    }, function() {
                        $(this).css("background-color", "#4272d7");
                    });
                    mod4 = 0;
                }
            })
    });
    </script>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-breezed.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">

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


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <div style="margin-top:15px;">

                            <img src="https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png"
                                alt="" width="200" height="60">

                        </div>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <div style="margin-top: -70px;">
                            <ul class="nav">

                                <li class="scroll-to-section"><a href="#top" class="active">
                                        <font color="black">Home</font>
                                    </a></li>
                                <li class="scroll-to-section"><a href="#about">About</a></li>
                                <li class="scroll-to-section"><a href="#projects">Images</a></li>
                                <li class="scroll-to-section"><a href="caravan1.php">Caravan</a></li>
                                <li class="scroll-to-section"><a href="#contact-us">Contact Us</a></li>
                                <div style="margin-top:9px;">
                                    <div class="dropdown">
                                        <?php
							
							 $conn=mysqli_connect("localhost","root","","miniprojects6");
							 $query="select *from customer where logid='$id'";
                            $_SESSION['id']= $id;
				$result=mysqli_query($conn,$query);
		                   		while($row=mysqli_fetch_array($result))
				{
                    $unique_id=$row['unique_id'];
                    echo $unique_id;
                    $_SESSION['unique_id'] = $unique_id;
					?>

                                        <img src="uploads/<?php echo $row['file']; ?>" alt="Cinque Terre" width="70"
                                            height="50" class="k">
                                        <div class="dropdown-content" style="right:0;">

                                            <div class="desc"><a href="account view.php" class=n9
                                                    target="__blank">Manage Account</a></div>
                                                    <div style="margin-left:25px">  <div class="desc"><a href="bookingview.php" class=n9
                                                    >My Bookings</a></div></div>

                                            <div style="margin-left:50px">
                                                <div class="desc"><a href="logout.php" class=n9>LOGOUT</a></div>
                                            </div>

                                        </div>
                                    </div>

                                    <?php
								}
								
								?>
                                </div>

                            </ul>
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                            <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
        </div>

    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Search Area ***** -->
    <div id="search">
        <button type="button" class="close">×</button>
        <form id="contact" action="#" method="get">
            <fieldset>
                <input type="search" name="q" placeholder="SEARCH KEYWORD(s)" aria-label="Search through site content">
            </fieldset>
            <fieldset>
                <button type="submit" class="main-button">Search</button>
            </fieldset>
        </form>
    </div>

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">

            <!-- Item -->
            <div class="item">

                <div class="img-fill">
                    <img src="img/71.jpg"
                        height="500" alt="">

                    <div class="text-content">

                        <h3>
                            <font color="orange">Welcome To carevan website</font>
                        </h3>
                        <h5>Life is a journey, enjoy the ride</h5>
                      
                        <a href="#about" class="main-stroked-button">Read More</a>
                  <a href="#" class="main-filled-button">Book Your Ticket </a>

                    </div>

                </div>

            </div>
            <!-- // Item -->
            <!-- Item -->

            <div class="item">
                <div class="img-fill">
                    <img src="img/81.jpg" alt="" height="500">
                    <div class="text-content">
                    <h3><font color="orange"size="5">Welcome To carevan website</font></h3>
                    <h5>Home is where you park it</h5>
                  <a href="#about" class="main-stroked-button">Read More</a>
                  <a href="#" class="main-filled-button">Book Your Ticket </a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
            <!-- Item -->
            <div class="item">
                <div class="img-fill">
                    <img src="img/22.jpg" height="500" width="300" alt="">
                    <div class="text-content">
                    <h3><font color="yellow"size="5">Welcome To carevan website</font></h3>
                    <h2>  <b><font color="red">Life is short, but the road is long. So make every trip worthwhile.</font></B></h5><br>
                    <a href="#about" class="main-stroked-button">Read More</a>
                  <a href="#" class="main-filled-button">Book Your Ticket </a>
                    </div>
                </div>
            </div>
            <!-- // Item -->
        </div>
    </div>
    <div class="scroll-down scroll-to-section"><a href="#about"><i class="fa fa-arrow-down"></i></a></div>
    <!-- ***** Main Banner Area End ***** -->



    <!-- ***** About Area Starts ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>About Us</h6>
                            <h2>Our top features in Caravan is</h2>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/service-item-01.png" alt="">
                                    <h4>Location Tracking</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/service-item-01.png" alt="">
                                    <h4> charging system</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Net Connectivity</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Audio / Video Facility</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>kitchen facility</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Dining Table
                                    </h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Air-conditioning</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="service-item">
                                    <img src="assets/images/contact-info-03.png" alt="">
                                    <h4>Bedroom</h4>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="#" class="main-button-icon">
                                    Learn More <i class="fa fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="right-text-content">
                        <p>
                            <font color="blue">Tourist Caravans</font> are vehicles specially built for the purpose of
                            travel, leisure and accommodation. The customized stylish vehicles will be equipped with all
                            the trappings for
                            a smooth ride and comfortable stay. They include Rigid as well as Towed/Trailer Caravans. In
                            Rigid Caravans, the propelling mechanism and accommodation facilities will be built as a
                            single unit. However in Trailers,
                            the accommodation facilities shall be a separate unit which will be towed by a suitable
                            vehicle for transportation. The ideal length for the Caravan shall be about 8.5 m.
                            <br><br>
                            Keravan Kerala offers big opportunities for investors to operate specially-built caravans
                            for travel, leisure and stay. It also envisages a key role for a host of stake-holders,
                            including local self government institutions,
                            to set up eco-friendly Caravan Parks across the state to enable the visitors to spend a
                            night or a day or station for an extended period to explore the destination of their choice.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Caravan Parks </h4>
                            <p>Caravan Parks will be located in natural settings, giving top priority to tourists'
                                safety and security and hygienic features. These parks will be a completely safe and
                                secure zone offering hassle-free and stress-free environment to tourists, protected with
                                necessary features like proper fencing, adequate security and safety arrangements,
                                patrolling and surveillance cameras.</p>
                            <a href="#" class="text-button-icon">
                                <div style="margin-top:25px"> Learn More<i class="fa fa-arrow-right"></i></div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter bottom move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Waste Management</h4>
                            <div style="margin-top:-15px">
                                <P>
                                    <font size="10">.</font> Provision for the segregation of the garbage into
                                    biodegradable (kitchen waste etc), non- bio-degradable (thermo coal products,
                                    aluminium foil, cigarette buts etc) & recyclable (newspapers, bottles, cans etc)
                                    material.
                                    <br>
                                    <font size="10">.</font>System for the reception, storage and disposal of all the
                                    refuse and waste matter originating from the park.
                                </P>
                                <br>
                            </div>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <div class="features-item">
                        <div class="features-icon">
                            <img src="assets/images/features-icon-1.png" alt="">
                        </div>
                        <div class="features-content">
                            <h4>Safety & security</h4>
                            <p>A properly equipped First Aid kit should be available at the reception and adequate first
                                aid training should be provided to the staff. The facility of doctor on call should be
                                available at the park and a well defined mechanism shall be in place to handle any
                                medical emergency. The park management shall maintain effective coordination with the
                                local medical establishments.</p>
                            <a href="#" class="text-button-icon">
                                Learn More <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->

    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="section-heading">
                        <h6>Subscribe Newsletters</h6>
                        <h2>Don’t miss this chance!</h2>
                    </div>
                    <div class="subscribe-content">
                        <p>Keravan Kerala offers big opportunities for investors to operate specially-built caravans for
                            travel, leisure and stay. It also envisages a key role for a host of stake-holders,
                            including local self government institutions, to set up eco-friendly Caravan Parks across
                            the state to enable the visitors to spend a night or a day or station for an extended period
                            to explore the destination of their choice.</p>
                        <div class="subscribe-form">
                            <form id="subscribe-now" action="" method="get">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12">
                                        <fieldset>
                                            <input name="email" type="text" id="email" placeholder="Enter your email..."
                                                required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-4 col-sm-12">
                                        <fieldset>
                                            <button type="submit" id="form-submit" class="main-button">Subscribe
                                                Now</button>
                                        </fieldset>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Projects Area Starts ***** -->
    <section class="section" id="projects">
        <font color="green" size="5">
            <div style="margin-left:600px">IMAGES</div>
        </font>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="section-heading">
                        <div style="margin-top:60px">
                            <h6>Our Images</h6>
                            <h2>Some of our latest Images</h2>
                        </div>

                        <div class="filters">
                            <ul>
                                <li class="active" data-filter="*">All</li>
                                <li data-filter=".des">Caravan </li>
                                <li data-filter=".dev">Hill stations</li>
                                <li data-filter=".gra">Waterfalls</li>
                                <li data-filter=".tsh"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="filters-content">
                        <div class="row grid">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="img/1.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/1.jpg" width="150" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="img/9.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/9.jpg" width="150" height="150" alt=""></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="img/8.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/8.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="img/15.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/15.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="img/16.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/16.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="img/17.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/17.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="img/18.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/18.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all dev">
                                <div class="item">
                                    <a href="img/8.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/8.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="img/10.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/10.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="img/11.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/11.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="img/12.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/12.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="img/13.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/13.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="img/14.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/14.jpg" height="150" alt=""></a>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all gra">
                                <div class="item">
                                    <a href="img/6.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/6.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="img/2.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/2.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="img/3.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/3.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="img/71.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/71.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 all des">
                                <div class="item">
                                    <a href="img/4.jpg" data-lightbox="image-1" data-title="Our Projects"><img
                                            src="img/4.jpg" height="150" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Projects Area Ends ***** -->

    <!-- ***** Testimonials Starts ***** -->

    <section class="section" id="testimonials">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h6>Our best caravan</h6>
                        <h2>Book your trip</h2>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mobile-bottom-fix-big"
                    data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <div class="owl-carousel owl-theme">
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="img/21.jpg " height="400" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div style="margin-top:50px">
                                            <div class="col-md-12">
                                                <a href="#" class="main-button-icon">
                                                    Book <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Wanderlust caravan</h4>

                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="img/1.jpg " height="400" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div style="margin-top:50px">
                                            <div class="col-md-12">
                                                <a href="#" class="main-button-icon">
                                                    Book <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Wandering Star caravan</h4>

                        </div>
                        <div class="item author-item">
                            <div class="member-thumb">
                                <img src="img/22.jpg " height="400" alt="">
                                <div class="hover-effect">
                                    <div class="hover-content">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                        </ul>
                                        <div style="margin-top:50px">
                                            <div class="col-md-12">
                                                <a href="#" class="main-button-icon">
                                                    Book <i class="fa fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Carry home caravan</h4>

                        </div>

    </section>
    <!-- ***** Testimonials Ends ***** -->

    <!-- ***** Contact Us Area Starts ***** -->
    <section class="section" id="contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="left-text-content">
                        <div class="section-heading">
                            <h6>Contact Us</h6>
                            <h2>Feel free to keep in touch with us!</h2>
                        </div>
                        <ul class="contact-info">
                            <li><img src="assets/images/contact-info-01.png" alt="">9497036814</li>
                            <li><img src="assets/images/contact-info-02.png" alt="">mail2mathewpeter@gmail.com</li>
                            <li><img src="assets/images/contact-info-03.png" alt="">www.caravan.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="contact-form">
                        <form id="contact" action="" method="POST">
                            <div class="row">
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="name" type="text" id="name" placeholder="Your Name *" name="name"
                                            id="name" required="">
                                        <div style="margin-top:-20px"><span id="text1"></span></div>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="phone" type="text" maxlength="10" placeholder="Your Phone"
                                            id="phone1" name="phone" required="">
                                    </fieldset>

                                    <div style="margin-top:-20px"><span id="text2"></span></div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input type="email" placeholder="Your Email *" name="email" id="email1"
                                            required="">
                                    </fieldset>
                                    <div style="margin-top:-20px"><span id="text3"></span></div>
                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <fieldset>
                                        <input name="subject" type="text" id="subject" placeholder="Subject"
                                            id="subject">
                                    </fieldset>
                                    <div style="margin-top:-20px;margin-left:10px "><span id="text5"></span></div>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea name="message" rows="6" id="" placeholder="Message" required=""
                                            id="message"></textarea>
                                    </fieldset>
                                    <div style="margin-top:-20px"><span id="text4"></span></div>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <button type="submit"name="sub" id="form-submit" class="main-button-icon">Send Message Now
                                            <i class="fa fa-arrow-right"></i></button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Contact Us Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">

                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                        <ul class="social-icons">
                            <li>
                                <p>Follow Us</p>
                            </li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a>
                            </li>
                            <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/isotope.js"></script>

    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>
    $(function() {
        var selectedClass = "";
        $("p").click(function() {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function() {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });
    </script>

</body>

</html>
<?php
      if(isset($_POST["sub"]))
      {
        $a=$_POST['name'];
        $b=$_POST['email'];
        $c=$_POST['phone'];
        $d=$_POST['message'];
        $e=$_POST['subject'];
        $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
        $query="INSERT INTO `contact us`(`name`, `phone`, `email`, `message`,`subject`) VALUES ('$a','$c','$b','$d','$e')";
        $mathew=mysqli_query($conn,$query);
        ?>
        <script>alert("Your message has been succesfully moved to our technical team");
        window.location.href='userloginpage.php';
        </script>
      
        <?php
      
      }
      ?>
