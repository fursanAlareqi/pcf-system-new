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
                            <div class="card-title"> تقرير قنوات التواصل </div>
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
                    $sql = "SELECT * FROM social_media_channels where  Date(date)>=? and Date(date)<=?  ";
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

                                        <th>كود الحالة</th>
                                        <th>التاريخ</th>
                                        <th> الاسم</th>
                                        <th>العمر</th>
                                        <th>الجنس</th>

                                        <th>المدينة</th>
                                        <th>نوع قناة التواصل</th>

                                        <th>نوع الاستشارة</th>
                                        <th>نوع الخدمة</th>

                                    </tr>

                                </thead>
                                <tfoot>
                                    <tr>

                                        <th>Sno.</th>

                                        <th>كود الحالة</th>
                                        <th>التاريخ</th>
                                        <th> الاسم</th>
                                        <th>العمر</th>
                                        <th>الجنس</th>

                                        <th>المدينة</th>
                                        <th>نوع قناة التواصل</th>

                                        <th>نوع الاستشارة</th>
                                        <th>نوع الخدمة</th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php {
                                        foreach ($stmu->fetchAll() as $row) {

                                    ?>

                                            <tr>


                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['code']; ?></td>
                                                <td><?php echo $row['date']; ?></td>

                                                <td><?php echo $row['name']; ?></td>
                                                <td><?php echo $row['age']; ?></td>
                                                <td><?php echo $row['gender']; ?></td>

                                                <td><?php echo $row['city']; ?></td>
                                                <td><?php echo $row['channel_type'] == 1 ? "فيسبوك" : "واتس اب"; ?></td>
                                                <td><?php echo $row['inquiry_type'] == 1 ? "عن المؤسسة وخدماته" : "استشارة نفسية"; ?></td>
                                                <td><?php

                                                    if ($row['service_type'] == 1) {
                                                        echo "تثقيف";
                                                    } elseif ($row['service_type'] == 2) {
                                                        echo "استشارة نفسية";
                                                    } else {
                                                        echo "اخرى";
                                                    }
                                                    ?></td>

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