<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
             <th  >الفرع </th>
             <th  >الوظيفة</th>
             <th  >  نوع التشخيص   </th>
             <th  >الجنس </th>
             <th  >القيمة </th>
        </tr>
    </thead>
                    
    <tbody>
  



        <?php
                $total=0;
                $sex=array("ذكر","انثى");
                if($from_date<="2023-05-5"){
                    $diagnosis_type=array(
                        "Neurodevelopmental Disorders /إضطرابات النمو العصبية",
                        "Schizophrenia Spectrum and Other Psychotic Disorders / طيف الفصام والإضطرابات الذهانية الأخرى",
                        "Bipolar and Related Disorders / ثنائي القطب والاضطرابات ذات الصلة",
                        "Depressive Disorders / الاضطرابات الاكتئابية",
                        "Anxiety Disorders / اضطرابات القلق",
                        "Obsessive-Compulsive and Related Disorders /الوسواس القهري والاضطرابات ذات الصلة",
                        "Dissociative Disorders / الاضطرابات التفارقية",
                        "Somatic Symptom and Related Disorders /الأعراض الجسدية والاضطرابات ذات الصلة",
                        "Feeding and Eating Disorders/اضطرابات التغذية والأكل",
                        "Elimination Disorders / اضطرابات الإفراغ",
                        "Sleep-Wake Disorders / اضطرابات النوم واليقظة",
                        "Sexual Dysfunctions / اختلالات الوظيفة الجنسية",
                        "Gender Dysplioria / الانزعاج من الجندر",
                        "Disruptive, impuise-Control, and Conduct Disorders / اضطرابات التشوش والتحكم بالاندفاع والمسلك",
                        "Substance-Related and Addictive Disorders / الاضطرابات المتعلقة بمادة والإدمانية",
                        "Neurocognitive Disorders / الاضطرابات العصبية المعرفية",
                        "Personality Disorders /اضطرابات الشخصية",
                        "Paraphilic Disorders / اضطرابات الولع الجنسي",
                        "Other Mental Disorders /اضطرابات عقلية أخرى",
                        "Medication-Induced movement Disorders and Other Adverse Effects of mediction/ اضطرابات الحركة المحدثة بالأدوية والتأثيرات الجانبية الأخرى للأدوية",
                        "Other Conditions That may Be a Focus of Ciinicai Attention /حالات أخرى قد تكون محوراً للأهتمام السريري",
                        "Trauma- and Stressor-Related Disorders /الاضطرابات المتعلقة بالصدمة والإجهاد"); 
                        
                } 
                if($from_date>="2023-05-06"){
                    $diagnosis_type=array(
                        "Acute Stress (ACU) /الإجهاد الحاد (ACU)",
                        "Grief (GRI) / الحزن",
                        "Moderate-severe Depressive Disorder (DEP) /اضطراب الاكتئاب المتوسط الشديد",
                        "Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة",
                        "Psychosis (PSY) / الذهان",
                        "Epilepsy/Seizures (EPI) /الصرع / النوبات",
                        "Intellectual Disability (ID) /الإعاقة الذهنية",
                        "Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات",
                        "Suicide (SUI) /الانتحار",
                        "Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية"

                    );
                }
                for($i=0;$i < sizeof($diagnosis_type);$i++){
                for($n=1;$n<=4;$n++){
                        // <!-- 0 to 9 and +60 -->
                        if($n==1||$n==4){
                            for($j=0;$j<sizeof($sex);$j++){
                                echo "<tr>";

                                echo "<td>";
                                    echo "كل الفروع" ;
                                echo "</td>";

                            
                                echo "<td>";
                                        echo $diagnosis_type[$i] ;
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
                                        
                                        $sql="SELECT * from resption as res join psyshological as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) <= ?) and (res.type=?) and (psy.diagnosis like ?) and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"%$diagnosis_type[$i]%",$sex[$j],"%$project%",$from_date,$to_date,'4','5','6' ));
                                        $total=$total+ $stm->rowCount();
                                        echo $stm->rowCount();
                                    }
                                    elseif($n==4){
                                        $age=60;
                                        $sql="SELECT * from resption as res join psyshological as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) >= ?) and (res.type=?) and (psy.diagnosis like ?) and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                        $stm=$con->prepare($sql); 
                                        $stm->execute(array($age,'جديد',"%$diagnosis_type[$i]%",$sex[$j],"%$project%",$from_date,$to_date,'4','5','6'));
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
                                    echo $diagnosis_type[$i] ;
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
                                

                                    $sql="SELECT * from resption as res join psyshological as psy on (res.code=psy.code) where (TIMESTAMPDIFF(YEAR,res.brithday,CURDATE())  between ? and ?) and (res.type=?) and (psy.diagnosis like ?) and  (res.sex=? ) and (res.project like ?) and psy.date between ? and ? and (res.branch IN(?,?,?)) ";
                                    $stm=$con->prepare($sql); 
                                    $stm->execute(array($from_age,$to_age,'جديد',"%$diagnosis_type[$i]%",$sex[$j],"%$project%",$from_date,$to_date,'4','5','6'));
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