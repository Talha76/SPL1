<?php

include '../phpDependencies/config.php';
include '../phpDependencies/smtp.php';

if(isset($_POST['submit'])) {
  $db = new Database('user_db');
  $id = filter_input(INPUT_POST, 'id');

  $query = "SELECT email FROM userID WHERE id = '$id'";
  $resultSet = $db->query($query);
  if($resultSet->num_rows == 0) {
    $error = 'User ID not found';
  } else {
    $row = $resultSet->fetch_array();
    $email = $row['email'];
    $mailer = new Mailer();
    $mailer->setRecipient($email);
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
  <form action="" method="post">
    <input type="text" name="id" id="id" placeholder="Enter your user ID" required>
    <input type="submit" name="submit" id="submit" value="Submit">
  </form>
</body>
</html>