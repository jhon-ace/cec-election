<?php

include 'config.php';
if(isset($_POST['login'])){
	$user = $_POST['username'];
	//$pass = sha1($_POST['password']);

	//GRADE 11 AND 12 //
	$query_grade11 = "SELECT * from students where stud_id = '".$user."' and stud_year = 'G - 11' and logout_status = '0'" ;
	$query_grade12 = "SELECT * from students where stud_id = '".$user."' and stud_year = 'G - 12' and logout_status = '0'" ;
		$fetch_grade11 = mysqli_query($link,$query_grade11) or die (mysqli_error());
		$fetch_grade12 = mysqli_query($link,$query_grade12) or die (mysqli_error());
			$fetch_grade11_result = mysqli_fetch_array($fetch_grade11);
			$fetch_grade12_result = mysqli_fetch_array($fetch_grade12);

//block
	$query_grade11_logout = "SELECT * from students where stud_id = '".$user."' and stud_year = 'G - 11' and logout_status = '1'" ;
	$query_grade12_logout = "SELECT * from students where stud_id = '".$user."' and stud_year = 'G - 12' and logout_status = '1'" ;
		$fetch_grade11_logout = mysqli_query($link,$query_grade11_logout) or die (mysqli_error());
		$fetch_grade12_logout = mysqli_query($link,$query_grade12_logout) or die (mysqli_error());
			$fetch_grade11_result_logout = mysqli_fetch_array($fetch_grade11_logout);
			$fetch_grade12_result_logout = mysqli_fetch_array($fetch_grade12_logout);

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//COMPUTER STUDIES DEPARTMENT //
	$query_computer_studies = "SELECT * from students where stud_id = '".$user."' and stud_department = 'BSIT' and logout_status = '0'" ;
	$fetch_computer_studies = mysqli_query($link,$query_computer_studies) or die (mysqli_error());
	$fetch_computer_studies_result = mysqli_fetch_array($fetch_computer_studies);

	//block
	$query_computer_studies_logout = "SELECT * from students where stud_id = '".$user."' and stud_department = 'BSIT' and logout_status = '1'" ;

		$fetch_computer_studies_logout = mysqli_query($link,$query_computer_studies_logout) or die (mysqli_error());
		$fetch_computer_studies_result_logout = mysqli_fetch_array($fetch_computer_studies_logout);



//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//MARINE TRANSPORTATION PROGRAM //
	$query_marine_transportation = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSMT' and logout_status = '0'" ;
	$fetch_marine_transportation = mysqli_query($link,$query_marine_transportation) or die (mysqli_error());
	$fetch_marine_transportation_result = mysqli_fetch_array($fetch_marine_transportation);


	//blockkk
	$query_marine_transportation_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSMT' and logout_status = '1'" ;
	$fetch_marine_transportation_logout = mysqli_query($link,$query_marine_transportation_logout) or die (mysqli_error());
	$fetch_marine_transportation_result_logout = mysqli_fetch_array($fetch_marine_transportation_logout);



/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	//MARINE ENGINEERING PROGRAM //
	$query_marine_engineering = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSMARE' and logout_status = '0'" ;
	$fetch_marine_engineering = mysqli_query($link,$query_marine_engineering) or die (mysqli_error());
	$fetch_marine_engineering_result = mysqli_fetch_array($fetch_marine_engineering);

	//blockkkkk
	$query_marine_engineering_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSMARE' and logout_status = '1'" ;
	$fetch_marine_engineering_logout = mysqli_query($link,$query_marine_engineering_logout) or die (mysqli_error());
	$fetch_marine_engineering_result_logout = mysqli_fetch_array($fetch_marine_engineering_logout);


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


	//HOSPITALITY AND TOURISM MANAGEMENT//
	$query_HM = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSHM' and logout_status = '0'" ;
	$fetch_HM = mysqli_query($link,$query_HM) or die (mysqli_error());
	$fetch_HM_result = mysqli_fetch_array($fetch_HM);

	//blockkkkkkkkkk
	$query_HM_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSHM' and logout_status = '1'" ;
	$fetch_HM_logout = mysqli_query($link,$query_HM_logout) or die (mysqli_error());
	$fetch_HM_result_logout = mysqli_fetch_array($fetch_HM_logout);


	$query_TM = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSTM' and logout_status = '0'" ;
	$fetch_TM = mysqli_query($link,$query_TM) or die (mysqli_error());
	$fetch_TM_result = mysqli_fetch_array($fetch_TM);
	//
	//blockkkkkkkkkkk
	$query_TM_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSTM' and logout_status = '1'" ;
	$fetch_TM_logout = mysqli_query($link,$query_TM_logout) or die (mysqli_error());
	$fetch_TM_result_logout = mysqli_fetch_array($fetch_TM_logout);


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	//BUSINESS ADMINISTRATION//
	$query_bsba = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSBA' and logout_status = '0'" ;
	$fetch_bsba = mysqli_query($link,$query_bsba) or die (mysqli_error());
	$fetch_bsba_result = mysqli_fetch_array($fetch_bsba);

	////blockkkkkkkkkkkkkkkkkkkkkkkkkk

	$query_bsba_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSBA' and logout_status = '1'" ;
	$fetch_bsba_logout = mysqli_query($link,$query_bsba_logout) or die (mysqli_error());
	$fetch_bsba_result_logout = mysqli_fetch_array($fetch_bsba_logout);
	

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////



	// CRIMINOLOGY //
	$query_crim = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSCRIM' and logout_status = '0'" ;
	$fetch_crim = mysqli_query($link,$query_crim) or die (mysqli_error());
	$fetch_crim_result = mysqli_fetch_array($fetch_crim);

	////blockkkkkkkkkkkk
	$query_crim_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'BSCRIM' and logout_status = '1'" ;
	$fetch_crim_logout = mysqli_query($link,$query_crim_logout) or die (mysqli_error());
	$fetch_crim_result_logout = mysqli_fetch_array($fetch_crim_logout);

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		// EDUCATION AND LIBERAL ARTS //
	$query_ela = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'ELA' AND logout_status = '0'" ;
	$fetch_ela = mysqli_query($link,$query_ela) or die (mysqli_error());
	$fetch_ela_result = mysqli_fetch_array($fetch_ela);

	//LOGOUT BLOCK //
	$query_ela_logout = "SELECT * from students where stud_id = '".$user."' AND stud_department = 'ELA' AND logout_status = '1'" ;
	$fetch_ela_logout = mysqli_query($link,$query_ela_logout) or die (mysqli_error());
	$fetch_ela_result_logout = mysqli_fetch_array($fetch_ela_logout);
	
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

						if (is_array($fetch_grade11_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME Grade 11 | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}

						else if (is_array($fetch_grade12_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME Grade 12 | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						} 
						else if (is_array($fetch_computer_studies_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSIT | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_marine_transportation_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSMT | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_marine_engineering_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSMAR-E | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_HM_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSHM | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_TM_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSTM | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_bsba_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSBA | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_crim_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME BSCRIM | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_ela_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME \nEDUCATION AND LIBERAL ARTS DEPARTMENT\nID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}

						else if (is_array($fetch_ela_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}

						else if (is_array($fetch_grade11_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}
						else if (is_array($fetch_grade12_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}
						else if (is_array($fetch_computer_studies_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}
						
						else if (is_array($fetch_marine_transportation_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}

						else if (is_array($fetch_marine_engineering_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}
						

						else if (is_array($fetch_HM_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}

						else if (is_array($fetch_TM_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}
						
						else if (is_array($fetch_bsba_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}
						else if (is_array($fetch_crim_result_logout))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("You already finished voting! ");';
							echo 'window.location.href="index.php"';
							echo '</script>';
						}

						else
						{
							echo '<script>';
							echo 'alert("\n    Wrong ID input!" ) ;';
							echo 'window.location.href = "index.php";';
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

    <title>Student Portal | Election 2020</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">
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
<body>
	<main>
		<div class="container">
			<div class="row my-4">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card bg-light my-4 card-signin" style="">
						<div class="card-body"  style="margin-top:-40px;">
							 <img src="img/logo.png" width="130px" height="150px" class="mx-auto d-block mt-4" alt="Ce-C Palaro 2019"><br>
							<figcaption class="figure-caption text-center mb-4" style="color:black;font-size:18px;font-family: 'Fjalla One', sans-serif;">CSG ELECTION 2020</figcaption>
							<form class="form-signin" method="POST">
								<div class="form-label-group">
									<label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;text-align: left">Enter ID Number <br><pre>Note: include dash (-) if present</pre></label>
									<i class="fas-fa-car"></i><input type="text" name="username" class="form-control text-center" id="inputEmail" required>
										
								</div>
								
								<button class="btn btn-primary btn-lg btn-block mb-4 mt-4" type="submit" name = "login" style="color:white;font-family: 'Fjalla One', cursive;">LOG IN</button>
                  				<hr class="my-1">
                  				 
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