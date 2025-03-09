<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
             <th  >الفرع </th>
             <th  >الوظيفة</th>
             <th  >  انواع العنف  </th>
             <th  >الجنس </th>
             <th  >القيمة </th>
        </tr>
    </thead>
                    
    <tbody>
  



        <?php
                $total=0;
                $sex=array("ذكر","انثى");
                $violense_type=array("intimate partner violence","Forced Marriage","Psychological \Emotional Abuse","Physical Assault","Denial of recourse - opportunities or services","Sexual Assault","Rape","Having a mental disorder");
                for($i=0;$i < sizeof($violense_type);$i++){
                    for($n=1;$n<=4;$n++){
                        // <!-- 0 to 9 and +60 -->
                        if($n==1||$n==4){
                            for($j=0;$j<sizeof($sex);$j++){
                                echo "<tr>";

                                echo "<td>";
                                    $sql="select * from branch where  id=? ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($branch));
                                    $branchs=$stm->fetch();
                                    $branchs=$branchs['branch_name'];
                                    echo $branchs;
                                echo "</td>";

                            
                                echo "<td>";
                                        echo $violense_type[$i] ;
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
                                        echo $sex[$j];
                                echo "</td>";
                                
                                echo "<td>";
                                    if($n==1){
                                        $age=9;
                                        
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?) and (psy.violense like ?) and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ? and (res.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"%$violense_type[$i]%",$sex[$j],"%$project%",$from_date,$to_date,$branch ));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.violense like ?) and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ? and (res.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"%$violense_type[$i]%",$sex[$j],"%$project%",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                echo "</td>";
                                
                            

                            
                                
                                echo "</tr> ";
                            }
                        
                        }
                        elseif($n==2||$n==3){
                            
                            
                            for($j=0;$j<sizeof($sex);$j++){
                            

                                echo "<tr>";

                                echo "<td>";
                                    $sql="select * from branch where  id=? ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($branch));
                                    $branchs=$stm->fetch();
                                    $branchs=$branchs['branch_name'];
                                    echo $branchs;
                                echo "</td>";

                                echo "<td>";
                                    echo $violense_type[$i] ;
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
                                    echo $sex[$j];
                                echo "</td>";
                                
                                echo "<td>";
                                

                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE())  between ? and ?) and (res.type=?) and (psy.violense like ?) and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ? and (res.branch=?)";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',"%$violense_type[$i]%",$sex[$j],"%$project%",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
                                echo "</td>";
                                
                            

                            
                            
                                echo "</tr> ";

                            }
                            
                        }
                    }
                }

                echo "<tr>";
                    echo"<td colspan=4>الاجمالي</td>";
                    echo"<td> $total </td>";  
                echo"</tr>";
            ?>

          
      
                 
        
        
    </tbody>
</table>