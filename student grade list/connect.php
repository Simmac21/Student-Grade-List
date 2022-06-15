<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = 'student_list';

try {
  $conn = mysqli_connect($servername, $username, $password, $database);
} catch(mysqli_sql_exception $e) {
  echo "Connection failed: " . $e;
}

?>