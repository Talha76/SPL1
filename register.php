<?php

require 'config.php';

if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $confirm_password = md5($_POST['confirm_password']);

  $query = "SELECT id, email FROM user_registration WHERE id = '$id' OR email = '$email'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) > 0)
    $error[] = "User with this username or email already exists!";
  elseif($password != $confirm_password)
    $error[] = "Passwords don't match!";
  else {
    $insert = "insert into user_registration values('$id', '$email', '$password')";
    mysqli_query($conn, $insert);
    header('location:login.php');
  }  
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  
  <div class="container form-container">
    <form action="" method="post">

      <h3>Register Now</h3>

      <?php
      
      if(isset($error)) {
        foreach($error as $error) {
          echo '<span class="error-msg">'.$error.'</span>';
        };
      };

      ?>

      <input type="text" name="id" placeholder="Choose user ID" required>
      <input type="email" name="email" placeholder="Enter user email" required>
      <input type="password" name="password" placeholder="Enter password" required>
      <input type="password" name="confirm_password" placeholder="Confirm password" required>
      <button type="submit" name="submit" class="form-btn">Register</button>

      <p>Already have an account? <a href="login.php">Login now</a></p>

    </form>
  </div>

</body>
</html>
