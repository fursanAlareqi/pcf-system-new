<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info" >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
            <th >الكود</th>
            
            <th>جديد\عوده</th>
            <th>الجنس</th>
            <th>العمر</th>
            <th>رقم الهاتف</th>
            <th>الوظيفه</th>
            <th>المحافظة</th>
            <th>نوع الاقامة</th>
            <th> كيف عرف بخدمات الموسسة</th>
            <th>التاريخ</th>
            <th>الخدمات </th>
            <th>اسم مدخل البيانات </th>
            
        </tr>
      

    </thead>
                    
    <tbody>
        <?php

            $sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age,type,code,sex,briefness,date,place,know_our,sender_name,phone,work FROM hotline where  date between ? and ? and (branch=?)   ";	
            $stm=$con->prepare($sql); 
            $stm->execute(array($from_date,$to_date,$branch ));
            //عدد الحالات الكلية
            if($stm->rowCount()>0){
                foreach($stm->fetchAll() as $row) 
				    {
                        echo "<tr>";
                        echo"<td>".$row['code']."</td>";
                        echo"<td>".$row['type']."</td>";
                        echo"<td>".$row['sex']."</td>";
                        echo"<td>".$row['age']."</td>";
                        echo"<td>".$row['phone']."</td>";
                        echo"<td>".$row['work']."</td>";
                        echo"<td>".$row['briefness']."</td>";
                        echo"<td>".$row['place']."</td>";
                        echo"<td>".$row['know_our']."</td>";
                        echo"<td>".$row['date']."</td>";
                        echo "<td>";
                        $sql="SELECT * FROM individual_sessions i join user u on u.id=i.sender_name  where i.code=? and i.date = ? and u.rule_id=? and (i.branch=?)";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],16,$branch ));
                        if($stmu->rowCount()>0){
                            echo "جلسة فردية,";
                        }
                        $sql="SELECT c.* FROM consult_his_psychology c join user u on u.id=c.sender_name where c.code=? and c.date= ? and u.rule_id=? and (c.branch=?)";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],16,$branch ));
                        if($stmu->rowCount()>0){
                            echo "استشارة نفسية,";
                        }
                        $sql="SELECT * FROM hotline_session i join user u on u.id=i.sender_name  where i.code=? and i.date = ? and u.rule_id=? and (i.branch=?)";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],16,$branch ));
                        if($stmu->rowCount()>0){
                            echo "جلسة توعية,";
                        }
                       $sql="SELECT c.* FROM hotline_spf c join user u on u.id=c.sender_name where c.code=? and c.date= ? and u.rule_id=? and (c.branch=?)";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],16,$branch ));
                        if($stmu->rowCount()>0){
                            echo " دعم نفسي اولي,";
                        }
                         $sql="SELECT c.* FROM eduction_session c join user u on u.id=c.sender_name where c.code=? and c.date= ? and u.rule_id=? and (c.branch=?)";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],16,$branch ));
                        if($stmu->rowCount()>0){
                            echo "   تثقيف نفسي,";
                        }
                             $sql="SELECT c.* FROM mange_convert c join user u on u.id=c.sender_name where c.code=? and c.date= ? and u.rule_id=? and (c.branch=?)";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],16,$branch ));
                        if($stmu->rowCount()>0){
                            echo " احالة,";
                        }
                        echo "</td>";
                        $sql="select * from user where  id=? ";
                        $stm=$con->prepare($sql); 
                        $stm->execute(array($row['sender_name']));
                        $name=$stm->fetch();
                        $sender_name=$name['name'];
                        echo "<td>$sender_name</td>";
                        echo "</tr>";
                    }
                }
        
        ?>

   
   
    </tbody>
</table>