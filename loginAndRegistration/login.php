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
<title>KaajKormo - Login</title>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <meta charset="UTS-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <link rel="stylesheet" href="../home/css/style.css">
    <link rel="stylesheet" href="../loginAndRegistration/css/login_styles.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--font for logo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
  <!--navbar starts-->
  <div class="big-navbar">
    <!-- navbar-1 starts although its name is navbar-->
    <nav class="navbar">
        <h2 class="navbar-logo"> <a href="index.html">Kajkormo.com</a></h2>
        <div class="navbar-menu">
            <a href="#jobs">Jobs</a>
            <a href="#myjobs">Myjobs</a>
            <a href="#elearning">E-learning</a>
            <a href="#tender">Tender/Eoi</a>
            <a href="#employers">Employers</a>
        </div>
        <div class="menu-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </nav>
    <!-- navbar-1 ends -->
    <!--navbar2 starts-->
    <nav class="navbar2">
        <div class="nb-class1">
            <div class="sign-in">
                <a href="../loginAndRegistration/login.php">Sign in</a><br>
                <a href="../loginAndRegistration/register.php">Sign up</a>
            </div>
            <div class="career-resources-dropdown">
                <select class="career-resource" id="career-resource">
                    <option value="Career-Advice"><label for="Career-Advice">Career Advice</label></option>
                    <option value="Career-Guidline"> <a href="#">Career Guideline</a></option>
                    <option value="Interview-Tips"> <a href="#">Interview Tips</a></option>
                    <option value="Resume-writing-tips"> <a href="#">Resume writing tips</a></option>
                    <option value="Skill-development tips"> <a href="#">Skill development tips</a></option>
                    <option value="Articles"> <a href="#">Articles</a></option>
                </select>
            </div>
            <div class="contact-us">
                <a href="#">Contact Us</a>
            </div>
        </div>
        
        <div class="nb-class2">
            <div class="facebook">
                <a href="#"><i class="fa-brands fa-square-facebook"></i></a>
            </div>
            <div class="linkedin">
                <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="instagram">
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
            <div class="gmail">
                <a href="#"> <i class="fa-solid fa-at"></i></a>
            </div>
            <div class="youtube">
                <a href="#"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
    </nav>
    <!-- navbar-2 ends -->
</div>
<!-- navbar ends -->
main - ER diagram
1.contents - ki ki korsi
2.Promised features
3.kon kon features gula parsi
4.gyan chart ey ki ki korsi
  <div class="form-container">
    <form class="form" action="" method="post">
      <div class="login-title">
        <h3>Log In Now</h3>
      </div>

      <?php
      if(isset($error)) {
        echo '<span class="error-msg">'.$error.'</span>';
      }
      ?>
      <div class="input-fields">
        <input class="user-id" type="text" name="id" id="id" placeholder="Enter User ID" required>
        <br>
        <input class="password" type="password" name="password" id="password" placeholder="Enter password" required>
      </div>
      <br>
      <div class="agree_policy">
        <input type="checkbox" name="agree_to_terms" id="agree_to_terms">
            I have agreed to the 
            <a href="../home/terms_and_conditions.html">
              terms and conditions
            </a> 
            and read the 
            <a href="../home/privacy_policy.html">
              privacy policy
            </a>
            .
      </div>
      <br>
      <button type="submit" name="submit" class="form-btn" onclick="showMessage()">Log in</button>
      <br>
      <br>
      <p>Don't have an account? <a href="register.php">Register now</a></p>

    </form>
  </div>

</body>
</html>
