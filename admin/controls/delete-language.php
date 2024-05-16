<?php 
    include 'config.php';

    $id = $_POST['id'];
    $sql = "DELETE FROM `language` WHERE `language`.`id` = {$id}";
    $run = mysqli_query($con,$sql);

    if ($run) {
        echo $output = 1;
    }else{
        echo $output = 0;
    }

?>