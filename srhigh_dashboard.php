<?php
include('config.php');

if(isset($_POST['logout']))
{

	session_destroy();
	header('location:index.php');
	
}
if(empty($_SESSION['login_name']))
{
	header('location:index.php');
}

$student = $_SESSION['login_name'];
$db = mysqli_connect('localhost', 'root', '19976112', 'election');

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

              $block_login = "UPDATE students SET logout_status = '1' WHERE stud_id ='$stud_id'";
            mysqli_query($db,$block_login);

          $pres = $_POST['presidente'];
          $student_id = $_POST['stud_idd'];
          $vice_pres = $_POST['vice-presidente'];
          $secretary = $_POST['secretary_form'];
          $treasurer = $_POST['treasurer_form'];
          $auditor = $_POST['auditor_form'];
          $governor12 = $_POST['grade12_governor'];
          $vice_governor12 = $_POST['grade12_vice_governor'];

           $sql = "INSERT into votes(id,stud_id,president,vice_president,secretary,treasurer,auditor,student_voting_status) VALUES('','$student_id','$pres','$vice_pres','$secretary','$treasurer','$auditor','finish voting')";
              mysqli_query($db,$sql);

           $sql2 = "INSERT into governors(gov_vice_id,stud_eyeD,department,governor,vice_governor,year) VALUES('','$student_id','G - 12','$governor12','$vice_governor12','G - 12')";
              mysqli_query($db,$sql2);

                    $message = "Congratulation! Successful Voting";
                        echo "<script type='text/javascript'>alert('$message'); window.location.assign('srhigh_dashboard.php')</script>";
      }
  }


$student = $_SESSION['login_name'];
if(isset($_POST['senator-add']))
{

      $db = mysqli_connect('localhost', 'root', '19976112', 'election');               

        $max = 8;
        $sq = $_POST['senator_form'];
        $student_id = $_POST['stud_idd'];
        $sql_u = "SELECT * FROM senator WHERE senatorr='$sq' and stud_ayd = '$student_id'";
        $res_u = mysqli_query($db, $sql_u);
                                         
        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM senator where stud_ayd  = '$student_id'");
            $res2 = mysqli_fetch_array($sql2);
            $alllogs = $res2['TOTAL'];

              if (mysqli_num_rows($res_u) > 0) 
              {
                $message = "Senator Already Selected";
                  echo "<script type='text/javascript'>alert('$message');
                    window.location.assign('srhigh_dashboard.php')</script>"; 
              }
              else if( $alllogs < $max) 
              {
 
                $sqe = "INSERT into senator(id,stud_ayd,senatorr) VALUES('','$student_id','$sq')";
                mysqli_query($db,$sqe);
              } 
              else
              {
                 $errormsg = "MAXIMUM OF 8 SENATORS ONLY";                   
              }
}

if(isset($_POST['senator-remove']))
  {

      $remove_senator_var = $_POST['remove-senator'];
        $delete_senator = "DELETE from senator  WHERE id  = '$remove_senator_var' ";
              mysqli_query($link, $delete_senator) or die (mysqli_error());              
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="icon" href="img/logo.png" type="image/x-icon">

    <title>GRADE - 11 & 12 | Voting Page</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">


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
          <span class="navbar-brand" href="#"><text style="color:white">Logged in as &nbsp;&nbsp;</text><i class="fa fa-user-o" style="color:white"> </i>&nbsp;<strong style="color: yellow">
            <?php $student = $_SESSION['login_name'];  echo "<span style='text-transform: uppercase'>$student</span>" ?></strong></span>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar" style="float: right;margin-top: 0px">
          <ul class="nav navbar-nav navbar-right">
          <form method="POST">
            <li><button class="btn btn-danger"  type='button' data-toggle="modal" data-target="#exampleModal20000" style="margin-top: 8px;margin-right: 20px"><i class="fa fa-power-off" style="color:white"></i> Logout</button></li>
          </form>
          </ul>
        </div>
      </div>
    </nav>
  </header>

    <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
    <?php
        $student = $_SESSION['login_name'];
          $link = mysqli_connect("localhost","root","19976112","election");
          $sql = mysqli_query($link,"SELECT *FROM students where stud_id = '$student'");

        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
          {
                      $voting_status = $num_rows['stud_status'];
                      $stud_id = $num_rows['stud_id'];
                      $idd = $num_rows['id'];
    ?>

          <?php if ($voting_status == '0')
            {
          ?>
          <section class="jumbotron my-1 text-left" style="margin-top: -60px;">
            <div class="container">
              <h3 class="jumbotron-heading text-center" style="font-family: sans-serif;">CSG Election | 2020</h3><br>
               <p class="text-center" style="font-size: 20px;color:black;border:0"><text style="color: red">Note:</text> Make sure to review your votes before submitting. 
               </p>
            </div>
          </section>
          <?php } else if  ($voting_status == '1')
            {
          ?>
              <section class="jumbotron my-1 text-left" style="margin-top: -50px;">
                  <div class="container">
                    <h3 class="jumbotron-heading text-center" style="font-family: sans-serif;">CSG Election | 2020</h3><br>
                   <p class="text-center" style="font-size: 18px;color:red;border:0;margin-top: -15px">Here are the official list of your votes. <br>Thank you for voting!
                   </p>
                  </div>
              </section>
     <?php } ?>
    <?php } ?>

  <div class="container">
    <div class="container-fluid">

        	<?php
            $link = mysqli_connect("localhost","root","19976112","election");
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
            $link = mysqli_connect("localhost","root","19976112","election");
            $sql = mysqli_query($link,"SELECT *FROM students where stud_id = '$student'");
            for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
            {

              $voting_status = $num_rows['stud_status'];
              $stud_id = $num_rows['stud_id'];
              $idd = $num_rows['id'];
          ?>


  <?php if($voting_status == '1') 
  { 
  ?>
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
                                    
          </div>
        </div>
 
        <div class='media col-md-12'>
          <div class='media-body text-left'>
            <h5 style="color: red"><?php if(isset($errormsg)){ echo $errormsg; } ?></h5>
            <div class="container" style="padding: 5px 0; float: left; width: 100%;">
              <table id="tableCart" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="background-color: white;">  
                <thead>   
                  <tr> 
                    <th style="display: none">ID</th>
                    <th>List of the Senator selected <i class="fa fa-arrow-down" style="color:red"></i> <i class="fa fa-check" style="color: green"></i></th>
                  </tr>  
                </thead>
                <tbody>
                  <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                    <?php
                      $Student = $_SESSION['login_name'];
                      $query = "SELECT * FROM senator where stud_ayd = '$student' ";
                      $results = mysqli_query($link, $query) or die(mysql_error());
                          for($i=0; $i<$num_rows=mysqli_fetch_array($results);$i++) 
                            {
                              $ids = $num_rows['id'];
                              $sen = $num_rows['senatorr'];
                    ?>
                      <tr>
                          <td style="display: none"><?=$ids;?></td>
                          <td><?=$sen?></td>
                      </tr>
                                      
                      <?php } ?>
                </tbody>
              </table>
            </div>               
          </div>   
        </div>

        <div class='media col-md-12' style="margin-top: -6px">
          <div class='media-body text-left'>
            <input type = 'hidden' name ='stud_idd' value='<?=$student;?>'>
              <h4>For Grade - 12 | Governor <i class="fa fa-check" style="color: green"></i></h4>
                <?php
                  $Student = $_SESSION['login_name'];
                  $sql = mysqli_query($link,"SELECT  * FROM governors where stud_eyeD = '$student'");
                    echo "<select name='grade12_governor' class='form-control' disabled>";
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                          {
                            $govern = $num_rows['governor'];
                            echo "<option>$govern</option>";
                          }
                    echo "</select>";
              ?>                   
          </div>   
        </div>

        <div class='media col-md-12'>
          <div class='media-body text-left'>
              <input type = 'hidden' name ='stud_idd' value='<?=$student;?>'>
              <h4>For Grade - 12 | Vice - Governor <i class="fa fa-check" style="color: green"></i></h4>
                <?php
                  $Student = $_SESSION['login_name'];
                    $sql = mysqli_query($link,"SELECT  * FROM governors where stud_eyeD = '$student'");
                      echo "<select name='grade12_vice_governor' class='form-control' disabled>";
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                          {
                            $vgovern = $num_rows['vice_governor'];
                            echo "<option>$vgovern</option>";
                           }
                       echo "</select>";
                ?>
                  <br><br>
                  <button class="btn btn-danger btn-lg btn-block mb-4 mt-4" name="submit-vote" disabled="">DONE <i class="fa fa-check" style="color:yellow"></i></button>
          </div>   
        </div>
    </form>
<br>

<!-- END OF DISPLAY AFTER VOTE -->





<!-- START OF VOTE DISPLAY -->

    <?php break; ?>
  <?php 
  }
  else if ($voting_status == '0') 
  { ?>
           
    <form method="POST">  
        
        <div class='media col-md-12 my-4'>
          <div class='media-body text-left'>
            <h4>For President:</h4>      
              <input type = 'hidden' name ='stud_idd' value='<?=$student;?>'>
                <input type = 'hidden' name ='pure_id' value='<?=$idd;?>'>
                  <?php
                    $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'President'");
                      echo "<select name='presidente' class='form-control selectpicker' onchange='getData(this);' id='form_frame'>";
                        echo "<option>No President selected<i class='fa fa-arrow-down'></i></option>";
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
                  echo "<select name='vice-presidente' class='form-control' onchange='getData(this);' id='form_frame2'>";
                    echo "<option>No Vice - President selected</option>";
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
                  echo "<select name='secretary_form' class='form-control' onchange='getData(this);' id='form_frame3'>";
                    echo "<option>No Secretary selected</option>";
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
                  echo "<select name='treasurer_form' class='form-control' onchange='getData(this);' id='form_frame4'>";
                    echo "<option>No Treasurer selected</option>";
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
                  echo "<select name='auditor_form' class='form-control' onchange='getData(this);' id='form_frame5'>";
                    echo "<option>No Auditor selected</option>";
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
            <h4>For Senator | Max : <text style="color: red">8</text></h4>
              <?php
                $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Senator'");
                  echo "<select name='senator_form' class='form-control' onchange='getData(this);' id='form_frame6'>";
                    echo "<option>No Senator selected</option>";
                      for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                      {
                        $lastname = $num_rows['can_lastname'];
                        $firstname = $num_rows['can_firstname'];
                        $partylist = $num_rows['can_partylist'];
                        echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                      }
                  echo "</select>";
                    echo "<button class='btn btn-primary btn-lg ' name='senator-add' style='float:right;margin-top:4px '>Add Senator</button>";
                      echo "<br>";
              ?>
                <strong><h5 style="color: red"><?php if(isset($errormsg)){ echo $errormsg; } ?></h5></strong>

              <div class="container" style="padding: 5px 0; float: left; width: 100%;">
                <table id="tableCart" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%" style="background-color: white;">  
                  <thead>   
                    <tr> 
                      <th style="display: none">ID</th>
                      <th>List of Senator selected <i class="fa fa-arrow-down" style="color: red"></i></th>
                      <th>Option</th>
                    </tr>  
                  </thead>
                    <tbody>
                      <input type = "hidden" name ="stud_idd" value='<?=$student;?>'>
                        <?php
                          $Student = $_SESSION['login_name'];
                          $query = "SELECT * FROM senator where stud_ayd = '$student' ";
                          $results = mysqli_query($link, $query) or die(mysql_error());
                          for($i=0; $i<$num_rows=mysqli_fetch_array($results);$i++) 
                          {
                            $ids = $num_rows['id'];
                            $sen = $num_rows['senatorr'];
                        ?>
                          <tr>
                            <td style="display: none"><?=$ids;?></td>
                            <td><?=$sen?></td>
                            <td>
                              <button type='button' class='btn-danger editbtn' data-toggle='modal' data-target='#remove_senator' style='cursor:pointer;color:black;border-radius:6px;color:;' class='btn-primary'><i class='fa fa-remove' style='color:white'></i> 
                              </button>
                            </td>
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
          <input type = 'hidden' name ='stud_idd' value='<?=$student;?>'>
            <h4>For Grade - 12 | Governor</h4>
              <?php
                $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Governor - 12'");
                  echo "<select name='grade12_governor' class='form-control' onchange='getData(this);' id='form_frame7'>";
                    echo "<option>No Grade - 12 Governor selected</option>";
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
            <input type = 'hidden' name ='stud_idd' value='<?=$student;?>'>
              <h4>For Grade - 12 | Vice - Governor</h4>
                <?php
                  $sql = mysqli_query($link,"SELECT  * FROM candidates where can_position = 'Vice-Governor - 12'");
                    echo "<select name='grade12_vice_governor' class='form-control' onchange='getData(this);' id='form_frame8'>";
                      echo "<option>No Grade 12 Vice - Governor selected</option>";
                        for($a = 0 ; $a < $num_rows = mysqli_fetch_array($sql) ; $a++ )
                        {
                          $lastname = $num_rows['can_lastname'];
                          $firstname = $num_rows['can_firstname'];
                          $partylist = $num_rows['can_partylist'];
                          echo "<option>$lastname, $firstname - <p class='text-danger'>$partylist</p></option>";
                        }
                    echo "</select>";
                ?>
                <br><br>
                <center><pre style="border: 0;background-color: transparent;color: red">Please review your votes before submitting.</pre></center>
                  <input type="submit" class="btn btn-danger btn-lg btn-block mb-4 mt-4 acebtn" onclick="return confirm('Click OK to submit your votes.\n\nClick Cancel to review your votes.')" value="SUBMIT VOTE" name="submit-vote"/>
            </div>   
          </div>
    </form>
       
     <?php } ?>
<?php } ?>
  </div>
</div><br><br>

  <footer class="text-muted">
    <div class="container py-4 text-center">
      <p style="color:black">&copy; This e-voting system was made by Jhon Ace Casabuena and Computer Studies Department.</p>
    </div>
  </footer>
  <br><br><br>

       <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	  <form method="post">
	  <div class="modal fade" id="exampleModal20000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 100px">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Logout Confirmation</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          
            </button>
          </div>
          <div class="modal-body">Selecting "Logout" means you cannot login again. </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
			
				 <button class = "btn btn-danger" name="logout">Logout</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="confirmbeforesubmitting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="margin-top: 100px">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          
            </button>
          </div>
          <input type="text" name="" value="<?=$student;?>">
          <div class="modal-body">Are you sure you want to submit votes?</div>

            <input type="text" name="" value="" id="bb">
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      
         <button class = "btn btn-danger" name="submit-vote">Submit</button>
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
           

<script src="js/jquery-3.3.1.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="assets/js/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

   
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



          function checksubmit()
          {
              return confirm('Are you sure you want to submit your votes? ');
          }


$(function() {
    if (localStorage.getItem('form_frame')) {
        $("#form_frame option").eq(localStorage.getItem('form_frame')).prop('selected', true);
    }

    $("#form_frame").on('change', function() {
        localStorage.setItem('form_frame', $('option:selected', this).index());
    });
    
});


$(function() {
    if (localStorage.getItem('form_frame2')) {
        $("#form_frame2 option").eq(localStorage.getItem('form_frame2')).prop('selected', true);
    }

    $("#form_frame2").on('change', function() {
        localStorage.setItem('form_frame2', $('option:selected', this).index());
    });
    
});

$(function() {
    if (localStorage.getItem('form_frame3')) {
        $("#form_frame3 option").eq(localStorage.getItem('form_frame3')).prop('selected', true);
    }

    $("#form_frame3").on('change', function() {
        localStorage.setItem('form_frame3', $('option:selected', this).index());
    });
    
});

$(function() {
    if (localStorage.getItem('form_frame4')) {
        $("#form_frame4 option").eq(localStorage.getItem('form_frame4')).prop('selected', true);
    }

    $("#form_frame4").on('change', function() {
        localStorage.setItem('form_frame4', $('option:selected', this).index());
    });
    
});

$(function() {
    if (localStorage.getItem('form_frame5')) {
        $("#form_frame5 option").eq(localStorage.getItem('form_frame5')).prop('selected', true);
    }

    $("#form_frame5").on('change', function() {
        localStorage.setItem('form_frame5', $('option:selected', this).index());
    });
    
});

$(function() {
    if (localStorage.getItem('form_frame6')) {
        $("#form_frame6 option").eq(localStorage.getItem('form_frame6')).prop('selected', true);
    }

    $("#form_frame6").on('change', function() {
        localStorage.setItem('form_frame6', $('option:selected', this).index());
    });
    
});

$(function() {
    if (localStorage.getItem('form_frame7')) {
        $("#form_frame7 option").eq(localStorage.getItem('form_frame7')).prop('selected', true);
    }

    $("#form_frame7").on('change', function() {
        localStorage.setItem('form_frame7', $('option:selected', this).index());
    });
    
});


$(function() {
    if (localStorage.getItem('form_frame8')) {
        $("#form_frame8 option").eq(localStorage.getItem('form_frame8')).prop('selected', true);
    }

    $("#form_frame8").on('change', function() {
        localStorage.setItem('form_frame8', $('option:selected', this).index());
    });
    
});

    </script>

</html>



