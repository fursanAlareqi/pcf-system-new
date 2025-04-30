
<?php
    // $today= date('Y-m-d');  
    // require ('../include/dbconnect.php');
    // $sql="select count(id) as num from doctor where date=? and branch=? ";
    // $stm=$con->prepare($sql); 
    // $stm->execute(array($today,5));
    // $num=$stm->fetch();
    
    // echo $num['num'];









    $_GET['table'] = 'doctor';
    $_GET['branch_id'] = 5;
    include 'count_by_table_and_branch.php';
?>