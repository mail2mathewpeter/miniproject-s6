<?php
session_start();
    $id=$_GET['id'];
   
  
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query="select * from booking  where booking_id='$id'";
    $mathew=mysqli_query($conn,$query);
    While($data1=mysqli_fetch_array($mathew))
    {
                            $status=$data1['status'];
                           
    }
    if($status=="pending")
    {
        $query="update booking set status='Approved' where booking_id='$id'";
        $mathew=mysqli_query($conn,$query);
        
        ?>
        <script>
            alert("Booking has been Approved");
           window.location.href='dashboard.php';
            </script>
            <?php
    }
   
    
    
 
    ?>
    