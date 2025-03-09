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
  

     
          
             <!-- 10 to 17 -->
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
                                    echo "المعاينات الطبية";
                                echo "</td>";
                                echo "<td>";
                                    echo "Medical examination";
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
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join doctor as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join doctor as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
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
                                    echo "المعاينات الطبية";
                                echo "</td>";
                                echo "<td>";
                                    echo "Medical examination";
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
                                    $sql="SELECT * from resption as res join doctor as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
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
                                    echo "صرف علاج";
                                echo "</td>";
                                echo "<td>";
                                    echo "Psychotropic Medications";
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
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join pure_pharmacy as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join pure_pharmacy as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
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
                                    echo "صرف علاج";
                                echo "</td>";
                                echo "<td>";
                                    echo "Psychotropic Medications";
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
                                    $sql="SELECT * from resption as res join pure_pharmacy as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
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
                                    echo "دراسة حالة";
                                echo "</td>";
                                echo "<td>";
                                    echo "Case Study";
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
                                
                               
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join psychiatrist_talk as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join psychiatrist_talk as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                            
                                    
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
                                     echo "دراسة حالة";
                                echo "</td>";
                                echo "<td>";
                                    echo "Case Study";
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
                                    $sql="SELECT * from resption as res join psychiatrist_talk as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
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
                                    echo "الاستشارات";
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
                                
                               
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join consult_his_psychology as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        
                                        $sqls="SELECT * from resption as res join doctor as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stms=$con->prepare($sqls); 
                                        $stms->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stms->rowCount();
                                        echo $stm->rowCount()+$stms->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join consult_his_psychology as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        
                                        $sqls="SELECT * from resption as res join doctor as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stms=$con->prepare($sqls); 
                                        $stms->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stms->rowCount();
                                        echo $stm->rowCount()+$stms->rowCount();
                                    }
                            
                                    
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
                                     echo "الاستشارات";
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
                                    $sql="SELECT * from resption as res join consult_his_psychology as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    
                                    $sqls="SELECT * from resption as res join doctor as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stms=$con->prepare($sqls); 
                                    $stms->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stms->rowCount();
                                    echo $stm->rowCount()+$stms->rowCount();
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
                                
                               
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join individual_sessions as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join individual_sessions as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                            
                                    
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
                                    $sql="SELECT * from resption as res join individual_sessions as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
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
                                    echo "جلسات الدعم النفسي الأولي";
                                echo "</td>";
                                echo "<td>";
                                    echo "Psychological First Aid ";
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
                                
                               
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and (psy.find=?) and psy.date between ? and ? and (res.branch IN(?,?,?))  ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],"حصل على خدمات دعم نفسي اولي",$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and  (psy.find=?)  and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],"حصل على خدمات دعم نفسي اولي",$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                            
                                    
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
                                     echo "جلسات الدعم النفسي الأولي";
                                echo "</td>";
                                echo "<td>";
                                    echo "Psychological First Aid ";
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
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and (psy.find=?) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],"حصل على خدمات دعم نفسي اولي",$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
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
                                    echo "إدارة الحالة";
                                echo "</td>";
                                echo "<td>";
                                    echo "Case Management";
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
                                
                               
                                    if($n==1){
                                        $age=9;
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?)   and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                            
                                    
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
                                     echo "إدارة الحالة";
                                echo "</td>";
                                echo "<td>";
                                     echo "Case Management";
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
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between ? and ?) and (res.type=?)  and  (res.sex=? ) and (res.project like ?) and  (psy.type=? ) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',$sex[$j],"%$project%",$type[$i],$from_date,$to_date,'4','5','6'));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
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