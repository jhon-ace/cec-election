<?php

include 'config.php';

if(isset($_POST['logout']))
{

	session_destroy();
	header('location:index.php');
	
}
if(empty($_SESSION['login_name']))
{
	header('location:index.php');
}
$user = $_SESSION['login_name'];

if(isset($_POST['login'])){
	

		$user = $_SESSION['login_name'];
		$code = $_POST['code'];

		// FOR GRADE 11 AND GRADE 12 ///
	$query_login_grade11 = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_year = 'G - 11'";
	$query_login_grade12 = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_year = 'G - 12'";

		$fetch_login_guery_grade11 = mysqli_query($link, $query_login_grade11) or die (mysqli_error());
		$fetch_login_guery_grade12 = mysqli_query($link, $query_login_grade12) or die (mysqli_error());

		$fetch_query_login_grade11 = mysqli_fetch_array($fetch_login_guery_grade11);
		$fetch_query_login_grade12 = mysqli_fetch_array($fetch_login_guery_grade12);



		// FOR COMPUTER STUDIES DEPARTMENT //
	$query_login_computer_studies = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSIT'";
	$fetch_login_guery_computer_studies = mysqli_query($link, $query_login_computer_studies) or die (mysqli_error());
	$fetch_query_login_computer_studies = mysqli_fetch_array($fetch_login_guery_computer_studies);


	// FOR MARINE TRANSPORTATION //
	$query_login_marine_transpo = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSMT'";
	$fetch_login_guery_marine_trans = mysqli_query($link, $query_login_marine_transpo) or die (mysqli_error());
	$fetch_query_login_BSMT_result = mysqli_fetch_array($fetch_login_guery_marine_trans);


// FOR MARINE ENGINEERING //
	$query_login_marine_engi = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSMARE'";
	$fetch_login_guery_marine_engin = mysqli_query($link, $query_login_marine_engi) or die (mysqli_error());
	$fetch_query_login_BSMARE_result = mysqli_fetch_array($fetch_login_guery_marine_engin);


// FOR BSHM AND BSTM //
	$query_login_BSHM = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSHM'";
	$fetch_login_guery_BSHM = mysqli_query($link, $query_login_BSHM) or die (mysqli_error());
	$fetch_query_login_BSHM_result = mysqli_fetch_array($fetch_login_guery_BSHM);

	$query_login_BSTM = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSTM'";
	$fetch_login_guery_BSTM = mysqli_query($link, $query_login_BSTM) or die (mysqli_error());
	$fetch_query_login_BSTM_result = mysqli_fetch_array($fetch_login_guery_BSTM);


	//BUSINESS ADMINISTRATION///
		$query_login_BSBA = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSBA'";
	$fetch_login_guery_BSBA = mysqli_query($link, $query_login_BSBA) or die (mysqli_error());
	$fetch_query_login_BSBA_result = mysqli_fetch_array($fetch_login_guery_BSBA);


	//     CRIMINOLOGY DEPARTMENT///
		$query_login_crim = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'BSCRIM'";
	$fetch_login_guery_crim = mysqli_query($link, $query_login_crim) or die (mysqli_error());
	$fetch_query_login_crim_result = mysqli_fetch_array($fetch_login_guery_crim);


	//     EDUCATION AND LIBERAL ARTS DEPARTMENT///
		$query_login_ela = "SELECT * from students where stud_id = '".$user."' AND code_to_vote = '".$code."' AND stud_department = 'ELA'";
	$fetch_login_guery_ela = mysqli_query($link, $query_login_ela) or die (mysqli_error());
	$fetch_query_login_ela_result = mysqli_fetch_array($fetch_login_guery_ela);



						if (is_array($fetch_query_login_grade11))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME Grade - 11 | ID User :  '.$user.'   ");';
							echo 'window.location.href="srhigh_dashboard.php"';
							echo '</script>';
						}

						else if(is_array($fetch_query_login_grade12))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME Grade - 12 | ID User :  '.$user.'   ");';
							echo 'window.location.href="srhigh_dashboard.php"';
							echo '</script>';
						}
						else if (is_array($fetch_query_login_computer_studies))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSIT | ID User :  '.$user.'   ");';
							echo 'window.location.href="computer_studies_dashboard.php"';
							echo '</script>';
						}
						else if(is_array($fetch_query_login_BSMT_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSMT | ID User :  '.$user.'   ");';
							echo 'window.location.href="marine_transportation_dashboard.php"';
							echo '</script>';
						}

						else if(is_array($fetch_query_login_BSMARE_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSMARE | ID User :  '.$user.'   ");';
							echo 'window.location.href="marine_engineering_dashboard.php"';
							echo '</script>';
						}
						else if(is_array($fetch_query_login_BSHM_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSHM | ID User :  '.$user.'   ");';
							echo 'window.location.href="hospitality_and_tourism_dashboard.php"';
							echo '</script>';
						}
						else if(is_array($fetch_query_login_BSTM_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSTM | ID User :  '.$user.'   ");';
							echo 'window.location.href="hospitality_and_tourism_dashboard.php"';
							echo '</script>';
						}
						else if(is_array($fetch_query_login_BSBA_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSBA | ID User :  '.$user.'   ");';
							echo 'window.location.href="business_administration_dashboard.php"';
							echo '</script>';
						}
						else if(is_array($fetch_query_login_crim_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME BSCRIM | ID User :  '.$user.'   ");';
							echo 'window.location.href="criminology_dashboard.php"';
							echo '</script>';
						}
						else if(is_array($fetch_query_login_ela_result))
						{
							$_SESSION['login_name'] = $user;
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n\n WELCOME ELA | ID User :  '.$user.'   ");';
							echo 'window.location.href="ela_dashboard.php"';
							echo '</script>';
						}
						else
						{
							echo '<script>';
							echo 'alert("ID number and Code do not Match!" ) ;';
							echo 'window.location.href = "login_verification.php";';
							echo '</script>';
						}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ID verification</title>
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="app.css" rel="stylesheet">
        <!--     Fonts and icons     -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
     <style type="text/css">
    	body{
			background: url("img/background.png") no-repeat center center fixed;
		    -webkit-background-size: cover;
		    -moz-background-size: cover;
		    -o-background-size: cover;
		    background-size: cover;

    	}
    </style>
</head>
<body class="bg-dark">
	<main>
		<div class="container">
			<div class="row my-4">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card bg-light my-4 card-signin">
						<div class="card-body" style="margin-top:-40px;">
							 <img src="img/logo.png" width="130px" height="150px" class="mx-auto d-block mt-4" alt="Ce-C Palaro 2019"><br>
							<figcaption class="figure-caption text-center mb-4" style="color:black;font-size:18px;font-family: 'Fjalla One', sans-serif;">SSC ELECTION 2020</figcaption>
							<form class="form-signin" method="POST">
								<div class="form-label-group">
									<label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;text-align: left">ID Number: <?php $user = $_SESSION['login_name'];  echo "<span style='color:red'>$user</span>" ?> <br><pre>Enter code to continue</pre></label>
									<i class="fas-fa-car"></i><input type="text" name="code" class="form-control text-center" id="inputEmail" required>
										
								</div>
								
								<button class="btn btn-primary btn-lg btn-block mb-4 mt-4" type="submit" name = "login" style="color:white;font-family: 'Fjalla One', cursive;">Verify ID</button>
                  				<hr class="my-4">
							</form>
						</div>
						<footer class="text-muted">
								      <div class="container text-center">
								            <p style="color:black">&copy; This e-voting system was made by Jhon Ace Casabuena and Computer Studies Department</p>
								      </div>
						</footer>
					</div>
				</div>
			</div>
		</div>
	</main>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>