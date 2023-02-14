<?php
include'config.php';
if(isset($_POST['logout']))
{
    session_destroy();
    header('location:index.php');
    
}
if(empty($_SESSION['login_name']))
{
    header('location:index.php');
}
if(isset($_POST[''])){
    $student_id = $_POST['stud_id'];
    $sfname = $_POST['stud_firstname'];
    $slname = $_POST['stud_lastname'];
    $syear = "3rd Year";
    $v_status = "ready to vote";
    $stud_status = 0;

    $sql = "INSERT into students(id,stud_id,stud_firstname,stud_lastname,stud_year,stud_status,voting_status) VALUES('','$student_id','$sfname','$slname','$syear','$stud_status','$v_status')";
    mysqli_query($link, $sql) or die (mysqli_error());

            $message = "3rd Year Student Successfully Added!";
                    echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_3rd_year.php')</script>";  

$id = $_GET['stud_id'];
$res1 = "SELECT * FROM students WHERE stud_id = '$id'";
$result1 = mysqli_query($link, $res1) or die(mysql_error());
    for($i=0; $i<$num_rows=mysqli_fetch_array($result1);$i++) 
    {
    $ssid = $_POST['stud_id'];
    $ssfname = $_POST['stud_firstname'];
    $sslname = $_POST['stud_lastname'];
    $ssyear = $_POST['stud_year'];
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Candidates</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/stylescroll.css">
</head>

<body>
    <div class="wrapper" style="background-color: #54575F">
        <div class="sidebar" data-color="green" data-image="assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="green | blue | green | orange | green"

        Tip 2: you can also add an image using data-image tag
    -->
           
           <div class="sidebar-wrapper">

                 <ul class="nav">
                    <center>
                       <img src="img/favicon.png" width="100px" height="100%" class="" alt="Ce-C Palaro 2019">
                    </center>
                    
                    <li>
                        <a href="#pagepeople" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-circle" style="color: white;margin-top: -5px"></i> <span style="color:white">Students</span><b class="caret" style="margin-left: 5%;color:white"></b></a>
                        <ul class="nav collapse list-unstyled" id="pagepeople">
                            <li style="color:black">
                                <a href="../grade11/students_grade11.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>Grade 11</a>
                            </li>
                            <li>
                                <a href="../grade12/students_grade12.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>Grade 12</a>
                            </li>
                            <li>
                                <a href="../1styear/students_1st_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>1st Year</a>
                            </li>
                            <li>
                                <a href="../2ndyear/students_2nd_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>2nd Year</a>
                            </li>
                            <li>
                                <a href="../3rdyear/students_3rd_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>3rd Year</a>
                            </li>
                            <li>
                                <a href="4thyear/students_4th_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>4th Year</a>
                            </li>                                                

                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li  class="active">
                        <a href="candidates.php">
                            <i class="fa fa-users" style="color: white"></i>
                            <p style="color: white">Candidates</p>
                        </a>
                    </li>
                    <li>
                        <a href="initial_result.php">
                            <i class="fa fa-line-chart" style="color: white"></i>
                            <p style="color: white">Initial Result</p>
                        </a>
                    </li>
                    <li>
                        <a href="final_result.php">
                            <i class="fa fa-area-chart" style="color: white"></i>
                            <p style="color: white">Final Result</p>
                        </a>
                    </li>
                    <li>
                        <a href="my_account.php">
                            <i class="fa fa-user-circle-o" style="color: white"></i>
                            <p style="color: white">My Account</p>
                        </a>
                    </li>
                     <li>
                        <br>
                        <br>
                        <form method="post">
                                    <button class = "btn btn-danger" type='button' data-toggle="modal" data-target="#exampleModal20000" style="margin-left: 70px">Logout</button>
                                </form>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                       
                    </div>
                    <div class="collapse navbar-collapse">
            
                       
                       
                    </div>
                </div>
            </nav>
            
            <div class="content">
                
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col"  style="margin-top: -80px">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <form method="POST">
                                        <h2 class="title"><b>Candidates List</b><a href="candidates.php"><button class = "btn btn-info" type='button' style="float: right;margin-right: 5px"><i class="fa fa-refresh"></i></button></a></h2>
                                    </form>
                                    <div class="col">
                                         <b><a href="fpdf/candidates_list_PDF.php" target="_blank"><i class="fa fa-print"></i> <text  style="text-decoration: underline;">&nbsp;Print List</text></a></b>    
                                    </div>
                                </div>

<!--  FOR PRESIDENT DISPLAY TABLE  -->

                                <div class="card-content table-responsive">
                                         <h5>Candidate For PRESIDENT: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'President' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if($can_positionn == 'President')
                                            {
                                    ?>
                                           <span style="color:red"><?=$can_positionn;?></span>
                                      <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                                </div>

<!--  FOR PRESIDENT DISPLAY TABLE  END -->


<!--  FOR VICE - PRESIDENT DISPLAY TABLE  -->

                            <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For VICE - PRESIDENT: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable2">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice-President' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if($can_positionn == 'Vice-President')
                                            {
                                    ?>
                                           <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR VICE - PRESIDENT DISPLAY TABLE END -->


<!--  FOR SECRETARY DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For SECRETARY: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable3">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Secretary' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                         if ($can_positionn == 'Secretary')
                                            {
                                    ?>
                                             <span style="color:blue"><?=$can_positionn;?></span>
                                    
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR SECRETARY DISPLAY TABLE END -->


<!--  FOR TREASURER DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For TREASURER: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable4">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Treasurer' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Treasurer')
                                            {
                                    ?>
                                             <span style="color:orange"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR TREASURER DISPLAY TABLE END -->

<!--  FOR AUDITOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For AUDITOR: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable5">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Auditor' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Auditor')
                                            {
                                    ?>
                                             <span style="color:brown"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR AUDITOR DISPLAY TABLE END -->


<!--  FOR SENATOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For SENATOR: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable6">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Senator' ORDER BY can_partylist,can_lastname asc");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Senator')
                                            {
                                    ?>
                                             <span style="color:black"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR SENATOR DISPLAY TABLE END -->


<!--  FOR g - 12 GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For GOVERNOR | GRADE 12: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable7">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor - 12' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor - 12')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR G-12 GOVERNOR DISPLAY TABLE END -->


<!--  FOR G - 12 VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For VICE - GOVERNOR | GRADE 12: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable8">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice-Governor - 12' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice-Governor - 12')
                                            {
                                    ?>
                                             <span style="color:blue"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR G-12 VICE - GOVERNOR DISPLAY TABLE END -->

<!--  FOR COMPUTER STUDIES DEPT. GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | College of Computer Studies: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable9">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Computer Studies' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:red"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR Computer studies GOVERNOR DISPLAY TABLE END -->



<!--  FOR COMPUTER STUDIES DEPT. VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Vice - Governor | College of Computer Studies: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable10">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Computer Studies' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:orange"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR Computer studies VICE - GOVERNOR DISPLAY TABLE END -->



<!--  FOR College of education and liberal arts GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | College of Education and Liberal Arts: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable11">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Education and Liberal Arts' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of Education and Liberal Arts - GOVERNOR DISPLAY TABLE END -->



<!--  FOR College of education and liberal arts VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Vice - Governor | College of Education and Liberal Arts: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable12">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Education and Liberal Arts' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of Education and Liberal Arts VICE - GOVERNOR DISPLAY TABLE END -->


<!--  FOR College of MARINE TRANSPORTATION PROGRAM GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | Marine Transportation Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable13">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Marine Transportation' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of MARINE TRANSPORTATION PROGRAM - GOVERNOR DISPLAY TABLE END -->



<!--  FOR College of MARINE TRANSPORTATION PROGRAM VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Vice - Governor | Marine Transportation Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable14">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Marine Transportation' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of MARINE TRANSPORTATION PROGRAM -VICE - GOVERNOR DISPLAY TABLE END -->




<!--  FOR College of MARINE ENGINEERING - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | Marine Engineering Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable15">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Marine Engineering' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of MARINE ENGINEERING PROGRAM - GOVERNOR DISPLAY TABLE END -->




<!--  FOR College of MARINE ENGINEERING | VICE -GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For vice - Governor | Marine Engineering Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable16">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Marine Engineering' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of MARINE ENGINEERING PROGRAM - VICE - GOVERNOR DISPLAY TABLE END -->





<!--  FOR College of Hospitality and Tourism Management Program | GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | Hospitality and Tourism Management Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable17">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Hospitality and Tourism' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of Hospitality and Tourism Program |  GOVERNOR DISPLAY TABLE END -->


<!--  FOR College of Hospitality and Tourism Management Program | VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Vice - Governor | Hospitality and Tourism Management Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable18">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Hospitality and Tourism' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of Hospitality and Tourism PROGRAM | VICE - GOVERNOR DISPLAY TABLE END -->






<!--  FOR College of Business Administration Program | GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | Business Administration Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable19">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Business Administration' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of Business Administration Program |  GOVERNOR DISPLAY TABLE END -->


<!--  FOR College of Business Administration Program | VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Vice - Governor | Business Administration Program: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable20">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Business Administration' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of BUSINESS ADMINISTRATION PROGRAM | VICE - GOVERNOR DISPLAY TABLE END -->





<!--  FOR College of CRIMINOLOGY | GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Governor | Criminology Department: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable21">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Governor' AND can_department = 'Criminology' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of CRIMINOLOGY DEPT. |  GOVERNOR DISPLAY TABLE END -->


<!--  FOR College of CRIMINOLOGY | VICE - GOVERNOR DISPLAY TABLE  -->

                        <div class="card" style="margin-top: -5px">
                               <div class="card-content table-responsive">
                                         <h5>Candidate For Vice - Governor | Criminology Department: &nbsp;&nbsp;<i class="fa fa-arrow-down"></i><button  class="btn btn-info" style="float: right;margin-right: 10px;margin-top: -8px" data-toggle="modal" data-target="#exampleModal1990"><i class="fa fa-user-plus"></i></button></h5>
                                         <br>
                                    <table class="table" id="dtTable22">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style="display: none">ID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Position</th>
                                            <th>Partylist</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Criminology' ORDER BY can_partylist,can_lastname ASC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $id = $num_rows['can_id'];
                            $can_lastnamee = $num_rows['can_lastname'];
                            $can_firstnamee = $num_rows['can_firstname'];
                            $can_positionn = $num_rows['can_position'];
                            $can_partylistt = $num_rows['can_partylist'];
                            
                        ?>
                            <tr>
                                <td style='display:none'><?=$id;?></td>
                                <td><?=$can_lastnamee;?></td>
                                <td><?=$can_firstnamee;?></td>
                                <td><?php   
                                        if ($can_positionn == 'Vice - Governor')
                                            {
                                    ?>
                                             <span style="color:green"><?=$can_positionn;?></span>
                                    <?php } ?>
                                </td>
                                <td><?=$can_partylistt;?></td>
                                <td><button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>

                        <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>

<!--  FOR College of CRIMINOLOGY DEPT. | VICE - GOVERNOR DISPLAY TABLE END -->






                        </div>
                            
                    </div>
                   
                </div>
            </div>
           
        </div>

    </div>
     

 
</body>
    <form method="post">
        <div class="modal fade" id="exampleModal20000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"      aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class = "btn btn-danger" name="logout">Logout</button>
                        </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post">
        <div class="modal fade" id="exampleModal1990" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Student</h5>
                        <button class="btn btn-secondary float-right" data-dismiss="modal" style="float: right;margin-top: -30px">Cancel</button>
                    </div>
                     <div class="modal-body">
                         <form class="form-signin" method="POST">
                                <div class="form-label-group">
                                    <input type="text" name="stud_id" class="form-control col-sm-10" id="inputEmail"  required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_firstname" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Firstname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_lastname" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Lastname</label>
                                </div>
                                 <div class="form-label-group">
                                        <select class="form-control text-danger" id="disabledSelect" name="stud_year" disabled="">
                                            <option value="Grade - 11">GRADE - 11</option>
                                            <option value="Grade - 12">GRADE - 12</option>
                                            <option value="1st Year">1st Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="3rd Year" selected="">3rd Year</option>
                                            <option value="4th Year">4th Year</option>
                                        </select>
                                        <label for="disabledSelect" style="color: black">Student Year</label>
                                    </div>

                                <button class="btn btn-success btn-lg btn-block mb-4 mt-4" type="submit" name = "submit-new-student" style="color:white;font-family: 'Fjalla One', cursive;font-size: 20px">Add Student</button>
                            </form>
                     </div>
                        <div class="modal-footer">
                           
                        </div>
                </div>
            </div>
        </div>
    </form>

    <form method="post">
        <div class="modal fade" id="exampleModal3000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                        <button class="btn btn-secondary float-right" data-dismiss="modal" style="float: right;margin-top: -30px">Cancel</button>
                    </div>
                     <div class="modal-body">
                         <form class="form-signin" method="POST">
                                <div class="form-label-group">
                                    <input type="text" name="stud_id" class="form-control col-sm-10" id="inputEmail"  required value="<?= $ssid; ?>">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_firstname" class="form-control" id="inputPassword" required value="<?= $ssfname; ?>">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Firstname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_lastname" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Lastname</label>
                                </div>
                                 <div class="form-label-group">
                                    <input type="text" name="stud_year" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;margin-top: 10px;">Student Year</label>
                                </div>

                                <button class="btn btn-success btn-lg btn-block mb-4 mt-4" type="submit" name = "submit-new-student" style="color:white;font-family: 'Fjalla One', cursive;font-size: 20px">Update Student</button>
                            </form>
                     </div>
                        <div class="modal-footer">
                           
                        </div>
                </div>
            </div>
        </div>
    </form>


           
          </div>
        </div>
      </div>
    </div>
    
      <script src="assets/js/main.js" type="text/javascript"></script>
    <script src="assets/js/util.js" type="text/javascript"></script>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
    
<script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
   
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
   
  
    
    <script src="js/sb-admin.min.js"></script>
    
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>




 <script>
      $(document).ready(function () {
      $('#dtTable').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
    <script>
      $(document).ready(function () {
      $('#dtTable2').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>

     <script>
      $(document).ready(function () {
      $('#dtTable3').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
    <script>
      $(document).ready(function () {
      $('#dtTable4').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable5').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
    <script>
      $(document).ready(function () {
      $('#dtTable6').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        <script>
      $(document).ready(function () {
      $('#dtTable7').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        <script>
      $(document).ready(function () {
      $('#dtTable8').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        <script>
      $(document).ready(function () {
      $('#dtTable9').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        <script>
      $(document).ready(function () {
      $('#dtTable10').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        </script>
        <script>
      $(document).ready(function () {
      $('#dtTable11').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        </script>
        <script>
      $(document).ready(function () {
      $('#dtTable12').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        </script>
        <script>
      $(document).ready(function () {
      $('#dtTable13').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        </script>
        <script>
      $(document).ready(function () {
      $('#dtTable14').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
        </script>
        <script>
      $(document).ready(function () {
      $('#dtTable15').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable16').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable17').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable18').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable19').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable20').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>

 <script>
      $(document).ready(function () {
      $('#dtTable21').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
     <script>
      $(document).ready(function () {
      $('#dtTable22').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>

    <script>
      $(document).ready(function () {
      $('#dtStock').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>
    <script>
      $(document).ready(function () {
      $('#dtPrice').DataTable();
      $('.dataTables_length').addClass('bs-select');
    });
    </script>

    <script>  
         $(document).ready(function(){  
              $('#employee_data').DataTable();  
         });  
    </script>
</html>