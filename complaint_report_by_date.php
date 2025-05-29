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
                <form action="" method="post">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title"> تقرير الشكاوى </div>
                        </div>
                        <div class="card-body">



                            <form action="" method="post">
                                <div class="row">

                                    <div class="col-md-6 ">
                                        <div class="form-group form-floating-label">
                                            <label>من تاريخ</label>
                                            <input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date">
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group form-floating-label">
                                            <label>الى تاريخ</label>
                                            <input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date">
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





                    $user = $_SESSION['user']['id'];
                    $sql = "SELECT * FROM complaints where  date BETWEEN ? and ? ";
                    $stmu = $con->prepare($sql);
                    $stmu->execute(array($from_date, $to_date));

                    if ($stmu->rowCount() > 0) {
                ?>

                        <div class="table-responsive">




                            <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">

                                <center>
                                    <button id="export" class="btn btn-success">Export to excel</button>
                                </center>
                                <br>

                                <thead>
                                    <tr>

                                        <th>Sno.</th>

                                        <th>تاريخ الشكوى</th>
                                        <th>المرفق الصحي</th>
                                        <th>رقم الشكوى</th>
                                        <th>اسم مقدم الشكوى</th>
                                        <th>رقم تلفون مقدم الشكوى</th>
                                        <th> وسيلة استقبال الشكوى</th>
                                        <th>محتوى الشكوى</th>

                                        <th>المركز</th>
                                        <th>نوع الشكوى</th>
                                        <th>الاجراء الذي تم</th>
                                        <th>المعالجة التي تمت للشكوى</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <th>Sno.</th>

                                    <th>تاريخ الشكوى</th>
                                    <th>المرفق الصحي</th>
                                    <th>رقم الشكوى</th>
                                    <th>اسم مقدم الشكوى</th>
                                    <th>رقم تلفون مقدم الشكوى</th>
                                    <th> وسيلة استقبال الشكوى</th>
                                    <th>محتوى الشكوى</th>

                                    <th>المركز</th>
                                    <th>نوع الشكوى</th>
                                    <th>الاجراء الذي تم</th>
                                    <th>المعالجة التي تمت للشكوى</th>

                                </tfoot>
                                <tbody>
                                    <?php {
                                        foreach ($stmu->fetchAll() as $row) {

                                    ?>

                                            <tr>

                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['date']; ?></td>
                                                <td><?php echo $row['health_facility']; ?></td>
                                                <td><?php echo $row['complaint_number']; ?></td>
                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['phone_number']; ?></td>
                                                <td><?php echo $row['complaint_receipt_method']; ?></td>
                                                <td><?php echo $row['content']; ?></td>
                                                <td><?php echo $row['center']; ?></td>
                                                <td><?php echo $row['type']; ?></td>
                                                <td><?php echo $row['action']; ?></td>
                                                <td><?php echo $row['process']; ?></td>

                                            </tr>

                                <?php
                                        }
                                    }
                                } else {
                                    echo ' <div class="alert alert-danger">NO Row</div>';
                                }


                                ?>


                                </tbody>
                            </table>


                        </div>
                    <?php }  ?>


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