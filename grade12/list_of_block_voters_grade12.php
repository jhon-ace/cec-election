<?php include '../config.php'; ?>
<?php include '../logout.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Grade - 12 | Block Voters</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <!--     Fonts and icons     -->
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../assets/css/datatables.min.css" rel="stylesheet"> 
</head>

<body>
    <div class="wrapper" style="background-color: #54575F">
        <div class="sidebar">          
           <div class="sidebar-wrapper">
                 <ul class="nav">
                    <center>
                       <img src="../img/favicon.png" width="100px" height="100%" class="" alt="Ce-C Palaro 2019">
                    </center>
                    
                                        <li>
                        <a href="#pagepeople" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-user-circle" style="color: white;margin-top: -5px"></i> <span style="color:white">Students</span><b class="caret" style="margin-left: 5%;color:white"></b></a>
                        <ul class="nav collapse list-unstyled" id="pagepeople">
                            <li style="color:black"  class="active">
                                <a href="../grade11/students_grade11.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px;color: yellow;"></i>Grade 11</a>
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
                        <a href="../candidates.php">
                            <i class="fa fa-users" style="color: white"></i>
                            <p style="color: white">Candidates</p>
                        </a>
                    </li>
                    <li>
                        <a href="../initial_result.php">
                            <i class="fa fa-line-chart" style="color: white"></i>
                            <p style="color: white">Initial Result</p>
                        </a>
                    </li>
                    <li>
                        <a href="../final_result.php">
                            <i class="fa fa-area-chart" style="color: white"></i>
                            <p style="color: white">Final Result</p>
                        </a>
                    </li>
                    <li>
                        <a href="../my_account.php">
                            <i class="fa fa-cogs" style="color: white"></i>
                            <p style="color: white">Options</p>
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
                        <div class="col" style="margin-top: -80px">
                            <div class="card">
                                <div class="card-header" data-background-color="green">
                                    <form method="POST">
                                        <h3 class="title" style="font-family: Fjalla One"><b>List of Block Voters - Grade 12</b><a href="../grade12/list_of_block_voters_grade12.php" class = "btn btn-info text-info" type='button' style="float: right;margin-top: 17px;margin-left: 5px" ><i class="fa fa-refresh"></i></a><a href="../grade12/students_grade12.php" class = "btn btn-info text-info" type='button' style="float: right;margin-top: 17px;" ><i class="fa fa-arrow-left fa-10x"></i> Back</a></h3>
                                    </form>
                                    <div class="col">
                                        <p style="color: white;font-family: consolas">Total Number: <b><a href=""><text id="blockvotersgrade12" style="color:yellow;font-size: 20px">
                                                &nbsp;
                                              </text></a></b></p>    
                                    </div>
                                    <div class="col">
                                         <b><a href="../fpdf/blocklistpdf_studentsgrade12.php" target="_blank"><i class="fa fa-print"></i> <text  style="text-decoration: underline;">&nbsp;Print List</text></a></b>    
                                    </div>
                                </div>

                                <div class="card-content table-responsive">
                                    <table class="table table-condensed table-sm" id="dtTable">
                                        <thead style="font-weight: bold;color: black;font-size: 150%;font-family: Fjalla One">
                                            <th style='display:none;'>id </th>
                                            <th>SID <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Lastname <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Firstname <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Middlename <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Dept <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Year <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Status</th>
                                            <th>Code<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                        </thead>
                                        <tbody style="font-family: arial">
                <?php
                    
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM students where voting_status = 'unable to vote' AND stud_block_status = 'block' and stud_year = 'G - 12' ORDER BY stud_id DESC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $i_d = $num_rows['id'];
                            $stud_idd = $num_rows['stud_id'];
                            $stud_fname = $num_rows['stud_firstname'];
                            $stud_lname = $num_rows['stud_lastname'];
                            $middle_initial = $num_rows['stud_middlename'];
                            $dept = $num_rows['stud_department'];
                            $stud_year = $num_rows['stud_year'];
                            $code_no = $num_rows['code_to_vote'];
                            $v_status = $num_rows['voting_status'];
                            $block_status = $num_rows['stud_block_status'];

                            ?>
                          
                            <tr>
                                <td style='display:none;'><?=$i_d;?></td>
                                <td><?=$stud_idd;?></td>
                                <td ><?=$stud_lname;?></td>
                                <td><?=$stud_fname;?></td>
                                <td><?=$middle_initial;?></td>
                                <td><?=$dept;?></td>
                                <td><?=$stud_year;?></td>
                                <td>
                                    <?php 
                                        if($v_status == 'unable to vote')
                                        {
                                    ?>
                                        <span class="text-danger"><?=$v_status;?></span>

                                    <?php } ?>

                                </td>
                                <td><?=$code_no;?></td>
                                
                            </tr>
                      <?php  } ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


   <!--####################################  START LOG - OUT  #################################################################-->       
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

   <!--####################################  END LOG - OUT  #################################################################-->



<!--   Core JS Files   -->
<script src="../assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="../assets/js/material.min.js" type="text/javascript"></script>
<!--  Charts Plugin -->
<script src="../assets/js/chartist.min.js"></script>
<!--  Dynamic Elements plugin -->
<script src="../assets/js/arrive.min.js"></script>
<!--  PerfectScrollbar Library -->
<script src="../assets/js/perfect-scrollbar.jquery.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/bootstrap-notify.js"></script>
<!--  Google Maps Plugin    -->
<script type="../text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Material Dashboard javascript methods -->
<script src="../assets/js/material-dashboard.js?v=1.2.0"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/js/demo.js"></script>

    <script src="../js/sb-admin-datatables.min.js"></script>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/sb-admin.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="../js/sb-admin-datatables.min.js"></script>
    
        
      <!-- get total no of  block student - grade 11 students  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#blockvotersgrade12").load('getblockVotersgrade12.php')
          }, 200);
        });
    </script>

    <script>
      $(document).ready(function () {
      $('#dtTable').DataTable();
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