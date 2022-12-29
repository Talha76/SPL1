<?php

include '../phpDependencies/config.php';
include '../phpDependencies/smtp.php';
include '../phpDependencies/ResultSet.php';
include '../phpDependencies/Database.php';

if (isset($_POST['submit'])) {
  $id               = filter_input(INPUT_POST, 'id');
  $email            = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
  $password         = md5(filter_input(INPUT_POST, 'password'));
  $confirmPassword  = md5(filter_input(INPUT_POST, 'confirm_password'));
  $userType         = filter_input(INPUT_POST, 'user_type');
  
  $db = new Database('user_db');
  
  $query = "SELECT id, email FROM userID WHERE id = '$id' OR email = '$email'";
  $rs = new ResultSet($db->query($query));

  if($rs->hasNext()) {
    $error = "User with this username or email already exists!";
  } elseif (!isset($email)) {
    $error = "Invalid email!";
  } elseif ($password != $confirmPassword) {
    $error = "Passwords don't match.";
  } else {  
    $_SESSION['id'] = $id;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['user_type'] = $userType;
    header('location: ./send_otp.php');
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
  <link rel="stylesheet" href="../home/css/style.css">
  <link rel="stylesheet" href="css/register_style.css">
  <script defer src="app/register_app.js"></script>
</head>

<body>
  <!--navbar starts-->
  <nav class="big-navbar">
    <!-- navbar-1 starts although its name is navbar-->
    <nav class="navbar">
      <div class="navbar-menu">
        <a href="#jobs">Jobs</a>
        <a href="#myjobs">Myjobs</a>
        <a href="#elearning">E-learning</a>
        <a href="#tender"></a>
        <a href="#employers"></a>
      </div>
      <div class="menu-toggle">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
      </div>


      <div class="nb-class1">
        <div class="sign-in">
          <?php

          if (isset($_SESSION['id'])) {
            $html = '';
            if($userType == 'employee') {
              $html = $html . '<a href="employee_profile.php">';
            } elseif($userType == 'employer') {
              $html = $html . '<a href="employer_profile.php">';
            }
            echo $html . $_SESSION['id'] . '</a>
                  <a href="../loginAndRegistration/logout.php">Logout</a>';
          } else {
            echo '<a href="../loginAndRegistration/login.php">Sign in</a>
                  <a href="../loginAndRegistration/register.php">Sign up</a>';
          }

          ?>
          </div>
          <div class="career-resources-dropdown">
              <select class="career-resource" id="career-resource">
                  <option value="Career-Advice"><label for="Career-Advice">Career Advice</label></option>
                  <option value="Career-Guidline"> <a href="https://www.bdjobs.com/career/careerguide/">Career Guideline</a></option>
                  <option value="Interview-Tips"> <a href="#">Interview Tips</a></option>
                  <option value="Resume-writing-tips"> <a href="#">Resume writing tips</a></option>
                  <option value="Skill-development tips"> <a href="#">Skill development tips</a></option>
                  <option value="Articles"> <a href="#">Articles</a></option>
              </select>
          </div>
          <div class="contact-us">
              <a href="./contact_us.php">Contact Us</a>
          </div>
      </div>



    </nav>
    <!-- navbar-1 ends -->

    <!--navbar2 starts-->
    <nav class="navbar2">
      <h2 class="navbar-logo"> <a href="../home/index.php">Kaajkormo.com</a></h2>

      
      <div class="nb-class2">
        <div class="facebook">
          <a href="#"><i class=""></i></a>
        </div>
        <div class="linkedin">
          <a href="#"><i class=""></i></a>
        </div>
        <div class="instagram">
          <a href="#"><i class=""></i></a>
        </div>
        <div class="gmail">
          <a href="#"> <i class=""></i></a>
        </div>
        <div class="youtube">
          <a href="#"><i class=""></i></a>
        </div>
      </div>
    </nav>
    <!-- navbar-2 ends -->
  </nav>
  <!-- navbar ends -->

  <div class="form-container">
    <form id="form" action="" method="post">

      <div class="register-title">
        <h3>Register Now</h3>
      </div>

      <?php
      if (isset($error)) {
        echo '<span style="display: block; color: red;">'. $error .'</span>';
      }
      ?>
      <span id="error_msg" class="error-msg">
      </span>
      <div class="input-fields">
        <input id="id" class="user-id" type="text" name="id" placeholder="Choose user ID" >
        <br>
        <input id="email" class="email" type="email" name="email" placeholder="Enter user email" >
        <br>
        <input id="password" class="enter-password" type="password" name="password" placeholder="Enter password" >
        <br>
        <input id="confirm_password" class="confirm-password" type="password" name="confirm_password" placeholder="Confirm password" >
        <br>
        <select class="user-type" name="user_type" id="user_type">
          <option value="employee">Employee</option>
          <option value="employer">Employer</option>
        </select>
        <div class="pass-requirements">Password should contain at least:
          <ul>
            <li>8 characters.</li>
            <li>An upper-case letter.</li>
            <li>A lower-case letter.</li>
            <li>A special charcter.</li>
            <li>A digit.</li>
          </ul>
        </div>
      </div>
      <br>
      <div class="agree-terms">
        <label><input type="checkbox" id="agree_terms" name="agree_terms">
          I have read the <a href="../home/privacy_policy.php"> privacy policy </a>
          and agreed to the <br>
          <a href="../home/terms_and_conditions.php"> terms and conditions </a>.
        </label>
      </div>
      <br>
      <input type="submit" name="submit" class="form-btn" value="Register">
      <!-- <button type="submit" name="submit" class="form-btn">Register</button> -->
      <br>
      <br>
      <p>Already have an account? <a href="login.php">Login now</a></p>

    </form>
  </div>

  <!-- footer -->
  <div class="footer">

    <!-- about us starts -->
    <div class="about-us">
      <div class="heading-about-us">
        <h2>ABOUT US</h2>
      </div>
      <div class="links">
        <a href="../home/about_us.php">About Kaajkormo</a>
        <a href="../home/terms_and_conditions.php">Terms & conditions</a>
        <a href="#">Our Services</a>
        <a href="../home/privacy_policy.php">Privacy Policy</a>
        <a href="#">Feedback</a>
        <a href="../home/contact_us.php">Contact us</a>
      </div>
    </div>
    <!-- about us ends -->

    <!-- job seekers starts -->
    <div class="Job-Seekers">
      <div class="heading-job-seekers">
        <h2>JOB SEEKERS</h2>
      </div>
      <div class="links-of-jobseekers">
        <a href="../loginAndRegistration/register.php">Create Account</a>
        <a href="#">Career Guideline</a>
        <a href="#">Resume Templates</a>
        <a href="#">Myb Rating</a>
        <a href="#">FAQ</a>
      </div>
    </div>
    <!-- job seekers ends -->


    <!-- EMPLOYERS starts -->
    <div class="Job-Seekers">
      <div class="heading-job-seekers">
        <h2>EMPLOYERS</h2>
      </div>
      <div class="links-of-jobseekers">
        <a href="../loginAndRegistration/register.php">Create Account</a>
        <a href="#">Post a job</a>
        <a href="#">Service</a>
        <a href="#">My/Company's Rating</a>
        <a href="#">FAQ</a>
      </div>
    </div>
    <!-- EMPLOYERS ends -->


  </div>
  <!-- footer ends -->
  <div class="hotline">
    <h2><span>Hot Line:</span>1068944</h2>
  </div>
</body>


</html>
