<?php
session_start();
?>
<?php
$a=$_SESSION['id'];
$status=0;
         $conn=mysqli_connect("localhost","root","","miniprojects6");
         
         $query1="update login set status=$status where id='$a'";
         $result=mysqli_query($conn,$query1);
        if($result)
        {
            ?>	
            <script>alert("successfully Deactivated");
        window.location.href='login.php';
        </script>
        <?php
        }

    	
			
		?>