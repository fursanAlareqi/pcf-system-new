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
    $sql="SELECT * FROM eduction_session  where date BETWEEN ? and ?      ";	
    $stmu=$con->prepare($sql); 
    $stmu->execute(array($from_date,$to_date));
}
else{
    $branch=$_SESSION['user']['branch_id'];
    $sql="SELECT * FROM eduction_session  where date BETWEEN ? and ?   and  branch=?   ";	
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

    <th> الجنس</th>
    <th>رقم الهاتف</th>
    <th> التاريخ</th>
    <th> موضوع الجلسة</th>
    <th>اسم الموظف</th>
    
        
    </tr>
</thead>

<tbody>
    <?php

    {
        foreach($stmu->fetchAll() as $row) 
                {
                
                ?>

                <tr>
               
                    <td><?php echo $row['sex'];?></td>
                    <td><?php echo $row['phone'];?></td>
                    <td><?php echo $row['date'];?></td>
                    <td><?php echo $row['detals'];?></td>
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


                    
                    
                    <!-- <td>
            <a href="hotline_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
                <i class="fa fa-pencil"></i>تعديل
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
           