<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';
include_once '../phpDependencies/Job.php';

if(isset($_SESSION['mail-sent'])) {
  $message = "Mail sent successfully";
}

if(isset($_GET['job_id'])) {
  $jobID = filter_input(INPUT_GET, 'job_id');
  $job = new Job($jobID);
}

if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $person = new Person($id);
  $userType = $person->getUserType();
  if($userType == 'employee') {
    $button = '<div class="apply">
                   <input type="submit" name="apply" id="apply" value="Apply" class="apply">
               </div>';
    $location = "index.php";
  } else {
    $button = '<div class="apply">
                   <input type="submit" name="edit" id="edit" value="Edit" class="apply">
               </div>
               <div class="apply">
                   <input type="submit" value="Delete" class="apply" name="delete" id="delete">
               </div>';
    $location = "index_employers.php";
  }
}

if(isset($_POST['edit'])) {
  header('Location: job_profile_edit.php?job_id=' . $jobID);
}

if(isset($_POST['delete'])) {
  $db = new Database('job_db');
  $sql = "DELETE FROM job_info WHERE id = $jobID";
  $db->update($sql);
  header('Location: index_employers.php');
}

if(isset($_POST['apply'])) {
  $id = $_SESSION['id'];
  $fileName = $_FILES['cv']['name'];
  $fileTmpName = $_FILES['cv']['tmp_name'];
  $fileSize = $_FILES['cv']['size'];
  $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
  $jobID = filter_input(INPUT_GET, 'job_id');

  if($fileExt != 'pdf') {
    $error = "File type not supported";
  } else {
    if($fileSize > 10000000) {
      $error = "File is too large";
    } else {
      $uploadPath = './uploads/' . $id . '.pdf';
      if(move_uploaded_file($fileTmpName, $uploadPath)) {
        $message = "Upload Successful";
        header('Location: ../loginAndRegistration/send_mail.php?job_id=' . $jobID);
      } else {
        $error = "File could not be uploaded";
      }
    }
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Job-info</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/job_profile_style.css">
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
        <a href="index_employers.php">Myjobs</a>
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
      <h2 class="navbar-logo"><?php echo '<a href="' . $location . '">Kaajkormo.com</a> '; ?></h2>

      
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
    <h1>Job</h1>
    <?php

    if(isset($error)) {
      echo '<p style="color: red">' . $error . '</p>';
    } if(isset($message)) {
      echo '<p style="color: green">' . $message . '</p>';
    }

    ?>
</div>
<div class="job-info">
    <h1><?php echo $job->getName(); ?></h1>
    <h2>Company : <?php echo $job->getCompany(); ?>, <?php echo $job->getLocation(); ?></h2>
    <br>
    <p>Type : <?php echo $job->getType(); ?></p><br>
    <p>Rank : <?php echo $job->getRank(); ?></p><br>
    <p>Salary : <?php echo $job->getSalary(); ?> BDT/Month</p><br>
    <p>Contact Email : <?php echo $job->getEmail(); ?></p><br>
    <p>Telephone : <?php echo $job->getPhone(); ?></p>
</div>
<form action="" method="POST" enctype="multipart/form-data">
  <div class="detailed-info">
      <div class="detaile-info-title">
          <h2> Detailed Information </h2>
      </div>
      <div class="eduation-requirements">
          <h2>Education Requirements</h2>
          <p><?php echo $job->getEducationRequirements(); ?></p>
      </div>
      <div class="experience-requirements">
          <h2>Experience Requirements</h2>
          <p><?php echo $job->getExperienceRequirements(); ?></p>
      </div>
      <?php

      if($userType == 'employee') {
        echo '<div class="experience-requirements">
                <h2>Upload Your CV</h2>
                <br>
                <input type="file" name="cv" id="cv" accept=".pdf">
              </div>';
      }

      ?>
  </div>

  <br>
  <br>

  <div class="job-apply">
    <?php echo $button; ?>
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
