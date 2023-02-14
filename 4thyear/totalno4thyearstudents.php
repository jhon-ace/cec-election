                                    <?php
                                    session_start();
                                        $link = mysqli_connect("localhost","root","19976112","election");
                                        $vot = "finish voting";
                                        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM students where stud_year = '4th Year'");
                                        $res2 = mysqli_fetch_array($sql2);
                                        $alllogs = $res2['TOTAL'];

                                        echo $alllogs;

                                    ?>
