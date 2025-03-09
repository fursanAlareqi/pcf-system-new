
<?php
    $today= date('Y-m-d');  
    require ('../include/dbconnect.php');
    $sql="select count(id) as num from mange_convert where date=? and branch=? ";
    $stm=$con->prepare($sql); 
    $stm->execute(array($today,5));
    $num=$stm->fetch();
    
    echo $num['num'];
?>