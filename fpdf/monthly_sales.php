<?php
require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=pos','root','');

class myPDF extends FPDF{
	function todaydate($db){

		$this->SetFont('Arial','B',10);
		$this->Cell(75,5,'POINT OF SALE',0,0,'R');
		$this->Ln();
		date_default_timezone_set('Asia/Manila');
		$month= date('F Y');
		$this->SetFont('Arial','B',10);
		$this->Cell(132,5,"SALES OF: $month",0,0,'C');
		$this->Ln(5);
	
	}



	function displayTotal($db){
		$this->SetFont('Arial','B',10);
		$stmt = $db->query('SELECT SUM(total_amount) as result FROM transactions where MONTH(transaction_date) = MONTH(CURDATE()) ');
		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
			$this->Cell(61,5,'TOTAL :',0,0,'R');
			$this->Cell(30,5,$data->result,0,0,'L');
			$this->Ln(10);

		}
	}
	function headerTable(){
		$this->SetFont('Arial','B',12);
		$this->Cell(25,10,'Invoice #',1,0,'C');
		$this->Cell(40,10,'Product',1,0,'C');
		$this->Cell(43,10,'Description',1,0,'C');
		$this->Cell(20,10,'Price',1,0,'C');
		$this->Cell(15,10,'Qty',1,0,'C');
		$this->Cell(32,10,'Total Amount',1,0,'C');
		$this->Cell(50,10,'Cashier',1,0,'C');
		$this->Cell(50,10,'Transaction Time',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Arial','',12);
		date_default_timezone_set('Asia/Manila');
		$date = date('y-m-d');
		$stmt = $db->query('SELECT * FROM sales WHERE MONTH(transaction_time) = MONTH(CURDATE()) and quantity != 0 '); 
		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
			$this->Cell(25,10,$data->invoice_number,1,0,'C');
			$this->Cell(40,10,$data->purchase_name,1,0,'C');
			$this->Cell(43,10,$data->product_description,1,0,'C');
			$this->Cell(20,10,$data->product_price,1,0,'C');
			$this->Cell(15,10,$data->quantity,1,0,'C');
			$this->Cell(32,10,$data->total_amount,1,0,'C');
			$this->Cell(50,10,$data->cashier,1,0,'C');
			$this->Cell(50,10,$data->transaction_time,1,0,'C');
			$this->Ln();

		}
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
	}

}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->Image('logo.png',10,10,-220);
$pdf->todaydate($db);
$pdf->displayTotal($db);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output('Monthly Sales Report','I');

?>