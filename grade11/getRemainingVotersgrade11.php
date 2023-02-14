                                    <?php
                                    session_start();
                                        $link = mysqli_connect("localhost","root","","election");
                                        $vot = "finished voting";
                                        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM students WHERE voting_status = 'ready to vote' AND stud_year = 'G - 11' AND stud_status = '0' and stud_block_status = 'unblock'");
                                        $res2 = mysqli_fetch_array($sql2);
                                        $alllogs = $res2['TOTAL'];

                                        echo $alllogs;

                                    ?>
