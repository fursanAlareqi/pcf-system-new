<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>
    <?php



    $sql = "SELECT * , TIMESTAMPDIFF(YEAR, brithday, CURDATE()) as age FROM resption where Date(date) >=? and Date(date) <=? and type='جديد' order by id desc  ";
    $stmu = $con->prepare($sql);
    $stmu->execute(array($from_date, $to_date));

    $data = $stmu->fetchAll();
    ?>



    <?php
    //doctor
    $sql = "SELECT date,code,medical FROM doctor  where code in (" . implode(',', array_column($data, 'code')) .  ') ';
    $stm = $con->query($sql);

    $doctor_medical = ($stm->fetchAll());


    //psyshological
    $sql = "SELECT  date,code,medical FROM psyshological  where code in (" . implode(',', array_column($data, 'code')) .  ')';
    $stm = $con->query($sql);

    $psyshological_medical = ($stm->fetchAll());
    ?>

    <?php

    $doctor_medicen = [];
    $psyshological_medicen = [];

    foreach ($doctor_medical as $value) {


        if (!empty(trim($value['medical'])) &&   trim($value['medical']) != "Array") {
            $doctor_medicen[$value['code']][$value['date']] = $value['medical'];
        }
    }


    foreach ($psyshological_medical as $value) {
        if (!empty(trim($value['medical'])) &&   trim($value['medical']) != "Array") {
            $psyshological_medicen[$value['code']][$value['date']] = $value['medical'];
        }
    }
    ?>


    <?php


    $exams_tables = [
        "bike_exam",
        "anxiety_exam",
        "mania_exam",
        "social_phobia_exam",
        "social_concern_exam",
        "childe_phobia_exam",
        "mmbi",
        "personality_exam",
        "hamilton_exam"
    ];


    $exams = [
        "bike_exam" => "إختبار بيك للأكتاب",
        "anxiety_exam" => " مقياس تايلور للقلق الصريح",
        "mania_exam" => "مقياس الهوس",
        "social_phobia_exam" => "قائمة الرهاب الاجتماعي",
        "social_concern_exam" => "مقياس القلق الاجتماعي",
        "childe_phobia_exam" => "مخاوف الاطفال",
        "mmbi" => "MMbi",
        "personality_exam" => "اختبار المعتقدات الشخصية",
        "hamilton_exam" => "اختبار هاملتون لاعراض مرض الاكتئاب"
    ];

    $exam_r = [];


    foreach ($exams_tables as $exams_table) {
        $sql = "SELECT  names FROM " . $exams_table . "  where names in (" . implode(',', array_column($data, 'code')) .  ')';
        $stm = $con->query($sql);

        if ($stm->rowCount() > 0) {
            $_data = array_column($stm->fetchAll(), "names");

            $exam_r[$exams_table] = $_data;
        }
    }

    // print_r($exam_r);

    ?>


    <thead>
        <tr>
            <th>الكود</th>
            <th>الجنس</th>
            <th>العمر</th>
            <th> طبيب عام -العلاج </th>
            <th>طبيب نفسي -العلاج </th>
            <th>المقاييس النفسية</th>

        </tr>
    </thead>

    <tbody>

        <?php foreach ($data as $row) {

            if ($doctor_medicen[$row['code']] || $psyshological_medicen[$row['code']]) {

        ?>

                <tr>

                    <td><?= $row['code'] ?></td>
                    <td><?= $row['sex'] ?></td>
                    <td><?= $row['age'] ?></td>

                    <td>
                        <?php

                        foreach ($doctor_medicen[$row['code']] ?? [] as $date => $value) {
                            if (!empty($value) && $value != "") {
                        ?>
                                <span class="text-info"><?= $date ?></span> : <?= $value ?>
                                <br />
                        <?php }
                        } ?>
                    </td>

                    <td>
                        <?php
                        foreach ($psyshological_medicen[$row['code']] ?? [] as  $date => $value) {
                            if (!empty($value) && $value != "") {
                        ?>
                                <span class="text-info"> <?= $date ?> </span>: <?= $value ?>
                                <br />
                        <?php }
                        } ?>

                    </td>

                    <td>
                        <?php
                        foreach ($exams as $key => $value) {

                            if ($exam_r[$key] && in_array($row['code'], $exam_r[$key])) {

                                echo $value . ' - ';
                            }
                        }
                        ?>

                    </td>

                </tr>



        <?php }
        }
        ?>

    </tbody>
</table>