                                    <?php
                                    session_start();
                                        $link = mysqli_connect("localhost","root","19976112","election");
                                        $vot = "finished voting";
                                        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM students WHERE voting_status = '$vot' and stud_year = '4th Year' AND stud_block_status = 'none' AND stud_status = '1'");
                                        $res2 = mysqli_fetch_array($sql2);
                                        $alllogs = $res2['TOTAL'];

                                        echo $alllogs;

                                    ?>
