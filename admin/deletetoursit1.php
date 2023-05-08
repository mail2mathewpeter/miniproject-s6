<?php

    $id=$_GET['id'];
  
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query="select * from place  where id='$id'";
    $mathew=mysqli_query($conn,$query);
    While($data1=mysqli_fetch_array($mathew))
    {
                            $status=$data1['status'];
    }
    if($status=='Inactive')
    {
        $query="update place set status='Active' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        ?>
<script>
alert("Tourist Place Is Enabled Successfully")
window.location.href = 'deletetoursit.php';
</script>
<?php
    }
    else{
        $query="update place set status='Inactive' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        ?>
<script>
alert("Tourist Place Is Disabled Successfully")
window.location.href = 'deletetoursit.php';
</script>
<?php
    }
    
    
 
    ?>