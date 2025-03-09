<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

    echo "<script> window.open('logout.php','_self')</script>";
    // header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>

    <div class="content">
        <div class="page-inner">


            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title"> احصائيات جلسات التوعية </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">

                                            <div class="form-group form-floating-label">
                                                <label>من تاريخ</label>
                                                <input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date" required>
                                            </div>



                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group form-floating-label">
                                                <label>الى تاريخ</label>
                                                <input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date" required>
                                            </div>

                                        </div>
                                        <div class="col-md-6 col-lg-4">

                                            <div class="form-group form-floating-label">
                                                <label for="tokens">الفرع</label>
                                                <select class="selectpicker form-control" name="branch" id="tokens" data-live-search="true" required>
                                                    <option value="الكل">الكل</option>
                                                    <?php

                                                    $sql = "select * from branch  ";
                                                    $stm = $con->prepare($sql);
                                                    $stm->execute();
                                                    if ($stm->rowCount() > 0) {
                                                        foreach ($stm->fetchAll() as $row) {

                                                    ?>
                                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['branch_name']; ?></option>

                                                    <?php
                                                        }
                                                    }
                                                    ?>

                                                </select>
                                            </div>
                                        </div>

                                    </div>


                            </div>
                            <div class="card-action">
                                <input class="btn btn-success" type="submit" name="search" value="search">
                            </div>

                    </form>
                    <?php if (isset($_POST['search'])) {

                        function test_input($data)
                        {
                            $data = trim($data);
                            $data = stripslashes($data);
                            $data = htmlspecialchars($data);
                            return $data;
                        }

                        $from_date = test_input($_POST['from_date']);
                        $to_date = test_input($_POST['to_date']);

                        // 

                        $sql = "select code1 ,date from session";
                        $stmu = $con->prepare($sql);
                        $stmu->execute(array($date, $user));

                        if ($stmu->rowCount()) {
                            $sessions = $stmu->fetchAll();
                        }

                        $boys = 0;
                        $girls = 0;
                        $men = 0;
                        $women = 0;

                        $codes = array_column($sessions, 'code1');



                        $sql = "select * from resption where code IN (select code1 from session) ";

                        // echo $sql;
                        $stm = $con->prepare($sql);
                        $stm->execute();

                        if ($stm->rowCount()) {

                            $resptions = $stm->fetchAll();
                        }


                    ?>

                        <div class="table-responsive">







                            <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                                <thead>
                                    <tr>
                                        <th>مستفيد / مرافق</th>

                                        <th> جديد/عودة</th>
                                        <th>نساء</th>

                                        <th>فتيات</th>

                                        <th>رجال</th>

                                        <th>فتيان</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>مستفيد / مرافق</th>

                                    <th> جديد/عودة</th>
                                    <th>نساء</th>

                                    <th>فتيات</th>

                                    <th>رجال</th>

                                    <th>فتيان</th>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td>مستفيد</td>
                                        <td>جديد</td>
                                        <td>



                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr></tr>
                                    <tr></tr>
                                    <tr></tr>






                                </tbody>
                            </table>

                        </div>
                    <?php } ?>


                </div>

                </form>


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

} else {
    echo "<script> window.open('index.php','_self')</script>";
}
?>