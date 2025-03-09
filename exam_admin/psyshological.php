<?php
session_start();
$branch=$_SESSION['branch']; 
include'dbconnection.php';
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
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span> اختبار بيك للأكتئاب</span>
                      </a>
                   
                  </li>

                  <li class="sub-menu">
                      <a href="resbtion_back.php" >
                          <i class="fa fa-users"></i>
                          <span> اختبار مقياس تايلور للقلق الصريح</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="mange_convert.php" >
                          <i class="fa fa-users"></i>
                          <span>مقياس الهوس</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="six_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>الاختبارات الستة</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="social_phobia_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>قائمة الرهاب الاجتماعي</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="childe_phobia_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>مخاوف الاطفال</span>
                      </a>
                   
                  </li>
                 
                 
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>اختبارالمعتقدات الشخصية</h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <button class="hh" onclick="exportTableToExcel('tblData')">Export To Excel </button>
                          <table id="tblData"  class="table table-striped table-advance table-hover">
	                  	  	 
	                  	  	  <hr>
                              <thead  >
                              <tr>
                                  <th>Sno.</th>
                                  <th class="hidden-phone">الكود الخاص بي الحالة</th>
                                  <th> المجموع الكلي</th>
                                  <th> تشخيص الاضطراب</th>
                                  <th> الاضطهادية</th>
                                  <th>الفصامية </th>
                                  <th>الشبة فصامية </th>
                                  <th>الاستعراضية</th>
                                  <th>النرجسية</th>
                                  <th> التجنبية</th>
                                  <th> الاعتمادية</th>
                                  <th> الوسواسية</th>
                                  <th> سلبية العدوان</th>
                                  <th> الاكتئابية</th>
                                  <th> الحدية</th>
                                  <th> المضادة للمجتمع</th>
                                  <th> الكذب</th>
                                  <th> الجدية</th>

                                
                                  

                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from personality_exam where   (branch ='$branch')");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['names'];?></td>
                                  <td><?php echo $row['S'];?></td>
                                  <td><?php echo $row['exam'];?></td>
                                  <td><?php echo $row['A1'];?></td>
                                  <td><?php echo $row['A2'];?></td>
                                  <td><?php echo $row['A3'];?></td>
                                  <td><?php echo $row['A4'];?></td>
                                  <td><?php echo $row['A5'];?></td>
                                  <td><?php echo $row['A6'];?></td>
                                  <td><?php echo $row['A7'];?></td>
                                  <td><?php echo $row['A8'];?></td>
                                  <td><?php echo $row['A9'];?></td>
                                  <td><?php echo $row['A10'];?></td>
                                  <td><?php echo $row['A11'];?></td>
                                  <td><?php echo $row['A12'];?></td>
                                  <td><?php echo $row['A13'];?></td>
                                  <td><?php echo $row['A14'];?></td>

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