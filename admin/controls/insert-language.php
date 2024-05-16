<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type,Access-Control-Allow-methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"),true);

$lang = $data['language'];

include "config.php";

$sql = "INSERT INTO `language`(`language`) VALUES ('{$lang}')";

if (mysqli_query($con,$sql)) {
    echo json_encode(array('message' => 'language record added', 'status' => true));
    
}else{
    echo json_encode(array('message' => 'no record found', 'status' => false));
}

?>