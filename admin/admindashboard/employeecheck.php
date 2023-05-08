<?php
session_start();

$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
if(isset($_POST["email2"]) && ($_POST["start"]) && ($_POST["end"]))
 {
    $a=$_POST["email2"];
    $b=$_POST["start"];
    $c=$_POST["end"];
        // echo "<script>alert($a);</script>";
        $employee1="select *from employee where status='1'";
        $employee=mysqli_query($conn,$employee1);
        while($cus=mysqli_fetch_array($employee))
        {   
           $custi=$cus['id'];
           $f=0;
           $p=1;
           $k1=0;
           $query = "SELECT * FROM booking ";
        
           $r=mysqli_query($conn,$query);
           while($k=mysqli_fetch_array($r))
         {
                  $a=$k['driver'];
                  $bookingstart=$k['start'];
                  $bookingend=$k['end'];
            /*Printing first variable*/
                 if($custi==$a)
                 {
                    if($bookingstart==$b || $bookingend==$c || $bookingstart<$b && $c<$bookingend )
                    {
                        $k1=1;
                        $p=0;
  
                    }
                 }
               
         }
       
         if($k1==0)
        {
    echo "<option value='".$cus['id']."'>".$cus['employee_name']." </option>";
    $f=1;    


    }
if($f==0 && $p==1)
{
echo "<option value='".$cus['id']."'>".$cus['employee_name']." </option>"; 
}
        }


    }
    else
    {
        echo "mahtew";
    }
?>