<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
             <th  >الفرع </th>
             <th  >الحالة الاجتماعية </th>
             <th  >الفئه العمرية </th>
             <th  >الجنس </th>
             <th  >القيمة </th>
        </tr>
    </thead>
                    
    <tbody>
  



        <?php
                $total=0;
                $sex=array("ذكر","انثى");
                $Marital_status=array("عازب","مخطوب/ة","مطلق/ة","متزوج/ة","أرمل/ة","طفل/ة","منفصل بشكل غير رسمي");
                for($i=0;$i < sizeof($Marital_status);$i++){
                    for($n=1;$n<=4;$n++){
                        // <!-- 0 to 9 and +60 -->
                        if($n==1||$n==4){
                            for($j=0;$j<sizeof($sex);$j++){
                                echo "<tr>";


                                echo "<td>";
                                    echo "كل الفروع" ;
                                echo "</td>";

                                echo "<td>";
                                        echo $Marital_status[$i] ;
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
                                        $sql="SELECT * from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) <= ?) and (social_status=?)  and  (sex=? ) and project like ?  and  date between ? and ? and (branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,$Marital_status[$i],$sex[$j],"%$project%",$from_date,$to_date,'4','5','6'));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= ?) and (social_status=?)  and  (sex=? ) and project like ?  and  date between ? and ? and (branch IN(?,?,?)) "; 
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,$Marital_status[$i],$sex[$j],"%$project%",$from_date,$to_date,'4','5','6'));
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
                                    echo "كل الفروع" ;
                                echo "</td>";
                                echo "<td>";
                                    echo $Marital_status[$i] ;
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
                                    $sql="SELECT * from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) between ? and ?) and (social_status=?)  and  (sex=? ) and project like ? and  date between ? and ? and (branch IN(?,?,?)) "; 
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,$Marital_status[$i],$sex[$j],"%$project%",$from_date,$to_date,'4','5','6'));
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