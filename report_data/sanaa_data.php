<?php 

// if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='delete'){
//     $id=$_GET['ids'];
//     $sql="delete from resption where id=? ";
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
    $sql="SELECT * FROM sana where date BETWEEN ? and ?   ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date));
}
else{
    $branch=$_SESSION['user']['branch_id'];
    $sql="SELECT * FROM sana where date BETWEEN ? and ?   and  branch=?  ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date,$branch));
}

//عدد الحالات الكلية
if($stmu->rowCount()>0){
?>

    <table id="multi-filter-select" class="table table-bordered table-head-bg-info " >
            <center>
                <?php if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){ ?>
                <button id="export" class="btn btn-success">Export to excel</button>
                <?php } ?>
                
            </center>
        <br>
        <thead>
            <tr>
            <th>نوع الزياره</th>
            <th>الفرع</th>
            <th>العمر</th>
            <th> الجنس</th>
            <th> رقم كود الحالة</th>
            <th>تاريخ الميلاد</th>
            <th>تاريخ تسجيل الحالة</th>
            <th>نوع الاقامة</th>
            <th>نوع العمل</th>
            <th>الحالة الاجتماعية</th>
            <th>نوع الاعاقة</th>
            <th> الخدمة</th>
            <th> التشخيص</th>
            <th> نوع الاحاله(وارد)</th>
            <th> الجهة المحال منها(وارد)</th>
            <th> نوع الاحاله(صادر)</th>
            <th> الجهة المحال اليها(صادر)</th>
            <th>تعديل</th>
            <!-- <th>حذف</th> -->
                
                
            
                
            </tr>
        </thead>
        <tfoot>
        <th>نوع الزياره</th>
            <th>الفرع</th>
            <th>العمر</th>
            <th> الجنس</th>
            <th> رقم كود الحالة</th>
            <th>تاريخ الميلاد</th>
            <th>تاريخ تسجيل الحالة</th>
            <th>نوع الاقامة</th>
            <th>نوع العمل</th>
            <th>الحالة الاجتماعية</th>
            <th>نوع الاعاقة</th>
            <th> الخدمة</th>
            <th> التشخيص</th>
            <th> نوع الاحاله(وارد)</th>
            <th> الجهة المحال منها(وارد)</th>
            <th> نوع الاحاله(صادر)</th>
            <th> الجهة المحال اليها(صادر)</th>


            <th>تعديل</th>
            <!-- <th>حذف</th> -->
        </tfoot>
        <tbody>
            <?php

            
                foreach($stmu->fetchAll() as $row) 
                        {
                        
                        ?>

                            <tr>
                                <td><?php echo $row['type']; ?></td>
                                <td>
                                    <?php
                                    $sql = "select * from branch where  id=? ";
                                    $stm = $con->prepare($sql);
                                    $stm->execute(array($row['branch']));
                                    $branch = $stm->fetch();
                                    $branch_name = $branch['branch_name'];
                                    echo $branch_name;
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    $sql = "SELECT 
                                                YEAR(CURDATE()) - YEAR(brithday) - 
                                                (DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
                                            FROM sana
                                            WHERE id = ?    ";
                                    $stmu = $con->prepare($sql);
                                    $stmu->execute(array($row['id']));
                                    $row_brithday_sex = $stmu->fetch();
                                    echo $row_brithday_sex['age']; ?>
                                </td>
                                <td><?php echo $row['sex']; ?></td>
                                <td><?php echo $row['code']; ?></td>
                                <td><?php echo $row['brithday']; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td><?php echo $row['place']; ?></td>
                                <td><?php echo $row['work']; ?></td>
                                <td><?php echo $row['social_status']; ?></td>
                                <td><?php echo $row['Disability']; ?></td>
                                <td><?php echo $row['services']; ?></td>
                                <td><?php echo $row['diagnosis']; ?></td>
                                <td><?php echo $row['type_con_from']; ?></td>
                                <td><?php echo $row['side_con_from']; ?></td>
                                <td><?php echo $row['type_con_to']; ?></td>
                                <td><?php echo $row['side_con_to']; ?></td>

                                <td>
                                        <a href="sana_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
                                            تعديل
                                        </a>
                                    </td>
                                    
                            </tr>
                        <?php
                                
                        
                    }		
                }	
            
            else{
                echo' <div class="alert alert-danger">NO Row</div>';
            }
            
                
                ?>
            
            
        </tbody>
        </table>