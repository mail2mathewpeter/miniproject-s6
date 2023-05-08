<?php
session_start();
?>
<?php
$a=$_GET['id'];

$conn=mysqli_connect("localhost","root","","miniprojects6");
$query1="select *from  booking where booking_id='$a'";
$result1=mysqli_query($conn,$query1);
while($data1=mysqli_fetch_array($result1))
{

       $first=$data1['customer_id'];
       $last=$data1['caravan_id'];
       $start=$data1['start'];
       $end=$data1['end'];
       $driver=$data1['driver'];
       $amount=$data1['amount'];
       $place=$data1['place'];
       $adults=$data1['adults'];
       $children=$data1['children'];
       $payment=$data1['payment'];
       $status=0;
       $b=date('y-m-d');
}


$query2="INSERT INTO `deletebooking`( `customer_id`, `caravan_id`, `start`, `end`, `driver`, `amount`, `place`, `status`, `date`, `adults`, `children`,'payment')VALUES('$first','$last','$start','$end','$driver','$amount','$place','$status','$b','$adults','$children','$payment')"; 
$result2=mysqli_query($conn,$query2);
$query3="DELETE FROM `booking` WHERE booking_id='$a'";
$result3=mysqli_query($conn,$query3);
if($result3)
{
    ?>
    <script>alert("successfully Cancel the booking");
    window.location.href='bookingview.php';
    </script><?php
}


        
			
		?>