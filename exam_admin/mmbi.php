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
                      <a href="social_concern_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>مقياس القلق الاجتماعي</span>
                      </a>
                   
                  </li>
                  
                  <li class="sub-menu">
                      <a href="childe_phobia_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>مخاوف الاطفال</span>
                      </a>
                   
                  </li>
                  <li class="sub-menu">
                      <a href="mmbi.php" >
                          <i class="fa fa-users"></i>
                          <span>MMbi</span>
                      </a>
                   
                  </li>
                  
                   <li class="sub-menu">
                      <a href=" personality_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>اختبار المعتقدات الشخصية</span>
                      </a>
                   
                  </li>
                              
                  </li>
                  
                     <li class="sub-menu">
                      <a href=" hamilton_exam.php" >
                          <i class="fa fa-users"></i>
                          <span>اختبار  هاملتون لاعراض مرض الاكتئاب</span>
                      </a>
                   
                  </li>
                  
                  
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>اختبار MMBI </h3>
				<div class="row">
				
                  
	                  
                  <div class="col-md-12">
                      <div class="content-panel">
                      <button class="hh" onclick="exportTableToExcel('tblData')">Export To Excel </button>
                          <table id="tblData"   class="table table-striped table-advance table-hover">
	                  	  	 
	                  	  	  <hr>
                              <thead  >
                              <tr>
                                  <th>Sno.</th>
                                  <th>الكود الخاص بالحالة</th>
                                  <th class="hidden-phone">الجنس</th>
                                  <th> مجموع (س ك)</th>
                                  <th> مجموع (ه ي)</th>
                                  <th> مجموع (ه س)</th>
                                  <th> مجموع (ك )</th>
                                  <th> مجموع (ف )</th>
                                  <th> مجموع (م ف)</th>
                                  <th>مجموع (س ي) </th>
                                  <th> مجموع (ب أ)</th>
                                  <th> مجموع (ب ت)</th>
                                  <th> مجموع (م أ)</th>
                                  <th> مجموع (ب د)</th>
                                  <th> مجموع ( د)</th>
                                  <th> مجموع ( ل)</th>
                                  <th> تكيفة معا الاعراض</th>
                                  <th> التشخيص</th>
                                  <th> الشخصية</th>

                                 

                                  
                                
                                  

                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php $ret=mysqli_query($con,"select * from mmbi where   (branch ='$branch')" );
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['names'];?></td>
                                  <td><?php echo $row['sex'];?></td>
                                  <td><?php echo $row['s_k'];?></td>
                                  <td><?php echo $row['h_i'];?></td>
                                  <td><?php echo $row['h_s'];?></td>
                                  <td><?php echo $row['k'];?></td>
                                  <td><?php echo $row['f'];?></td>
                                  <td><?php echo $row['m_f'];?></td>
                                  <td><?php echo $row['s_i'];?></td>
                                  <td><?php echo $row['b_a'];?></td>
                                  <td><?php echo $row['b_t'];?></td>
                                  <td><?php echo $row['m_a'];?></td>
                                  <td><?php echo $row['b_d'];?></td>
                                  <td><?php echo $row['d'];?></td>
                                  <td><?php echo $row['l'];?></td>
                                  <td><?php echo $row['y'];?></td>
                                  <td><?php echo $row['v'];?></td>
                                  <td><?php echo $row['u'];?></td>

                                 
                                 
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