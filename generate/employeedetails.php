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
    $this->Cell(80,10,'Employee Details ',1,0,'C');
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


$display_heading1 = array('ID','Employee Name','Employee Address','Email','Mobile','Gender','Designation','Experience','Status');
$result = mysqli_query($conn, "SELECT employee_name,employee_address,employee_email,employee_phone, employee_gender,employee_designation, employee_year,employee_status FROM employee") or die("database error:". mysqli_error($conn));


$pdf = new PDF();
//header
$pdf->AddPage();
//foter page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',8);
$k=0;
//Background color of header//
$pdf->SetFillColor(193,229,252);
foreach($display_heading1 as $heading) {
    if($heading=="Email")
    $pdf->Cell(47,8,$heading,1);
    elseif($heading=="ID")
    {
    $pdf->Cell(10,8,$heading,1);
    }
    elseif($heading=="Mobile")
    {
    $pdf->Cell(20,8,$heading,1);
    }
    elseif($heading=="Gender")
    {
    $pdf->Cell(15,8,$heading,1);
    }
    elseif($heading=="Designation")
    {
    $pdf->Cell(19,8,$heading,1);
    }
    elseif($heading=="Experience")
    {
    $pdf->Cell(17,8,$heading,1);
    }
    elseif($heading=="Employee Address")
    {
    $pdf->Cell(30,8,$heading,1);
    }
    elseif($heading=="Status")
    {
    $pdf->Cell(15,8,$heading,1);
    }
    else
    {
    $pdf->Cell(25,8,$heading,1);
    }
}
  
    while($row=mysqli_fetch_array($result))
    {
//foreach($result as $row) {
    $pdf->SetFont('Arial','i',8);
    $k++;  
    $pdf->Ln();   

$first=$row['employee_name'];
$last=$row['employee_address'];
$logid=$row['employee_email'];
$gender=$row['employee_phone'];
$phone=$row['employee_gender'];
$file=$row['employee_designation'];
$file1=$row['employee_year'];
$status=$row['employee_status'];
    
    
 
    $pdf->Cell(10,10,$k,1);
     $pdf->Cell(25,10,$first,1);
     $pdf->Cell(30,10,$last,1);
     $pdf->Cell(47,10,$logid,1);
     $pdf->Cell(20,10,$gender,1);
     $pdf->Cell(15,10,$phone,1);
     $pdf->Cell(19,10,$file,1);
     $pdf->Cell(17,10,$file1,1);
     $pdf->Cell(15,10,$status,1);
   }
  
 
   






$pdf->Output();
?>