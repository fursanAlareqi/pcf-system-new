<?php
$today = date('Y-m-d');
require('../include/dbconnect.php');

$table = $_GET['table'] ?? null;
$branchId = $_GET['branch_id'] ?? null;

if ($table && $branchId) {
    // لتفادي SQL Injection نستخدم اسم الجدول بشكل آمن
    $allowedTables = ['psyshological', 'mange_convert','resption','doctor'];
    
    if (in_array($table, $allowedTables)) {
        $sql = "SELECT COUNT(id) as num FROM $table WHERE date = ? AND branch = ?";
        $stm = $con->prepare($sql);
        $stm->execute([$today, $branchId]);
        $num = $stm->fetch();
        echo $num['num'];
    } else {
        echo "Invalid table";
    }
}
?>
