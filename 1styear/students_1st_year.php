<?php include '../config.php'; ?>
<?php include '../logout.php'; ?>
<?php
    $db = mysqli_connect('localhost', 'root', '19976112', 'election');
    if(isset($_POST['submit-new-student-1st-year']))
    {

                $st_id = $_POST['add_student_id'];
                $sfname = $_POST['stud_firstname'];
                $slname = $_POST['stud_lastname'];
                $smiddlename = $_POST['stud_middlename_IF'];
                $scode = $_POST['stud_voting_code#'];
                $sdept = $_POST['stud_department'];
                $syear = "1st Year";
                $v_status = "ready to vote";
                $stud_status = 0; 
                $stud_blocked_status = 'unblock';  


        $sql_u = "SELECT * FROM students WHERE stud_id='$st_id'";
            $res_u = mysqli_query($db, $sql_u);

                if (mysqli_num_rows($res_u) > 0) 
                {
                    $message = "Student ID Exist";
                        echo "<script type='text/javascript'>alert('$message');
                         window.location.assign('students_1st_year.php')</script>"; 
                }
                else
                {
                    $sql = "INSERT into students(id,stud_id,stud_lastname,stud_firstname,stud_middlename,stud_department,stud_year,code_to_vote,stud_status,voting_status,stud_block_status) VALUES('','$st_id','$slname','$sfname','$smiddlename','$sdept','$syear','$scode','$stud_status','$v_status','$stud_blocked_status')";
                            mysqli_query($db, $sql) ;

                            $message = "1st Year Student Successfully Added!";
                            echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_1st_year.php')</script>";
                }
    }
    
    if(isset($_POST['update-student']))
    {
                $id_iTF = $_POST['idIF'];
                $update_id = $_POST['update_stud_id'];
                $update_fname = $_POST['update_stud_firstname'];
                $update_lname = $_POST['update_stud_lastname'];
                $update_smiddlename = $_POST['update_stud_middlename'];
                $update_department = $_POST['update_stud_department'];
                $update_syear = $_POST['update_stud_year'];
                $voting_code = $_POST['update_voting_code#'];
                $update_v_status = "ready to vote";
                $update_stud_status = 0;  
                $stud_blockedd_status = 'unblock';

                      $sql = "UPDATE students SET stud_id = '$update_id', stud_lastname = '$update_lname', stud_firstname = '$update_fname', stud_middlename = '$update_smiddlename', stud_department = '$update_department', stud_year = '$update_syear',code_to_vote = '$voting_code' , stud_status = '$update_stud_status', voting_status = '$update_v_status', stud_block_status = '$stud_blockedd_status' WHERE id  = '$id_iTF' ";
                mysqli_query($link, $sql) or die(mysqli_error());

                $message = "Student updated successfully!";
                echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_1st_year.php')</script>";
    }


    if(isset($_POST['student-block']))
    {
                $block_data_var = $_POST['block_data'];
               $student_block = "UPDATE students SET stud_block_status = 'block' WHERE id  = '$block_data_var' ";
               $student_blocked_status ="UPDATE students SET voting_status = 'unable to vote' where id = '$block_data_var'";

                    mysqli_query($link, $student_block) or die (mysqli_error());
                    mysqli_query($link, $student_blocked_status) or die (mysqli_error());    
                        $message = "Student succesfully blocked!";
                        echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_1st_year.php')</script>";
    }
    else if (isset($_POST['student-unblock']))
    {
                $unblock_data_var = $_POST['unblock_data'];
               $student_unblock = "UPDATE students SET stud_block_status = 'unblock' WHERE id  = '$unblock_data_var' ";
                $student_unblocked_status ="UPDATE students SET voting_status = 'ready to vote' where id = '$unblock_data_var'";
                    mysqli_query($link, $student_unblock) or die (mysqli_error());
                    mysqli_query($link, $student_unblocked_status) or die (mysqli_error());      
                        $message = "Student succesfully unblocked!";
                        echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_1st_year.php')</script>";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="../img/favicon.png" type="image/x-icon">
    <link rel="icon" href="../img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>1st Year Students</title>
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
                            <li style="color:black">
                                <a href="../grade11/students_grade11.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>Grade 11</a>
                            </li>
                            <li>
                                <a href="../grade12/students_grade12.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>Grade 12</a>
                            </li>
                            <li>
                                <a href="students_1st_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px;color: yellow;"></i>1st Year</a>
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
                                        <h3 class="title" style="font-family: Fjalla One"><b>1st Year Students</b><button class = "btn btn-info text-info" type='button' data-toggle="modal" data-target="#1styear-add-student" style="float: right;margin-left: 5px;margin-top: 17px;" ><i class="fa fa-user-plus fa-10x"></i></button><a href="students_1st_year.php" class = "btn btn-info text-info" type='button' style="float: right;margin-top: 17px;" ><i class="fa fa-refresh fa-10x"></i></a></h3>
                                    </form>
                                    <div class="col">
                                        <p style="color: white;font-family: consolas">Total No: <b><a href="list_of_total_voters_1styear.php"><text id="total1styear" style="color:yellow;font-size: 20px">
                                                &nbsp;
                                              </text></a></b></p>
                                              
                                    </div>
                                    <div class="col">
                                        <p style="color: white;font-family: consolas">Total number of Successful Voters: <b><a href="list_of_finish_voters_1styear.php"><text id="successfulVoters1styear" style="color:yellow;font-size: 20px">
                                                &nbsp;
                                              </text></a></b></p>
                                              
                                    </div>
                                    <div class="col">
                                        <p style="color: white;font-family: consolas">Remaining number of voters: <b><a href="list_of_remaining_voters_1styear.php"><text id="remainingVoters1styear" style="color:yellow;font-size: 20px">
                                                &nbsp;
                                              </text></a></b></p>
                                              
                                    </div>

                                    <div class="col">
                                        <p style="color: white;font-family: consolas">Block voters: <b><a href="list_of_block_voters_1styear.php"><text id="blockvoters1styear" style="color:yellow;font-size: 20px">
                                                &nbsp;
                                              </text></a></b></p>
                                              
                                    </div>
                                </div>

                                <div class="card-content table-responsive">
                                    <table class="table table-condensed table-sm" id="dtTable">
                                        <thead style="font-weight: bold;color: black;font-size: 150%;font-family: Fjalla One">
                                            <th style='display:none;'>id </th>
                                            <th>SID<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Lname<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Fname<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Mname<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Dept<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Year<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Status <i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th>Code<i class="fa fa-arrow-up" style="font-size: 15px;color: #5E5E5E"><i class="fa fa-arrow-down"></i></i></th>
                                            <th><p style="margin-left: 2px">Action</p></th> 
                                            <th style='display:none;'>Block Status</th>
                                        </thead>
                                        <tbody style="font-family: arial">
                <?php
               
                        $link = mysqli_connect("localhost","root","19976112","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM students where stud_year = '1st Year' ORDER BY stud_department,stud_lastname ASC");
                    
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
                                        if($v_status == 'ready to vote')
                                         {
                                    ?>
                                        <span class="text-success"><?=$v_status;?></span>

                                    <?php }
                                          else if ($v_status == 'finished voting') 
                                          { 
                                    ?>
                                        <span class="text-danger"><?=$v_status;?></span>

                                    <?php } 
                                          else if ($v_status == 'unable to vote')
                                          {
                                    ?>
                                        <span class="text-primary"><?=$v_status;?></span>
                                       <?php } ?>

                                </td>
                                <td><?=$code_no;?></td>
                                <td style='display:none'><?=$block_status;?></td>
                

                                <td>
                                    <?php 
                                          if ($v_status == 'finished voting') 
                                          { 
                                    ?>
                                        <button type='button' class='btn-danger editbtn' data-toggle='modal' data-target='' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>

                                    <?php } else if (($v_status == 'ready to vote') && ($block_status == 'unblock'))
                                            {
                                    ?>
                                        <button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#update_student_grade11' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>


                                    <?php }  else if (($v_status == 'unable to vote') && ($block_status == 'block'))
                                            {
                                    ?>
                                        <button type='button' class='btn-danger editbtn' data-toggle='modal' data-target='' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>

                                    <?php } ?>



                                    <?php   
                                        if($block_status == 'block')
                                            {
                                    ?>
                                            <button type='button' class='btn-danger unblockbtn' data-toggle='modal' data-target='#unblockStudent' style='cursor:pointer;color:black;border-radius:6px;'><i class='fa fa-ban' style='color:white;'></i></button>
                                                
                                    <?php 
                                            }
                                            else if($block_status=='unblock')
                                            {
                                    ?>
                                            <button type='button' class='btn-success blockbtn' data-toggle='modal' data-target='#blockStudent' style='cursor:pointer;color:black;border-radius:6px;'><i class='fa fa-circle-o-notch' style="color: white"></i></button>
                                    <?php   
                                            } 
                                            else if ($block_status == 'none')
                                            {
                                    ?>
                                             <button type='button' class='btn-success disabled' data-toggle='modal' style='cursor:pointer;color:black;border-radius:6px;'><i class='fa fa-check' style="color: white"></i ></button>

                                      <?php } ?>   


                                          
                                    
                                </td>
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


   <!--####################################    ADD STUDENT  #################################################################-->
    <form method="post">
        <div class="modal fade" id="1styear-add-student" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true" style="margin-top: -70px">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add 1ST YEAR Student</h5>
                        <button class="btn btn-secondary float-right" data-dismiss="modal" style="float: right;margin-top: -30px">Cancel</button>
                    </div>
                     <div class="modal-body">
                        <p class="sub-text" style="margin-top: -20px"><text class="text-danger">Note: Make sure to review all fields.</text></p>
                         <form class="form-signin" method="POST">
                                <div class="form-label-group">
                                    
                                      <input type="text" name="add_student_id" class="form-control" id="inputPassword" required placeholder="e.g: 2018-10-138">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" name="stud_lastname" class="form-control" id="inputPassword" required placeholder="e.g: Casabuena">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Lastname</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" name="stud_firstname" class="form-control" id="inputPassword" required placeholder="e.g: Jhon Ace">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Firstname</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" name="stud_middlename_IF" class="form-control" id="inputPassword" required placeholder="e.g: Vallejos">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Middlename</label>
                                </div>

                                 <div class="form-label-group">
                                        <select class="form-control" name="stud_department"
                                        >
                                            <option value="1st Year">BSIT</option>
                                            <option value="2nd Year">Mar-E</option>
                                            <option value="3rd Year">MT</option>
                                            <option value="4th Year">Education</option>
                                            <option value="4th Year">Crim</option>
                                            <option value="4th Year">HM/TM</option>
                                            <option value="4th Year">BA</option>
                                        </select>   
                                    <label for="disabledSelect" style="color: black">Student Department</label>
                                </div>

                                <div class="form-label-group">
                                        <select class="form-control text-danger" id="disabledSelect" name="s" disabled="">
                                            <option value="Grade - 11">GRADE - 11</option>
                                            <option value="Grade - 12">Grade - 12</option>
                                            <option value="1st Year" selected="">1st Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="3rd Year">3rd Year</option>
                                            <option value="4th Year">4th Year</option>
                                        </select>
                                    <label for="disabledSelect" style="color: black">Student Year</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" name="stud_voting_code#" class="form-control" required placeholder="e.g: #37rw2">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Voting Code #:</label>
                                </div>

                                <button class="btn btn-success btn-lg btn-block mb-4 mt-4" type="submit" name = "submit-new-student-1st-year" style="color:white;font-family: 'Fjalla One', cursive;font-size: 20px">Add Student</button>
                            </form>
                     </div>
                        <div class="modal-footer">
                           
                        </div>
                </div>
            </div>
        </div>
    </form>

   <!--#############################################    END OF ADD STUDENT  ####################################################-->


    
   <!--#############################################    START OF UPDATE STUDENT  ###############################################-->

    <form method="post">
        <div class="modal fade" id="update_student_grade11"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true" style="margin-top: -60px">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Update Student</h5>
                        <button class="btn btn-secondary float-right" data-dismiss="modal" style="float: right;margin-top: -30px">Cancel</button>
                    </div>
                     <div class="modal-body">
                    <p class="sub-text" style="margin-top: -20px"><text class="text-danger">Note: Make sure to review all fields.</text></p>
                         <form class="form-signin" method="POST">
                                <div class="form-label-group" style="display: none">
                                    <input type="text" name="idIF" id = "id_id" class="form-control col-sm-10"   required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_id" id = "up_stud_id" class="form-control col-sm-10" placeholder="e.g: 2018-06-15">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_lastname" class="form-control" id = "up_stud_lastname" required placeholder="e.g: Casabuena">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Lastname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_firstname" class="form-control" required 
                                    id = "up_stud_firstname" placeholder="e.g: Jhon Ace">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Firstname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_middlename" class="form-control" id = "up_stud_middlename" required placeholder="e.g: Vallejos">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Middlename</label>
                                </div>
                                <div class="form-label-group">
                                        <input name="update_stud_department" class="form-control text-danger" id="up_stud_department" readonly>
                                    <label for="disabledSelect" style="color: black">Student Department</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" name="update_stud_year" id = "up_stud_year" class="form-control text-danger" required readonly>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Year</label>
                                </div>

                                <div class="form-label-group">
                                    <input type="text" name="update_voting_code#" id = "up_stat" class="form-control" required placeholder="e.g: #w7Sxa4">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Voting Code #:</label>
                                </div>

                                <button class="btn btn-success btn-lg btn-block mb-4 mt-4" type="submit" name = "update-student" style="color:white;font-family: 'Fjalla One', cursive;font-size: 20px">Save Changes</button>
                            </form>
                     </div>
                        <div class="modal-footer">
                           
                        </div>
                </div>
            </div>
        </div>
    </form>
    
   <!--#############################################    END OF UPDATE STUDENT  ####################################################-->


<!--#############################################    START OF BLOCK STUDENT  ###############################################-->

    <form method="post">
        <div class="modal fade" id="blockStudent"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="form-label-group" style="display: none">
                                <input type="text" name="block_data" id = "block_id_id" class="form-control col-sm-10" readonly>
                                <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                            </div>
        
                            Are you sure you want to <span style="color:red">block</span> this student?<br>  
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class = "btn btn-danger" name="student-block">Block</button>
                    </div>     
                </div>
            </div>
        </div>
    </form>
    
   <!--#############################################    END OF BLOCK STUDENT  ####################################################-->

<!--#############################################    START UNBLOCK STUDENT  ####################################################-->
       <form method="post">
        <div class="modal fade" id="unblockStudent"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="form-label-group" style="display: none">
                                <input type="text" name="unblock_data" id = "unblock_id_id" class="form-control col-sm-10" readonly>
                                <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                            </div>
                            Are you sure you want to <span style="color: red">unblock</span> this student?<br>  
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class = "btn btn-danger" name="student-unblock">unblock</button>
                    </div>     
                </div>
            </div>
        </div>
    </form>
    
   <!--#############################################    END OF BLOCK STUDENT  ####################################################-->

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

    <script>

        $(document).ready(function () {
            $('.editbtn').on('click', function () {

                //$('#editModal').modal('show');

                    $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#id_id').val(data[0]);
                $('#up_stud_id').val(data[1]);
                $('#up_stud_lastname').val(data[2]);
                $('#up_stud_firstname').val(data[3]);
                $('#up_stud_middlename').val(data[4]);
                $('#up_stud_department').val(data[5]);
                $('#up_stud_year').val(data[6]);
                $('#up_voting_code').val(data[7]);
                $('#up_stat').val(data[8]);
               
            });
        });


        $(document).ready(function () {
            $('.blockbtn').on('click', function () {

                //$('#editModal').modal('show');

                    $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#block_id_id').val(data[0]);
                $('#block_up_stud_id').val(data[1]);
                $('#block_up_stud_lastname').val(data[2]);
                $('#block_up_stud_firstname').val(data[3]);
                $('#block_up_stud_middlename').val(data[4]);
                $('#block_up_stud_department').val(data[5]);
               
            });
        });


            $(document).ready(function () {
            $('.unblockbtn').on('click', function () {

                //$('#editModal').modal('show');

                    $tr = $(this).closest('tr');
                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#unblock_id_id').val(data[0]);
                $('#unblock_up_stud_id').val(data[1]);
                $('#unblock_up_stud_lastname').val(data[2]);
                $('#unblock_up_stud_firstname').val(data[3]);
                $('#unblock_up_stud_middlename').val(data[4]);
                $('#unblock_up_stud_department').val(data[5]);
               
            });
        });
    </script> 

      <!-- get total no of grade 11 students  -->
   <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#total1styear").load('totalno1styearstudents.php')
          }, 200);
        });
    </script>

      <!-- get total no of grade 11 successful voters  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#successfulVoters1styear").load('getSuccessVoters1styear.php')
          }, 200);
        });
    </script>

      <!-- get total no of remaining  voters - grade 11 students  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#remainingVoters1styear").load('getRemainingVoters1styear.php')
          }, 200);
        });
    </script>

      <!-- get total no of  block student - grade 11 students  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#blockvoters1styear").load('getblockVoters1styear.php')
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