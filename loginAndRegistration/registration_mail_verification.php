<?php

include '../phpDependencies/config.php';

if(isset($_POST['submit'])) {
  $conn = new Database('smtp_credentials');
  
  try {
    $otp = filter_input(INPUT_POST, 'otp', FILTER_VALIDATE_INT);
    $otp_result = $conn->query("SELECT * FROM otp_info WHERE id = '" . $_SESSION['id'] . "'");
    $otp_row = $otp_result->fetch_array();
    if($otp_result->num_rows == 0) {
      $error = "No otp information available";
    } else {
      $time_difference_result = $conn->query("SELECT NOW() - creation_time as time_diff FROM otp_info WHERE id = '" . $_SESSION['id'] . "'");
      $time_difference_row = $time_difference_result->fetch_array();
      $time_difference = intval($time_difference_row['time_diff']);
      $expected_otp = $otp_row['otp'];
      if($time_difference > 300) {
        $error = "OTP expired";
        unset($_SESSION['id']);
      } else if($otp != $expected_otp) {
        $error = "OTP does not match";
      } else {
        $conn->update("DELETE FROM otp_info WHERE id = '" . $_SESSION['id'] . "'");

        $conn->connect('user_db');
        $id = $otp_row['id'];
        $email = $otp_row['email'];
        $password = $otp_row['password'];
        $user_type = $otp_row['user_type'];
        $insert = "INSERT INTO userID VALUES('$id', '$email', '$password', '$user_type')";
        $conn->query($insert);
        header('location:../home/index.php');
      }
    }
  } catch(Exception $e) {
    die("Error: " . $e->getMessage());
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verify your email</title>
</head>
<body>
  <a href="./register.php">Kaajkormo</a>
  <p>
  <?php
  if(isset($error))
    echo $error;
  ?></p>
  <form action="" method="post">
    <input type="number" name="otp" id="otp">
    <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>