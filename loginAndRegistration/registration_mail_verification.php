<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/ResultSet.php';
include_once '../phpDependencies/Database.php';

if (isset($_POST['submit'])) {
  $db = new Database('smtp_credentials');
  $id = $_SESSION['id'];
  $otp = filter_input(INPUT_POST, 'otp', FILTER_VALIDATE_INT);

  try {
    $rs = new ResultSet($db->query("SELECT * FROM otp_info WHERE id = '$id'"));
    if ($rs->numRows() == 0) {
      $error = "No otp information available";
      die($error);
    } else {
      $sql = "SELECT NOW() - creation_time as time_diff, otp, email, password, user_type FROM otp_info WHERE id = '$id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        $timeDiff = intval($rs->get('time_diff'));
        $expectedOTP = $rs->get('otp');
        if ($timeDiff > 300) {
          $error = "OTP expired";
          $db->update("DELETE FROM otp_info WHERE id = '$id'");
          unset($_SESSION['id']);
        } else if ($otp != $expectedOTP) {
          $error = "OTP does not match";
        } else {
          $db->update("DELETE FROM otp_info WHERE id = '$id'");
          
          $db->connect('user_db');
          $email = $rs->get('email');
          $password = $rs->get('password');
          $userType = $rs->get('user_type');
          $insert = "INSERT INTO userID VALUES('$id', '$email', '$password', '$userType')";
          $db->update($insert);
          if($userType == 'employee') {
            $location = 'employee_profile_edit.php';
          } elseif($userType == 'employer') {
            $location = 'employer_profile_edit.php';
          }
          header('location: ../home/' . $location);
        }
      } else {
        throw new Exception('No OTP found with this id');
      }
    }
  } catch (Exception $e) {
    die("Error: " . $e->getMessage());
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/login_styles.css"> -->
    <link rel="stylesheet" href="../home/css/style.css">
    <link rel="stylesheet" href="css/registration_mail_verification_style.css">
    <title>Verify your email</title>
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
    
    <form action="" method="post">
        <div class="form-container">
            <div class="otp-title">
                <p>Enter the OTP sent to your given mail</p>
            </div>
            <?php

            if(isset($error)) {
              echo '<span style="color: red">' . $error . '</span>';
            }

            ?>
            <div class="otp">
                <input type="number" name="otp" id="otp" class="otp" placeholder="OTP">
            </div>
            <div class="submit-send">
                <input type="submit" name="submit" id="submit" value="Submit" class="submit">
                <!-- <input type="submit" name="send-again" id="send-again" value="Send Again" class="send-again"> -->
            </div>
            <div class="send-agiain-title">
                <p><a href="./send_otp.php">Send OTP again</a> If you didn't recieve any OTP</p>
            </div>
        </div>
    </form>
</body>
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

</html>