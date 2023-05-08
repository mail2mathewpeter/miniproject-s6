
<?php
session_start();
?>
<html>

<head>
	<meta charset="utf-8">
	<link rel=stylesheet href=css/style9.css>
	<link rel=icon href=img/1.jpg />
</head>
<script src="https://kit.fontawesome.com/812d6c8dd3.js" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
	function login()
	{
		alert("please Login the website and try again");
		window.location.href = 'login.php';
	
		
	}
	$(document).ready(function(){
            $("#txt1").blur(function(){
         			 var n=document.getElementById("txt1");
         			 var letter=/[A-Za-z]+$/;
         			 if(n.value == "")
        			  {
         				   document.getElementById("text1").innerHTML = "<span class='error'>Please enter a valid name</span>";
       				  }
       				 else if(!n.value.match(letter))
        			  {
         				   document.getElementById("text1").innerHTML = "<span class='error'>This is not a valid name. Please try again</span>";
          			  }
         					 else if(n.value.match(letter))
        			  {
             				 document.getElementById("text1").innerHTML = "<span class='error'></span>";
          			   }
          			}),
            
          
          		     $("#textarea1").blur(function(){
          				var n=document.getElementById("textarea1");
        				  var letter=/[A-Za-z]+$/;
          					if(n.value == "")
          					{
          				  document.getElementById("text2").innerHTML = "<span class='error'>Please enter a valid Address</span>";
      						  }
       						 else if(!n.value.match(letter))
       						   {
          				  document.getElementById("text2").innerHTML = "<span class='error'>This is not a valid address. Please try again</span>";
          						}
          					else if(n.value.match(letter))
         					 {
             				 document.getElementById("text2").innerHTML = "<span class='error'></span>";
          					}
       				 }),
          		  
       				  $("#phone1").blur(function(){
          				var n=document.getElementById("phone1");
        				 p=/([789][0-9]{9})+$/;
          					if(n.value == "")
          					{
          				  document.getElementById("text3").innerHTML = "<span class='error'>Please enter a valid phone number</span>";
      						  }
       						 else if(!n.value.match(p))
       						   {
          				  document.getElementById("text3").innerHTML = "<span class='error'>This is not a valid phone number. Please try again</span>";
          						}
          					else if(n.value.match(p))
         					 {
             				 document.getElementById("text3").innerHTML = "<span class='error'></span>";
          					}
       				 }),
       				    $("#Email").blur(function(){
          				var n=document.getElementById("Email");
        				 p=/\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
          					if(n.value == "")
          					{
          				  document.getElementById("text4").innerHTML = "<span class='error'>Please enter a valid Email address</span>";
      						  }
       						 else if(!n.value.match(p))
       						   {
          				  document.getElementById("text4").innerHTML = "<span class='error'>This is not a valid Email address. Please try again</span>";
          						}
          					else if(n.value.match(p))
         					 {
             				 document.getElementById("text4").innerHTML = "<span class='error'></span>";
          					}
       				 }),
       				    $("#area").blur(function(){
          				var n=document.getElementById("area");
          					if(n.value == "")
          					{
          				  document.getElementById("text5").innerHTML = "<span class='error'>Please enter something about us</span>";
      						  }

      						  else {
             				 document.getElementById("text5").innerHTML = "<span class='error'></span>";
          					}
       				 })
       				  })
					  </script>
<style>
    			.error{
  				color:red;
  				font-size:15px;
				}
				.box1{
width: 44%;
margin-left: 1.4%;
border: 1px solid #ccc;
padding-bottom: 15px;
padding: 2%;
}
.box{
width: 23%;
margin-left: 1.4%;
border: 1px solid #ccc;
float: left;
border-radius: 17px;
padding-bottom: 100px;	
}
				.submit {
    
      cursor: pointer;
        border-radius: 5em;
        color: #fff;
        background: #e35c5c;
        border: 1px;
        padding-left: 30px;
        padding-right: 30px;
        padding-bottom: 20px;
        padding-top: 10px;
        font-family: 'Ubuntu', sans-serif;
		margin-top:90px;
        font-size: 20px;
    }
	.submit:hover{
    
	cursor: pointer;
	  border-radius: 5em;
	  color:white;
	  background:green;
	  border: 1px;
	  padding-left: 30px;
	  padding-right: 30px;
	  padding-bottom: 20px;
	  padding-top: 10px;
	  font-family: 'Ubuntu', sans-serif;
	  margin-top:90px;
	  font-size: 20px;
  }
      table {
        border-collapse: separate;
		background:#dddee1;
        border-spacing:5px;
		width:100%;
      }
      th {
       font-size:20px;
        color: green;
		align:left;
      }
      
      td {
        width: 100px;
        text-align: center;
        color: brown;
		border-radius:0.5px;
        padding: 3px;
      }
	  input{
width:100%;
margin-left:-70px;
padding:4%;
border:1px solid #ccc;
}
textarea{
	width:100%;
margin-left:-70px;
padding:4%;
border:1px solid #ccc;
}
.social{
	font-size:30px;
	
	padding:10px;
	margin-left:1060px;
}
.k{
    border-radius: 100%;
}
.dropbtn1{
  background-color:black	;
  color: white;
  padding: 16px;
  margin-top:-10px;
  
  font-size: 16px;
  border: none;
}

.dropdown1{
  position: relative;
  display: inline-block;
}

.dropdown-content1{
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content1 a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content1 a:hover {background-color: #ddd;}

.dropdown1:hover .dropdown-content1 {display: block;}

.dropdown1:hover .dropbtn1 {background-color:#7ab700;}
.dropdown {
  position: relative;
  display: inline-block; 
  margin-top:-15px;
  margin-left:20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.desc {
  padding: 15px;
  text-align: center;

}

	  </style>
<title>keravan website</title>
<body>

	<nav1>
		<div class=left>
	<a href="" class="nl">FAQs</a>
	<div class="n2">|</div>
				<a href="" class="nl">Help</a>
				<div class="n2">|</div>
				<a href="" class="nl">support</a>
				<div class="social">
	<i class="fa-brands fa-instagram"></i>
		<i class="fa-brands fa-facebook"></i>
		<i class="fa-brands fa-twitter"></i>
	</div>
</div>
</nav1>
<nav2>
	
	<div style="margin-left:60px;margin-top:15px"><font size="6"color="orange">keravan</font><font size="6"color="black"> website</font></div>
	<div style="margin-left:620px;margin-top:-35px"><div class=n3><center>Opening Hours</center>
		<br><br><div class=n4>8.00AM - 9.00PM</div>
	</div>
	<div class=n3><center>Email Us</center>
	<br><br><div class=n4>mail2mathewpeter@gmail.com</div></div>
	<div class=n3><center>Call Us</center> <br> <br><div class=n4>9497036814</div></div></div>
</nav2>
<nav3>
<div style="margin-top:10px;margin-left: 40px;"><a href="userloginpage.php"><img src="img/f.png" width="50"height="50"></a></div>
			<div class="link2">
			<a href="userloginpage.php#opening"class="n5">About</a>
			<a href="userloginpage.php#service"class="n5"> Our services</a>
				<a href="userloginpage.php#contact" class="n5">contact</a>
				
								
				<a href="userloginpage.php#images" class="n5">Images</a>
								
				<a href="busview.php" class="n7">vehicles</a>
			
			<div style="margin-top:-6px;margin-left:600px;">	<div class="dropdown1">
  <button class="dropbtn1">Book Trip</button>
  <div class="dropdown-content1">
    <a href="book.php">Book your Trip</a>
    <a href="checkuseradmin1.php">view booking status</a>
    </div>
  </div>
</div>
<div style="margin-top:-30px;margin-left:900px;">		
							<div class="dropdown">
							 
									<?php
							  $a= $_SESSION['name1'];
							  $b= $_SESSION['name2'];
							  $_SESSION['name1']=$a;
							   $_SESSION['name2']=$b;
							 $conn=mysqli_connect("localhost","root","","miniproject");
							 $query="select *from userreg where username='$a'";
				$result=mysqli_query($conn,$query);
				while($row=mysqli_fetch_array($result))
				{
					?>
					<img src="uploads/<?php echo $row['file']; ?>"alt="Cinque Terre" width="70" height="50"class="k">
				  <div class="dropdown-content"style="right:0;">
				  <img src="uploads/<?php echo $row['file']; ?>"alt="Cinque Terre" width="300" height="200">
				  <div class="desc"><a href="checkuseradmin.php" class=n9 target="__blank">Manage your account</a></div>
				  <br>
				  <div style="margin-left:80px"><div class="desc"><a href="logout.php"class=n9>LOGOUT</a></div></div>
				
				  </div>
				</div>
						
								<?php
								}
								
								?>
					  
							
				</div>
							

			</div>
</nav3>
<BR>
<div style="margin-top:190px">
<center><font color="green"size="6"><i>Different types vehicles available for tour</i></font><br><br></center>


					<?php
					        $conn=mysqli_connect("localhost","root","","miniprojects6");
							$query="select *from caravan";
							$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
							?>
							<div class=box>
					<div class=view style="height:175;">
							<img src="uploads/<?php echo $row['caravan_image']; ?>"alt="Cinque Terre" ><br></div><br>
				<div style="margin-left:20px">
							<font color="red">Driver name: </font><font color="green"><?php
							echo $row['caravan_name'];
							?></font><br>
							<font color="red">phone No: </font><font color="green"><?php
							echo $row['caravan_model'];
							?></font>
							<br>
							<font color="red">vehicle Type: </font><font color="green"><?php
							echo $row['caravan_regno'];
							?></font><br>
							<font color="red">vehicle Name: </font><font color="green"><?php
							echo $row['amount'];
							?></font><br>
							
						</div>
					</div>
							<?php

}
?>
			
				
                           
                      <center>
					
				</center>
				</div></div>