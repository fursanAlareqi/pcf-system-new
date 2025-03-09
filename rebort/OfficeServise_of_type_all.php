<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info " >
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>

    <thead  >
        <tr>
        <th >الكود</th>
            <th>الجنس</th>
            <th>العمر</th>
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

            $sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age,code,sex,briefness,date,place,know_our,sender_name FROM resption r join user u on u.id=r.sender_name  where  date between ? and ? and u.type=? ";	
            $stm=$con->prepare($sql); 
            $stm->execute(array($from_date,$to_date,'مكتب'));
            //عدد الحالات الكلية
            if($stm->rowCount()>0){
                foreach($stm->fetchAll() as $row) 
				    {
                        echo "<tr>";
                        echo"<td>".$row['code']."</td>";
                        echo"<td>".$row['sex']."</td>";
                        echo"<td>".$row['age']."</td>";
                        echo"<td>".$row['briefness']."</td>";
                        echo"<td>".$row['place']."</td>";
                        echo"<td>".$row['know_our']."</td>";
                        echo"<td>".$row['date']."</td>";
                        echo "<td>";
                        $sql="SELECT * FROM individual_sessions i join user u on u.id=i.sender_name  where i.code=? and i.date=? and u.type=?";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],'مكتب'));
                        if($stmu->rowCount()>0){
                            echo "جلسة فردية,";
                        }
                        $sql="SELECT c.* FROM consult_his_psychology c join user u on u.id=c.sender_name where c.code=? and c.date = ? and u.type=?";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],$row['date'],'مكتب'));
                        if($stmu->rowCount()>0){
                            echo "استشارة نفسية,";
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