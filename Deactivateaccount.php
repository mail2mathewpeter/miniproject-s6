<?php
session_start();
if(!isset($_SESSION)) { session_start(); } 
if($_SESSION['loginstatus']=="")
{
	header("location:login.php");
}
?>
<html>
    <head>
        <title>deactivateaccount</title>
        <style>
            

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding:10px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 30%;
  
  opacity: 0.9;
}

button:hover {
  opacity:1;
}


.cancelbtn, .deletebtn {
  float: left;
  width: 50%;
}

.cancelbtn {
  background-color: #ccc;
  color: black;
}

.deletebtn {
  background-color: #f44336;
}


.modal {
  display: none; 
  position: auto; 
  z-index: 1; 
  left: 0;
  top: 0;
  width: 100%; 
  height: 100%; 
  overflow: auto; 
  background-color:white;
  padding-top:20px;
}


.modal-content1{
  background-color:white;
  margin: 15% auto 10% auto;
  border: 0.5px solid #888;
  width: 80%; 
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 

.close {
  position: absolute;
  right:25px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}


</style>

        <link rel=stylesheet href="css/deactivateaccount.css">
<meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>bs4 profile settings page - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div style="margin-left:0px">
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 pb-5">
            <!-- Account Sidebar-->
            <div class="author-card pb-3">
                <div class="author-card-cover" style="background-image: url(img/3.jpg);"></div>
                <div class="author-card-profile">
                    <div class="author-card-avatar">
                         <?php
        $b= $_SESSION['id'];
        $_SESSION['id']=$b;	

             $conn=mysqli_connect("localhost","root","","miniprojects6");
             $query="select *from customer where logid='$b'";
             
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_array($result))
{
                $a=$row['first_name'];
                $b=$row['last_name'];
                $k=$row['date'];
    ?>
	<img src="uploads/<?php echo $row['file']; ?>"alt="Cinque Terre"class="k" >
    <?php
                }
                ?>
                    </div>
                    
                    <div class="author-card-details">
                        <h5 class="author-card-name text-lg"><?php echo "$a $b" ?></h5><span class="author-card-position">Joined on<br><?php echo $k ?></span>
                    </div>
                </div>
            </div>
            <div class="wizard">
                <nav class="list-group list-group-flush">
                <a class="list-group-item " href="account view.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">over view</div>
                            </div><span class="badge badge-secondary">1</span>
                        </div>
                   
                    </a><a class="list-group-item" href="viewmanageuseraccount.php"><i class="fe-icon-user text-muted"></i>edit Profile Settings</a>
                    </a>
                    <a class="list-group-item " href="user booking status.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-shopping-bag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">Booking status</div>
                            </div><span class="badge badge-secondary">1</span>
                        </div>
                        <a class="list-group-item active" href="Deactivateaccount.php"><i class="fe-icon-map-pin text-muted"></i>Deactivate Account</a>
                   
                    <a class="list-group-item" href="userloginpage.php">
                        <div class="d-flex justify-content-between align-items-center">
                            <div><i class="fe-icon-tag mr-1 text-muted"></i>
                                <div class="d-inline-block font-weight-medium text-uppercase">HOME Page</div>
                            </div><span class="badge badge-secondary"></span>
                        </div>
                    </a>
                </nav>
            </div>
        </div>
           
        </div>  
     
        <div style="margin-top:-450px;margin-left:100px">
      
      <div style="margin-left:100px"><center><font color="red"> <h2> About Deactivate account</h2></font></center><br></div>
      <div style="margin-left :250px"> <h4><font color="green">Please read this carefully for protect your data.</font></h4><br>
      You’re trying to delete your carevan Account, which provides access to various carevan services. You’ll no longer be able to use any of those services, and your account and data will be lost.

You also could lose access to services outside of keravan where you use mail2mathewpeter@gmail.com. For example, if you use this email address as a booking ticket for keravan account, you may have difficulty resetting your keravan provide email for other keravan account. If you proceed, you’ll need to update your email address everywhere you use it outside of keravan.<br>

<br><center><font color="green"><h4>All this content will be deleted</h4></font></center>
Note: the list below may not contain every keravan service affected by your deletion, such as services keravan account no longer supports. Your data will be deleted from these services as well.You can reactivate your account by changing password.

<br><br>

<button onclick="document.getElementById('id01').style.display='block'">Deactivate account</button></div><br>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content1" action=""method="POST">
    <div class="container">
      <h1>Deactivate Account</h1>
      <p>Are you sure you want to Deactivate your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button  class="deletebtn"><a href="userdelete.php">Deactivate Account</a></button><br><br><br>
      </div>
    </div>
  </form>
</div>
</div>
<div style="margin-left:600px;margin-top:-90px"><button onclick="document.getElementById('id02').style.display='block'">Delete account</button></div><br>

<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span>
  <form class="modal-content1" action=""method="POST">
    <div class="container">
      <h1>Delete Account</h1>
      <p>Are you sure you want to Delete your account?</p>
    
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button  class="deletebtn"name="delete"><a href="deleteusercomplete.php">Delete Account</a></button><br><br><br>
      </div>
    </div>
  </form>
</div>
</div>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<?php
if(isset($_POST["delete"]))
{
$a= $_SESSION['id'];
 $_SESSION['id']=$a;		 
         $conn=mysqli_connect("localhost","root","","mathew");
         $query="delete from login where id='$a'";
         $result=mysqli_query($conn,$query);
        if($result)
        {
            ?>	
            <script>alert("successfully deleted");
        window.location.href='author.php';
        </script>
        <?php
        }
    }

    	
			
		?>
</body>
</html>
