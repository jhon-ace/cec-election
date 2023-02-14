<?php
include('config.php');

if(isset($_POST['logout']))
{
	session_destroy();
	header('location:index.php');
	
}
if(empty($_SESSION['login_name']))
{
	header('location:student-portal.php');
}
$student = $_SESSION['login_name'];
$db = mysqli_connect('localhost', 'root', '', 'election');
if(isset($_POST['submit-vote']))
{

 $sql = mysqli_query($link,"SELECT *FROM students where stud_id = '$student'");

            for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
            {

              $voting_status = $num_rows['stud_status'];
              $stud_id = $num_rows['stud_id'];
              $idd = $num_rows['id'];
          


   $update_grand_total = "UPDATE students SET stud_status = '1', voting_status = 'finished voting', stud_block_status = 'none' WHERE stud_id ='$stud_id'";
      mysqli_query($db,$update_grand_total);




$pres = $_POST['presidente'];
$student_id = $_POST['stud_idd'];
$vice_pres = $_POST['vice-presidente'];
$secretary = $_POST['secretary_form'];
$treasurer = $_POST['treasurer_form'];
$auditor = $_POST['auditor_form'];
  
 $sql = "INSERT into votes(id,stud_id,president,vice_president,secretary,treasurer,auditor,student_voting_status) VALUES('','$student_id','$pres','$vice_pres','$secretary','$treasurer','$auditor','finish voting')";

 mysqli_query($db,$sql);

                                   $message = "Congratulation! Successful Voting";
                            echo "<script type='text/javascript'>alert('$message'); window.location.assign('student-dashboard.php')</script>";
}

 

  
}

$student = $_SESSION['login_name'];

if(isset($_POST['senator-add']))
{

                         $db = mysqli_connect('localhost', 'root', '', 'election');               

                  $max = 3;
                  $sq = $_POST['senator_form'];
                  $student_id = $_POST['stud_idd'];
                  $sql_u = "SELECT * FROM senator WHERE senatorr='$sq'";
                  $res_u = mysqli_query($db, $sql_u);
                                         
                       $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM senator where stud_ayd  = '$student_id'");
                                                              $res2 = mysqli_fetch_array($sql2);
                                                              $alllogs = $res2['TOTAL'];

                        if (mysqli_num_rows($res_u) > 0) 
                        {
                            $message = "Senator Already Selected";
                                echo "<script type='text/javascript'>alert('$message');
                                 window.location.assign('student-dashboard.php')</script>"; 
                        }
                        else if( $alllogs < $max) 
                        {
 
                                  $sqe = "INSERT into senator(id,stud_ayd,senatorr) VALUES('','$student_id','$sq')";
                            mysqli_query($db,$sqe);
                        } 
                        else
                        {
                                                       $message = "MAXIMUM OF 3 SENATORS ONLY";
                                echo "<script type='text/javascript'>alert('$message');
                                 window.location.assign('student-dashboard.php')</script>";
                        }
}

if(isset($_POST['senator-remove']))
{

  $remove_senator_var = $_POST['remove-senator'];
               $delete_senator = "DELETE from senator  WHERE id  = '$remove_senator_var' ";
              // $student_blocked_status ="UPDATE students SET voting_status = 'unable to vote' where id = '$block_data_var'";

                   // mysqli_query($link, $student_block) or die (mysqli_error());
                    mysqli_query($link, $delete_senator) or die (mysqli_error());
                      //  $message = "Student succesfully blocked!";
                       // echo "<script type='text/javascript'>alert('$message'); window.location.assign('students_grade11.php')</script>";


}



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">

    <title>Student Dashboard</title>
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/app.css" rel="stylesheet">
  </head>

  <body style="background-color:white">

    <header>

      <nav class="navbar navbar-inverse" style="border-radius: 0">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <span class="navbar-brand" href="#">Logged in as <strong style="color: yellow">
        <?php $student = $_SESSION['login_name'];  echo "<span style='text-transform: uppercase'>$student</span>" ?></strong></span>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><i class="fa fa-user" style="color:white"></i> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
    </header>
    <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
   <?php
    $student = $_SESSION['login_name'];
          $link = mysqli_connect("localhost","root","","election");
            
            $sql = mysqli_query($link,"SELECT *FROM students where stud_id = '$student'");

            for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
            {

              $voting_status = $num_rows['stud_status'];
              $stud_id = $num_rows['stud_id'];
              $idd = $num_rows['id'];
          ?>

          <?php if ($voting_status == '0'){
            ?>
   <section class="jumbotron my-1 text-left" style="margin-top: -60px;">
        <div class="container">
          <h3 class="jumbotron-heading text-center" style="font-family: sans-serif;">SSC Election | 2020</h3><br>
         <p class="text-center" style="font-size: 20px;color:red;border:0">Note: Make sure to review your votes before submitting.</p>

        </div>
      </section>
    <?php } else if  ($voting_status == '1'){?>
      <section class="jumbotron my-1 text-left" style="margin-top: -50px;">
        <div class="container">
          <h3 class="jumbotron-heading text-center" style="font-family: sans-serif;">SSC Election | 2020</h3><br>
         <p class="text-center" style="font-size: 20px;color:red;border:0;margin-top: -15px">Here are the official list of your votes.<br>
         Thank you for voting!</p>

        </div>
      </section>
    <?php } ?>
  <?php } ?>

        <div class="container">
          <div class="container-fluid">

        	<?php
        	$link = mysqli_connect("localhost","root","","election");
						
						$sql = mysqli_query($link,"SELECT *FROM students ORDER BY stud_year ASC");
						$temp;
						$num2 = 0;
						$modal = 0;
						$student = $_SESSION['login_name'];
						for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
						{
							$id_contestant = $num_rows['id'];
							$gender = $num_rows['stud_id'];
							$team = $num_rows['stud_lastname'];
							$full_name = $num_rows['stud_firstname'];


							$modal++;
						}
    $student = $_SESSION['login_name'];
		?>

      <?php
          $link = mysqli_connect("localhost","root","","election");
            
            $sql = mysqli_query($link,"SELECT *FROM students where stud_id = '$student'");

            for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
            {

              $voting_status = $num_rows['stud_status'];
              $stud_id = $num_rows['stud_id'];
              $idd = $num_rows['id'];
          ?>

  <?php if($voting_status == '1') { ?>
            <form method="POST">  
                      <div class='media col-md-12 my-4'>
                        <div class='media-body text-left'>
                            <h4>President: <i class="fa fa-check" style="color:green"></i></h4>      
                              <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                                <?php
                                     $student = $_SESSION['login_name'];
                                        $sql = mysqli_query($link,"SELECT  * FROM votes where stud_id = '$student'");
                                     
                                            echo "<select name='presidente' class='form-control' disabled>";
                                           
                                            for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                                {
                                                  
                                                  $ppres= $num_rows['president'];

                                                  echo "<option style='text-transform:uppercase'>$ppres</option>";
                                                }
                                          echo "</select>";
                                         
                                  ?>

                        </div>
                      </div>

                        <div class='media col-md-12 my-4'>
                          <div class='media-body text-left'>
                              <h4>Vice - President: <i class="fa fa-check" style="color:green"></i></h4>      
                                <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                                  <?php
                                       $student = $_SESSION['login_name'];
                                          $sql = mysqli_query($link,"SELECT  * FROM votes where stud_id = '$student'");
                                       
                                              echo "<select name='presidente' class='form-control' disabled>";
                                             
                                              for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                                  {
                                                    
                                                    $vpres= $num_rows['vice_president'];

                                                    echo "<option style='text-transform:uppercase'>$vpres</option>";
                                                  }
                                            echo "</select>";
                                           
                                    ?>
                          </div>
                      </div>

                      <div class='media col-md-12 my-4'>
                          <div class='media-body text-left'>
                              <h4>Secretary: <i class="fa fa-check" style="color:green"></i></h4>      
                                <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                                  <?php
                                       $student = $_SESSION['login_name'];
                                          $sql = mysqli_query($link,"SELECT  * FROM votes where stud_id = '$student'");
                                       
                                              echo "<select name='presidente' class='form-control' disabled>";
                                             
                                              for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                                  {
                                                    
                                                    $secret= $num_rows['secretary'];

                                                    echo "<option style='text-transform:uppercase'>$secret</option>";
                                                  }
                                            echo "</select>";
                                           
                                    ?>
                          </div>
                      </div>

                         <div class='media col-md-12 my-4'>
                          <div class='media-body text-left'>
                              <h4>Treasurer <i class="fa fa-check" style="color:green"></i></h4>      
                                <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                                  <?php
                                       $student = $_SESSION['login_name'];
                                          $sql = mysqli_query($link,"SELECT  * FROM votes where stud_id = '$student'");
                                       
                                              echo "<select name='presidente' class='form-control' disabled>";
                                             
                                              for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                                  {
                                                    
                                                    $tres= $num_rows['treasurer'];

                                                    echo "<option style='text-transform:uppercase'>$tres</option>";
                                                  }
                                            echo "</select>";
                                           
                                    ?>
                          </div>
                      </div>

                      <div class='media col-md-12 my-4'>
                          <div class='media-body text-left'>
                              <h4>Auditor <i class="fa fa-check" style="color:green"></i></h4>      
                                <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                                  <?php
                                       $student = $_SESSION['login_name'];
                                          $sql = mysqli_query($link,"SELECT  * FROM votes where stud_id = '$student'");
                                       
                                              echo "<select name='presidente' class='form-control' disabled>";
                                             
                                              for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                                  {
                                                    
                                                    $audit= $num_rows['auditor'];

                                                    echo "<option style='text-transform:uppercase'>$audit</option>";
                                                  }
                                            echo "</select>";
                                           
                                    ?>
                                    <br><br>
                                    <button class="btn btn-danger btn-lg btn-block mb-4 mt-4" name="submit-vote" disabled="">DONE <i class="fa fa-check" style="color:yellow"></i></button>
                          </div>
                      </div>
 




            </form>
<?php break; ?>
      <?php } else if ($voting_status == '0') { ?>
           
                 <form method="POST">  
                      <div class='media col-md-12 my-4'>
                        <div class='media-body text-left'>
                            <h4>For President:</h4>      
                              <input type = 'hidden' name ='stud_idd' value='<?=$student;?>'>
                              <input type = 'hidden' name ='pure_id' value='<?=$idd;?>'>
                                <?php
                                     
                                        $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'President'");
                                     
                                            echo "<select name='presidente' class='form-control'>";
                                            echo "<option>Select President<i class='fa fa-arrow-down'></i></option>";
                                            for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                                {
                                                  $lastname = $num_rows['can_lastname'];
                                                  $firstname = $num_rows['can_firstname'];
                                                  $partylist = $num_rows['can_partylist'];
                                                  echo "<option style='text-transform:uppercase'>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                                }
                                          echo "</select>";
                                  ?>
                        </div>
                      </div>

                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Vice - President:</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice-President'");
                                  
                                        echo "<select name='vice-presidente' class='form-control'>";
                                      echo "<option>Select Vice - President</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";
                                ?>
                                    
                          </div>   
                        </div>  

                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Secretary</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Secretary'");
                                  
                                        echo "<select name='secretary_form' class='form-control'>";
                                      echo "<option>Select Secretary</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";
                                ?>
                                  
                          </div>   
                        </div>

                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Treasurer</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Treasurer'");
                                  
                                        echo "<select name='treasurer_form' class='form-control'>";
                                      echo "<option>Select Treasurer</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";
                                ?>
                                   
                          </div>   
                        </div>  

                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Auditor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Auditor'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Auditor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>

        <form method="POST">
                           <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Senator | Max : 12</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Senator'");
                                  
                                        echo "<select name='senator_form' class='form-control'>";
                                      echo "<option>Select Senator</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";
                                        echo "<button class='btn btn-danger btn-lg ' name='senator-add' style='float:right;margin-top:4px '>Select</button>";
                                        echo "<br>";
                                ?>
          </form>
         <div class="container" style="padding: 5px 0; float: left; width: 100%;">
            <table id="tableCart" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="background-color: white;">  
                <thead>   
                    <tr> 
                        <th style="display: none">ID</th>
                        <th>Senator</th>
                        <th>Action</th>
                         
                        
                    </tr>  
                </thead>
                <tbody>
                   <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                    <?php
                      $Student = $_SESSION['login_name'];
                    $query = "SELECT * FROM senator where stud_ayd = '$student' ";
                    $results = mysqli_query($link, $query) or die(mysql_error());

                        for($i=0; $i<$num_rows=mysqli_fetch_array($results);$i++) {
                            $ids = $num_rows['id'];
                            $sen = $num_rows['senatorr'];
                    ?>
                    <tr>
                      
                        <td style="display: none"><?=$ids;?></td>
                        <td><?=$sen?></td>
                        <td><button type='button' class='btn-danger editbtn' data-toggle='modal' data-target='#remove_senator' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-edit' style='color:white'></i>
                                    </button></td>
                    </tr>
                                    
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <br>
                               
                          </div>   
                        </div>


                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Grade - 12 | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor - 12'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Grade - 12 | Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Grade - 12 | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice-Governor - 12'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Grade - 12 | Vice - Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


                        <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Computer Studies | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Computer Studies'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Computer Studies Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>

                      <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Computer Studies | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Computer Studies'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Computer Studies Vice - Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


                      <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Education and Liberal Arts | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Education and Liberal Arts'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Education and Liberal Arts Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


                    <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Education and Liberal Arts | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Education and Liberal Arts'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Education and Liberal Arts Vice - Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>



                      <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Marine Transportation Program | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Marine Transportation'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Marine Transportation Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


                      <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Marine Transportation Program | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Marine Transportation'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Marine Transportation Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>



                    <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Marine Engineering Program | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Marine Engineering'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Marine Engineerinf Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>



                    <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Marine Engineering Program | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Marine Engineering'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Marine Engineering Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>



               <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Hospitality and Tourism Management Program | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Hospitality and Tourism'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Hospitality and Tourism Management Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>




               <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Hospitality and Tourism Management Program | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Hospitality and Tourism'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Hospitality and Tourism Management Vice - Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>





               <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Business Administration Program | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Business Administration'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Business Administration Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


               <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Business Administration Program | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Business Administration'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Business Administration Vice - Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


               <div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Criminology Department | Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor' AND can_department = 'Criminology'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Criminology Department Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>


<div class='media col-md-12'>
                          <div class='media-body text-left'>
                            <h4>For Criminology Department | Vice - Governor</h4>
                                <?php
                                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice - Governor' AND can_department = 'Criminology'");
                                  
                                        echo "<select name='auditor_form' class='form-control'>";
                                      echo "<option>Select Criminology Department Vice - Governor</option>";
                                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                                            {
                                              $lastname = $num_rows['can_lastname'];
                                              $firstname = $num_rows['can_firstname'];
                                              $partylist = $num_rows['can_partylist'];
                                              echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                                            }
                                      echo "</select>";

                                ?>
                                
                          </div>   
                        </div>




















            </form>
             <!--<br><br>
                                    <button class="btn btn-danger btn-lg btn-block mb-4 mt-4" name="submit-vote">SUBMIT VOTE</button>-->
      <?php } ?>

      <?php } ?>
</div>

 </div>

 
 <br><br>

    <footer class="text-muted">
      <div class="container py-4 text-center">
            <p style="color:black">&copy; This system was made by Jhon Ace Casabuena</p>
      </div>
    </footer>
     <br><br>

       <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	  <form method="post">
	  <div class="modal fade" id="exampleModal20000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			
				 <button class = "btn btn-danger" name="logout">Logout</button>
          </div>
        </div>
      </div>
    </div>



   		<div class="modal fade" id="exampleace" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   			<div class="modal-dialog" role="document">
   				<div class="modal-content">
   					<div class="modal-header">
   						<h5 class="modal-title" id="exampleModalLabel">Information</h5>
   						<button class="close" type="button" data-dismiss="modal" aria-label="Close">
   							
   						</button>
   					</div>
   					<div class="modal-body">All fields of candidates must be filled up completely!</div>
   					<div class="modal-footer">
   						<button class="btn btn-secondary" type="button" data-dismiss="modal">Ok</button>
	
   					</div>
   				</div>
   			</div>
   		</div>
			  </form>

         <form method="post">
        <div class="modal fade" id="remove_senator"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
            <div class="modal-dialog" role="document">
                <div class="modal-content" style="margin-top: 100px">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="form-label-group" style="display: none;">

                                <input type="text" name="remove-senator" id = "block_id_id" class="form-control col-sm-10" readonly>
                                
                            </div>
                            <div class="form-label-group" style="">

                                <input type="text" name="" id = "block_up_stud_id" class="form-control col-sm-10" readonly>
                                
                            </div>
                            <br><br><br>
                            Are you sure you want to <span style="color:red">remove</span> this senator?<br>  
                    </div>
                    <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class = "btn btn-danger" name="senator-remove">Remove</button>
                    </div>     
                </div>
            </div>
        </div>
    </form>
           
          </div>
        </div>
      </div>
    </div>
    <script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
    <script src="js/bootstrap.min.js"></script>
  </body>


<script>
  $(document).ready(function () {
            $('.editbtn').on('click', function () {

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




</html>





