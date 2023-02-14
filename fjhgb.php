<?php

include 'config.php';
if(isset($_POST['login'])){
	$user = $_POST['username'];
	//$pass = sha1($_POST['password']);

	$query_grade11 = "SELECT * from students where stud_id = '".$user."' and stud_year = 'G - 11'" ;
	$query_grade12 = "SELECT * from students where stud_id = '".$user."' and stud_year = 'G - 12'" ;
	$query_1st_year = "SELECT * from students where stud_id = '".$user."' and stud_year = '1st Year'" ;
	$query_2nd_year = "SELECT * from students where stud_id = '".$user."' and stud_year = '2nd Year'" ;
	$query_3rd_year = "SELECT * from students where stud_id = '".$user."' and stud_year = '3rd Year'" ;
	$query_4th_year = "SELECT * from students where stud_id = '".$user."' and stud_year = '4th Year'" ;

		$fetch_grade11 = mysqli_query($link,$query_grade11) or die (mysqli_error());
		$fetch_grade12 = mysqli_query($link,$query_grade12) or die (mysqli_error());
		$fetch_1styear = mysqli_query($link,$query_1st_year) or die (mysqli_error());
		$fetch_2ndyear = mysqli_query($link,$query_2nd_year) or die (mysqli_error());
		$fetch_3rdyear = mysqli_query($link,$query_3rd_year) or die (mysqli_error());
		$fetch_4thyear = mysqli_query($link,$query_4th_year) or die (mysqli_error());

					$fetch_grade11_result = mysqli_fetch_array($fetch_grade11);
					$fetch_grade12_result = mysqli_fetch_array($fetch_grade12);
					$fetch_1styear_result = mysqli_fetch_array($fetch_1styear);
					$fetch_2ndyear_result = mysqli_fetch_array($fetch_2ndyear);
					$fetch_3rdyear_result = mysqli_fetch_array($fetch_3rdyear);
					$fetch_4thyear_result = mysqli_fetch_array($fetch_4thyear);

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
						else if (is_array($fetch_1styear_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME 1st Year | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}

						else if (is_array($fetch_2ndyear_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME 2nd Year | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else if (is_array($fetch_3rdyear_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME 3rd Year | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}

						else if (is_array($fetch_4thyear_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("WELCOME 4th Year | ID User :  '.$user.' \n\n  Click OK to Continue!  ");';
							echo 'window.location.href="login_verification.php"';
							echo '</script>';
						}
						else
						{
							echo '<script>';
							echo 'alert("\n    Wrong ID input!" ) ;';
							echo 'window.location.href = "student-portal.php";';
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
								            <p style="color:black">&copy; This system was made by Jhon Ace Casabuena and Computer Studies Department</p>
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