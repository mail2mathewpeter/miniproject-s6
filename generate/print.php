
<?php

//include connection file 
include "dbcontroller.php";
include_once('fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('https://www.keralatourism.org/images/caravan-tourism/caravan-kerala-logo.png',10,10,45);
    $this->SetFont('Arial','B',13);
    // Move to the right
    $this->Cell(80);
    // Title
    $this->Cell(80,10,'Booking Details',1,0,'C');
    // Line break
    $this->Ln(20);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
$userid=$_SESSION['customer1'];


$display_heading1 = array('ID','customer Name','Mobile','caravan Name','Start Date','End Date','Adults','Children','Amount','Place','Allocated Driver','Status');
$result = mysqli_query($conn, "SELECT booking_id,customer_id,caravan_id, start, end, adults,children,amount,place,driver,status FROM booking where customer_id='$userid'") or die("database error:". mysqli_error($conn));
$result6= mysqli_query($conn, "SELECT id,customer_id,caravan_id, start, end, adults,children,amount,place,driver,status FROM deletebooking where customer_id='$userid'") or die("database error:". mysqli_error($conn));

$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',7);
$k=0;

foreach($display_heading1 as $heading) {
    if($heading=="ID")
    $pdf->Cell(10,8,$heading,1);
    else if($heading=="Start Date")
        $pdf->Cell(17,8,$heading,1);  
        else if($heading=="End Date")
        $pdf->Cell(17,8,$heading,1); 
        else if($heading=="Mobile")
        $pdf->Cell(18,8,$heading,1); 
        else if($heading=="caravan Name")
        $pdf->Cell(25,8,$heading,1); 
        else if($heading=="Adults") 
        $pdf->Cell(11,8,$heading,1); 
        else if($heading=="Children") 
        $pdf->Cell(12,8,$heading,1); 
        else if($heading=="Place") 
        $pdf->Cell(18,8,$heading,1); 
        else if($heading=="Amount") 
        $pdf->Cell(12,8,$heading,1);
        else if($heading=="Status") 
        $pdf->Cell(15,8,$heading,1);
       
    else
    $pdf->Cell(21,8,$heading,1);
    }
  
   
    while($row=mysqli_fetch_array($result6))
    {
//foreach($result as $row) {
    $pdf->SetFont('Arial','i',8);
    $pdf->Ln();
$k++;
$customer=$row['customer_id'];
$caravan1=$row['caravan_id'];
$start=$row['start'];
$end=$row['end'];
$start= date("d-m-Y", strtotime($start));
$end= date("d-m-Y", strtotime($end));
$adult=$row['adults'];
$children=$row['children'];
$amount=$row['amount'];
$place=$row['place'];
$driver=$row['driver'];
if($customer)
{
    $column=$row['customer_id'];
   $query1="select *from customer where id='$column'";
   $result1=mysqli_query($conn,$query1);
                      while($row1=mysqli_fetch_array($result1))
   {
       $customerid=$row1['first_name'];
       $customerid1=$row1['last_name'];
       $mobile=$row1['phone'];
       $customerid2= $customerid." ". $customerid1;
   
   }
   if($caravan1)
   {
    $column=$row['caravan_id'];
    $query1="select *from caravan where id='$column'";
    $result1=mysqli_query($conn,$query1);
                       while($row1=mysqli_fetch_array($result1))
    {
        $customerid=$row1['caravan_name'];
        
        $caravan= $customerid;
   }
   if($driver!="")
   {
    $column=$row['driver'];
    $query1="select *from employee where id='$column'";
    $result1=mysqli_query($conn,$query1);
                       while($row1=mysqli_fetch_array($result1))
    {
        $customerid=$row1['employee_name'];
        
        $driver= $customerid;
   }
   $Status="Canceled";
   $pdf->Cell(10,10,$k,1);
    $pdf->Cell(21,10,$customerid2,1);
    $pdf->Cell(18,10,$mobile,1);
    $pdf->Cell(25,10,$caravan,1);
    $pdf->Cell(17,10,$start,1);
    $pdf->Cell(17,10,$end,1);
    $pdf->Cell(11,10,$adult,1);
    $pdf->Cell(12,10,$children,1);
    $pdf->Cell(12,10,$amount,1);
    $pdf->Cell(18,10,$place,1);
    $pdf->Cell(21,10,$driver,1);
    $pdf->Cell(15,10,$Status,1);

}
else
{
   
        
        $driver="pending";
        $Status="pending";
   $pdf->Cell(10,10,$k,1);
    $pdf->Cell(21,10,$customerid2,1);
    $pdf->Cell(18,10,$mobile,1);
    $pdf->Cell(25,10,$caravan,1);
    $pdf->Cell(17,10,$start,1);
    $pdf->Cell(17,10,$end,1);
    $pdf->Cell(11,10,$adult,1);
    $pdf->Cell(12,10,$children,1);
    $pdf->Cell(12,10,$amount,1);
    $pdf->Cell(18,10,$place,1);
    $pdf->Cell(21,10,$driver,1);
    $pdf->Cell(15,10,$Status,1);
}

    }
}
    }

    while($row=mysqli_fetch_array($result))
    {
//foreach($result as $row) {
    $pdf->SetFont('Arial','i',8);
    $pdf->Ln();
$k++;
$customer=$row['customer_id'];
$caravan1=$row['caravan_id'];
$start=$row['start'];
$end=$row['end'];
$start= date("d-m-Y", strtotime($start));
$end= date("d-m-Y", strtotime($end));
$adult=$row['adults'];
$children=$row['children'];
$amount=$row['amount'];
$place=$row['place'];
$driver=$row['driver'];
$status=$row['status'];
if($customer)
{
    $column=$row['customer_id'];
   $query1="select *from customer where id='$column'";
   $result1=mysqli_query($conn,$query1);
                      while($row1=mysqli_fetch_array($result1))
   {
       $customerid=$row1['first_name'];
       $customerid1=$row1['last_name'];
       $mobile=$row1['phone'];
       $customerid2= $customerid." ". $customerid1;
   
   }
   if($caravan1)
   {
    $column=$row['caravan_id'];
    $query1="select *from caravan where id='$column'";
    $result1=mysqli_query($conn,$query1);
                       while($row1=mysqli_fetch_array($result1))
    {
        $customerid=$row1['caravan_name'];
        
        $caravan= $customerid;
   }
   if($driver!="")
   {
    $column=$row['driver'];
    $query1="select *from employee where id='$column'";
    $result1=mysqli_query($conn,$query1);
                       while($row1=mysqli_fetch_array($result1))
    {
        $customerid=$row1['employee_name'];
        
        $driver= $customerid;
   }
   $pdf->Cell(10,10,$k,1);
    $pdf->Cell(21,10,$customerid2,1);
    $pdf->Cell(18,10,$mobile,1);
    $pdf->Cell(25,10,$caravan,1);
    $pdf->Cell(17,10,$start,1);
    $pdf->Cell(17,10,$end,1);
    $pdf->Cell(11,10,$adult,1);
    $pdf->Cell(12,10,$children,1);
    $pdf->Cell(12,10,$amount,1);
    $pdf->Cell(18,10,$place,1);
    $pdf->Cell(21,10,$driver,1);
    $pdf->Cell(15,10,$status,1);

}
else
{
   
        
        $driver="pending";
      
   $pdf->Cell(10,10,$k,1);
    $pdf->Cell(21,10,$customerid2,1);
    $pdf->Cell(18,10,$mobile,1);
    $pdf->Cell(25,10,$caravan,1);
    $pdf->Cell(17,10,$start,1);
    $pdf->Cell(17,10,$end,1);
    $pdf->Cell(11,10,$adult,1);
    $pdf->Cell(12,10,$children,1);
    $pdf->Cell(12,10,$amount,1);
    $pdf->Cell(18,10,$place,1);
    $pdf->Cell(21,10,$driver,1);
    $pdf->Cell(15,10,$status,1);
}

    }
}
    }

$pdf->Output();
?>
