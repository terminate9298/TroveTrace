
                <?php  date_default_timezone_set('Asia/Calcutta');
                                                                                                    date_default_timezone_set('Asia/Calcutta');
                                                                                                    $info = getdate();
                                                                                                    $date = $info['mday'];
                                                                                                    $month = $info['mon'];
                                                                                                    $year = $info['year'];
                                                                                                    $hour = $info['hours'];
                                                                                                    $min = $info['minutes'];
                                                                                                    $sec = $info['seconds'];
                                                                                                   $flag=0;
                                                                                                   $sum=($date-16)*1440+$hour*60+$min;
                                                                                          //if($sum>=1077&&$sum<1078)
                                                                                                            $flag=1;
                                                                                                            if($flag==0)
                                                                                                            { ?>
                                                                                                              <script type="text/javascript">
                                                                                                              alert("contest finished");
                                                                                                              window.location.href="rank.php";

                                                                                                              </script>
                                                                                                              <?php die();
                                                                                                            }
                                                                                                            ?>
