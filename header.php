<?php


require('include/dbconnect.php');
session_start();
if (!isset($_SESSION['user'])) {

  echo "<script> window.open('logout.php','_self')</script>";
  // header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>PCF</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
  <link rel="icon" href="assets/img/pcf.png" type="image/x-icon" />
  <!-- export table to ecale file have complite code in footer.php -->

  <script src="js/table2excel.js"></script>
  <!-- end export -->
  <!-- select withe search -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/bootstrap-select.css">
  <!-- end select with search  -->
  <!-- Fonts and icons -->
  <script src="assets/js/plugin/webfont/webfont.min.js"></script>
  <script>
    WebFont.load({
      google: {
        "families": ["Lato:300,400,700,900"]
      },
      custom: {
        "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
        urls: ['assets/css/fonts.min.css']
      },
      active: function() {
        sessionStorage.fonts = true;
      }
    });
  </script>

  <!-- CSS Files -->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/atlantis.min.css">

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link rel="stylesheet" href="assets/css/demo.css">

</head>

<body data-background-color="bg3">
  <div class="wrapper">
    <div class="main-header">
      <!-- Logo Header -->
      <div class="logo-header" data-background-color="white">

        <a href="index.php" class="logo">
          <img src="assets/img/pcf.png" width="160" alt="navbar brand" class="navbar-brand">
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon">
            <i class="icon-menu"></i>
          </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
          <button class="btn btn-toggle toggle-sidebar">
            <i class="icon-menu"></i>
          </button>
        </div>
      </div>
      <!-- End Logo Header -->

      <!-- Navbar Header -->
      <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

        <div class="container-fluid">
          <div class="collapse" id="search-nav">
            <form class="navbar-left navbar-form nav-search mr-md-3">
              <div class="input-group">
                <div class="input-group-prepend">
                  <button type="submit" class="btn btn-search pr-1">
                    <i class="fa fa-search search-icon"></i>
                  </button>
                </div>
                <input type="text" placeholder="Search ..." class="form-control">
              </div>
            </form>
          </div>


          <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <!-- view vacation request -->
            <?php if (($_SESSION['user']['rule_id'] <> 2) && ($_SESSION['user']['rule_id'] <> 6) &&  ($_SESSION['user']['rule_id'] <> 13)) { ?>
              <?php

              if (isset($_GET['action'], $_GET['request_id']) && $_GET['action'] == 'emp_yes') {
                $emp_id_res = $_GET['request_id'];
                $sql = "UPDATE vacation_request set emp_ok=? where  id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array('1', $emp_id_res));
                echo "<script>
                          window.open('?','_self')
                        </script>";
              } elseif (isset($_GET['action'], $_GET['request_id']) && $_GET['action'] == 'emp_no') {
                $emp_id_res = $_GET['request_id'];
                $sql = "UPDATE vacation_request set emp_ok=?,request=? where  id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array('2', '2', $emp_id_res));
                echo "<script>
                        window.open('?','_self')
                      </script>";
              }
              ?>
              <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>

                  <?php
                  $user = $_SESSION['user']['id'];
                  $sql = "select * from vacation_request where  emp=? and emp_ok=? and manger_branch_ok=? and manger_ok=? ";
                  $stm = $con->prepare($sql);
                  $stm->execute(array($user, '0', '0', '0'));
                  if ($stm->rowCount() > 0) {


                  ?>
                    <span class="notification">
                      <?php echo $stm->rowCount() ?>
                    </span>
                  <?php } ?>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                  <li>
                    <div class="dropdown-title">يوجد لديك <?php echo $stm->rowCount() ?> موظفين طالبين التغطية بدلهم</div>

                  </li>
                  <?php foreach ($stm->fetchAll() as $row) {
                  ?>
                    <div class="dropdown-title">
                      <nav> اسم مرسل الطلب:
                        <?php

                        $sql = "select name from user where  id=? ";
                        $stm_emp = $con->prepare($sql);
                        $stm_emp->execute(array($row['sender_name']));
                        $vacation_request_emp_name = $stm_emp->fetch();
                        echo $vacation_request_emp_name['name'];

                        ?>
                      </nav>
                      <nav> تاريخ الاجازة:
                        <?php
                        echo $row['date'];
                        ?>
                      </nav>

                      <a href="?action=emp_yes&request_id=<?php echo $row['id'] ?>">
                        <button class="btn btn-success"><i class="fa fa-pencil"></i>موافق</button>
                      </a>

                      <a href="?action=emp_no&request_id=<?php echo $row['id'] ?>">
                        <button class="btn btn-danger"><i class="fa fa-pencil"></i>غير موافق</button>
                      </a>


                    </div>
                  <?php } ?>

                </ul>

              </li>
            <?php } ?>
            <!-- manger branch ok -->
            <?php if ($_SESSION['user']['rule_id'] == 13) { ?>
              <?php

              if (isset($_GET['action'], $_GET['request_id']) && $_GET['action'] == 'manger_branch_yes') {
                $request_manger_branch_id_res = $_GET['request_id'];
                $sql = "UPDATE vacation_request set manger_branch_ok=? where  id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array('1', $request_manger_branch_id_res));
                echo "<script>
                          window.open('?','_self')
                        </script>";
              } elseif (isset($_GET['action'], $_GET['request_id']) && $_GET['action'] == 'manger_branch_no') {
                $request_manger_branch_id_res = $_GET['request_id'];
                $sql = "UPDATE vacation_request set manger_branch_ok=?,request=?  where  id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array('2', '2', $request_manger_branch_id_res));
                echo "<script>
                        window.open('?','_self')
                      </script>";
              }
              ?>
              <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>

                  <?php
                  $branch = $_SESSION['user']['branch_id'];
                  $sql = "select * from vacation_request where  branch=? and emp_ok=? and manger_branch_ok=? and manger_ok=? ";
                  $stm = $con->prepare($sql);
                  $stm->execute(array($branch, '1', '0', '0'));
                  if ($stm->rowCount() > 0) {


                  ?>
                    <span class="notification">
                      <?php echo $stm->rowCount() ?>
                    </span>
                  <?php } ?>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                  <li>
                    <div class="dropdown-title">يوجد لديك <?php echo $stm->rowCount() ?> موظفين طالبين اجازة</div>

                  </li>
                  <?php foreach ($stm->fetchAll() as $row) {
                  ?>
                    <div class="dropdown-title">
                      <nav> اسم مرسل الطلب:
                        <?php

                        $sql = "select name from user where  id=? ";
                        $stm_emp = $con->prepare($sql);
                        $stm_emp->execute(array($row['sender_name']));
                        $vacation_request_emp_name = $stm_emp->fetch();
                        echo $vacation_request_emp_name['name'];

                        ?>
                      </nav>
                      <nav> تاريخ الاجازة:
                        <?php
                        echo $row['date'];
                        ?>
                      </nav>
                      <nav> نوع الاجازة:
                        <?php
                        echo $row['type'];
                        ?>
                        <?php if ($row['type'] == 'مرضية') { ?>

                          <a href="vacation_request_file/<?php echo $row['file'] ?>" target="_blank">عرض الملف المرفق</a>

                        <?php } ?>
                      </nav>

                      <nav> اسم الموظف البديل:
                        <?php

                        $sql = "select name from user where  id=? ";
                        $stm_empx = $con->prepare($sql);
                        $stm_empx->execute(array($row['emp']));
                        $vacation_request_empx_name = $stm_empx->fetch();
                        echo $vacation_request_empx_name['name'];

                        ?>
                      </nav>

                      <a href="?action=manger_branch_yes&request_id=<?php echo $row['id'] ?>">
                        <button class="btn btn-success"><i class="fa fa-pencil"></i>موافق</button>
                      </a>

                      <a href="?action=manger_branch_no&request_id=<?php echo $row['id'] ?>">
                        <button class="btn btn-danger"><i class="fa fa-pencil"></i>غير موافق</button>
                      </a>


                    </div>
                  <?php } ?>

                </ul>

              </li>
            <?php } ?>
            <!-- end manger branch ok -->
            <!--  manger  ok -->
            <?php if ($_SESSION['user']['rule_id'] == 2) { ?>
              <?php

              if (isset($_GET['action'], $_GET['request_id']) && $_GET['action'] == 'manger_yes') {
                $request_manger_id_res = $_GET['request_id'];
                $sql = "UPDATE vacation_request set manger_ok=?,request=? where  id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array('1', '1', $request_manger_id_res));

                // increment number of vacation by one for the emp
                // معرف الموظف طالب الاجازة من جدول الاجازة
                $sql = "SELECT * from vacation_request where id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array($request_manger_id_res));
                $request_info = $stm->fetch();
                $emp_name = $request_info['sender_name'];
                // معرف الموظف طالب الاجازة من جدول الاجازة end

                if ($request_info['type'] == 'سنوية') {
                  //  معرفة عدد الاجازات المتبقية للموظف وانقصها بواحد
                  $sql = "SELECT * from user where id=?  ";
                  $stm = $con->prepare($sql);
                  $stm->execute(array($emp_name));
                  $vacation = $stm->fetch();
                  $vacation = $vacation['vacation'];
                  $vacation = $vacation - 1;
                  //  معرفة عدد الاجازات المتبقية للموظف وانقصها بواحد end

                  $sql = "UPDATE user set vacation=? where  id=?  ";
                  $stm = $con->prepare($sql);
                  $stm->execute(array($vacation, $emp_name));
                }


                // end increment number of vacation by one for the emp 
                echo "<script>
                          window.open('?ok','_self')
                        </script>";
              } elseif (isset($_GET['action'], $_GET['request_id']) && $_GET['action'] == 'manger_no') {
                $request_manger_id_res = $_GET['request_id'];
                $sql = "UPDATE vacation_request set manger_ok=?,request=? where  id=?  ";
                $stm = $con->prepare($sql);
                $stm->execute(array('2', '2', $request_manger_id_res));
                echo "<script>
                        window.open('?','_self')
                      </script>";
              }
              ?>
              <li class="nav-item dropdown hidden-caret">
                <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>

                  <?php
                  $user = $_SESSION['user']['id'];
                  $sql = "select * from vacation_request where   emp_ok=? and manger_branch_ok=? and manger_ok=? ";
                  $stm = $con->prepare($sql);
                  $stm->execute(array('1', '1', '0'));
                  if ($stm->rowCount() > 0) {


                  ?>
                    <span class="notification">
                      <?php echo $stm->rowCount() ?>
                    </span>
                  <?php } ?>
                </a>
                <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                  <li>
                    <div class="dropdown-title">يوجد لديك <?php echo $stm->rowCount() ?> موظفين طالبين اجازة</div>

                  </li>
                  <?php foreach ($stm->fetchAll() as $row) {
                  ?>
                    <div class="dropdown-title">
                      <nav> اسم مرسل الطلب:
                        <?php

                        $sql = "select name from user where  id=? ";
                        $stm_emp = $con->prepare($sql);
                        $stm_emp->execute(array($row['sender_name']));
                        $vacation_request_emp_name = $stm_emp->fetch();
                        echo $vacation_request_emp_name['name'];

                        ?>
                      </nav>
                      <nav> تاريخ الاجازة:
                        <?php
                        echo $row['date'];
                        ?>
                      </nav>
                      <nav> نوع الاجازة:
                        <?php
                        echo $row['type'];
                        ?>
                        <?php if ($row['type'] == 'مرضية') { ?>

                          <a href="vacation_request_file/<?php echo $row['file'] ?>" target="_blank">عرض الملف المرفق</a>

                        <?php } ?>
                      </nav>



                      <nav> اسم الموظف البديل:
                        <?php

                        $sql = "select name from user where  id=? ";
                        $stm_empx = $con->prepare($sql);
                        $stm_empx->execute(array($row['emp']));
                        $vacation_request_empx_name = $stm_empx->fetch();
                        echo $vacation_request_empx_name['name'];

                        ?>
                      </nav>


                      <a href="?action=manger_yes&request_id=<?php echo $row['id'] ?>">
                        <button class="btn btn-success"><i class="fa fa-pencil"></i>موافق</button>
                      </a>

                      <a href="?action=manger_no&request_id=<?php echo $row['id'] ?>">
                        <button class="btn btn-danger"><i class="fa fa-pencil"></i>غير موافق</button>
                      </a>


                    </div>
                  <?php } ?>

                </ul>

              </li>

            <?php } ?>
            <!-- end manger  ok -->

            <!-- end view vacation request -->
            <li class="nav-item dropdown hidden-caret">
              <a class="nav-link" href="logout.php">
                <i class="icon-power"></i>
              </a>
              <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">


              </div>
            </li>
            <li class="nav-item dropdown hidden-caret">

              <div class="avatar-sm">
                <img src="user_img/<?php echo $_SESSION['user']['image'] ?>" alt="..." class="avatar-img rounded-circle">
              </div>


            </li>
          </ul>
        </div>
      </nav>
      <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <div class="sidebar sidebar-style-2" data-background-color="white">
      <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
          <div class="user">
            <div class="avatar-sm float-left mr-2">
              <img src="user_img/<?php echo $_SESSION['user']['image'] ?>" alt="..." class="avatar-img rounded-circle">
            </div>
            <div class="info">
              <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                  <?php echo $_SESSION['user']['name']; ?>
                  <span class="user-level">

                    <?php $rule_id = $_SESSION['user']['rule_id'];
                    $sql = "SELECT * FROM  rule WHERE id_rule = ?    ";
                    $stm = $con->prepare($sql);
                    $stm->execute(array($rule_id));
                    $element = $stm->fetch();
                    echo $element['rule_name'];
                    ?>

                  </span>
                  <span class="caret"></span>
                </span>
              </a>
              <div class="clearfix"></div>


            </div>
          </div>
          <ul class="nav nav-primary">

            <li class="nav-section">
              <span class="sidebar-mini-icon">
                <i class="fa fa-ellipsis-h"></i>
              </span>

            </li>


            <?php
            //من اجل التحكم في الجاني الايمن واضهار الون الازق على القسم الذي تم اختيارة 
            $id = 0;
            $num = 0;
            if (isset($_GET['id'], $_GET['num'])) {
              $id = $_GET['id'];
              $num = $_GET['num'];
            }
            ?>

            <?php if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>
              <li class="nav-item <?php if ($id == 3) echo 'active submenu' ?>">
                <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#adm';
                  }

                  ?>">
                  <i class="flaticon-user-5"></i>
                  <p>Admin</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php if ($id == 3) echo 'show' ?>" id="adm">
                  <ul class="nav nav-collapse">
                    <li <?php if ($num == 1 && $id == 3) echo 'class="active"' ?>>
                      <a href="add_user.php?num=1&id=3">
                        <span class="sub-item">الموظفين</span>

                      </a>
                    </li>



                    <li <?php if ($num == 2 && $id == 3) echo 'class="active"' ?>>
                      <a href="add_request_name.php?num=2&id=3">

                        <span class="sub-item">اضافة اسم صنف للطلبات</span>
                      </a>
                    </li>
                    <li <?php if ($num == 3 && $id == 3) echo 'class="active"' ?>>
                      <a href="request_table.php?num=3&id=3">

                        <span class="sub-item"> الطلبات</span>
                      </a>
                    </li>

                    <li <?php if ($num == 4 && $id == 3) echo 'class="active"' ?>>
                      <a href="search_rebort_code.php?num=4&id=3">

                        <span class="sub-item"> معرفة التقارير المدخلة البحث باسم الموظف</span>
                      </a>
                    </li>
                    <li <?php if ($num == 5 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_today_reception_data.php?num=5&id=3">

                        <span class="sub-item"> بيانات الاستقبال</span>
                      </a>
                    </li>
                    <li <?php if ($num == 6 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_search_reception_code.php?num=6&id=3">

                        <span class="sub-item"> بيانات الاستقبال حسب تاريخ معين</span>
                      </a>
                    </li>
                    <li <?php if ($num == 7 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_today_convert_data.php?num=7&id=3">

                        <span class="sub-item"> بيانات ادارة الحالة</span>
                      </a>
                    </li>
                    <li <?php if ($num == 8 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_search_convert_code.php?num=8&id=3">

                        <span class="sub-item"> بيانات ادارة الحالة حسب تاريخ معين</span>
                      </a>
                    </li>
                    <li <?php if ($num == 9 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_today_doctor_data.php?num=9&id=3">

                        <span class="sub-item"> بيانات الطبيب العام</span>
                      </a>
                    </li>
                    <li <?php if ($num == 10 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_search_doctor_code.php?num=10&id=3">

                        <span class="sub-item"> بيانات الطبيب العام حسب تاريخ معين</span>
                      </a>
                    </li>
                    <li <?php if ($num == 11 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_today_psyshological_data.php?num=11&id=3">

                        <span class="sub-item"> بيانات الطبيب النفسي</span>
                      </a>
                    </li>
                    <li <?php if ($num == 12 && $id == 3) echo 'class="active"' ?>>
                      <a href="admin_search_psyshological_code.php?num=12&id=3">

                        <span class="sub-item"> بيانات الطبيب النفسي حسب تاريخ معين</span>
                      </a>
                    </li>


                  </ul>
                </div>
              </li>
            <?php } ?>




            <?php if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>
              <li class="nav-item <?php if ($id == 14) echo 'active submenu' ?>">
                <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#reb';
                  }

                  ?>">
                  <i class="flaticon-user-5"></i>
                  <p>التقارير</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse <?php if ($id == 14) echo 'show' ?>" id="reb">
                  <ul class="nav nav-collapse">


                    <li <?php if ($num == 1 && $id == 14) echo 'class="active"' ?>>
                      <a href="rebort.php?num=1&id=14">

                        <span class="sub-item">تقرير مؤشرات </span>
                      </a>
                    </li>
                    <li <?php if ($num == 2 && $id == 14) echo 'class="active"' ?>>
                      <a href="rebort_caseload.php?num=2&id=14">

                        <span class="sub-item"> caseload تقرير </span>
                      </a>
                    </li>




                  </ul>
                </div>
              </li>
            <?php } ?>

            <li class="nav-item <?php if ($id == 12) echo 'active submenu' ?>">
              <a data-toggle="collapse" href="<?php

                                              echo '#vacation_request';


                                              ?>">
                <i class="far fas fa-id-badge"></i>
                <p> قسم الاجازات </p>
                <span class="caret"></span>
              </a>
              <div class="collapse <?php if ($id == 12) echo 'show' ?>" id="vacation_request">
                <ul class="nav nav-collapse">
                  <li <?php if ($num == 1 && $id == 12) echo 'class="active"' ?>>
                    <a href="vacation_request.php?num=1&id=12">
                      <span class="sub-item"> طلب اجازة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 2 && $id == 5) echo 'class="active"' ?>>
                    <a href="vacation_request_date_table.php?num=2&id=12">
                      <span class="sub-item">عرض جميع الطلبات</span>
                    </a>
                  </li>





                </ul>
              </div>
            </li>





            <li class="nav-item <?php if ($id == 1) echo 'active submenu' ?>">
              <a data-toggle="collapse" href="<?php
                                              if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 3 || $_SESSION['user']['rule_id'] == 6) {
                                                echo '#base';
                                              }

                                              ?>">
                <i class="far fa-address-card"></i>
                <p>الاستقبال</p>
                <span class="caret"></span>
              </a>
              <div class="collapse <?php if ($id == 1) echo 'show' ?>" id="base">
                <ul class="nav nav-collapse">
                  <li <?php if ($num == 1 && $id == 1) echo 'class="active"' ?>>
                    <a href="add_reception.php?num=1&id=1">
                      <span class="sub-item">الحالة جديدة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 2 && $id == 1) echo 'class="active"' ?>>
                    <a href="back_reception.php?num=2&id=1">
                      <span class="sub-item"> الحالة عودة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 3 && $id == 1) echo 'class="active"' ?>>
                    <a href="search_reception_name.php?num=3&id=1">
                      <span class="sub-item">البحث بالاسم</span>
                    </a>
                  </li>
                  <li <?php if ($num == 4 && $id == 1) echo 'class="active"' ?>>
                    <a href="search_reception_code.php?num=4&id=1">
                      <span class="sub-item"> البحث بالكود</span>
                    </a>
                  </li>
                  <li <?php if ($num == 5 && $id == 1) echo 'class="active"' ?>>
                    <a href="add_visit.php?num=5&id=1">
                      <span class="sub-item">الحجز</span>
                    </a>
                  </li>
                  <li <?php if ($num == 6 && $id == 1) echo 'class="active"' ?>>
                    <a href="search_vist_code.php?num=6&id=1">
                      <span class="sub-item"> استعلام عن حجز </span>
                    </a>
                  </li>
                  <li <?php if ($num == 7 && $id == 1) echo 'class="active"' ?>>
                    <a href="today_reception_data.php?num=7&id=1">
                      <span class="sub-item">البيانات المدخلة لليوم</span>
                    </a>
                  </li>
                  <li <?php if ($num == 8 && $id == 1) echo 'class="active"' ?>>
                    <a href="emp_reception_report.php?num=8&id=1">
                      <span class="sub-item">النقرير اليومي</span>
                    </a>
                  </li>

                </ul>
              </div>
            </li>








            <li class="nav-item <?php if ($id == 5) echo 'active submenu' ?>">
              <a data-toggle="collapse" href="<?php
                                              if ($_SESSION['user']['rule_id'] == 4 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                                                echo '#LAB_TO_LOB';
                                              }

                                              ?>">
                <i class="far fas fa-id-badge"></i>
                <p>ادارة الحالة</p>
                <span class="caret"></span>
              </a>
              <div class="collapse <?php if ($id == 5) echo 'show' ?>" id="LAB_TO_LOB">
                <ul class="nav nav-collapse">
                  <li <?php if ($num == 1 && $id == 5) echo 'class="active"' ?>>
                    <a href="add_convert.php?num=1&id=5">
                      <span class="sub-item">الحالة جديدة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 2 && $id == 5) echo 'class="active"' ?>>
                    <a href="back_convert.php?num=2&id=5">
                      <span class="sub-item"> الحالة عودة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 4 && $id == 5) echo 'class="active"' ?>>
                    <a href="search_convert_code.php?num=4&id=5">
                      <span class="sub-item"> البحث بالكود</span>
                    </a>
                  </li>
                  <li <?php if ($num == 5 && $id == 5) echo 'class="active"' ?>>
                    <a href="today_convert_data.php?num=5&id=5">
                      <span class="sub-item">البيانات المدخلة لليوم</span>
                    </a>
                  </li>
                  <li <?php if ($num == 6 && $id == 5) echo 'class="active"' ?>>
                    <a href="emp_convert_report.php?num=6&id=5">
                      <span class="sub-item">النقرير اليومي</span>
                    </a>
                  </li>




                </ul>
              </div>
            </li>








            <li class="nav-item <?php if ($id == 6) echo 'active submenu' ?>">
              <a data-toggle="collapse" href="<?php
                                              if ($_SESSION['user']['rule_id'] == 5 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                                                echo '#reborter';
                                              }

                                              ?>">
                <i class="fa fa-stethoscope"></i>
                <p>الطبيب العام</p>
                <span class="caret"></span>
              </a>
              <div class="collapse <?php if ($id == 6) echo 'show' ?>" id="reborter">
                <ul class="nav nav-collapse">
                  <li <?php if ($num == 1 && $id == 6) echo 'class="active"' ?>>
                    <a href="add_doctor.php?num=1&id=6">
                      <span class="sub-item">الحالة جديدة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 2 && $id == 6) echo 'class="active"' ?>>
                    <a href="back_doctor.php?num=2&id=6">
                      <span class="sub-item"> الحالة عودة</span>
                    </a>
                  </li>

                  <li <?php if ($num == 4 && $id == 6) echo 'class="active"' ?>>
                    <a href="search_doctor_code.php?num=4&id=6">
                      <span class="sub-item"> البحث بالكود</span>
                    </a>
                  </li>
                  <?php if ($_SESSION['user']['branch_id'] == 6 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>
                    <li <?php if ($num == 7 && $id == 6) echo 'class="active"' ?>>
                      <a href="search_doctor_lap.php?num=7&id=6">
                        <span class="sub-item">نتيجة الفحص</span>
                      </a>
                    </li>
                  <?php } ?>
                  <li <?php if ($num == 8 && $id == 6) echo 'class="active"' ?>>
                    <a href="today_doctor_data.php?num=8&id=6">
                      <span class="sub-item"> البيانات المدخلة لليوم</span>
                    </a>
                  </li>
                  <li <?php if ($num == 6 && $id == 6) echo 'class="active"' ?>>
                    <a href="emp_doctor_report.php?num=6&id=6">
                      <span class="sub-item">النقرير اليومي</span>
                    </a>
                  </li>





                </ul>
              </div>
            </li>









            <li class="nav-item <?php if ($id == 2) echo 'active submenu' ?>">
              <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 12 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#res';
                  }

                  ?>">
                <i class="fas fas fa-notes-medical"></i>
                <p>الطبيب النفسي</p>
                <span class="caret"></span>
              </a>
              <div class="collapse <?php if ($id == 2) echo 'show' ?>" id="res">
                <ul class="nav nav-collapse">
                  <li <?php if ($num == 1 && $id == 2) echo 'class="active"' ?>>
                    <a href="add_psyshological.php?num=1&id=2">
                      <span class="sub-item">الحالة جديدة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 2 && $id == 2) echo 'class="active"' ?>>
                    <a href="back_psyshological.php?num=2&id=2">
                      <span class="sub-item"> الحالة عودة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 4 && $id == 2) echo 'class="active"' ?>>
                    <a href="search_psyshological_code.php?num=4&id=2">
                      <span class="sub-item"> البحث بالكود</span>
                    </a>
                  </li>
                  <li <?php if ($num == 5 && $id == 2) echo 'class="active"' ?>>
                    <a href="today_psyshological_data.php?num=5&id=2">
                      <span class="sub-item">البيانات المدخلة لليوم</span>
                    </a>
                  </li>
                  <?php if ($_SESSION['user']['branch_id'] == 6 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>

                    <li <?php if ($num == 7 && $id == 2) echo 'class="active"' ?>>
                      <a href="search_doctor_lap.php?num=7&id=2">
                        <span class="sub-item">نتيجة الفحص</span>
                      </a>
                    </li>

                    <li <?php if ($num == 9 && $id == 2) echo 'class="active"' ?>>
                      <a href="visit_psyshologicalTo_sleeping.php?num=9&id=2">
                        <span class="sub-item">زيارة قسم الرقود</span>
                      </a>
                    </li>
                  <?php } ?>

                  <li <?php if ($num == 6 && $id == 2) echo 'class="active"' ?>>
                    <a href="emp_psyshological_report.php?num=6&id=2">
                      <span class="sub-item">النقرير اليومي</span>
                    </a>
                  </li>



                </ul>
              </div>
            </li>




            <li class="nav-item <?php if ($id == 10) echo 'active submenu' ?>">
              <a data-toggle="collapse" href="<?php
                                              if ($_SESSION['user']['rule_id'] == 7 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                                                echo '#psychiatrist';
                                              }

                                              ?>">
                <i class="fa fa-stethoscope"></i>
                <p> الاخصائي النفسي</p>
                <span class="caret"></span>
              </a>
              <div class="collapse <?php if ($id == 10) echo 'show' ?>" id="psychiatrist">
                <ul class="nav nav-collapse">
                  <li <?php if ($num == 1 && $id == 10) echo 'class="active"' ?>>
                    <a href="add_psychiatrist.php?num=1&id=10">
                      <span class="sub-item">دراسة حالة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 16 && $id == 10) echo 'class="active"' ?>>
                    <a href="back_psychiatrist.php?num=16&id=10">
                      <span class="sub-item">دراسة حالة عودة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 2 && $id == 10) echo 'class="active"' ?>>
                    <a href="individual_sessions.php?num=2&id=10">
                      <span class="sub-item">جلسات فردية</span>
                    </a>
                  </li>

                  <li <?php if ($num == 3 && $id == 10) echo 'class="active"' ?>>
                    <a href="group_sessions.php?num=3&id=10">
                      <span class="sub-item">جلسات جماعية</span>
                    </a>
                  </li>

                  <li <?php if ($num == 4 && $id == 10) echo 'class="active"' ?>>
                    <a href="consult_his_psychology.php?num=4&id=10">
                      <span class="sub-item">استشارة نفسية</span>
                    </a>
                  </li>

                  <li <?php if ($num == 5 && $id == 10) echo 'class="active"' ?>>
                    <a href="search_psychiatrist_code.php?num=5&id=10">
                      <span class="sub-item">البحث بالكود</span>
                    </a>
                  </li>
                  <li <?php if ($num == 6 && $id == 10) echo 'class="active"' ?>>
                    <a href="today_psychiatrist_data.php?num=6&id=10">
                      <span class="sub-item">البيانات المدخلة لليوم دراسة حالة</span>
                    </a>
                  </li>
                  <li <?php if ($num == 8 && $id == 10) echo 'class="active"' ?>>
                    <a href="today_individual_sessions_data.php?num=8&id=10">
                      <span class="sub-item">البيانات المدخلة لليوم جلسات فردية</span>
                    </a>
                  </li>
                  <li <?php if ($num == 9 && $id == 10) echo 'class="active"' ?>>
                    <a href="today_group_sessions_data.php?num=9&id=10">
                      <span class="sub-item">البيانات المدخلة لليوم جلسات جماعية </span>
                    </a>
                  </li>
                  <li <?php if ($num == 10 && $id == 10) echo 'class="active"' ?>>
                    <a href="today_consult_his_psychology_data.php?num=10&id=10">
                      <span class="sub-item">البيانات المدخلة لليوم استشارة نفسية</span>
                    </a>
                  </li>
                  <li <?php if ($num == 12 && $id == 10) echo 'class="active"' ?>>
                    <a href="emp_psychiatrist_talk_report.php?num=12&id=10">
                      <span class="sub-item">النقرير اليومي لدراسة الحالة</span>
                    </a>
                  </li>
            </li>
            <li <?php if ($num == 13 && $id == 10) echo 'class="active"' ?>>
              <a href="emp_individual_sessions_report.php?num=13&id=10">
                <span class="sub-item">النقرير اليومي للجلسات الفردية</span>
              </a>
            </li>
            <li <?php if ($num == 7 && $id == 10) echo 'class="active"' ?>>
              <a href="emp_group_sessions_report.php?num=7&id=10">
                <span class="sub-item">النقرير اليومي للجلسات الجماعية </span>
              </a>
            </li>
            <li <?php if ($num == 14 && $id == 10) echo 'class="active"' ?>>
              <a href="emp_consult_his_psychology_report.php?num=14&id=10">
                <span class="sub-item">النقرير اليومي للاستشارة النفسية </span>
              </a>
            </li>

            <li <?php if ($num == 11 && $id == 10) echo 'class="active"' ?>>
              <a href="exam/index.php?num=11&id=10">
                <span class="sub-item">الاختبارات</span>
              </a>
            </li>






          </ul>
        </div>
        </li>



        <li class="nav-item <?php if ($id == 7) echo 'active submenu' ?>">
          <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 9 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 18) {
                    echo '#sei';
                  }

                  ?>">
            <i class="fas fas fa-notes-medical"></i>
            <p>جلسات التوعية</p>
            <span class="caret"></span>
          </a>
          <div class="collapse <?php if ($id == 7) echo 'show' ?>" id="sei">
            <ul class="nav nav-collapse">
              <li <?php if ($num == 1 && $id == 7) echo 'class="active"' ?>>
                <a href="add_session.php?num=1&id=7">
                  <span class="sub-item"> جلسة جديدة</span>
                </a>
              </li>

              <li <?php if ($num == 5 && $id == 7) echo 'class="active"' ?>>
                <a href="today_session_data.php?num=5&id=7">
                  <span class="sub-item">البيانات المدخلة لليوم</span>
                </a>
              </li>

              <li <?php if ($num == 6 && $id == 7) echo 'class="active"' ?>>
                <a href="add_escort.php?num=6&id=7">
                  <span class="sub-item">اضافة المرافقين</span>
                </a>
              </li>
              <li <?php if ($num == 7 && $id == 7) echo 'class="active"' ?>>
                <a href="back_escort.php?num=7&id=7">
                  <span class="sub-item">تسجيل المرافقين عودة</span>
                </a>
              </li>
              <li <?php if ($num == 8 && $id == 7) echo 'class="active"' ?>>
                <a href="escort_table.php?num=8&id=7">
                  <span class="sub-item">عرض بيانات المرافقين</span>
                </a>
              </li>
              <li <?php if ($num == 9 && $id == 7) echo 'class="active"' ?>>
                <a href="emp_session_report.php?num=9&id=7">
                  <span class="sub-item">النقرير اليومي الخاص بالحالات</span>
                </a>
              </li>
              <li <?php if ($num == 10 && $id == 7) echo 'class="active"' ?>>
                <a href="emp_session_escort_report.php?num=10&id=7">
                  <span class="sub-item">النقرير اليومي الخاص بالمرافقين</span>
                </a>
              </li>



            </ul>
          </div>
        </li>




        <li class="nav-item <?php if ($id == 8) echo 'active submenu' ?>">
          <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 8 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#slep';
                  }

                  ?>">
            <i class="fas fas fa-notes-medical"></i>
            <p>قسم الرقود</p>
            <span class="caret"></span>
          </a>
          <div class="collapse <?php if ($id == 8) echo 'show' ?>" id="slep">
            <ul class="nav nav-collapse">
              <li <?php if ($num == 1 && $id == 8) echo 'class="active"' ?>>
                <a href="add_sleeping_morning.php?num=1&id=8">
                  <span class="sub-item"> جديدة صباح</span>
                </a>
              </li>
              <li <?php if ($num == 2 && $id == 8) echo 'class="active"' ?>>
                <a href="back_sleeping_morning.php?num=2&id=8">
                  <span class="sub-item"> عودة صباح</span>
                </a>
              </li>

              <li <?php if ($num == 3 && $id == 8) echo 'class="active"' ?>>
                <a href="today_sleeping_morning_data.php?num=3&id=8">
                  <span class="sub-item">البيانات المدخلة لليوم صباح</span>
                </a>
              </li>

              <li <?php if ($num == 4 && $id == 8) echo 'class="active"' ?>>
                <a href="add_sleeping_afternoon.php?num=4&id=8">
                  <span class="sub-item"> جديدة مساء</span>
                </a>
              </li>
              <li <?php if ($num == 5 && $id == 8) echo 'class="active"' ?>>
                <a href="back_sleeping_afternoon.php?num=5&id=8">
                  <span class="sub-item"> عودة مساء</span>
                </a>
              </li>

              <li <?php if ($num == 6 && $id == 8) echo 'class="active"' ?>>
                <a href="today_sleeping_afternoon_data.php?num=6&id=8">
                  <span class="sub-item">البيانات المدخلة لليوم مساء</span>
                </a>
              </li>

              <li <?php if ($num == 7 && $id == 8) echo 'class="active"' ?>>
                <a href="add_sleeping_night.php?num=7&id=8">
                  <span class="sub-item"> جديدة ليل</span>
                </a>
              </li>
              <li <?php if ($num == 8 && $id == 8) echo 'class="active"' ?>>
                <a href="back_sleeping_night.php?num=8&id=8">
                  <span class="sub-item"> عودة ليل</span>
                </a>
              </li>

              <li <?php if ($num == 9 && $id == 8) echo 'class="active"' ?>>
                <a href="today_sleeping_night_data.php?num=9&id=8">
                  <span class="sub-item">البيانات المدخلة لليوم ليل</span>
                </a>
              </li>

              <li <?php if ($num == 11 && $id == 8) echo 'class="active"' ?>>
                <a href="search_sleeping_code.php?num=11&id=8">
                  <span class="sub-item">البحث برقم الكود</span>
                </a>
              </li>

              <li <?php if ($num == 10 && $id == 8) echo 'class="active"' ?>>
                <a href="emp_sleeping_morning_report.php?num=10&id=8">
                  <span class="sub-item">النقرير اليومي للفترة الصباحية</span>
                </a>
              </li>
              <li <?php if ($num == 12 && $id == 8) echo 'class="active"' ?>>
                <a href="emp_sleeping_afternoon_report.php?num=12&id=8">
                  <span class="sub-item">النقرير اليومي للفترة المسائية</span>
                </a>
              </li>
              <li <?php if ($num == 13 && $id == 8) echo 'class="active"' ?>>
                <a href="emp_sleeping_night_report.php?num=13&id=8">
                  <span class="sub-item">النقرير اليومي للفترة الليلية</span>
                </a>
              </li>



            </ul>
          </div>
        </li>




        <?php if ($_SESSION['user']['branch_id'] == 6 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>

          <li class="nav-item <?php if ($id == 9) echo 'active submenu' ?>">
            <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 10 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#lap';
                  }

                  ?>">
              <i class="fas fas fa-notes-medical"></i>
              <p>قسم المختبرات</p>
              <span class="caret"></span>
            </a>
            <div class="collapse <?php if ($id == 9) echo 'show' ?>" id="lap">
              <ul class="nav nav-collapse">
                <li <?php if ($num == 1 && $id == 9) echo 'class="active"' ?>>
                  <a href="search_lap_code.php?num=1&id=9">
                    <span class="sub-item"> استعلام عن الفحص</span>
                  </a>
                </li>
                <li <?php if ($num == 2 && $id == 9) echo 'class="active"' ?>>
                  <a href="add_lap.php?num=2&id=9">
                    <span class="sub-item"> اضافة نتيجة فحص</span>
                  </a>
                </li>
                <li <?php if ($num == 3 && $id == 9) echo 'class="active"' ?>>
                  <a href="today_lap_data.php?num=3&id=9">
                    <span class="sub-item"> البيانات المدخلة لليوم</span>
                  </a>
                </li>
                <li <?php if ($num == 4 && $id == 9) echo 'class="active"' ?>>
                  <a href="emp_lap_report.php?num=4&id=9">
                    <span class="sub-item">النقرير اليومي</span>
                  </a>
                </li>



              </ul>
            </div>
          </li>
        <?php
        }
        ?>



        <li class="nav-item <?php if ($id == 15) echo 'active submenu' ?>">
          <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 11 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#pharmacy';
                  }

                  ?>">
            <i class="fas fas fa-notes-medical"></i>
            <p>قسم الصيدلية</p>
            <span class="caret"></span>
          </a>
          <div class="collapse <?php if ($id == 15) echo 'show' ?>" id="pharmacy">
            <ul class="nav nav-collapse">
              <li <?php if ($num == 1 && $id == 15) echo 'class="active"' ?>>
                <a href="pharmacy.php?num=1&id=15">
                  <span class="sub-item">اضافة صنف</span>
                </a>
              </li>
              <li <?php if ($num == 2 && $id == 15) echo 'class="active"' ?>>
                <a href="pure_pharmacy.php?num=2&id=15">
                  <span class="sub-item">صرف علاج للحالة</span>
                </a>
              </li>
              <li <?php if ($num == 3 && $id == 15) echo 'class="active"' ?>>
                <a href="today_pharmacy_data.php?num=3&id=15">
                  <span class="sub-item">بيانات الصرف لليوم</span>
                </a>
              </li>
              <li <?php if ($num == 4 && $id == 15) echo 'class="active"' ?>>
                <a href="emp_pharmacy_report.php?num=4&id=15">
                  <span class="sub-item">التقرير اليومي</span>
                </a>
              </li>





            </ul>
          </div>
        </li>


        <li class="nav-item <?php if ($id == 11) echo 'active submenu' ?>">
          <a data-toggle="collapse" href="
                  <?php
                  if ($_SESSION['user']['rule_id'] == 13 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                    echo '#manger';
                  }

                  ?>">
            <i class="fas fas fa-notes-medical"></i>
            <p>مدير المركز</p>
            <span class="caret"></span>
          </a>
          <div class="collapse <?php if ($id == 11) echo 'show' ?>" id="manger">
            <ul class="nav nav-collapse">
              <li <?php if ($num == 1 && $id == 11) echo 'class="active"' ?>>
                <a href="search_manger_code.php?num=1&id=11">
                  <span class="sub-item">البحث برقم الكود</span>
                </a>
              </li>
              <li <?php if ($num == 2 && $id == 11) echo 'class="active"' ?>>
                <a href="search_manger_date.php?num=2&id=11">
                  <span class="sub-item">البحث حسب تاريخ</span>
                </a>
              </li>
              <li <?php if ($num == 2 && $id == 11) echo 'class="active"' ?>>
                <a href="manger_request.php?num=3&id=11">
                  <span class="sub-item">الطلبات</span>
                </a>
              </li>




            </ul>
          </div>
        </li>





        <?php if ($_SESSION['user']['rule_id'] == 14 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>
          <li class="nav-item <?php if ($id == 13) echo 'active submenu' ?>">
            <a data-toggle="collapse" href="<?php
                                            if ($_SESSION['user']['rule_id'] == 14 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
                                              echo '#hr';
                                            }

                                            ?>">
              <i class="far fas fa-id-badge"></i>
              <p> HR </p>
              <span class="caret"></span>
            </a>
            <div class="collapse <?php if ($id == 13) echo 'show' ?>" id="hr">
              <ul class="nav nav-collapse">
                <li <?php if ($num == 1 && $id == 13) echo 'class="active"' ?>>
                  <a href="hr_request_date_table.php?num=1&id=13">
                    <span class="sub-item">عرض الاجازات</span>
                  </a>
                </li>
                <li <?php if ($num == 2 && $id == 13) echo 'class="active"' ?>>
                  <a href="hr_add_user_vacation.php?num=2&id=13">
                    <span class="sub-item">اضافة اجازات للموظفين</span>
                  </a>
                </li>






              </ul>
            </div>
          </li>
        <?php } ?>










        </ul>
      </div>
    </div>
  </div>
  <div class="main-panel">