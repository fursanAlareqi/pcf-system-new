
<?php
// $today = date('Y-m-d');
// require('../include/dbconnect.php');
// $sql = "select count(id) as num from resption where date=? and branch=? ";
// $stm = $con->prepare($sql);
// $stm->execute(array($today, 8));
// $num = $stm->fetch();

// echo $num['num'];











$_GET['table'] = 'resption';
$_GET['branch_id'] = 8;
include 'count_by_table_and_branch.php';
?>