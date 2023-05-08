<?php
session_start();
    $id=$_GET['id'];
   
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query="update customer set feedback='1' where id='$id'"; 
    $mathew=mysqli_query($conn,$query);
    ?>
    <script>
    
    window.location.href='feedbackmail1.php';
    </script>
 
    