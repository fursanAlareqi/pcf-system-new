<?php
// Load the database configuration file 
// include_once 'dbconnect.php';


// $query = $con->query("SELECT * FROM members ORDER BY id ASC");
// if ($query->num_rows > 0) {
//     // Output each row of the data 
//     while ($row = $query->fetch_assoc()) {
//         $status = ($row['status'] == 1) ? 'Active' : 'Inactive';
//         $lineData = array($row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['gender'], $row['country'], $row['created'], $status);
//         array_walk($lineData, 'filterData');
//         $excelData .= implode("\t", array_values($lineData)) . "\n";
//     }
// } else {
//     $excelData .= 'No records found...' . "\n";
// }

// // Headers for download 
// header("Content-Type: application/vnd.ms-excel");
// header("Content-Disposition: attachment; filename=\"$fileName\"");

// // Render excel data 
// echo $excelData;

// exit;
