 <?php 
 $date= date('Y-m-d');
 $user=$_SESSION['user']['id'];

 if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){
    $sql="SELECT * FROM consult_his_psychology  where date BETWEEN ? and ?      ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date));
}
else{
    $branch=$_SESSION['user']['branch_id'];
    $sql="SELECT * FROM consult_his_psychology  where date BETWEEN ? and ?   and  branch=?   ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date,$branch));
}

 //عدد الحالات الكلية
 if($stmu->rowCount()>0){
 
 ?>

    <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
            <center>
                <?php if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){ ?>
                    <button id="export" class="btn btn-success">Export to excel</button>
                <?php } ?>     
            </center>
        <thead>
            <tr>
            <th>اسم الموظف</th>
            <th >نوع التسجيل</th>
            <th >الفرع</th>
            <th> العمر</th>
            <th> الجنس</th>
            <th> رقم كود الحالة</th>
            <th> مقدم الاستشارة</th>
            <th> نوع الاستشارة</th>
            <th> الاجراء الذي تم</th>

            <th >التاريخ</th>
            <th>تعديل</th>
                
                
            
                
            </tr>
        </thead>
        <tfoot>
            <th>اسم الموظف</th>
            <th >نوع التسجيل</th>
            <th >الفرع</th>
            <th> العمر</th>
            <th> الجنس</th>
            <th> رقم كود الحالة</th>
            <th> مقدم الاستشارة</th>
            <th> نوع الاستشارة</th>
            <th> الاجراء الذي تم</th>
            
            
            
            
            <th >التاريخ</th>
            <th>تعديل</th>
        </tfoot>
        <tbody>
            <?php

            {
                foreach($stmu->fetchAll() as $row) 
                        {
                        
                        ?>

                        <tr>
                            <td>
                                <?php 
                                $sql="select * from user where  id=? ";
                                $stm=$con->prepare($sql); 
                                $stm->execute(array($row['sender_name']));
                                $name=$stm->fetch();
                                $sender_name=$name['name'];
                                echo $sender_name;
                                ?>
                            </td>
                            <td><?php echo $row['type'];?></td>
                            <td>
                                <?php 
                                $sql="select * from branch where  id=? ";
                                $stm=$con->prepare($sql); 
                                $stm->execute(array($row['branch']));
                                $branch=$stm->fetch();
                                $branch_name=$branch['branch_name'];
                                echo $branch_name;
                                ?>
                            </td>
                            <td>
                                <?php
                                    if($_SESSION['user']['rule_id']==16){
                                        $sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM hotline where code =?  and type=?    ";
                                    }
                                    else{
                                        $sql="SELECT 
                                                YEAR(CURDATE()) - YEAR(brithday) - 
                                                (DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
                                            FROM resption
                                            WHERE code = ? AND type = ?    ";
                                    }
                                $stmu=$con->prepare($sql); 
                                $stmu->execute(array($row['code'],'جديد'));
                                $row_brithday_sex=$stmu->fetch();
                                echo $row_brithday_sex['age']; ?>
                            </td>
                            <td><?php echo $row_brithday_sex['sex']?></td>
                            <td><?php echo $row['code'];?></td>
                            <td><?php echo $row['intro_consulation'];?></td>
                            <td><?php echo $row['type_consulation'];?></td>
                            <td><?php echo $row['actions'];?></td>
                            
                            <td><?php echo $row['date'];?></td>
                            <td>
                                <a href="consult_his_psychology_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
                                    <i class="fa fa-pencil"></i>تعديل
                                </a>
                            </td>

                            
                        
                        </tr>
                        <?php
                                
                        
                    }		
                }	
            }
            else{
                echo' <div class="alert alert-danger">NO Row</div>';
            }
            
                
                ?>
            
            
        </tbody>
    </table>