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
    $this->Cell(80,10,'Caravan Details',1,0,'C');
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


$display_heading1 = array('ID','Caravan Name','Caravan Model','Caravan Type','Caravan Regno','Amount','Status');
$result = mysqli_query($conn, "SELECT caravan_name,caravan_model,caravan_type, caravan_regno,amount,status FROM caravan") or die("database error:". mysqli_error($conn));


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
    if($heading=="ID")
    $pdf->Cell(10,8,$heading,1);
    else if($heading=="Caravan Type")
    $pdf->Cell(35,8,$heading,1);
    else
    $pdf->Cell(30,8,$heading,1);
    }
  
    while($row=mysqli_fetch_array($result))
    {
//foreach($result as $row) {
    $pdf->SetFont('Arial','i',8);
 

$first=$row['caravan_name'];
$last=$row['caravan_model'];
$logid=$row['caravan_type'];
$gender=$row['caravan_regno'];
$phone=$row['amount'];
$file=$row['status'];
 $k++;  
     $pdf->Ln();   
     
    $pdf->Cell(10,10,$k,1);
     $pdf->Cell(30,10,$first,1);
     $pdf->Cell(30,10,$last,1);
 
     $pdf->Cell(35,10,$logid,1);
   
     $pdf->Cell(30,10,$gender,1);
     $pdf->Cell(30,10,$phone,1);
     $pdf->Cell(30,10,$file,1);
 
   }
$pdf->Output();
?>