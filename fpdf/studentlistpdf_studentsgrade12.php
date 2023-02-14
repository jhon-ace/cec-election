
<?php

require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=election','root','19976112');

class myPDF extends FPDF{

		function header_display($db){


               
                    $link = mysqli_connect("localhost","root","19976112","election");
                    $vot = "finish voting";
                    $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM students where stud_year = 'G - 12'");
                            $res2 = mysqli_fetch_array($sql2);
                            $alllogs = $res2['TOTAL'];

                           
		$this->SetFont('Arial','B',10);

		$this->Cell(56,5,'GRADE - 12 | LIST OF VOTERS',0,0,'R');
		$this->Cell(275,5,"Total Number:  $alllogs",0,0,'C');
		$this->Ln(5);
		$this->SetFont('Arial','B',10);
		date_default_timezone_set('Asia/Manila');
		$datekaron = date('l, F j, Y');
		$this->Cell(57,5,"Date: $datekaron\n",0,0,'C');
		$this->Ln(10);
		

	
	}

	function headerTable(){
		$this->SetFont('Arial','B',12);
		$this->Cell(-7,8,'',0,0,'C');
		$this->Cell(30,8,'S_ID',1,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(47,8,'Middlename',1,0,'C');
		$this->Cell(29,8,'Department',1,0,'C');
		$this->Cell(20,8,'Year',1,0,'C');
		$this->Cell(28,8,'Status',1,0,'C');
		$this->Cell(26,8,'Code',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM students where stud_year = 'G - 12' ORDER BY stud_department,stud_lastname ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$stud_id = $num_rows['stud_id'];;
				$firstname = $num_rows['stud_firstname'];
                $lastname = $num_rows['stud_lastname'];
                $middlename = $num_rows['stud_middlename'];
                $department = $num_rows['stud_department'];
                $stud_year = $num_rows['stud_year'];
                $code = $num_rows['code_to_vote'];
                $status = $num_rows['voting_status'];
                $block_status = $num_rows['stud_block_status'];
                $this->Cell(-7,8,'',0,0,'C');			
				$this->Cell(30,8,$stud_id,1,0,'C');
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(47,8,$middlename,1,0,'C');
				$this->Cell(29,8,$department,1,0,'C');
				$this->Cell(20,8,$stud_year,1,0,'C');
				$this->Cell(28,8,$status,1,0,'C');
				$this->Cell(26,8,$code,1,0,'C');
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
$pdf->AddPage('L','Letter',0);
//$pdf->Image('logo.png',10,10,-220);

$pdf->header_display($db);
$pdf->headerTable();
$pdf->viewTable($db);
date_default_timezone_set('Asia/Manila');
//$datekaron = date('l, F j, Y');
$pdf->Output('I','Grade - 12 | List of Final Voters.pdf','I');

?>