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
$sql="SELECT * FROM pure_pharmacy where date BETWEEN ? and ?   ";	
$stmu=$con->prepare($sql); 
$stmu->execute(array($from_date,$to_date));
//عدد الحالات الكلية

if($stm->rowCount()>0){

?><table id="multi-filter-select" class="table table-bordered table-head-bg-info " >
<center>
<button id="export" class="btn btn-success">Export to excel</button>
</center>
<br>
<thead>
  <tr>
  <th >Sno.</th>
  <th>اسم مدخل البيانات</th>
  <th class="hidden-phone">الفرع</th>
  <th>عودة/جديدة</th>
  <th>العمر</th>
  <th>الاسم</th>
  <th>الجنس</th>
  <th>رقم الهاتف</th>
  <th> رقم كود الحالة</th>
  <th>اسم العلاج </th>
  <th>الكمية </th>
  <th>التاريخ </th>
      
      
  
      
  </tr>
<!--</thead>-->
<!--<tfoot>-->
<!--  <th >Sno.</th>-->
<!--  <th>اسم مدخل البيانات</th>-->
<!--  <th class="hidden-phone">الفرع</th>-->
<!--  <th>عودة/جديدة</th>`-->
<!--  <th>العمر</th>-->
<!--  <th>الجنس</th>-->
<!--  <th>رقم الهاتف</th>-->
<!--  <th> رقم كود الحالة</th>-->
<!--  <th>اسم العلاج </th>-->
<!--  <th>الكمية </th>-->
<!--  <th>التاريخ </th>-->
<!--</tfoot>-->
<tbody>
  <?php

  {
      $cnt=1;
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
                      $user_info=$stm->fetch();
                      $user_name=$user_info['name'];
                      echo $user_name;
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
                      $sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex,phone,name FROM resption where code =?  and type=?    ";	
                      $stmu=$con->prepare($sql); 
                      $stmu->execute(array($row['code'],'جديد'));
                      $row_brithday_sex=$stmu->fetch();
                      echo $row_brithday_sex['age']; ?>
                  </td>
                  <td><?php echo $row_brithday_sex['name']?></td>
                  <td><?php echo $row_brithday_sex['sex']?></td>
                  <td><?php echo $row_brithday_sex['phone'];?></td>
                  <td><?php echo $row['code'];?></td>
                  
                  <td>
                    
                      <?php 
                          $pharmacy_name_explode =explode(",",$row['name']);
                          foreach($pharmacy_name_explode as $medical_id ){

                              $sql="select * from pharmacy where  id=? ";
                              $stm=$con->prepare($sql); 
                              $stm->execute(array($medical_id));
                              $medical_name=$stm->fetch();
                              echo $medical_name['name'] . '<br>';
                          }
                          
                  
                          
                      ?>
                  </td>
                  <td>
                      <?php
                          $quantity_explode =explode(",",$row['quantity']);
                          foreach($quantity_explode as $quantity ){
                              echo $quantity . '<br>';
                          }
                      ?>
                  </td>
                  
                  <td><?php echo $row['date'];?></td>
              

                  
              
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
           