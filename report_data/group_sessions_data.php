<?php
$date= date('Y-m-d');
$user=$_SESSION['user']['id'];
$sql="SELECT * FROM group_sessions  where date BETWEEN ? and ?     ";	
$stmu=$con->prepare($sql); 
$stmu->execute(array($from_date,$to_date));
//عدد الحالات الكلية
if($stmu->rowCount()>0){
?>
    <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
        <thead>
            <tr>
            <th>اسم الموظف</th>
            <th >الفرع</th>
            
            <th> رقم اكواد الحالات</th>
            <th> نوع المشكلة</th>
            <th>اسم الجلسة</th>
            <th> نوع الجلسة</th>
            <th> المواضيع التي تم مناقشتها</th>
            <th>عدد الحضور</th>
            <th>  الاساليب العلاجية المستخدمة</th>
            <th>  المهام والواجبات</th>
            
            
            
            <th >التاريخ</th>
            <th>تعديل</th>
                
                
            
                
            </tr>
        </thead>
        <tfoot>
            <th>اسم الموظف</th>
            <th >الفرع</th>
            <th> رقم اكواد الحالات</th>
            <th> نوع المشكلة</th>
            <th>اسم الجلسة</th>
            <th> نوع الجلسة</th>
            <th> المواضيع التي تم مناقشتها</th>
            <th>عدد الحضور</th>
            <th>  الاساليب العلاجية المستخدمة</th>
            <th>  المهام والواجبات</th>

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
                                <?php $code_explode =explode(",",$row['code']);
                                foreach($code_explode as $code ){
                                    echo $code . '<br>';
                                }
                                    ?>
                            </td>
                            <td><?php echo $row['problem_many'];?></td>
                            <td><?php echo $row['section_name'];?></td>
                            <td><?php echo $row['section_type'];?></td>
                            <td><?php echo $row['projict'];?></td>
                            <td><?php echo $row['attendance'];?></td>
                            <td><?php echo $row['techniques'];?></td>
                            <td><?php echo $row['task_andduties'];?></td>
                            
                        
                            
                            <td><?php echo $row['date'];?></td>
                            <td>
                                <a href="group_sessions_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
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