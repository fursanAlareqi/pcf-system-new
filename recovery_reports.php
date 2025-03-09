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
                                <div class="card-title"> تقرير الخدمات </div>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 ">

                                            <div class="form-group form-floating-label">
                                                <label>من تاريخ</label>
                                                <input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date" required>
                                            </div>



                                        </div>

                                        <div class="col-md-6 ">
                                            <div class="form-group form-floating-label">
                                                <label>الى تاريخ</label>
                                                <input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date" required>
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

                    ?>

                        <div class="table-responsive">
                            <?php
                            include "tables/reports/recovery.php";
                            ?>
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