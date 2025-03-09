<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
            <th  colspan='12' >GBV</th>
            <th rowspan='3' > GBV اجمالي </th>
            <th colspan='12' >NON GBV</th>
            <th rowspan='3' > NON GBV اجمالي </th>
            <th rowspan='3' >الاجمالي الكلي</th>
            <th  colspan='8' >GBV</th>
            <th rowspan='3' > GBV اجمالي </th>
            <th colspan='8' >NON GBV</th>
            <th rowspan='3' > NON GBV اجمالي </th>
            <th rowspan='3' >الاجمالي الكلي</th>
        </tr>
      
        <tr>
            <th colspan='4' >مقيم/ة</th>
            <th colspan="4">لاجى/ة</th>
            <th colspan='4' >نازح/ة</th>
            

            <th colspan='4' >مقيم/ة</th>
            <th colspan="4">لاجى/ة</th>
            <th colspan='4' >نازح/ة</th>

        
            <th colspan='4' >الاحالات الواردة</th>
            <th colspan="4">الاحالات الصادرة</th>
            <th colspan='4' >الاحالات الواردة</th>
            <th colspan="4">الاحالات الصادرة</th>
        </tr>
        <tr>
            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>

            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            

            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            
            
            
            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            
            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            
            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            

            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            
            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            

            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>
            
            <th > رجال </th>
            <th >نساء </th>
            <th > فتيان</th>
            <th >فتيات </th>

                
        </tr>
    </thead>
                    
    <tbody>
  

        <tr>
          
             <!-- 10 to 17 -->
             <?php
                $sex="";
                $place_type=array("مقيم/ة","لاجى/ة","نازح/ة");
                $total=0;
                for($n=1;$n<=2;$n++){
                    // <!-- 0 to 9 and +60 -->
                    if($n==1){
                        for($i=0;$i < sizeof($place_type);$i++){
                            for($j=0;$j<2;$j++){
                                $age=18;
                                if($j==0){
                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (res.place=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"ذكر",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>";

                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (res.place=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"انثى",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>";
                                 
                                }
                                elseif($j==1){
                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (res.place=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"ذكر",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>";

                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (res.place=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"انثى",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>"; 
                                }
                            }
                        }
                        echo "<td>";        
                            echo $total;
                        echo "</td>"; 
                    }
                    elseif($n==2){
                        $ntotal=0;
                        for($i=0;$i < sizeof($place_type);$i++){
                            for($j=0;$j<2;$j++){
                                $age=18;
                                if($j==0){
                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (res.place=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"ذكر",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    $ntotal=$ntotal+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>";

                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (res.place=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"انثى",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    $ntotal=$ntotal+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>";
                                 
                                }
                                elseif($j==1){
                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (res.place=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"ذكر",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    $ntotal=$ntotal+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>";

                                    echo "<td>";
                                    $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (res.place=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($age,'جديد',$place_type[$i],"انثى",$from_date,$to_date,$branch));
                                    $total=$total+ $stm->rowCount();
                                    $ntotal=$ntotal+ $stm->rowCount();
                                    echo $stm->rowCount();
                                    echo "</td>"; 
                                }
                            }
                        }
                        echo "<td>";        
                        echo $ntotal;
                        echo "</td>"; 
                    }
                }
            ?>
            
            

                                <td>
                                     <?php 
                                        
                                        echo $total;
                                            
                                    ?>
                                </td>


                                <?php
                $sex="";
                $side_type=array("وارد","صادر");
                $total=0;
                for($n=1;$n<=2;$n++){
                    // <!-- 0 to 9 and +60 -->
                    if($n==1){
                        for($i=0;$i < sizeof($side_type);$i++){
                            if($side_type[$i]=="وارد"){
                                for($j=0;$j<2;$j++){
                                    $age=18;
                                    if($j==0){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
                                     
                                    }
                                    elseif($j==1){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>"; 
                                    }
                                }
                            }
                            elseif($side_type[$i]=="صادر"){
                                for($j=0;$j<2;$j++){
                                    $age=18;
                                    if($j==0){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
                                     
                                    }
                                    elseif($j==1){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense <> '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>"; 
                                    }
                                }
                            }
                            
                        }
                        echo "<td>";        
                        echo $total;
                        echo "</td>"; 
                    }
                    elseif($n==2){
                        $ntotal=0;
                        for($i=0;$i < sizeof($side_type);$i++){
                            if($side_type[$i]=="وارد"){
                                for($j=0;$j<2;$j++){
                                    $age=18;
                                    if($j==0){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
                                     
                                    }
                                    elseif($j==1){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_out=? or psy.type_con_from=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة خارجية وارد","احالة داخلية وارد","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>"; 
                                    }
                                }
                            }
                            elseif($side_type[$i]=="صادر"){
                                for($j=0;$j<2;$j++){
                                    $age=18;
                                    if($j==0){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
                                     
                                    }
                                    elseif($j==1){
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","ذكر",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>";
    
                                        echo "<td>";
                                        $sql="SELECT * from resption as res join mange_convert as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) < ?) and (res.type=?) and (psy.type_con_to=? or psy.type_con_come_out=?) and (psy.violense = '') and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ?  and (psy.branch=?) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"احالة داخلية صادر","احالة خارجية صادر","انثى",$from_date,$to_date,$branch));
                                        $total=$total+ $stm->rowCount();
                                        $ntotal=$ntotal+ $stm->rowCount();
                                        echo $stm->rowCount();
                                        echo "</td>"; 
                                    }
                                }
                            }
                            
                        }
                        echo "<td>";        
                        echo $ntotal;
                        echo "</td>"; 
                    }
                }
            ?>
                                <td>
                                     <?php 
                                        
                                        echo $total;
                                            
                                    ?>
                                </td>
             
        </tr>

                 
        
        
    </tbody>
</table>