<?php
    $id=$_GET['id'];
    echo $id;
    $conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
    
    $query="select * from employee  where id='$id'";
    $mathew=mysqli_query($conn,$query);
    While($data1=mysqli_fetch_array($mathew))
    {
                            $status=$data1['employee_status'];
    }
    if($status=='Inactive')
    {
        $query="update employee set employee_status='Active' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        ?>
        <script>
            alert("Employee is active now");
             window.location.href='viewemployee/viewemployee.php';
            </script>
            <?php
    }
    else{
        $query="update employee set employee_status='Inactive' where id='$id'";
        $mathew=mysqli_query($conn,$query);
        ?>
        <script>
              alert("Employee is Inactive now");
            window.location.href='viewemployee/viewemployee.php';
            </script>
            <?php
    }
    
    
 
    ?>
    