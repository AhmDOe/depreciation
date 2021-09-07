<?php

if(isset($_POST['btn_calculate']))
                {
 
             
                                    @$amount = mysql_real_escape_string($_POST['sl_asset_cost']);
                                    @$salvage = mysql_real_escape_string($_POST['sl_salvage_cost']);
                                    $year = mysql_real_escape_string($_POST['sl_useful_life']);

                                    // echo $amount.' / '.$salvage.' / '.$year ;
                                    ECHO 'ASSET VALUE: '. $amount; echo '  GHANA CEDI';echo '<br>';echo '<br>';
                                    ECHO 'SALVAGE VALUE: '. $loan_period = $_POST['sl_salvage_cost']; echo '  GHANA CEDI'; echo '<br>';echo '<br>';
                                    ECHO 'YEARS: '. $loan_period = $_POST['sl_useful_life']; echo 'YEARS'; echo '<br>';echo '<br>';

                                    $ops_datetime = date('m/d/Y');
                                    // ECHO $ops_datetime;

                                    ECHO 'DEPRECIATION VALUE: '. $depreciation = ($amount - $salvage) / $year; echo '<br>';echo '<br>';
$yes = date('Y');
$add_days = $yes + $year;
ECHO 'DEPRECIATION TABLE';echo '<br>';echo '<br>';
                                    for ($i = $yes; $i < $add_days; $i++) {
                                        echo $depreciation.' / '.$i."<br>";
                                   } 
                                    
                                    //  $start_month_date = date($tr);
                                    //  ECHO $end_date = strtotime(date("Y-m", strtotime($start_month_date)) ."+".$depreciation."Ghana Cedi");
                        

                                    
                    // $get_cont = get_total_contribution_for_year($fiscal_year);
                    
                    //  $create_interest = mysql_query("INSERT INTO interest_tbl(year,total_contribution,interest_perc_value,added_by,date_added)
                    //        VALUES('$fiscal_year','$get_cont','$perc_of_interest','Kenneth','$datet') ") OR die(mysql_error());
                                    
                    //     if($create_interest)  
                    //     {
                    //         redirect("year_interest.php?suc");
                    //     }
                    //     else
                    //     {
                    //         redirect("year_interest.php?ops");
                    //     }
                   
                                    
                                   

                }

                ?>