<?php

    $id=$_GET['id'];

    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query="select * from caravan  where id='$id'";
    $mathew=mysqli_query($conn,$query);
    While($data1=mysqli_fetch_array($mathew))
    {
                            $status=$data1['status'];
    }
    if($status=='Inactive')
    {
        $query="update caravan set status='Active' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        ?>
        <script>
            alert("Caravan is Successfully Activated Its Service");
             window.location.href='deletecaravanadmin/Deletecaravan.php';
            </script>
            <?php
    }
    else{
        $query="update caravan set status='Inactive' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        ?>
        <script>
               alert("Caravan Is Successfully Diactivated Its Service");
            window.location.href='deletecaravanadmin/Deletecaravan.php';
            </script>
            <?php
    }
    
    
 
    ?>
    