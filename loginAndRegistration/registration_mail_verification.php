<?php

include '../phpDependencies/config.php';

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
  <p>Hi <?php echo $_SESSION['id']; ?>!. A mail has been sent to you. Please check the inbox, if not found in inbox please check your spam folder.</p>
</body>
</html>