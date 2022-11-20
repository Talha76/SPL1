<?php

include '../phpDependencies/config.php';
include '../phpDependencies/smtp.php';

if (isset($_POST['submit'])) {
  $db = new Database('user_db');
  $id = filter_input(INPUT_POST, 'id');

  $query = "SELECT email FROM userID WHERE id = '$id'";
  $resultSet = $db->query($query);
  if ($resultSet->num_rows == 0) {
    $error = 'User ID not found';
  } else {
    $row = $resultSet->fetch_array();
    $smtpServer = new Database('smtp_credentials');
    $resultSet = $smtpServer->query("SELECT NOW() - creation_time as time_passed FROM reset_password_info WHERE id = '$id'");
    if($resultSet->num_rows > 0) {
      $timePassed = intval($resultSet->fetch_array()['time_passed']);
      if($timePassed <= 300) {
        die("A reset password token is already being processed for $id");
      } else {
        $smtpServer->update("DELETE FROM reset_password_info WHERE id = '$id'");
      }
    }

    $_SESSION['id'] = $id;
    $token = rand(10000000, 1000000000);
    $query = "INSERT INTO reset_password_info (id, token, email) VALUES('$id', '$token', '$row[email]')";
    $smtpServer->update("INSERT INTO reset_password_info VALUES('$id', $token, NOW())");
    $mail = new Mailer();
    $mail->setRecipient($row['email']);
    $mail->setSubject('Password reset token for your Kaajkormo account.');
    $mail->setBody("<p>Hi " . $id . "!</p><br><p>Your password reset token is $token. Your token will expire within 5 minutes.</p>");
    $mail->setAltBody("Hi " . $id . "! Your password reset token is $token. Your token will expire within 5 minutes.");
    $mail->send();
    header('location:./reset_pass_token_verification.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
</head>

<body>
  <?php
  if (isset($error)) {
    echo '<span style="display: block; color: red;">' . $error . '</span>';
  }
  ?>
  <form action="" method="post">
    <input type="text" name="id" id="id" placeholder="Enter your user ID" required>
    <input type="submit" name="submit" id="submit" value="Submit">
  </form>
</body>

</html>
