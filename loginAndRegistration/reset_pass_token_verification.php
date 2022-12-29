<?php

include_once '../phpDependencies/all.php';

if (!isset($_SESSION['id'])) {
  die("Error: Session ID not found");
}

if (isset($_POST['submit'])) {
  $token = filter_input(INPUT_POST, 'token');
  $db = new Database('smtp_credentials');
  $query = "SELECT token, NOW() - creation_time AS time_passed FROM reset_password_info WHERE id = '" . $_SESSION['id'] . "'";
  $row = $db->query($query)->fetch_array();
  if (!isset($row)) {
    die("Error: No reset password information found with id = " . $_SESSION['id']);
    unset($_SESSION['id']);
  } elseif (intval($row['time_passed']) > 300) {
    $error = "Token expired";
    unset($_SESSION['id']);
  } else {
    if ($row['token'] != $token) {
      $error = "Token does not match";
      unset($_SESSION['id']);
    } else {
      $query = "DELETE FROM reset_password_info WHERE id = '" . $_SESSION['id'] . "'";
      $db->update($query);
      header('location: reset_password.php');
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Password Token</title>
</head>

<body>
  <?php
  if (isset($error)) {
    echo '<span style="display: block; color: red;">' . $error . '</span>';
  }
  ?>
  <form action="" method="post">
    <input type="number" name="token" id="token">
    <input type="submit" name="submit" id="submit" value="Submit">
  </form>
</body>

</html>
