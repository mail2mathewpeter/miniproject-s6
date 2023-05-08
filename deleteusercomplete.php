<?php
session_start();
?>
<?php
$a=$_SESSION['id'];
echo $a;
         $conn=mysqli_connect("localhost","root","","miniprojects6");
         $query1="select *from customer where logid='$a'";
         $query2="select *from login where id='$a'";
         $result1=mysqli_query($conn,$query1);
         $result2=mysqli_query($conn,$query2);
         while($data=mysqli_fetch_array($result2))
         {
            $c=$data['email'];
            while($data1=mysqli_fetch_array($result1))
            {
                $first=$data1['first_name'];
                $last=$data1['last_name'];
                $dob=$data1['dob'];
                $gender=$data1['gender'];
                $phone=$data1['phone'];
                $file=$data1['file'];
                $b=date('y-m-d');
         }
        }

        
       
     $query4="insert into `delete details`(first_name,last_name,dob,gender,phone,email,file,date)values ('$first','$last','$dob','$gender','$phone','$c','$file','$b')";
     $result6=mysqli_query($conn,$query4);
     $query7="delete from login where id='$a'";
         $result7=mysqli_query($conn,$query7);
         $query8="delete from customer where id='$a'";
         $result=mysqli_query($conn,$query8);
      
        if($result6)
        {
            ?>	
            <script>alert("successfully Deleted");
        window.location.href='login.php';
        </script>
        <?php
        }

    	
			
		?>