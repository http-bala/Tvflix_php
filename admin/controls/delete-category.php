<?php 
    include 'config.php';

    $id = $_POST['id'];
    $sql = "DELETE FROM genres WHERE `genres`.`id` = {$id}";
    $run = mysqli_query($con,$sql);

    if ($run) {
        echo $output = 1;
    }else{
        echo $output = 0;
    }

?>