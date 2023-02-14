<?php include 'config.php'; ?>
<?php
if(isset($_POST['logout']))
{
    session_destroy();
    header('location:index.php');
    
}
if(empty($_SESSION['login_name']))
{
    header('location:index.php');
}

  $db = mysqli_connect('localhost', 'root', '', 'election');
if(isset($_POST['submit-new-student']))
{

            $st_id = $_POST['add_student_id'];
            $sfname = $_POST['stud_firstname'];
            $slname = $_POST['stud_lastname'];
            $smiddlename = $_POST['stud_middlename_IF'];
            $sdept = "SR. HIGH";
            $syear = "Grade - 11";
            $v_status = "ready to vote";
            $stud_status = 0;   


    $sql_u = "SELECT * FROM students WHERE stud_id='$st_id'";
        $res_u = mysqli_query($db, $sql_u);

            if (mysqli_num_rows($res_u) > 0) 
            {
                $message = "Student ID Exist";
                    echo "<script type='text/javascript'>alert('$message');
                     window.location.assign('students_grade11.php')</script>"; 
            }
            else
            {
                $sql = "INSERT into students(id,stud_id,stud_lastname,stud_firstname,stud_middlename,stud_department,stud_year,stud_status,voting_status) VALUES('','$st_id','$slname','$sfname','$smiddlename','$sdept','$syear','$stud_status','$v_status')";
                        mysqli_query($db, $sql) ;

                        $message = "Grade 11 Student Successfully Added!";
                        echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_grade11.php')</script>";
            }



}
                    
if(isset($_POST['update-student']))
{
            $id_iTF = $_POST['idIF'];
            $update_id = $_POST['update_stud_id'];
            $update_fname = $_POST['update_stud_firstname'];
            $update_lname = $_POST['update_stud_lastname'];
            $update_smiddlename = $_POST['update_stud_middlename'];
            $update_department = "SR. HIGH";
            $update_syear = "Grade - 11";
            $update_v_status = "ready to vote";
            $update_stud_status = 0;   



          
                  $sql = "UPDATE students SET stud_id = '$update_id', stud_lastname = '$update_lname', stud_firstname = '$update_fname', stud_middlename = '$update_smiddlename', stud_department = '$update_department', stud_year = '$update_syear', stud_status = '$update_stud_status', voting_status = '$update_v_status' WHERE id  = '$id_iTF' ";
            mysqli_query($link, $sql) or die(mysqli_error());

            $message = "Student updated successfully!";
            echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_grade11.php')</script>";
            

}

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Grade - 11 Students</title>
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
                            <li style="color:black"  class="active">
                                <a href="students_grade11.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px;color: yellow;"></i>Grade 11</a>
                            </li>
                            <li>
                                <a href="students_grade12.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>Grade 12</a>
                            </li>
                            <li>
                                <a href="students_1st_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>1st Year</a>
                            </li>
                            <li>
                                <a href="students_2nd_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>2nd Year</a>
                            </li>
                            <li>
                                <a href="students_3rd_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>3rd Year</a>
                            </li>
                            <li>
                                <a href="students_4th_year.php" style="color: white"><i class="fa fa-user" style="margin-top:-7px"></i>4th Year</a>
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
                        <div class="col">
                            <div class="card" style="margin-top:-30px">
                                <div class="card-header" data-background-color="green">
                                    <form method="POST">
                                        <h2 class="title"><b>Grade <text class="text-danger">11</text> Students</b> <button class = "btn btn-info text-info" type='button' data-toggle="modal" data-target="#exampleModal1990" style="float: right">Add Student</button></h2>
                                    </form>
                                </div>




                                <div class="card-content table-responsive">
                                    
                                    <table class="table" id="dataTable">
                                        <thead style="font-weight: bold;color: black;font-size: 150%">
                                            <th style='display:none;'>id </th>
                                            <th>SID</th>
                                            <th>Lastname</th>
                                            <th>Firstname</th>
                                            <th>Middlename</th>
                                            <th>Dept</th>
                                            <th>Year</th>
                                            <th>Status</th>
                                            <th><p style="margin-left: 2px">Action</p></th>   
                                        </thead>
                                        <tbody>
                <?php
                    
                        $link = mysqli_connect("localhost","root","","election");
                        
                        $sql = mysqli_query($link,"SELECT * FROM students where stud_year = 'Grade - 11' ORDER BY stud_id DESC");
                    
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                            $i_d = $num_rows['id'];
                            $stud_idd = $num_rows['stud_id'];
                            $stud_fname = $num_rows['stud_firstname'];
                            $stud_lname = $num_rows['stud_lastname'];
                            $middle_initial = $num_rows['stud_middlename'];
                            $dept = $num_rows['stud_department'];
                            $stud_year = $num_rows['stud_year'];
                            $v_status = $num_rows['voting_status'];
                            echo "

                            <tr>
                                <td style='display:none'>$i_d</td>
                                <td>$stud_idd</td>
                                <td>$stud_lname</td>
                                <td>$stud_fname</td>
                                <td>$middle_initial</td>
                                <td>$dept</td>
                                <td>$stud_year</td>
                                <td>$v_status</td>
                                <td>
                                    <button type='button' class='btn-primary editbtn' data-toggle='modal' data-target='#exampleModal3000' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i>
                                    </button>
                                    &nbsp;
                                    <button type='button' class='btn-success blockbtn' data-toggle='modal' data-target='#blockStudent' style='cursor:pointer;color:black;border-radius:6px;'><i class='fa fa-unlock' style='color:white'></i>
                                    </button>
                                </td>
                            </tr>
                            
                            ";
                              //'".$num_rows['stud_id']."'<button type='button' data-toggle='modal' data-target='#exampleModal3000' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-pencil-square-o' style='color:white'></i></button>&nbsp;&nbsp;&nbsp;<button type='button' data-toggle='modal' data-target='#exampleModal3000' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-success'><i class='fa fa-unlock' style='color:white'></i></button>
                        }
                                            
                        
                        
                            
                        
                            
                            
                        
                ?>
                                            
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
<!--
                        $tr = $(this).closest('tr');
     var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_stud_id').val(data[0]);
                $('#update_stud_firstname').val(data[1]);
                $('#update_stud_lastname').val(data[2]);
                $('#update_stud_middlename').val(data[3]);  -->
 
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
        <div class="modal fade" id="exampleModal1990" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true" style="margin-top: -45px">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Grade - 11 Student</h5>
                        <button class="btn btn-secondary float-right" data-dismiss="modal" style="float: right;margin-top: -30px">Cancel</button>
                    </div>
                     <div class="modal-body">
                        <p class="sub-text" style="margin-top: -20px"><text class="text-danger">Note: Make sure to review all fields.</text></p>
                         <form class="form-signin" method="POST">
                                <div class="form-label-group">
                                    
                                      <input type="text" name="add_student_id" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_lastname" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Lastname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_firstname" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Firstname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="stud_middlename_IF" class="form-control" id="inputPassword" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Middlename</label>
                                </div>
                                 <div class="form-label-group">
                                        <select class="form-control text-danger" name="stud_department" disabled="">
                                            <option value="Grade - 11" selected="">SR. HIGH</option>
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
                                        <select class="form-control text-danger" id="disabledSelect" name="stud_year" disabled="">
                                            <option value="Grade - 11">GRADE - 11</option>
                                            <option value="Grade - 12">Grade - 12</option>
                                            <option value="1st Year">1st Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="3rd Year">3rd Year</option>
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

   <!--#############################################    END OF ADD STUDENT  ####################################################-->


    
   <!--#############################################    START OF UPDATE STUDENT  ###############################################-->

    <form method="post">
        <div class="modal fade" id="exampleModal3000"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"   aria-hidden="true" style="margin-top: -60px">
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
                                    <input type="text" name="update_stud_id" id = "up_stud_id" class="form-control col-sm-10" readonly>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_lastname" class="form-control" id = "up_stud_lastname" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Lastname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_firstname" class="form-control" required 
                                    id = "up_stud_firstname">
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Firstname</label>
                                </div>
                                <div class="form-label-group">
                                    <input type="text" name="update_stud_middlename" class="form-control" id = "up_stud_middlename" required>
                                        <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student Middlename</label>
                                </div>
                                <div class="form-label-group">
                                        <input name="update_stud_department" class="form-control text-danger" id="up_stud_department" readonly>
                                    <label for="disabledSelect" style="color: black">Student Department</label>
                                </div>
                                 <div class="form-label-group">
                                        <select class="form-control text-danger" id="disabledSelect" name="update_stud_year" disabled>
                                            <option value="Grade - 11">GRADE - 11</option>
                                            <option value="Grade - 12">Grade - 12</option>
                                            <option value="1st Year">1st Year</option>
                                            <option value="2nd Year">2nd Year</option>
                                            <option value="3rd Year">3rd Year</option>
                                            <option value="4th Year">4th Year</option>
                                        </select>
                                    <label for="disabledSelect" style="color: black">Student Year</label>
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
                                <input type="text" name="idIF" id = "bock_id_id" class="form-control col-sm-10" readonly>
                                <label for="inputEmail" style="color:black;font-family: 'Livvic', sans-serif;">Student ID</label>
                            </div>
                            Are you sure you want to block 
                             <input type="text" name="idIF" id = "block_up_stud_firstname" class="" readonly style="border: 0;color:red;" size="10">?

                             <br>

                             <textarea class="" id="block_up_stud_lastname"></textarea>
                    </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class = "btn btn-danger" name="logout">Logout</button>
                        </div>     
                </div>
            </div>
        </div>
    </form>
    
   <!--#############################################    END OF BLOCK STUDENT  ####################################################-->

       

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
</script> 
    <!-- 
      




</html>