<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

    echo "<script> window.open('logout.php','_self')</script>";
    // header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>
    <!--  -->
    <?php
    if (isset($_GET['action']) && $_GET['action'] == 'add') {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $name = test_input($_POST['name']);

        $sql = "INSERT INTO mange_convert_ex_side(name) VALUES('$name')";

        $stmu = $con->prepare($sql);
        $stmu->execute();

        if ($stmu->rowCount()) {
            echo '<script src="js/send_success.js"></script>';
        } else {
            echo '<script src="js/send_error.js"></script>';
        }
    }

    ?>


    <div class="content">



        <div class="page-inner">



            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <div class="card">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="card-title">جهات الإحالة الخارجية</div>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary m-3" data-toggle="modal" data-target="#add">إضافة</button>


                            </div>
                            <div class="card-body">




                                <?php
                                $sql = "SELECT * FROM mange_convert_ex_side";

                                $stmu = $con->query($sql);
                                //عدد الحالات الكلية
                                if ($stmu->rowCount() > 0) {

                                ?>
                                    <div class="table-responsive">
                                        <table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
                                            <thead>
                                                <tr>
                                                    <th>Sno.</th>
                                                    <th>الاسم</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <th>Sno.</th>
                                                <th>الاسم</th>

                                            </tfoot>
                                            <tbody>
                                                <?php
                                                foreach ($stmu->fetchAll() as $row) {

                                                ?>

                                                    <tr>

                                                        <td><?php echo $row['id']; ?></td>
                                                        <td><?php echo $row['name']; ?></td>
                                                    </tr>
                                            <?php
                                                }
                                            } else {
                                                echo ' <div class="alert alert-danger">NO Row</div>';
                                            }
                                            ?>


                                            </tbody>
                                        </table>
                                    </div>


                            </div>
                    </form>


                </div>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">إضافة </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">


                        <form action="?action=add" method="post" id="add-form">

                            <div class="form-group form-floating-label">
                                <label>الاسم</label>
                                <input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
                            </div>
                        </form>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" form="add-form" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>

        </div>


    </div>

    <!--  -->


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