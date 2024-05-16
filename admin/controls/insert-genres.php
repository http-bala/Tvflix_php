<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);

$genres = $data['genres'];

include "config.php";

$sql = "INSERT INTO `genres`(`genres_name`) VALUES ('{$genres}')";

if (mysqli_query($con,$sql)) {
    echo json_encode(array('message' => 'genres record added', 'status' => true));
    
}else{
    echo json_encode(array('message' => 'no record found', 'status' => false));
}

?>