                                    <?php
                                    	session_start();
                                        $link = mysqli_connect("localhost","root","19976112","election");
                                        $sql2 = mysqli_query($link, "SELECT COUNT(*) 'TOTAL' FROM VOTES where president  = 'Sales, Ivan - MEGA'");
                                        $res2 = mysqli_fetch_array($sql2);
                                        $alllogs = $res2['TOTAL'];

                                        echo $alllogs;

                                    ?>
