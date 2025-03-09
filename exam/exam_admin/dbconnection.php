<?php
define('DB_SERVER','localhost');
define('DB_USER','u377775348_exam');
define('DB_PASS' ,'Ho775573400ho');
define('DB_NAME', 'u377775348_exam');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

