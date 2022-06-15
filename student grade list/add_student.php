<?php
header("Content-Type: application/json");

include("connect.php");

$data = null;
$response = array();
if (isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
    $grade = $_POST['grade'];

    if(!empty($fullName) && !empty($grade)) {
      $query = "INSERT INTO grades(fullName, grade) VALUES('$fullName','$grade')";
      $result = mysqli_query($conn, $query);
      
      if ($result) {
        $response[0] = array('msg' => 'Student added successfully', 'error' => 0);
      } else {
        $response[0] = array( 'msg' => 'Error Occured! Try again.', 'error' => 1);
      }
      echo json_encode($response);
    }

   
} else {
    $response[0] = array('msg' => 'Error Occured! Try again.', 'error' => 1);
    echo json_encode($response);
}
?>