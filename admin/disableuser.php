<?php
session_start();
    $id=$_GET['id'];
   
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query="select * from login  where id='$id'";
    $mathew=mysqli_query($conn,$query);
    While($data1=mysqli_fetch_array($mathew))
    {
                            $status=$data1['status'];
                            $email=$data1['email'];
    }
    if($status==0)
    {
        $query="update login set status=1 ,active='active' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        
        ?>
        <script>
            alert("user is active now");
            window.location.href='mailenable.php';
            </script>
            <?php
    }
    else{
        $query="update login set status=0 ,active='Inactive' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        $_SESSION["otp"]=$email;
        ?>
        <script>
              alert("user is inactive now");
        
            window.location.href='maildisable.php';
            </script>
            <?php
    }
    
    
 
    ?>
    