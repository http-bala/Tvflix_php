<?php

include '../config.php';

$username = mysqli_real_escape_string($con, $_POST['email-number']);
$password = mysqli_real_escape_string($con, $_POST['password']);

if ($username != "" and $password != "") {
  $sql = "SELECT * FROM `user-details` WHERE `phonenumber` = '{$username}' || `email` = '{$username}'  AND `password` = '{$password}'";
  $run = mysqli_query($con, $sql);

  if (mysqli_num_rows($run)) {
    session_start();
    $_SESSION["loginuser"] = "$username";
    echo $output = 0;
  } else {
    echo $output = 1;
  }
} else {
  echo $output = 2;
}

?>