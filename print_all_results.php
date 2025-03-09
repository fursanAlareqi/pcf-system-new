    
  <?php

include('include/dbconnect.php');
 $active_main_event=$_GET['id'];
    ?> 
 
     
<!DOCTYPE html>
<html lang="en">
 
<style style="text/css">
@media print {
    footer {page-break-after: always;}
}
</style>
  <body data-spy="scroll" data-target=".bs-docs-sidebar">
 
 


  <div class="container">

    <!-- Docs nav
    ================================================== -->
      <div class="row">
        
        <div class="span12">

          <?php 
           $output = '';
             $statement = $con->prepare("
             SELECT * FROM purchase_order 
             WHERE id = :order_id
             LIMIT 1
            ");
            $statement->execute(
             array(
              ':order_id'       =>  $_GET["id"]
             )
            );
            $result = $statement->fetchAll();
            foreach($result as $row)
            {
              $sql="select * from user where  id=? ";
              $stm=$con->prepare($sql); 
              $stm->execute(array($row['sender_name']));
              $name=$stm->fetch();
              $sender_name=$name['name'];

              $sql="select * from branch where  id=? ";
              $stm=$con->prepare($sql); 
              $stm->execute(array($row['branch']));
              $branch=$stm->fetch();
              $branch_name=$branch['branch_name'];

              $sql="select * from money_type where  id=? ";
              $stm=$con->prepare($sql); 
              $stm->execute(array($row['money_type']));
              $money_type=$stm->fetch();
              $money_type=$money_type['name'];
              
              $output .= '
                 
                  <table  width="100%" border="1" cellpadding="5"   style="direction: rtl;border: none;" cellspacing="0">
                  <tr >
                  <td colspan="1" width="25%"   style="font-size:18px;border: none;"><b>مؤسسة الرعاية النفسية التنموية</b></td>
                  <td colspan="1" width="50%"  align="center"  style="font-size:18px;border: none;"><b><img src="assets/img/pcf2.png" width="260" alt="navbar brand" class="navbar-brand"></b></td>
                  <td colspan="1"  width="25%" align="left" style="font-size:18px;border: none;"><b>Foundation Developmental Care Psychiatric</b></td>
                  
                  </tr>
                  <tr>
                  <td colspan="3">
                    <table  width="100%" style="direction: rtl;"  cellpadding="5">
                    <tr>
                      <td align="right" width="65%">

                      
                      رقم الطلب      :'.$row["id"].'<br /> 
                      تاريخ الطلب  : '.$row["order_date"].'<br />
                      
                      </td>
                      <td align="right" width="35%">
                      
                      مقدم الطلب. : '. $sender_name.'<br />
                      الفرع : '.$branch_name.'<br />
                      نوع العملة : '.$money_type.'<br />
                      </td>
                    </tr>
                    </table>
                    <br />
                    <table width="100%" border="1" style="direction: rtl;" cellpadding="5" cellspacing="0">
                    <tr>
                      <th>م</th>
                      <th>نوع الطلب</th>
                      <th>الوحدة </th>
                      <th>الكمية</th>
                      <th>السعر</th>
                      <th >الاجمالي</th>
                      <th >ملاحظات</th>

                    </tr>
               ';
  $statement = $con->prepare(
   "SELECT * FROM purchase_order_item 
   WHERE order_id = :order_id"
  );
  $statement->execute(
   array(
    ':order_id'       =>  $_GET["id"]
   )
  );
  $item_result = $statement->fetchAll();
  $count = 0;
  foreach($item_result as $sub_row)
  {
    $sql="select * from item_name_of_purchase_order where  id=? ";
    $stm=$con->prepare($sql); 
    $stm->execute(array($sub_row['order_item_name']));
    $order_item_name=$stm->fetch();
    $order_item_name=$order_item_name['name'];
    
    $sql="select * from unit_name_of_purchase_order where  id=? ";
    $stm=$con->prepare($sql); 
    $stm->execute(array($sub_row['order_item_unit']));
    $order_item_unit=$stm->fetch();
    $order_item_unit=$order_item_unit['name'];
   $count++;
   $output .= '
   <tr>
    <td>'.$count.'</td>
    <td>'. $order_item_name.'</td>
    <td>'.$order_item_unit.'</td>
    <td>'.$sub_row["order_item_quantity"].'</td>
    <td>'.$sub_row["order_item_price"].'</td>
    <td>'.$sub_row["order_item_actual_amount"].'</td>
    <td>'.$sub_row["order_item_description"].'</td>



   </tr>
   ';
  }
  $output .= '
  <tr>
   <td align="right" colspan="6"><b>الاجمالي</b></td>
   <td align="right"><b>'.$row["final_item_total"].'</b></td>
  </tr>
  
  
  ';
  $output .= '
  
      </table>
     </td>
    </tr>
    
   </table>
  ';
 }
echo $output;
          ?>

        </div>

    </div>
 
  </div>

  <footer> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <table  width="100%" border="1" cellpadding="5"   style="direction: rtl;border: none;" cellspacing="0">
        <tr >
        <td colspan="1" width="25%"   style="font-size:18px;border: none;"><b>مقدم الطلب</b></b></td>
        <td colspan="1" width="50%"  align="center"  style="font-size:18px;border: none;"><b>الشئون المالية</b></td>
        <td colspan="1"  width="25%" align="left" style="font-size:18px;border: none;"><b>المدير العام</b></td>
        
        </tr>
</table> 

  </footer>


  </body>
</html>
