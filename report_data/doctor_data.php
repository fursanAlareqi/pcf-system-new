<?php
// if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='delete'){
//     $id=$_GET['ids'];
//     $sql="delete from doctor where id=? ";
//     $stm=$con->prepare($sql); 
//     $stm->execute(array($id));
//     if($stm->rowCount() > 0 )
//         {
//             echo "<div class='alert alert-success'>One Row  Deleted</div>";
//             echo "<script>
//             window.open('admin_search_data.php','_self')
//         </script>";
//         }
//     else
//         {
//             echo "<div class='alert alert-danger'>One Row Not Deleted</div>"; 
//         }

// }
$date= date('Y-m-d');
$user=$_SESSION['user']['id'];
if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){
    $sql="SELECT * FROM doctor  where date BETWEEN ? and ?      ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date));
}
else{
    $branch=$_SESSION['user']['branch_id'];
    $sql="SELECT * FROM doctor  where date BETWEEN ? and ?   and  branch=?   ";	
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
                <?php } ?>        </center>
        <br>
        <thead>
            <tr>
            <th >Sno.</th>
            <th>اسم الموظف</th>
            <th class="hidden-phone">الفرع</th>
            <th>عودة/جديدة</th>
            <th>العمر</th>
            <th>الجنس</th>
            <th> رقم كود الحالة</th>
            <th> الحالة النفسية العامة للمريض</th>
            <th>ملاحظات </th>
            <th>Physical Examination </th>
            <th>العلاج </th>
            <th>الفحص </th>
            <th>تقييم وضع الحالة</th>
            <th>التاريخ </th>
            <th >تعديل</th>
            <!-- <th>حذف</th> -->
                
                
            
                
            </tr>
        </thead>
        <tfoot>
        <th >Sno.</th>
        <th>اسم الموظف</th>
            <th class="hidden-phone">الفرع</th>
            <th>عودة/جديدة</th>
            <th>العمر</th>
            <th>الجنس</th>
            <th> رقم كود الحالة</th>
            <th> الحالة النفسية العامة للمريض</th>
            <th>ملاحظات </th>
            <th>Physical Examination </th>
            <th>العلاج </th>
            <th>الفحص </th>
            <th>تقييم وضع الحالة</th>
            <th>التاريخ </th>
            <th >تعديل</th>
            <!-- <th>حذف</th> -->
        </tfoot>
        <tbody>
            <?php

            {
                foreach($stmu->fetchAll() as $row) 
                        {
                        
                        ?>

                        <tr>
                        <td><?php echo $cnt;?></td>
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
                        <td><?php echo $row['type'];?></td>
                        <td>
                            <?php
                            $sql="SELECT 
    YEAR(CURDATE()) - YEAR(brithday) - 
    (DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
FROM resption
WHERE code = ? AND type = ?    ";	
                            $stmu=$con->prepare($sql); 
                            $stmu->execute(array($row['code'],'جديد'));
                            $row_brithday_sex=$stmu->fetch();
                            echo $row_brithday_sex['age']; ?>
                        </td>
                        <td><?php echo $row_brithday_sex['sex']?></td>
                        <td><?php echo $row['code'];?></td>
                        <td><?php echo $row['diagnosis'];?></td>
                        <td><?php echo $row['note'];?></td>
                        <td><?php echo $row['Physical_Examination'];?></td>
                        <td>
                            <?php $medical_explode =explode(",",$row['medical']);
                            foreach($medical_explode as $medical_name ){
                                echo $medical_name . '<br>';
                            }
                                ?>
                        </td>
                        
                        <td>
                            <?php $lap_explode =explode(",",$row['lap']);
                            foreach($lap_explode as $lap_name ){
                                echo $lap_name . '<br>';
                            }
                                ?>
                        </td>
                        <td><?php echo $row['appraisal'];?></td>
                        <td><?php echo $row['date'];?></td>
                        <td>
                            <a href="doctor_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
                                <i class="fa fa-pencil"></i>تعديل
                            </a>
                        </td>
                        <!-- <td>
                            <a href="?action=delete&ids=<?php echo $row['id'] ?>" class="delete"  id="    ">
                                <i class="fa fa-pencil"></i>حذف
                            </a>
                        </td> -->

                            
                        
                        </tr>
                    
                        <?php
                                $cnt=$cnt+1;		
                        
                    }		
                }	
            }
            else{
                echo' <div class="alert alert-danger">NO Row</div>';
            }
            
                
                ?>
            
            
        </tbody>
    </table>