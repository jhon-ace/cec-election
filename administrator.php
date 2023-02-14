<?php

include 'config.php';
if(isset($_POST['login'])){
	$user = $_POST['username'];
	$pass = sha1($_POST['password']);

	$query_admin = "SELECT * from login where login_username = '".$user."' AND login_password ='".$pass."' AND status = 'admin'";
	$query_employee ="SELECT * from login where login_username = '".$user."' AND login_password ='".$pass."' AND status = 'voters'";

		$fetch_admin = mysqli_query($link,$query_admin) or die (mysqli_error());
		$fetch_employee = mysqli_query($link,$query_employee) or die (mysqli_error());

					$fetch_admin_result = mysqli_fetch_array($fetch_admin);
					$fetch_employee_result = mysqli_fetch_array($fetch_employee);

						if (is_array($fetch_admin_result))
						{
							$_SESSION['login_name'] = $_POST['username'];
							$_SESSION['login_session'] = "ipasa";
							echo '<script type="text/javascript">';
							echo 'alert("Successful Login! \n WELCOME - '.$user.'   ");';
							echo 'window.location.href="grade11/students_grade11.php"';
							echo '</script>';
						}

						else
						{
							echo '<script>';
							echo 'alert("Error Credentials!" ) ;';
							echo 'window.location.href = "administrator.php";';
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

    <title>Home</title>
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
<body class="bg-dark">
	<main>
		<div class="container">
			<div class="row">
				<div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
					<div class="card bg-light my-4 card-signin">
						<div class="card-body">
							 <img src="img/logo.png" width="130px" height="150px" class="mx-auto d-block mt-4" alt="Ce-C Palaro 2019"><br>
							<figcaption class="figure-caption text-center mb-4" style="color:black;font-size:18px;font-family: 'Fjalla One', sans-serif;">SSC ELECTION 2020</figcaption>
							<form class="form-signin" method="POST">
								<div class="form-label-group">
									<i class="fas-fa-car"></i><input type="text" name="username" class="form-control" id="inputEmail">
										<label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Username</label>
								</div>
								<div class="form-label-group">
									<input type="password" name="password" class="form-control" id="inputPassword">
										<label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Password</label>
								</div>
								<button class="btn btn-primary btn-lg btn-block mb-4 mt-4" type="submit" name = "login" style="color:white;font-family: 'Fjalla One', cursive;">SIGN IN</button>
                  				<hr class="my-4">
							</form>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</main>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>