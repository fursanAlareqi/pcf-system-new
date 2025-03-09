<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

    echo "<script> window.open('logout.php','_self')</script>";
    // header("location:login.php");
}

if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {


    $id = $_GET['id'];
    $sql = "SELECT * FROM `pure_pharmacy` WHERE `id` = ? limit 1";
    $stm = $con->prepare($sql);
    $stm->execute(array($id));
    $row = $stm->fetch();
    // 



    $sql = "SELECT * FROM `pharmacy` WHERE `id` in(" . $row['name'] . ")";
    $stm = $con->prepare($sql);
    $stm->execute(array(trim($row['name'])));
    $medicines = $stm->fetchAll();
?>


    <div class="content">
        <div class="page-inner">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">تعديل بيانات الصرف</h5>

                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="title">الكمية</label>
                                        <input type="text" class="form-control" id="title" name="quantity" value="<?= $row['quantity'] ?>">
                                    </div>
                                </div>


                                <div class="row mt-5">
                                    <h3>المطابقة اليدوية للاصناف</h3>
                                    <p style="color:red">**** الحقول تعرض الكمية المتبقية ***********</p>

                                    <?php

                                    foreach ($medicines as $medicine) {
                                    ?>
                                        <div class="col-md-6 mt-5">
                                            <div class="form-group">
                                                <label for="title"><?= $medicine['name'] ?></label>
                                                <input type="text" class="form-control" id="title" name="medicine[<?= $medicine['id'] ?>]" value="<?= $medicine['residual'] ?>">
                                            </div>
                                        </div>

                                    <?php
                                    }
                                    ?>


                                </div>

                            </div>

                            <div class="card-action">


                                <input class="btn btn-success" type="submit" name="save" value="save">
                                <input class="btn btn-danger" type="reset" value="Cancel">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "include/footer.php";
    ?>

<?php

    if (isset($_POST['save'])) {
        $medicines = $_POST['medicine'];
        $quntity = $_POST['quantity'];


        if ($quntity !=  $row['quantity']) {
            $sql = "UPDATE `pure_pharmacy` SET `quantity` = ? WHERE `id` = ?";
            $stm = $con->prepare($sql);
            $stm->execute(array($quntity, $id));
            if (!$stm->rowCount()) {
                echo '<script src="js/send_error.js"></script>';
                exit(0);
            }
        }

        foreach ($medicines as $key => $value) {

            $sql = "UPDATE `pharmacy` SET `residual` = ? WHERE `id` = ?";
            $stm = $con->prepare($sql);
            $stm->execute(array($value, $key));
        }

        echo "<script> window.open('pure_pharmacy_edit.php?id=" . $id . "','_self')</script>";
        echo '<script src="js/send_success.js"></script>';
    }
} else {
    echo "<script> window.open('index.php','_self')</script>";
}
?>