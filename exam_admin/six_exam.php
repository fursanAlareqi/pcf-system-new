<?php
session_start();
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
    <style>



    </style>
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
                      <a href="manage-users.php" >
                          <i class="fa fa-users"></i>
                          <span>عودة</span>
                      </a>
                  </li>
                   
                    
                 
                 
              </ul>
          </div>
      </aside>
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>الاختبارات الستة</h3>
				
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