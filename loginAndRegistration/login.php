<?php

require 'config.php';

session_start();

if(isset($_POST['submit'])) {
  $id = $_POST['id'];
  $password = md5($_POST['password']);

  $query = "SELECT id, password FROM userID WHERE id = '$id'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 0)
    $error[] = "User not found!";
  else {
    $row = mysqli_fetch_array($result);

    if($row['password'] == $password) {
      $_SESSION['id'] = $row['id'];
      header('location:user_page.php');
    }
    else
      $error[] = "Wrong password!";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log in</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
  
  <div class="container form-container">
    <form action="" method="post">

      <h3>Log In Now</h3>

      <?php
      
      if(isset($error)) {
        foreach($error as $error) {
          echo '<span class="error-msg">'.$error.'</span>';
        };
      };

      ?>

      <input type="text" name="id" placeholder="Enter User ID" required>
      <input type="password" name="password" placeholder="Enter password" required>
      <button type="submit" name="submit" class="form-btn">Log in</button>

      <p>Don't have an account? <a href="register.php">Register now</a></p>

    </form>
  </div>

</body>
</html>
