
<?php

require "fpdf.php";
$db = new PDO('mysql:host=localhost;dbname=election','root','19976112');

class myPDF extends FPDF{

		function header_display($db){


               
                    $link = mysqli_connect("localhost","root","19976112","election");
                    $vot = "finish voting";
                    $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM students where stud_year = '3rd Year'");
                            $res2 = mysqli_fetch_array($sql2);
                            $alllogs = $res2['TOTAL'];

                           
		$this->SetFont('Arial','B',10);
		$year = date('Y');
		$this->Cell(188,5,"OFFICIAL LIST OF CANDIDATES FOR ELECTION | YEAR : $year",0,0,'R');
		//$this->Ln(5);
		//$this->Cell(275,5,"Total Number:  $alllogs",0,0,'C');
		$this->Ln(5);
		$this->SetFont('Arial','B',10);
		date_default_timezone_set('Asia/Manila');
		$datekaron = date('l, F j');
		$this->Cell(265,5,"Date: $datekaron\n",0,0,'C');
		$this->Ln(10);
		

	
	}

	function headerTable(){

		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(100,8,'FOR PRESIDENT:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'President' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
               // $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}

	function headerTable2(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(100,8,'FOR VICE - PRESIDENT:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable2($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice-President' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                //$department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}

function headerTable3(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(100,8,'FOR SECRETARY:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable3($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Secretary' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                //$department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}

function headerTable4(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(100,8,'FOR TREASURER:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable4($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Treasurer' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
               // $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


function headerTable5(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(100,8,'FOR AUDITOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable5($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Auditor' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                //$department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}

function headerTable6(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(100,8,'FOR SENATOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable6($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Senator' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
               // $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}



function headerTable7(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(120,8,'FOR GRADE 12 | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable7($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor - 12' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                //$department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}





function headerTable8(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(120,8,'FOR GRADE 12 | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		//$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable8($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice-Governor - 12' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                //$department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				//$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


function headerTable9(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(160,8,'FOR COLLEGE OF COMPUTER STUDIES | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable9($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Computer Studies' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}




function headerTable10(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(160,8,'FOR COLLEGE OF COMPUTER STUDIES | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable10($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','19976112','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Computer Studies' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}



function headerTable11(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(190,8,'FOR COLLEGE OF EDUCATION AND LIBERAL ARTS | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(58,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(32,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable11($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Education and Liberal Arts' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(58,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(32,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


	function headerTable12(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(190,8,'FOR COLLEGE OF EDUCATION AND LIBERAL ARTS | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(58,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(32,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable12($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Education and Liberal Arts' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(58,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(32,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


function headerTable13(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(160,8,'FOR MARINE TRANSPORTATION PROGRAM | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable13($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Marine Transportation' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


	function headerTable14(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(160,8,'FOR MARINE TRANSPORTATION | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable14($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Marine Transportation' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}




function headerTable15(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(160,8,'FOR MARINE ENGINEERING PROGRAM | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable15($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Marine Engineering' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


	function headerTable16(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(160,8,'FOR MARINE ENGINEERING | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable16($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Marine Engineering' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}




function headerTable17(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(200,8,'FOR HOSPITALITY AND TOURISM MANAGEMENT PROGRAM | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable17($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Hospitality and Tourism' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


	function headerTable18(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(210,8,'FOR HOSPITALITY AND TOURISM MANAGEMENT PROGRAM | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable18($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Hospitality and Tourism' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}




function headerTable19(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(200,8,'FOR BUSINESS ADMINISTRATION PROGRAM | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable19($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Business Administration' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


	function headerTable20(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(210,8,'FOR BUSINESS ADMINISTRATION PROGRAM | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable20($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Business Administration' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}




function headerTable21(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(200,8,'FOR COLLEGE OF CRIMINOLOGY | GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable21($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department ='Criminology' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
				$this->Ln();
				
				
			}
	}


	function headerTable22(){
				$this->Ln(5);
		$this->SetFont('Arial','B',12);
		$this->Cell(-5,8,'',0,0,'C');
		$this->Cell(210,8,'FOR COLLEGE OF CRIMINOLOGY | VICE - GOVERNOR:',0,0,'C');
		$this->Ln(10);
		$this->Cell(12,8,'',0,0,'C');
		$this->Cell(47,8,'Lastname',1,0,'C');
		$this->Cell(47,8,'Firstname',1,0,'C');
		$this->Cell(50,8,'Department',1,0,'C');
		$this->Cell(47,8,'Position',1,0,'C');
		$this->Cell(40,8,'Partylist',1,0,'C');
		$this->Ln();
	}
	function viewTable22($db){
		$this->SetFont('Arial','',12);
		$link = mysqli_connect('localhost','root','','election');
		$sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department ='Criminology' ORDER BY can_partylist ASC");
		for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
			{
				$lastname = $num_rows['can_lastname'];;
				$firstname = $num_rows['can_firstname'];
                $department = $num_rows['can_department'];
                $position = $num_rows['can_position'];
                $partylist = $num_rows['can_partylist'];

                $this->Cell(12,8,'',0,0,'C');			
				$this->Cell(47,8,$lastname,1,0,'C');
				$this->Cell(47,8,$firstname,1,0,'C');
				$this->Cell(50,8,$department,1,0,'C');
				$this->Cell(47,8,$position,1,0,'C');
				$this->Cell(40,8,$partylist,1,0,'C');
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

$pdf->headerTable2();
$pdf->viewTable2($db);

$pdf->headerTable3();
$pdf->viewTable3($db);

$pdf->headerTable4();
$pdf->viewTable4($db);

$pdf->headerTable5();
$pdf->viewTable5($db);

$pdf->headerTable6();
$pdf->viewTable6($db);

$pdf->headerTable7();
$pdf->viewTable7($db);

$pdf->headerTable8();
$pdf->viewTable8($db);

$pdf->headerTable9();
$pdf->viewTable9($db);

$pdf->headerTable10();
$pdf->viewTable10($db);

$pdf->headerTable11();
$pdf->viewTable11($db);

$pdf->headerTable12();
$pdf->viewTable12($db);

$pdf->headerTable13();
$pdf->viewTable13($db);

$pdf->headerTable14();
$pdf->viewTable14($db);

$pdf->headerTable15();
$pdf->viewTable15($db);

$pdf->headerTable16();
$pdf->viewTable16($db);

$pdf->headerTable17();
$pdf->viewTable17($db);

$pdf->headerTable18();
$pdf->viewTable18($db);

$pdf->headerTable19();
$pdf->viewTable19($db);

$pdf->headerTable20();
$pdf->viewTable20($db);

$pdf->headerTable21();
$pdf->viewTable21($db);

$pdf->headerTable22();
$pdf->viewTable22($db);




date_default_timezone_set('Asia/Manila');
//$datekaron = date('l, F j, Y');
$pdf->Output('I','3rd Year | List of Final Voters.pdf','I');

?>