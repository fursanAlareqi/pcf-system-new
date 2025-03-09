<?php
session_start();
include'dbconnection.php';
 $branch=$_SESSION['branch']; 
// checking session is valid for not 
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from users where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Admin | Manage Users</title>
    <link href="assets/css/bootstrap1.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/hothefa.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">
   
  <script>
function exportTableToExcel(tableID, filename = ''){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}


    </script>
  </head>

  <body>

  <section id="container" >
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
              
            <a href="#" class="logo"><b >موسسة الرعاية النفسية</b></a>
            <div class="nav notify-row" id="top_menu">
               
                         
                   
                </ul>
            </div>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="#"><img src="1.png" class="img-circle" width="160"></a></p>
              	
                    <li class="sub-menu">
                      <a href="self_confirmation_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>مقياٌس تأكيد الذات</span>
                      </a>
                   
                  </li>
                 

                  <li class="sub-menu">
                      <a href="self_esteem_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>مقياس تقدير الذات</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="interior_pressure_scale_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>مقياٌس وجهة الضبط الداخلي والخارجي</span>
                      </a>
                   
                  </li>
                   
                  <li class="sub-menu">
                      <a href="sakse_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>اختبار ساكس</span>
                      </a>
                      
                      </li>
                      <li class="sub-menu">
                      <a href="waziman_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>اختبار وايزمان للمعتقدات</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="ezenk_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>اختبار ايزنك</span>
                      </a>
                  </li>
                      <li class="sub-menu">
                      <a href="back.php" >
                          <i class="fa fa-users"></i>
                          <span>عودة</span>
                      </a>
                  </li>
                   
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>اختبار ساكس</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <button class="hh" onclick="exportTableToExcel('tblData')">Export To Excel </button>
                          <table id="tblData"  class="table table-striped table-advance table-hover">
	                  	  	 
	                  	  	  <hr>
                              <thead  >
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">الكود الخاص بالحالة</th>
                                  <th> 1ب</th>
                                  <th>2ذت</th>
                                  <th>3ط</th>
                                  <th>4مر</th>
                                  <th>5قا</th>
                                  <th>6مس</th>
                                  <th>7خ</th>
                                  <th>8ص</th>
                                  <th>9ض</th>
                                  <th>10ع</th>
                                  <th>11ج</th>
                                  <th>12س</th>
                                  <th>13زم</th>
                                  <th>14م</th>
                                  <th>15ذ</th>
                                  <th>16ب</th>
                                  <th>17ذت</th>
                                  <th>18ط</th>
                                  <th>19مر</th>
                                  <th>20قا</th>
                                  <th>21مس</th>
                                  <th>22خ</th>
                                  <th>23ص</th>
                                  <th>24ض</th>
                                  <th>25ع</th>
                                  <th>26ج</th>
                                  <th>27س</th>
                                  <th>28زم</th>
                                  <th>29م</th>
                                  <th>30ذ</th>
                                  <th> 31ب</th>
                                  <th>32ذت</th>
                                  <th>33ط</th>
                                  <th>34مر</th>
                                  <th>35قا</th>
                                  <th>36مس</th>
                                  <th>37خ</th>
                                  <th>38ص</th>
                                  <th>39ض</th>
                                  <th>40ع</th>
                                  <th>41ج</th>
                                  <th>42س</th>
                                  <th>43زم</th>
                                  <th>44م</th>
                                  <th>45ذ</th>
                                  <th>46ب</th>
                                  <th>47ذت</th>
                                  <th>48ط</th>
                                  <th>49مر</th>
                                  <th>50قا</th>
                                  <th>51مس</th>
                                  <th>52خ</th>
                                  <th>53ص</th>
                                  <th>54ض</th>
                                  <th>55ع</th>
                                  <th>56ج</th>
                                  <th>57س</th>
                                  <th>58زم</th>
                                  <th>59م</th>
                                  <th>60ذ</th>
                                 

                                  

                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from sakse_exam  where   (branch ='$branch')");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['names'];?></td>
                                  <td><?php echo $row['res1'];?></td>
                                  <td><?php echo $row['res2'];?></td>
                                  <td><?php echo $row['res3'];?></td>
                                  <td><?php echo $row['res4'];?></td>
                                  <td><?php echo $row['res5'];?></td>
                                  <td><?php echo $row['res6'];?></td>
                                  <td><?php echo $row['res7'];?></td>
                                  <td><?php echo $row['res8'];?></td>
                                  <td><?php echo $row['res9'];?></td>
                                  <td><?php echo $row['res10'];?></td>
                                  <td><?php echo $row['res11'];?></td>
                                  <td><?php echo $row['res12'];?></td>
                                  <td><?php echo $row['res13'];?></td>
                                  <td><?php echo $row['res14'];?></td>
                                  <td><?php echo $row['res15'];?></td>
                                  <td><?php echo $row['res16'];?></td>
                                  <td><?php echo $row['res17'];?></td>
                                  <td><?php echo $row['res18'];?></td>
                                  <td><?php echo $row['res19'];?></td>
                                  <td><?php echo $row['res20'];?></td>
                                  <td><?php echo $row['res21'];?></td>
                                  <td><?php echo $row['res22'];?></td>
                                  <td><?php echo $row['res23'];?></td>
                                  <td><?php echo $row['res24'];?></td>
                                  <td><?php echo $row['res25'];?></td>
                                  <td><?php echo $row['res26'];?></td>
                                  <td><?php echo $row['res27'];?></td>
                                  <td><?php echo $row['res28'];?></td>
                                  <td><?php echo $row['res29'];?></td>
                                  <td><?php echo $row['res30'];?></td>
                                  <td><?php echo $row['res31'];?></td>
                                  <td><?php echo $row['res32'];?></td>
                                  <td><?php echo $row['res33'];?></td>
                                  <td><?php echo $row['res34'];?></td>
                                  <td><?php echo $row['res35'];?></td>
                                  <td><?php echo $row['res36'];?></td>
                                  <td><?php echo $row['res37'];?></td>
                                  <td><?php echo $row['res38'];?></td>
                                  <td><?php echo $row['res39'];?></td>
                                  <td><?php echo $row['res40'];?></td>
                                  <td><?php echo $row['res41'];?></td>
                                  <td><?php echo $row['res42'];?></td>
                                  <td><?php echo $row['res43'];?></td>
                                  <td><?php echo $row['res44'];?></td>
                                  <td><?php echo $row['res45'];?></td>
                                  <td><?php echo $row['res46'];?></td>
                                  <td><?php echo $row['res47'];?></td>
                                  <td><?php echo $row['res48'];?></td>
                                  <td><?php echo $row['res49'];?></td>
                                  <td><?php echo $row['res50'];?></td>
                                  <td><?php echo $row['res51'];?></td>
                                  <td><?php echo $row['res52'];?></td>
                                  <td><?php echo $row['res53'];?></td>
                                  <td><?php echo $row['res54'];?></td>
                                  <td><?php echo $row['res55'];?></td>
                                  <td><?php echo $row['res56'];?></td>
                                  <td><?php echo $row['res57'];?></td>
                                  <td><?php echo $row['res58'];?></td>
                                  <td><?php echo $row['res59'];?></td>
                                  <td><?php echo $row['res60'];?></td>
                                  >
                                  
                                  
                                 
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
      </section
  ></section>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/common-scripts.js"></script>
  <script>
      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
<?php } ?>