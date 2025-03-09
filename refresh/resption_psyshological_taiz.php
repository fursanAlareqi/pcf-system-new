
<?php
    $today= date('Y-m-d');  
    require ('../include/dbconnect.php');
    $sql="select count(id) as num from psyshological where date=? and branch=? ";
    $stm=$con->prepare($sql); 
    $stm->execute(array($today,6));
    $num=$stm->fetch();
    echo $num['num'];
?>