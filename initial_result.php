<?php
include'config.php';

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
    <div class="wrapper" style="background-color: #54575F;height: 500vh">
        
     
          
            <div class="content" style="margin-left: 120px">
                
             
                    
                   
                            <div class="card"  style="margin-left: -55px;margin-top: 30px;height: 400vh">
                                <div class="card-header" data-background-color="green">
                                    <form method="POST">
                                        <h3 class="title"><b>Official Tally of Votes</b></h3>
                                    </form>

                                    <div class="col">
                                        
                                              
                                    </div>
                                </div>
                                <div class="card-content table-responsive">
                                    <div class="col">
                                        <br>
                                   <h4><text style="color:red">President</text>    | no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                   <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">Englaterra, J (TAYO) &nbsp;&nbsp;|<b><text id="tayo_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->     
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">Sales, I (MEGA) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<b><text id="mega_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 3 is ACT PARTYLIST     -->    
                                    <p style="color: black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">Bernalte, G (ACT) &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|<b><text id="act_president" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    </div>

   <!-------------------------------- VICE PRESIDENT            ------------------------>                                

                                <div class="col" style="margin-top: -135px;margin-left: 330px">
                                    <h4><text style="color:red">Vice - President</text>    | no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                   <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 49px;" class="text-left">Clenista, R (TAYO) &nbsp;&nbsp;&nbsp;&nbsp;|<b><text id="tayo_vice_pres" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 49px;" class="text-left">Sales, D (MEGA) &nbsp;&nbsp;&nbsp;&nbsp;|<b><text id="mega_vice_pres" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 49px;" class="text-left">Saligumba, R (ACT) &nbsp;&nbsp;&nbsp;&nbsp;|<b><text id="act_vice_pres" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                </div>

<!------------------------- SECRETARY ------------------------------------>

                                <div class="col" style="margin-top: -135px;margin-left: 685px">
                                    <h4 style="margin-bottom: 24px"><text style="color:red">Secretary</text>    | no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                  <!-- <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">C# &nbsp;1 &nbsp;&nbsp;|<b><text id="tayo_secretary" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>  -->
                                              <br>


                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">Cajes, R (MEGA)&nbsp;&nbsp;|<b><text id="mega_secretary" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 15px;" class="text-left">Bongo, S (ACT)&nbsp;&nbsp;|<b><text id="act_secretary" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                </div>


<!--------------------------------------------- TREASURER      ---------------------->
                                   
                                <div class="col" style="margin-top: 30px;margin-left: 0px">
                                    <h4><text style="color:red">Treasurer</text>    | no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Guioguio, D (TAYO) &nbsp;&nbsp;|<b><text id="tayo_treasurer" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Boltron, K (MEGA)&nbsp;&nbsp;|<b><text id="mega_treasurer" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Bustamante, J (ACT) &nbsp;&nbsp;|<b><text id="act_treasurer" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                </div>

<!--------------------------------------------- AUDITOR    ---------------------->
                                   
                                <div class="col" style="margin-top: -135px;margin-left: 330px">
                                    <h4><text style="color:red">Auditor</text> &nbsp;| no. of votes</h4>

                                   <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Estrera, C (TAYO) |<b><text id="tayo_auditor" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Sarcon, J (MEGA) |<b><text id="mega_auditor" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Arcay, K (ACT) |<b><text id="act_auditor" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                </div>




                                  <center><h5>Senators</h5></center>
                              <div class="content">
                                  <div class="col" style="margin-left: 64px;color:red;margin-bottom: 5px">
                                     NAME<text style="margin-left: 117px">NO. OF VOTES</text>
                                    </div>
                                    <div class="col">
                                      Balagulan, Jerome Cedric (ACT)<text id="balagulan_fetch" class="text-secondary" style="font-size: 20px;margin-left: 50px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Bandoja, Shamaine (MEGA)<text id="bandoja_fetch" class="text-secondary" style="font-size: 20px;margin-left: 74px"></text>
                                    </div>
                                     <div class="" style="margin-top: 15px">
                                      Bonao, Christian Jay (ACT)<text id="bonao_fetch" class="text-danger" style="font-size: 20px;margin-left: 80px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Bondal, Vigie (ACT)<text id="bondal_fetch" class="text-danger" style="font-size: 20px;margin-left: 127px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Casquejo, Aivie Kaye (MEGA)<text id="casquejo_fetch" class="text-secondary" style="font-size: 20px;margin-left: 64px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Dabalos, Reno Jr. (TAYO)<text id="dabalos_fetch" class="text-secondary" style="font-size: 20px;margin-left: 90px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Daling, Maynard (MEGA)<text id="daling_fetch" class="text-secondary" style="font-size: 20px;margin-left: 95px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Elnas, Redden (MEGA)<text id="elnas_fetch" class="text-secondary" style="font-size: 20px;margin-left: 104px"></text>
                                    </div>
                                </div>


                                <div class="content" style="margin-top: -315px;margin-left: 360px">
                                  <div class="col" style="margin-left: 64px;color:red;margin-bottom: 5px">
                                     NAME<text style="margin-left: 117px">NO. OF VOTES</text>
                                    </div>
                                    <div class="col">
                                      Gomez, Mary Grace (ACT)<text id="gomez_fetch" class="text-secondary" style="font-size: 20px;margin-left: 90px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Horcasitas, Gerold (TAYO)<text id="horcasitas_fetch" class="text-secondary" style="font-size: 20px;margin-left: 92px"></text>
                                    </div>
                                     <div class="" style="margin-top: 15px">
                                      Lignig, James Kenneth (ACT)<text id="lignig_fetch" class="text-danger" style="font-size: 20px;margin-left: 73px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Lood, Christian Jay (ACT)<text id="lood_fetch" class="text-danger" style="font-size: 20px;margin-left: 96px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Lusterio, Erica (TAYO)<text id="lusterio_fetch" class="text-danger" style="font-size: 20px;margin-left: 119px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Manliguez, Fatima (MEGA)<text id="manliquez_fetch" class="text-secondary" style="font-size: 20px;margin-left: 90px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Moscosa, Jerald (TAYO)<text id="moscosa_fetch" class="text-danger" style="font-size: 20px;margin-left: 108px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Paquibot, Lloyd Zelwyn (MEGA)<text id="paquibot_fetch" class="text-danger" style="font-size: 20px;margin-left: 60px"></text>
                                    </div>
                                </div>

                                <div class="content" style="margin-top: -315px;margin-left: 720px">
                                  <div class="col" style="margin-left: 64px;color:red;margin-bottom: 5px">
                                     NAME<text style="margin-left: 117px">NO. OF VOTES</text>
                                    </div>
                                    <div class="col">
                                      Polinar, Mar Lemuel (ACT)<text id="polinar_fetch" class="text-danger" style="font-size: 20px;margin-left: 90px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">
                                      Repala, Daena Suzane (MEGA)<text id="repala_fetch" class="text-secondary" style="font-size: 20px;margin-left: 57px"></text>
                                    </div>
                                     <div class="" style="margin-top: 15px">
                                      Rañeses, Ophelia Famela (MEGA)<text id="raneses_fetch" class="text-secondary" style="font-size: 20px;margin-left: 40px"></text>
                                    </div>
                                    <div class="" style="margin-top: 15px">




                                     <h5><text class="text-danger">Education and Liberal Arts Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">TAYO |<b><text id="tayo_ela_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Bantillo, R |<b><text id="mega_ela_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Clemen, Aila Marie |<b><text id="act_ela_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>



                                <div class="content" style="margin-left: 10px;margin-top: 80px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">Marine Transportation - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Sarong, N (TAYO) |<b><text id="tayo_MT_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">MEGA |<b><text id="mega_ela_vicefd_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Leuterio, E (ACT) |<b><text id="act_MT_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>


                                <div class="content" style="margin-left: 400px;margin-top: -145px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">Marine Transportation | Vice - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Idul, K (TAYO) |<b><text id="tayo_MT_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Selomen, Wiljun (MEGA) |<b><text id="mega_MT_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Curaza, R (ACT) |<b><text id="act_MT_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>


                                    <!--   GRADE 12  -->

                                <div class="content" style="margin-left: 10px;margin-top: 80px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">GRADE 12 - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">ESTO, W (TAYO) |<b><text id="tayo_12_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Balani, C (MEGA)|<b><text id="mega_12_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Soco, M (ACT) |<b><text id="act_12_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>


                                <div class="content" style="margin-left: 400px;margin-top: -145px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">GRADE 12 | Vice - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Lapure, R (TAYO) |<b><text id="tayo_12_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Guiang, P (MEGA) |<b><text id="mega_12_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Tadle, J (ACT) |<b><text id="act_12_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>





   <!--   Hospitality and Tourism Management -->

                                <div class="content" style="margin-left: 10px;margin-top: 80px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">HTM Program - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Clenista, C (TAYO) |<b><text id="tayo_HTM_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">MEGA<b><text id="mega__gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Bentulan, A (ACT) |<b><text id="act_HTM_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>


                                <div class="content" style="margin-left: 400px;margin-top: -145px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">HTM Program Vice - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Galin, W (TAYO) |<b><text id="tayo_HTM_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">MEGA |<b><text id="mega_12_viDXASCDSCce_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Lopez, B (ACT) |<b><text id="act_HTM_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>



                          <div class="content" style="margin-left: 10px;margin-top: 30px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">Business Administration Vice - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Doblas, E (TAYO) |<b><text id="tayo_BA_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Manuel, R (MEGA) |<b><text id="mega_BA_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">ACT |<b><text id="act_HTM_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>


              








 <!--   CRIMINOLOGY -->

                                <div class="content" style="margin-left: 10px;margin-top: 80px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">College of Criminology - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Caturan, D. (TAYO) |<b><text id="tayo_crim_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Milay, A (MEGA) |<b><text id="mega_crim_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Jumigop, J (ACT) | <b><text id="act_crim_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>


                                <div class="content" style="margin-left: 400px;margin-top: -145px">
                                    <div class="" style="margin-top: 15px">
                                     <h5><text class="text-danger">College of Criminology | Vice - Governor&nbsp;&nbsp;<text style="color:black">| no. of Votes</text></text></h5>
                                    </div>
                                    <!-- 1 is TAYO PARTYLIST     -->

                                  <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Albores, R (TAYO) |<b><text id="tayo_crim_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>

                                    <!-- 2 is MEGA PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Bongcac, J (MEGA) |<b><text id="mega_crim_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                    <!-- 3 is ACT PARTYLIST     -->
                                    <p style="color: Black;font-family: consolas;font-size:15px;margin-left: 17px;" class="text-left">Guioguio, C (ACT) |<b><text id="act_crim_vice_gov" style="color:black;font-size: 20px;margin-left: 20px">
                                                &nbsp;
                                              </text></b></p>
                                </div>




























                                   
                                </div>
                            </div>

      
           
        </div>
    </div>
    
    
    
 
</body>
    
         
    

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


    <!----                -----------------------------------------  -->


        <!--    TAYO VICE - PRESIDENT  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_vice_pres").load('fetch_vice_president_vote_TAYO.php')
          }, 200);
        });
    </script>


    <!--    MEGA VICE - PRESIDENT  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_vice_pres").load('fetch_vice_president_vote_MEGA.php')
          }, 200);
        });
    </script>

        <!--    ACT VICE - PRESIDENT  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_vice_pres").load('fetch_vice_president_vote_ACT.php')
          }, 200);
        });
    </script>

<!------------------------------------------------------------------------------>

        <!--    TAYO SECRETARY  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_secretary").load('fetch_secretary_vote_TAYO.php')
          }, 200);
        });
    </script>


    <!--    MEGA SECRETARY  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_secretary").load('fetch_secretary_vote_MEGA.php')
          }, 200);
        });
    </script>

        <!--    ACT SECRETARY  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_secretary").load('fetch_secretary_vote_ACT.php')
          }, 200);
        });
    </script>

    <!------------------------       TREASURER      ---------------------------------->

     <!--    TAYO TREASURER  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_treasurer").load('fetch_treasurer_vote_TAYO.php')
          }, 200);
        });
    </script>


    <!--    MEGA TREASURER  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_treasurer").load('fetch_treasurer_vote_MEGA.php')
          }, 200);
        });
    </script>

        <!--    ACT TREASURER -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_treasurer").load('fetch_treasurer_vote_ACT.php')
          }, 200);
        });
    </script>


    <!------------------------       AUDITOR      ---------------------------------->

     <!--    TAYO AUDITOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_auditor").load('fetch_auditor_vote_TAYO.php')
          }, 200);
        });
    </script>


    <!--    MEGA AUDITOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_auditor").load('fetch_auditor_vote_MEGA.php')
          }, 200);
        });
    </script>

        <!--    ACT AUDITOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_auditor").load('fetch_auditor_vote_ACT.php')
          }, 200);
        });
    </script>


<!-------------------------      SENATOR                          ---------------->

<!--  BALAGULAN   --->
<script>
      $(document).ready(function(){
          setInterval(function(){
            $("#balagulan_fetch").load('balagulan_count.php')
          }, 200);
        });
    </script>


    <!--   BANDOJA -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#bandoja_fetch").load('bandoja_count.php')
          }, 200);
        });
    </script>

        <!--    BONAO -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#bonao_fetch").load('bonao_count.php')
          }, 200);
        });
    </script>


    <!--  BONDAL --->
<script>
      $(document).ready(function(){
          setInterval(function(){
            $("#bondal_fetch").load('bondal_count.php')
          }, 200);
        });
    </script>


    <!--   CASQUEJO    -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#casquejo_fetch").load('casquejo_count.php')
          }, 200);
        });
    </script>

        <!--    DABALOS -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#dabalos_fetch").load('dabalos_count.php')
          }, 200);
        });
    </script>


    <!--  DALING --->
<script>
      $(document).ready(function(){
          setInterval(function(){
            $("#daling_fetch").load('daling_count.php')
          }, 200);
        });
    </script>


    <!--   ELNAS   -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#elnas_fetch").load('elnas_count.php')
          }, 200);
        });
    </script>

        <!--    GOMEZ -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#gomez_fetch").load('gomez_count.php')
          }, 200);
        });
    </script>


        <!--  HORCASITAS --->
<script>
      $(document).ready(function(){
          setInterval(function(){
            $("#horcasitas_fetch").load('horcasitas_count.php')
          }, 200);
        });
    </script>


    <!--   LIGNIG   -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#lignig_fetch").load('lignig_count.php')
          }, 200);
        });
    </script>

        <!--    LOOD -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#lood_fetch").load('lood_count.php')
          }, 200);
        });
    </script>



            <!--  LUSTERIO --->
<script>
      $(document).ready(function(){
          setInterval(function(){
            $("#lusterio_fetch").load('lusterio_count.php')
          }, 200);
        });
    </script>


    <!--   MANLIQUEZ  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#manliquez_fetch").load('manliquez_count.php')
          }, 200);
        });
    </script>

        <!--    MOSCOSA -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#moscosa_fetch").load('moscosa_count.php')
          }, 200);
        });
    </script>


            <!-- PAQUIBOT  --->
<script>
      $(document).ready(function(){
          setInterval(function(){
            $("#paquibot_fetch").load('paquibot_count.php')
          }, 200);
        });
    </script>


    <!--   POLINAR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#polinar_fetch").load('polinar_count.php')
          }, 200);
        });
    </script>

        <!--    REPALA -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#repala_fetch").load('repala_count.php')
          }, 200);
        });
    </script>


        <!--    RAñESES -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#raneses_fetch").load('raneses_count.php')
          }, 200);
        });
    </script>

<!----------------------------------------------------------->

    <!--   C 1 FOR TAYO ELA  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_ela_gov").load('fetch_governor_ELA_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA ELA GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_ela_gov").load('fetch_governor_ELA_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT ELA GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_ela_gov").load('fetch_governor_ELA_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO MT  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_MT_gov").load('fetch_governor_MT_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA MT  GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_ela_vice_SFDFgov").load('fetch_governor_SCSCSC_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT MT GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_MT_gov").load('fetch_governor_MT_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->

<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO VICE  MT  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_MT_vice_gov").load('fetch_vice_governor_MT_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA MT VICE    GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_MT_vice_gov").load('fetch_vice_governor_MT_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT MT VICE  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_MT_vice_gov").load('fetch_vice_governor_MT_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->











<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO 12 GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_12_gov").load('fetch_governor_12_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA 12 GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_12_gov").load('fetch_governor_12_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT 12 GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_12_gov").load('fetch_governor_12_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->

<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO VICE  12 GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_12_vice_gov").load('fetch_vice_governor_12_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA 12  VICE    GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_12_vice_gov").load('fetch_vice_governor_12_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT 12 VICE  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_12_vice_gov").load('fetch_vice_governor_12_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->







<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO HTM GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_HTM_gov").load('fetch_governor_HTM_TAYO.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT HTM GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_HTM_gov").load('fetch_governor_HTM_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->

<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO VICE  HTM GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_HTM_vice_gov").load('fetch_vice_governor_HTM_TAYO.php')
          }, 200);
        });
    </script>

    
        <!--    C 3 FOR ACT 12 VICE HTM  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_HTM_vice_gov").load('fetch_vice_governor_HTM_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->






<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO VICE  BUSINESS ADMINISTRATION GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_BA_vice_gov").load('fetch_vice_governor_BA_TAYO.php')
          }, 200);
        });
    </script>

    
        <!--    C 3 FOR ACT 12 VICE HTM  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_BA_vice_gov").load('fetch_vice_governor_BA_MEGA.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->
















































<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO CRIM GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_crim_gov").load('fetch_governor_crim_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA CRIM GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_crim_gov").load('fetch_governor_crim_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT CRIM GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_crim_gov").load('fetch_governor_crim_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->

<!----------------------------------------------------------->


   <!--   C 1 FOR TAYO VICE  CRIM GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#tayo_crim_vice_gov").load('fetch_vice_governor_crim_TAYO.php')
          }, 200);
        });
    </script>

        <!--     C 2 FOR MEGA CRIM  VICE    GOVERNOR  -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#mega_crim_vice_gov").load('fetch_vice_governor_crim_MEGA.php')
          }, 200);
        });
    </script>


        <!--    C 3 FOR ACT CRIM VICE  GOVERNOR -->
    <script>
      $(document).ready(function(){
          setInterval(function(){
            $("#act_crim_vice_gov").load('fetch_vice_governor_crim_ACT.php')
          }, 200);
        });
    </script>


<!----------------------------------------------------------->














</html>