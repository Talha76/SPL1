<?php

include '../phpDependencies/config.php';
include '../phpDependencies/Job.php';

if(isset($_GET['job_id'])) {
  $task = 'Edit Job';
} else {
  $task = 'Post Job';
}

if(isset($_POST['submit'])) {
  $jobName = filter_input(INPUT_POST, 'job-name');
  $jobType = filter_input(INPUT_POST, 'job-type');
  $jobRank = filter_input(INPUT_POST, 'job-rank');
  $salary = filter_input(INPUT_POST, 'salary', FILTER_VALIDATE_INT);
  $company = filter_input(INPUT_POST, 'company');
  $location = filter_input(INPUT_POST, 'job-location');
  $educationRequirements = filter_input(INPUT_POST, 'eduation-requirements');
  $experienceRequirements = filter_input(INPUT_POST, 'experience-requirements');
  $email=filter_input(INPUT_POST,'e-mail', FILTER_VALIDATE_EMAIL);
  $phone=filter_input(INPUT_POST,'phone');

  $db=new Database("job_db");

  if(isset($_GET['job_id'])) {
    $jobID = $_GET['job_id'];
    if(strlen($jobName)) {
      $db->update("UPDATE job_info SET name = '$jobName' WHERE id = $jobID");
    } else if(strlen($jobType)) {
      $db->update("UPDATE job_info SET type = '$jobType' WHERE id = $jobID");
    } else if(strlen($jobRank)) {
      $db->update("UPDATE job_info SET rank = '$jobRank' WHERE id = $jobID");
    } else if(!empty($salary)) {
      $db->update("UPDATE job_info SET salary = $salary WHERE id = $jobID");
    } else if(strlen($educationRequirements)) {
      $db->update("UPDATE job_info SET education_equirements = '$educationRequirements' WHERE id = $jobID");
    } else if(strlen($experienceRequirements)) {
      $db->update("UPDATE job_info SET experience_equirements = '$experienceRequirements' WHERE id = $jobID");
    } else if(strlen($email)) {
      $db->update("UPDATE job_info SET email = '$email' WHERE id = $jobID");
    } else if(strlen($phone)) {
      $db->update("UPDATE job_info SET phone = '$phone' WHERE id = $jobID");
    }
    $message = "Job Information Updated Successfully";
  } else {
    $job = new Job();
    $jobID = $job->getId();
    $id = $_SESSION['id'];

    $query="insert into job_info values($jobID, '$id', '$jobName', '$jobType', '$jobRank', $salary, '$company', '$location', '$educationRequirement', '$experienceRequirement', '$email', '$phone')";
    $db->update($query);
    $message = "Job Posted Successfully";
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Job-info-edit</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/job_profile_edit_style.css">
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTS-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
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
      <h2 class="navbar-logo"> <a href="index_employers.php">Kaajkormo.com</a></h2>

      
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

<!--job info starts -->

<div class="post-job">
  <h1><?php echo $task; ?></h1>
  <?php

  if(isset($message)) {
    echo '<p style="color:green">' . $message . '</p>';
  }

  ?>
</div>
<form action="" method="POST">
    <div class="basic-info">
        <h3>JOB</h3>
        <br>
        <p>Job Name : </p>
        <input type="text" name="job-name" id="job-name" placeholder="job-name">
        <p>Job Type : </p>
        <select name="job-type" id="job-type" class="job-type">
            <option value="-1" selected disabled>Select Job Type</option>
            <option value="full-time">Full Time</option>
            <option value="part-time">Part Time</option>
            <option value="intern">Internship</option>
        </select>
        <p>Job Rank : </p>
        <input type="text" name="job-rank" id="job-rank" placeholder="job-rank">
        <p>Company :</p>
        <input type="text" name="company" id="company" placeholder="company">
    </div>
    <div class="detailed-info">
        <div class="detaile-info-title">
            <h2> Detailed Information </h2>
        </div>
        <div class="salary">
            <p>Salary : </p>
            <input type="number" name="salary" id="salary" placeholder="salary">
        </div>
        <div class="eduation-requirements">
            <p>Education Requirements</p>
            <input type="text" name="eduation-requirements" id="eduation-requirements" placeholder="eduation-requirements">
        </div>
        <div class="experience-requirements">
            <p>Experience Requirements</p>
            <input type="text" name="experience-requirements" id="experience-requirements" placeholder="experience-requirements">
        </div>
        <div class="job-location">
            <p>Job Location</p>
            <input type="text" name="job-location" id="job-location" placeholder="job-location">
        </div>
        <div class="e-mail">
            <p>E-mail</p>
            <input type="text" name="e-mail" id="e-mail" placeholder="e-mail">
        </div>
        <div class="phone">
            <p>Phone</p>
            <input type="text" name="phone" id="phone" placeholder="phone">
        </div>
    </div>
<br>
<br>

<div class="job-apply">
    <div class="save">
        <input type="submit" name="submit" id="submit" value="Save" class="save"> 
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
            <a href="#">Our Services</a>
            <a href="privacy_policy.php">Privacy Policy</a>
            <a href="#">Feedback</a>
            <a href="#">Contact us</a>
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
