<?php
// if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='delete'){
//     $id=$_GET['ids'];
//     $sql="delete from psychiatrist_talk where id=? ";
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
    $sql="SELECT * FROM psychiatrist_talk  where date BETWEEN ? and ?      ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date));
}
else{
    $branch=$_SESSION['user']['branch_id'];
    $sql="SELECT * FROM psychiatrist_talk  where date BETWEEN ? and ?   and  branch=?   ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date,$branch));
}

//عدد الحالات الكلية
if($stmu->rowCount()>0){


?>

    <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
            <thead>
                <tr>
                <th>اسم الموظف</th>
                <th >نوع التسجيل</th>
                <th >الفرع</th>
                <th> العمر</th>
                <th> الجنس</th>
                <th> رقم كود الحالة</th>
                <th>كلام المريض</th>
                <th>كلام الاهل</th>
                <th>الفترة</th>
                <th>الاسباب</th>
                <th>العلاج</th>
                <th>الاعراض</th>
                <th>التاريخ النفسي</th>
                <th>التاريخ الطبي والجراحي</th>
                <th>الانتحار والعدوانية</th>
                <th>الإدمان</th>
                <th>التاريخ الجنائي</th>
                <th>الاب</th>
                <th>الام</th>
                <th>الاخوة والاخوات</th>
                <th>وجود تاريخ مرضي في الاسرة</th>
                <th>الجو الاسري العام</th>
                <th>المستوى الاقتصادي</th>
                <th>ظروف الحمل و الولادة</th>
                <th>العلاقة معا الاطفال الاخرين</th>
                <th>العلامات العصبية</th>
                <th>العلاقة معاالاخرين</th>
                <th>المشكلات السلوكية</th>
                <th>التحصيل الدراسي</th>
                <th>العلاقة مع المدرسين والزملاء</th>
                <th>المهنة</th>
                <th>الزوجة</th>
                <th>الأبناء</th>
                <th>العلاقة الزوجية</th>
                <th>المزاج</th>
                <th>الأفكار</th>
                <th>الطباع</th>
                <th>العلاقات</th>
                <th>الأنشطة والهوايات</th>
                <th>العادات والإدمان</th>


                <th >المقاييس النفسية</th>
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
                <th>كلام المريض</th>
                <th>كلام الاهل</th>
                <th>الفترة</th>
                <th>الاسباب</th>
                <th>العلاج</th>
                <th>الاعراض</th>
                <th>التاريخ النفسي</th>
                <th>التاريخ الطبي والجراحي</th>
                <th>الانتحار والعدوانية</th>
                <th>الإدمان</th>
                <th>التاريخ الجنائي</th>
                <th>الاب</th>
                <th>الام</th>
                <th>الاخوة والاخوات</th>
                <th>وجود تاريخ مرضي في الاسرة</th>
                <th>الجو الاسري العام</th>
                <th>المستوى الاقتصادي</th>
                <th>ظروف الحمل و الولادة</th>
                <th>العلاقة معا الاطفال الاخرين</th>
                <th>العلامات العصبية</th>
                <th>العلاقة معاالاخرين</th>
                <th>المشكلات السلوكية</th>
                <th>التحصيل الدراسي</th>
                <th>العلاقة مع المدرسين والزملاء</th>
                <th>المهنة</th>
                <th>الزوجة</th>
                <th>الأبناء</th>
                <th>العلاقة الزوجية</th>
                <th>المزاج</th>
                <th>الأفكار</th>
                <th>الطباع</th>
                <th>العلاقات</th>
                <th>الأنشطة والهوايات</th>
                <th>العادات والإدمان</th>
                <th >المقاييس النفسية</th>
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
                                <td><?php echo $row['sick'];?></td>
                                <td><?php echo $row['facilities'];?></td>
                                <td><?php echo $row['slide'];?></td>
                                <td><?php echo $row['note'];?></td>
                                <td><?php echo $row['note2'];?></td>
                                <td><?php echo $row['note1'];?></td>
                                <td><?php echo $row['psychological'];?></td>
                                <td><?php echo $row['mental'];?></td>
                                <td><?php echo $row['organic'];?></td>
                                <td><?php echo $row['operation'];?></td>
                                <td><?php echo $row['anothe'];?></td>
                                <td><?php echo $row['father'];?></td>
                                <td><?php echo $row['mather'];?></td>
                                <td><?php echo $row['brothers'];?></td>
                                <td><?php echo $row['famlt_sick'];?></td>
                                <td><?php echo $row['famly_live'];?></td>
                                <td><?php echo $row['famly_mony'];?></td>
                                <td><?php echo $row['born'];?></td>
                                <td><?php echo $row['releshinship_childern'];?></td>
                                <td><?php echo $row['resinsh'];?></td>
                                <td><?php echo $row['releshinship_ather'];?></td>
                                <td><?php echo $row['problem'];?></td>
                                <td><?php echo $row['studing_level'];?></td>
                                <td><?php echo $row['releshinship_student'];?></td>
                                <td><?php echo $row['work'];?></td>
                                <td><?php echo $row['wife'];?></td>
                                <td><?php echo $row['children'];?></td>
                                <td><?php echo $row['releshinship_wife'];?></td>
                                <td><?php echo $row['agitator'];?></td>
                                <td><?php echo $row['ideas'];?></td>
                                <td><?php echo $row['copyright'];?></td>
                                <td><?php echo $row['releshinship'];?></td>
                                <td><?php echo $row['activity'];?></td>
                                <td><?php echo $row['adman'];?></td>
                                <td><?php echo $row['violense'];?></td>
                                <td><?php echo $row['date'];?></td>
                                <td>
                                    <a href="psychiatrist_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
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
                                    
                            
                        }		
                    }	
                }
                else{
                    echo' <div class="alert alert-danger">NO Row</div>';
                }
                
                    
                    ?>
                
                
            </tbody>
        </table>
 