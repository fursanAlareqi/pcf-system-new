<table border="5px" id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
    <center>
        <button id="export" class="btn btn-success">Export to excel</button>
    </center>
    <br>
    <?php

    if ($branch == "الكل") {

        $sql = "SELECT * , TIMESTAMPDIFF(YEAR, brithday, CURDATE()) as age FROM resption where Date(date) >=? and Date(date) <=? order by id desc";
        $stmu = $con->prepare($sql);
        $stmu->execute(array($from_date, $to_date));
    } else {
        $sql = "SELECT * FROM resption where branch=? and Date(date) >=? and Date(date) <=? order by id desc";
        $stmu = $con->prepare($sql);
        $stmu->execute(array($branch, $from_date, $to_date));
    }

    $data = $stmu->fetchAll();

    ?>


    <?php
    //doctor
    $sql = "SELECT code,psyshological_diagnosis FROM doctor  where code in (" . implode(',', array_column($data, 'code')) .  ') and type="جديد"';
    $stm = $con->query($sql);
    if ($stm) {
        $doctor_diagnosis = ($stm->fetchAll());
    }

    //psyshological
    $sql = "SELECT code,diagnosis FROM psyshological  where code in (" . implode(',', array_column($data, 'code')) .  ') and type="جديد"';
    $stm = $con->query($sql);
    if ($stm) {
        $psyshological_diagnosis = ($stm->fetchAll());
    } ?>
    <?php
    //get all services
    $services_tables = [
        "mange_convert",
        "doctor",
        "psyshological",
        "consult_his_psychology",
        "pure_pharmacy",
        "psychiatrist_talk",
        "individual_sessions",
        "group_sessions",
        "sleeping_morning",
        "sleeping_afternoon",
        "sleeping_night",
        "session"

    ];

    $services = [];

    $translated_service =
        [
            "mange_convert" => "إدارة حالة",
            "doctor" => "معاينة طبية -طبيب عام",
            "psyshological" => "معاينة طبية - طبيب نفسي",
            "consult_his_psychology" => "استشارة نفسية",
            "pure_pharmacy" => "صرف علاج",
            "psychiatrist_talk" => "دراسة حالة",
            "individual_sessions" => "جلسات  دعم نفسي فردي",
            "group_sessions" => "جلسات دعم نفسي  جماعية",
            "sleeping_morning" => "خدمة رقود صباحية",
            "sleeping_afternoon" => "خدمة رقود مسائية",
            "sleeping_night" => "خدمة رقود ليلية",
            "session" => "جلسات توعية",
        ];

    foreach ($services_tables as $value) {

        $sql = "SELECT distinct(code) FROM " . $value . " where code in (" . implode(',', array_column($data, 'code')) .  ')';

        $stm = $con->query($sql);


        if ($stm) {
            foreach ($stm->fetchAll() as $row) {

                if ($translated_service[$value] ?? null) {
                    $services[$row['code']] .= $translated_service[$value] . ' , ';
                }
            }
        }
    }

    ?>


    <thead>
        <tr>
            <th>الكود</th>
            <th>الجنس</th>
            <th>العمر</th>
            <th>المستوى التعليمي</th>
            <th>الإقامة</th>
            <th>الوظيفة</th>
            <th>الإعاقة</th>
            <th>التشخيص طبيب عام</th>
            <th>التشخيص الطبيب النفسي</th>
            <th>الخدمات التي حصل عليها</th>
        </tr>
    </thead>

    <tbody>

        <?php foreach ($data as $row) {
        ?>

            <tr>

                <td><?= $row['code'] ?></td>
                <td><?= $row['sex'] ?></td>
                <td><?= $row['age'] ?></td>
                <td><?= $row['studing'] ?></td>
                <td><?= $row['place'] ?></td>
                <td><?= $row['work'] ?></td>
                <td><?= $row['Disability'] ?></td>
                <td>
                    <?php
                    if ($doc_diagnosis = array_values(array_filter($doctor_diagnosis ?? [], fn ($value) => $value['code'] == $row['code']))[0]['psyshological_diagnosis'] ?? null) {
                        echo  $doc_diagnosis;
                    } ?>
                </td>

                <td>
                    <?php
                    $phy_diagnosis = array_values(array_filter($psyshological_diagnosis ?? [], fn ($value) => $value['code'] == $row['code']));
                    if ($phy_diagnosis && count($phy_diagnosis) > 0) {
                        echo  $phy_diagnosis[0]['diagnosis'];
                    } ?>
                </td>

                <td>
                    <?= $services[$row['code']] ?? '' ?>
                </td>

            </tr>



        <?php } ?>

    </tbody>
</table>