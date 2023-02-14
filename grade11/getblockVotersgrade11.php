                                    <?php
                                    session_start();
                                        $link = mysqli_connect("localhost","root","","election");
                                        $vot = "block";
                                        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM students WHERE voting_status = 'unable to vote' AND stud_block_status = 'block' and stud_year = 'G - 11'");
                                        $res2 = mysqli_fetch_array($sql2);
                                        $alllogs = $res2['TOTAL'];

                                        echo $alllogs;

                                    ?>
