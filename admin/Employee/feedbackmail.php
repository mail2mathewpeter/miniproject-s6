<?php
session_start();
    $id=$_GET['id'];
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query1="select*from customer where id='$id'"; 
    $mathew1=mysqli_query($conn,$query1);
    while($data1=mysqli_fetch_array($mathew1))
    {
        $id1=$data1['logid'];
        $first=$data1['first_name'];
        $last=$data1['last_name'];
    }
    $name=$first." ".$last;
    $_SESSION['name']=$name;
    $_SESSION['id']=$id;
    $query2="select*from login where id='$id1'"; 
    $mathew2=mysqli_query($conn,$query2); 
    while($data2=mysqli_fetch_array($mathew2))
    {
        $email=$data2['email'];
    }   
    $_SESSION['email']=$email;     
    
    $query="update customer set feedback='1' where id='$id'"; 
    $mathew=mysqli_query($conn,$query);
    ?>
    <script>
    
    window.location.href='feedbackmail1.php';
    </script>
 
    