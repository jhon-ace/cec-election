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
if(isset($_POST['submit-new-student'])){
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
    <title>Admin - Dashboard</title>
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
                                <a href="../4thyear/students_4th_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>4th Year</a>
                            </li>                                                

                            <li class="divider"></li>
                        </ul>
                    </li>
                    <li>
                        <a href="candidates.php">
                            <i class="fa fa-users" style="color: white"></i>
                            <p style="color: white">Candidates</p>
                        </a>
                    </li>
                    <li class="active">
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
            </nav>            <div class="content">
                
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col">
                            <div class="card" style="margin-top: -60px ">
                                <div class="card-header" data-background-color="green">
                                    <form method="POST">
                                        <h3 class="title"><b>Initial Tally of Votes</b></h3>
                                    </form>

                                    <div class="col">
                                        
                                              
                                    </div>
                                </div>
                                <div class="card-content table-responsive">
                                   <br>
                                   <h4><text style="color:red">President</text>    | no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                   <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;1 &nbsp;&nbsp;|<b><text id="tayo_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->     
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;2 &nbsp;&nbsp;|<b><text id="mega_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 3 is ACT PARTYLIST     -->    
                                    <p style="color: black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;3 &nbsp;&nbsp;|<b><text id="act_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                <div class="col text-right">
                                    <h4><text style="color:red">President</text>    | no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                   <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;1 &nbsp;&nbsp;|<b><text id="tayo_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->     
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;2 &nbsp;&nbsp;|<b><text id="mega_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 3 is ACT PARTYLIST     -->    
                                    <p style="color: black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;3 &nbsp;&nbsp;|<b><text id="act_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                </div>
                                   


                               
                                   
                                </div>
                            </div>
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




        <!--    TAYO PRESIDENT  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_president").load('fetch_president_vote_TAYO.php')
          }, 200);
        });
    </script>


    <!--    MEGA PRESIDENT  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_president").load('fetch_president_vote_MEGA.php')
          }, 200);
        });
    </script>

        <!--    ACT PRESIDENT  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_president").load('fetch_president_vote_ACT.php')
          }, 200);
        });
    </script>

</html>