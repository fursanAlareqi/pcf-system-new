<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
            <th >PSS Centers</th>
            <th>ServicesAR</th>
            <th>ServicesEN</th>
            <th>Age group</th>
            <th>Visit Type</th>
            <th>Sex</th>
            <th>Value</th>
        </tr>
      

    </thead>
                    
    <tbody>


    <?php
     $user_type=array();
    $sql="SELECT * from user where rule_id=? ";
    $stm=$con->prepare($sql); 
    $stm->execute(array(16));
    foreach($stm->fetchAll() as $row) {
        $user_type[]=$row['id'];
    }
   

                $total=0;
                $sex=array("ذكر","انثى");
                $type=array("جديد","عودة");
                for($n=1;$n<=4;$n++){
                    // <!-- 0 to 9 and +60 -->
                    if($n==1||$n==4){
                        for($i=0;$i < sizeof($type);$i++){
                            for($j=0;$j<sizeof($sex);$j++){
                                echo "<tr>";
                                
                                echo "<td>";
                                     echo "كل الفروع" ;
                                echo "</td>";

                                echo "<td>";
                                    echo "  الاستشاراة  ";
                                echo "</td>";
                                echo "<td>";
                                    echo "Psychiatric Consultations";
                                echo "</td>";

                                echo "<td>";
                                    if($n==1){
                                        echo "0 to 9 years";
                                    }
                                    elseif($n==4){
                                        echo "+60 years";
                                    }
                                echo "</td>";

                                echo "<td>";
                                    echo $type[$i];
                                echo "</td>";

                                echo "<td>";
                                     echo $sex[$j];
                                echo "</td>";
                                
                                echo "<td>";
                                $num=0;
                                for($user_type_loop=0;$user_type_loop<sizeof($user_type);$user_type_loop++){
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from hotline as res join consult_his_psychology as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and  (psy.type=? ) and psy.date between ? and ? and psy.sender_name=? ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],$type[$i],$from_date,$to_date,$user_type[$user_type_loop]));
                                        $total=$total+ $stm->rowCount();
                                        $num = $num +$stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from hotline as res join consult_his_psychology as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and  (psy.type=? ) and psy.date between ? and ? and psy.sender_name=? ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],$type[$i],$from_date,$to_date,$user_type[$user_type_loop]));
                                        $total=$total+ $stm->rowCount();
                                        $num = $num +$stm->rowCount();
                                    }
                                }
                                echo $num;
                            
                                    
                                echo "</td>";
                                
                            

                            
                               
                                echo "</tr> ";
                            }
                        }
                    }
                    elseif($n==2||$n==3){
                        for($i=0;$i < sizeof($type);$i++){
                            for($j=0;$j<sizeof($sex);$j++){
                              

                                echo "<tr>";
                                
                                echo "<td>";
                                     echo "كل الفروع" ;
                                echo "</td>";

                                echo "<td>";
                                    echo "  الاستشاراة  ";
                                echo "</td>";
                                echo "<td>";
                                    echo "Psychiatric Consultations";
                                echo "</td>";

                                echo "<td>";
                                
                                    if($n==2){
                                        $from_age=10;
                                        $to_age=17;
                                        echo "10 to 17 years";
                                    }
                                    elseif($n==3){
                                        $from_age=18;
                                        $to_age=59;
                                        echo "18 to 59 years";
                                    }
                                echo "</td>";

                                echo "<td>";
                                    echo $type[$i];
                                echo "</td>";

                                echo "<td>";
                                     echo $sex[$j];
                                echo "</td>";
                                
                                echo "<td>";
                                $num=0;
                                for($user_type_loop=0;$user_type_loop<sizeof($user_type);$user_type_loop++){
                                    $sql="SELECT * from hotline as res join consult_his_psychology as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and  (psy.type=? ) and psy.date between ? and ? and psy.sender_name=? ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],$type[$i],$from_date,$to_date,$user_type[$user_type_loop]));
                                    $total=$total+ $stm->rowCount();
                                    $num = $num +$stm->rowCount();
                                }
                                echo $num;
                                echo "</td>";
                                
                            

                            
                               
                                echo "</tr> ";
                      
                            
                               

                      

                            
                                

                            }
                        }
                    }
                }

                echo "<tr>";
                    echo"<td colspan=6>الاجمالي</td>";
                    echo"<td> $total </td>";  
                echo"</tr>";
            ?>  
             <?php
   
    
                $total=0;
                $sex=array("ذكر","انثى");
                $type=array("جديد","عودة");
                for($n=1;$n<=4;$n++){
                    // <!-- 0 to 9 and +60 -->
                    if($n==1||$n==4){
                        for($i=0;$i < sizeof($type);$i++){
                            for($j=0;$j<sizeof($sex);$j++){
                                echo "<tr>";
                                
                                echo "<td>";
                                     echo "كل الفروع" ;
                                echo "</td>";

                                echo "<td>";
                                    echo "جلسات الدعم و الارشاد النفسي الفردي";
                                echo "</td>";
                                echo "<td>";
                                    echo "Individual psychosocial support";
                                echo "</td>";

                                echo "<td>";
                                    if($n==1){
                                        echo "0 to 9 years";
                                    }
                                    elseif($n==4){
                                        echo "+60 years";
                                    }
                                echo "</td>";

                                echo "<td>";
                                    echo $type[$i];
                                echo "</td>";

                                echo "<td>";
                                     echo $sex[$j];
                                echo "</td>";
                                
                                echo "<td>";
                                $num=0;
                                for($user_type_loop=0;$user_type_loop<sizeof($user_type);$user_type_loop++){
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from hotline as res join individual_sessions as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and  (psy.type=? ) and psy.date between ? and ? and psy.sender_name=? ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],$type[$i],$from_date,$to_date,$user_type[$user_type_loop]));
                                        if($stm->rowCount() > 0){
                                            $total=$total+ $stm->rowCount();
                                            $num = $num +$stm->rowCount();
                                        }
                                        
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from hotline as res join individual_sessions as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and  (psy.type=? ) and psy.date between ? and ? and psy.sender_name=? ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],$type[$i],$from_date,$to_date,$user_type[$user_type_loop]));
                                        if($stm->rowCount() > 0){
                                            $total=$total+ $stm->rowCount();
                                            $num = $num +$stm->rowCount();
                                        }
                                    }
                                }
                                echo $num;
                            
                                    
                                echo "</td>";
                                
                            

                            
                               
                                echo "</tr> ";
                            }
                        }
                    }
                    elseif($n==2||$n==3){
                        for($i=0;$i < sizeof($type);$i++){
                            for($j=0;$j<sizeof($sex);$j++){
                              

                                echo "<tr>";
                                
                                echo "<td>";
                                     echo "كل الفروع" ;
                                echo "</td>";

                                echo "<td>";
                                    echo "جلسات الدعم و الارشاد النفسي الفردي";
                                echo "</td>";
                                echo "<td>";
                                    echo "Individual psychosocial support";
                                echo "</td>";

                                echo "<td>";
                                
                                    if($n==2){
                                        $from_age=10;
                                        $to_age=17;
                                        echo "10 to 17 years";
                                    }
                                    elseif($n==3){
                                        $from_age=18;
                                        $to_age=59;
                                        echo "18 to 59 years";
                                    }
                                echo "</td>";

                                echo "<td>";
                                    echo $type[$i];
                                echo "</td>";

                                echo "<td>";
                                     echo $sex[$j];
                                echo "</td>";
                                
                                echo "<td>";
                                $num=0;
                                for($user_type_loop=0;$user_type_loop<sizeof($user_type);$user_type_loop++){
                                    $sql="SELECT * from hotline as res join individual_sessions as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and  (psy.type=? ) and psy.date between ? and ? and psy.sender_name=? ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],$type[$i],$from_date,$to_date,$user_type[$user_type_loop]));
                                    if($stm->rowCount() > 0){
                                        $total=$total+ $stm->rowCount();
                                        $num = $num +$stm->rowCount();
                                    }
                                    
                                }
                                echo $num;
                                echo "</td>";
                                
                            

                            
                               
                                echo "</tr> ";
                      
                            
                               

                      

                            
                                

                            }
                        }
                    }
                }

                echo "<tr>";
                    echo"<td colspan=6>الاجمالي</td>";
                    echo"<td> $total </td>";  
                echo"</tr>";
            ?>  
            

   
                </tbody>
</table>