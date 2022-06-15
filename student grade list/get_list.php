<?php
header("Content-Type: application/json");

include 'connect.php';
$response = array();
$query = "SELECT * from grades";
$fire = mysqli_query($conn, $query);
if($fire){
    for($i=0; $i < mysqli_num_rows($fire); $i++){
        $row = mysqli_fetch_assoc($fire);
        $response[$i] = $row;
    }
    
    echo json_encode($response);

}

?>