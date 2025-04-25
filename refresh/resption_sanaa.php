
<?php
$today = date('Y-m-d');
require('../include/dbconnect.php');
$sql = "select count(id) as num from sana where date=? ";
$stm = $con->prepare($sql);
$stm->execute(array($today));
$num = $stm->fetch();

echo $num['num'];
?>