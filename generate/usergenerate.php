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
    $this->Cell(80,10,'User Details',1,0,'C');
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


$display_heading1 = array('ID','customer Name','Email','Mobile','Gender','Status');
$result = mysqli_query($conn, "SELECT first_name,last_name,logid, gender, phone, file FROM customer") or die("database error:". mysqli_error($conn));


$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',7);
$k=0;
//Background color of header//
$pdf->SetFillColor(193,229,252);
foreach($display_heading1 as $heading) {
    if($heading=="Email")
    $pdf->Cell(42,8,$heading,1);
    else
    $pdf->Cell(30,8,$heading,1);
    }
  
    while($row=mysqli_fetch_array($result))
    {
//foreach($result as $row) {
    $pdf->SetFont('Arial','i',8);
 

$first=$row['first_name'];
$last=$row['last_name'];
$logid=$row['logid'];
$gender=$row['gender'];
$phone=$row['phone'];
$file=$row['file'];
if($logid)
{
   
    $column=$row['logid'];
   $query1="select *from login where id='$column' and status!=2";
   $result1=mysqli_query($conn,$query1);
 while($row1=mysqli_fetch_array($result1))
   { $k++;  
     $pdf->Ln();   
     $customerid=$row1['email']; 
     $status=$row1['active']; 
    $name=$first." ".$last;
    $pdf->Cell(30,10,$k,1);
     $pdf->Cell(30,10,$name,1);
     $pdf->Cell(42,10,$customerid,1);
     $pdf->Cell(30,10,$phone,1);
   
     $pdf->Cell(30,10,$gender,1);
     $pdf->Cell(30,10,$status,1);
   }
  
 
   


}

 

    }


$pdf->Output();
?>