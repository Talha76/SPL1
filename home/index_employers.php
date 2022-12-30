<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $link = '<a href="employer_profile.php">' . $id . '</a>
           <a href="../loginAndRegistration/logout.php">Logout</a>';
} else {
  $link = '<a href="../loginAndRegistration/login.php">Sign in</a>
           <a href="../loginAndRegistration/register.php">Sign up</a>';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTS-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_employer.css">
    <!--font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!--font for logo-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Kaajkormo - Employer-Home</title>

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

          echo $link;

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
      <h2 class="navbar-logo"> <a href="#">Kaajkormo.com</a></h2>

      
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


    <!--header starts-->
    <header>
        <h1 class="header-title">
            FIND YOUR <br> <span>PERFECT JOB</span><br>EASILY
        </h1>


    </header>
    <!-- header ends -->
    <form action="./job_profile_edit.php">
      <div class="post-job"></div>
        <input type="submit" name="submit" id="submit" class="submit" value="Post Job"> 
      </div>
    </form>
    
    <!-- hot-jobs-container starts -->
    
    <div class="hot-jobs-container">
        <div class="hot-jobs-title">
            <h1>POSTED JOBS</h1>
            <p>_____________________________</p>
        </div>
        <!-- job1 - start -->
        <?php

        $db = new Database('job_db');
        $sql = "SELECT id, name, salary FROM job_info WHERE employer_id = '$id'";
        $rs = new ResultSet($db->query($sql));
        while($rs->hasNext()) {
          $jobID = $rs->get('id');
          $name = $rs->get('name');
          $salary = $rs->get('salary');
          echo '<div class="job">
                <a href="job_profile.php?job_id=' . $jobID . '">' . $name . '</a>
                <p>Salary : ' . $salary . '</p>
                </div>';
        }

        ?>
    </div>
    <!-- hot jobs conatainer ends -->

    <!-- to make the footer lower, have to work on that -->
    <!-- <br><br><br> -->
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
</body>
</head>

</html>
