<?php

include_once '../phpDependencies/config.php';

if (!isset($_SESSION['id'])) {
  die("Error: Session ID not set.");
}

if (isset($_POST['submit'])) {
  $password = md5(filter_input(INPUT_POST, 'password'));
  $confirm_password = md5(filter_input(INPUT_POST, 'confirm_password'));

  if($password != $confirm_password) {
    $error = "Passwords do not match";
  } else {
    $db = new Database('user_db');
    $query = "UPDATE userID SET password = '$password' WHERE id = '" . $_SESSION['id'] . "'";
    $db->update($query);
    header('location:../home/index.php');
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="./app/reset_pass_app.js"></script>
  <link rel="stylesheet" href="../home/css/style.css">
  <title>Reset Password</title>
</head>

<body>
  <?php
  if (isset($error)) {
    echo '<span style="display: block; color: red;">' . $error . '</span>';
  }
  ?>
  <span id="error_msg" class="error-msg">Error</span>

  <form id="form" action="" method="post">
    <input type="text" name="password" id="password" placeholder="Enter new password" required>
    <input type="text" name="confirm_password" id="confirm_password" placeholder="Repeat the password" required>
    <input type="submit" name="submit" id="submit" value="Submit">
  </form>
</body>

</html>
