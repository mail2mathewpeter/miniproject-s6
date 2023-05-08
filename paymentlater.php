<?php 
session_start();
if($_SESSION["booking"]=="")
{
	header("location:userloginpage.php");
}
$b=$_GET['id'];
$conn=mysqli_connect("localhost","root","","miniprojects6")or die("Connect failed: %s\n". $conn -> error);
               
$query1="select *from booking where booking_id='$b'";
$result=mysqli_query($conn,$query1);
while($data=mysqli_fetch_array($result))
{
    $a=$data['amount'];
}

$email4=$_SESSION["email"];
$_SESSION["email"]=$email4;
$_SESSION['amount']=$a;

$_SESSION['book_id']=$b;
$a=$a*100;
$_SESSION['booking']="";
?>
<html>
<button id="rzp-button1" class="btn btn-outline-dark btn-lg"><i class="fas fa-money-bill"></i>Processed to pay</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  var options = {
    "key": "rzp_test_2y5xjZ67SWqQsk", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $a?>",
    "currency": "INR",
    "description": "caravan Tourisum",
    "image": "https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png",
    "handler":function(response){
      console.log(response);
      jQuery.ajax({
        type:"POST",
        url:"paymentdatabase.php",
        data:"pay_id="+response.razorpay_payment_id,
        success:function(result){
          alert("Successfully booked the caravan");
          window.location.href="bookingemail.php";
        }
      })
 
   
  }
  };
  var rzp1 = new Razorpay(options);
  document.getElementById('rzp-button1').onclick = function (e) {
    
    rzp1.open();
    e.preventDefault();
  }
</script>
</html>