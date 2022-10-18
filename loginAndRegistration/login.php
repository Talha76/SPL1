<?php

require '../phpDependencies/config.php';

session_start();

if(isset($_POST['submit'])) {
  $id = filter_input(INPUT_POST, 'id');
  $password = md5(filter_input(INPUT_POST, 'password'));

  $query = "SELECT id, password FROM userID WHERE id = '$id'";
  $result = mysqli_query($conn, $query);

  if(mysqli_num_rows($result) == 0)
    $error = "User not found!";
  else {
    $row = mysqli_fetch_array($result);

    if($row['password'] == $password) {
      $_SESSION['id'] = $row['id'];
      header('location:../home/index.php');
    } else
      $error = "Wrong password!";
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
        echo '<span class="error-msg">'.$error.'</span>';
      }
      ?>

      <input type="text" name="id" id="id" placeholder="Enter User ID" required>
      <input type="password" name="password" id="password" placeholder="Enter password" required>
      <button type="submit" name="submit" class="form-btn" onclick="showMessage()">Log in</button>

      <p>Don't have an account? <a href="register.php">Register now</a></p>

    </form>
  </div>

</body>
</html>
