<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

    echo "<script> window.open('logout.php','_self')</script>";
    // header("location:login.php");

}
if ($_SESSION['user']['rule_id'] == 11 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



    <div class="content">
        <div class="page-inner">


            <div class="row">
                <div class="col-md-12">
                    <?php
                    if (isset($_GET['action'], $_GET['ids']) && $_GET['action'] == 'edit') {
                        $id = $_GET['ids'];
                        $sql = "select * from pharmacy where id=?";
                        $stm = $con->prepare($sql);
                        $stm->execute(array($id));
                        if ($stm->rowCount()) {
                            foreach ($stm->fetchAll() as $row) {

                    ?>
                                <form action="" method="post">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title"> تعديل مصدر العلاج</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 col-lg-4">




                                                    <div class="form-group form-floating-label">
                                                        <div class="form-group form-floating-label">
                                                            <label>اسم الدواء</label>
                                                            <input type="text" value="<?php echo $row['name']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
                                                        </div>


                                                    </div>

                                                    <div class="form-group form-floating-label">
                                                        <label for="tokens">المصدر</label>

                                                        <input class="form-control" list="exporter-options" name="exporter" value="<?php echo $row['exporter']; ?>" placeholder="Type or select an option">



                                                        <!-- <select class="selectpicker form-control" name="exporter" id="tokens" data-live-search="true" required> -->

                                                        <datalist id="exporter-options">
                                                            <!-- <option value=""></option> -->

                                                            <?php if ($_SESSION['user']['branch_id'] == 6) { ?>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="6">5</option>
                                                                <option value="6">6</option>
                                                                <option>وزارة الصحة</option>
                                                                <option>مكتب الصحة</option>
                                                                <option>فاعل خير</option>
                                                                <option> الصيدليه المتعاقد معها</option>
                                                                <option>شريك محلي</option>
                                                            <?php } ?>
                                                            <?php if ($_SESSION['user']['branch_id'] == 5) { ?>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="6">5</option>
                                                                <option value="6">6</option>
                                                                <option value="7">7</option>
                                                            <?php } ?>
                                                            <?php if ($_SESSION['user']['branch_id'] == 8) { ?>
                                                                <option value="مجاني">مجاني</option>
                                                                <option value="المؤسسة">المؤسسة</option>
                                                            <?php } ?>
                                                        </datalist>
                                                    </div>

                                                </div>
                                                <div class="col-md-6 col-lg-4">


                                                </div>
                                                <div class="col-md-6 col-lg-4">




                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                <?php  } ?>
                                <div class="card-action">


                                    <input class="btn btn-success" type="submit" name="save" value="save">
                                    <input class="btn btn-danger" type="reset" value="Cancel">
                                </div>
                                </form>
                        <?php

                        } else {
                            echo ' <div class="alert alert-danger">NO Row</div>';
                        }
                    }

                        ?>
                </div>
            </div>
        </div>
    </div>



    <!-- Custom template | don't include it in your project! -->

    <!-- End Custom template -->
    <?php

    include "include/footer.php";


    ?>

<?php
    //تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
    if (isset($_POST['save'])) {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }


        $exporter = test_input($_POST["exporter"]);




        if (empty($user)) {


            echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        } elseif (empty($exporter)) {


            echo '<script>swal("يرجاء ادخال  مصدر الدواء   ", "لم يتم رفع البيانات", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        }





        /////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

        //اذا لايوجد اي مشكلة يقوم بارسال الملف
        else {



            $query = "UPDATE pharmacy set exporter=? where id=? ";
            $stm = $con->prepare($query);
            $stm->execute(array($exporter, $id));
            if ($stm->rowCount()) {
                echo '<script src="js/send_success.js"></script>';
                echo "<script>
                          window.open('pharmacy.php?num=8&id=10','_self')
                        </script>";
            } else {
                echo '<script src="js/send_error.js"></script>';
            }
        }
    }
} else {
    echo "<script> window.open('index.php','_self')</script>";
}
?>