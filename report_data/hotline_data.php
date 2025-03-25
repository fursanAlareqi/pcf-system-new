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
    $sql="SELECT * FROM hotline  where date BETWEEN ? and ?      ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date));
}
else{
    $branch=$_SESSION['user']['branch_id'];
    $sql="SELECT * FROM hotline  where date BETWEEN ? and ?   and  branch=?   ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date,$branch));
}
//عدد الحالات الكلية

if($stmu->rowCount()>0){

?><table id="multi-filter-select" class="table table-bordered table-head-bg-info  " >
     <center>
     <?php if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){ ?>
                <button id="export" class="btn btn-success">Export to excel</button>
                <?php } ?>        </center>
        <br>
<thead>
    <tr>
    <th >نوع التسجيل</th>
    <th >الفرع</th>
    <th>العمر</th>
    <th> الجنس</th>
    <th> رقم كود الحالة</th>
    <th>الاسم</th>
    <th>رقم الهاتف</th>
    <th>تاريخ الميلاد</th>
    <th>مكان الميلاد</th>
    <th>تاريخ تسجيل الحالة</th>
    <th>كيف عرف بخدمات المؤسسة</th>
    <th>نوع الاقامة</th>
    <th>المديرية</th>
    <th>المحافظة</th>
    <th>المحافظة التي نزح منها النزوح</th>
    <th>سبب النزوح</th>
    <th>مستوى الدراسة</th>

    <th>نوع العمل</th>
    <th>الحالة الاجتماعية</th>
    <th>تعديل</th>
        
        
    
        
    </tr>
</thead>
<tfoot>
<th >نوع التسجيل</th>
    <th >الفرع</th>
    <th>العمر</th>
    <th> الجنس</th>
    <th> رقم كود الحالة</th>
    <th>الاسم</th>
    <th>رقم الهاتف</th>
    <th>تاريخ الميلاد</th>
    <th>مكان الميلاد</th>
    <th>تاريخ تسجيل الحالة</th>
    <th>كيف عرف بخدمات المؤسسة</th>
    <th>نوع الاقامة</th>
    <th>المديرية</th>
    <th>المحافظة</th>
    <th>المحافظة التي نزح منها النزوح</th>
    <th>سبب النزوح</th>
    <th>مستوى الدراسة</th>

    <th>نوع العمل</th>
    <th>الحالة الاجتماعية</th>
    <th>تعديل</th>
</tfoot>
<tbody>
    <?php

    {
        foreach($stmu->fetchAll() as $row) 
                {
                
                ?>

                <tr>
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
                        $sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM hotline where code =?  and type=?    ";	
                        $stmu=$con->prepare($sql); 
                        $stmu->execute(array($row['code'],'جديد'));
                        $row_brithday_sex=$stmu->fetch();
                        echo $row_brithday_sex['age']; ?>
                    </td>
                    <td><?php echo $row['sex'];?></td>
                    <td><?php echo $row['code'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['brithday'];?></td>
                    <td><?php echo $row['brithday_blace'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['know_our'];?></td>
                    <td><?php echo $row['place'];?></td>
                    <td><?php echo $row['department'];?></td>
                    <td><?php echo $row['briefness'];?></td>
                    <td><?php echo $row['plasce_from_come'];?></td>
                    <td><?php echo $row['becouse_come'];?></td>
                    <td><?php echo $row['studing'];?></td>
                    <td><?php echo $row['work'];?></td>
                    <td><?php echo $row['social_status'];?></td>
                    
                    <td>
            <a href="hotline_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
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
           