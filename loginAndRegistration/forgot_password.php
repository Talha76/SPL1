<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/smtp.php';

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
  <link rel="stylesheet" href="../home/css/style.css">
  <link rel="stylesheet" href="css/forgot_password_style.css">
  <title>Forgot Password</title>
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

  <?php
  if (isset($error)) {
    echo '<span style="display: block; color: red;">' . $error . '</span>';
  }
  ?>
  <form action="" method="post">
    <div class="forgot-password">
      <h2>Enter User ID</h2>
      <input type="text" name="id" id="id" placeholder="Enter your user ID" required>
      <div class="submit-button">
        <input type="submit" name="submit" id="submit" value="Submit">
      </div>
    </div>
  </form>

  <!-- footer starts -->
  <div class="footer">

<!-- about us starts -->
<div class="about-us">
    <div class="heading-about-us">
        <h2>ABOUT US</h2>
    </div>
    <div class="links">
        <a href="about_us.php">About Kaajkormo</a>
        <a href="terms_and_conditions.php">Terms & conditions</a>
        <a href="privacy_policy.php">Privacy Policy</a>
        <a href="./contact_us.php">Contact us</a>
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
