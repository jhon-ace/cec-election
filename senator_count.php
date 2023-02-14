

                                    <?php
                                    session_start();
                                    $link = mysqli_connect("localhost","root","19976112","election");
                                    $ID = $_SESSION['login_name'];;
									$res1 = "SELECT * FROM senator WHERE stud_ayd = '$ID'";
									$result1 = mysqli_query($link, $res1) or die(mysql_error());
									    for($i=0; $i<$num_rows=mysqli_fetch_array($result1);$i++) {
									        $logid=$num_rows["stud_ayd"];
									        
        
    }
                           
                                        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM senator where stud_ayd  = '$ID'");
                                        $res2 = mysqli_fetch_array($sql2);
                                        $alllogs = $res2['TOTAL'];

                                        echo $alllogs;

                                    ?>