<?php
define('DB_SERVER', 'localhost');
define('DB_USER', 'pcfyemen_PCFsystem');
define('DB_PASS', ')k~3V~a]}sVp');
define('DB_NAME', 'pcfyemen_PCFsystem');
$con = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
$con->set_charset("utf8mb4");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
