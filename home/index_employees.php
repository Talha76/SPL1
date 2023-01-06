<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';
include_once '../phpDependencies/JobUtility.php';

$job = new JobUtility();

if (isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $person = new Person($id);
  $link = '<a href="employee_profile.php">' . $id . '</a>
           <a href="../loginAndRegistration/logout.php">Logout</a>';
} else {
  $link = '<a href="../loginAndRegistration/login.php">Sign in</a>
           <a href="../loginAndRegistration/register.php">Sign up</a>';
}

if (isset($_POST['search'])) {
  $searchWord = filter_input(INPUT_POST, 'search-input');
  header('Location: search_result_page.php?search=' . $searchWord);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTS-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-sclae=1.0">
  <link rel="stylesheet" href="css/style.css">
  <!--font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!--font for logo-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
  <title>Kaajkormo - Home</title>

<body>
  <!--navbar starts-->
  <nav class="big-navbar">
    <!-- navbar-1 starts although its name is navbar-->
    <nav class="navbar">
      <div class="navbar-menu">
        <a href="search_result_page.php?search=">Jobs</a>
        <a href="#myjobs">Myjobs</a>
        
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

  <!--searchbar starts-->
  <form action="" method="POST">
    <div class="search-wrapper">
      <div class="search-box">
        <div class="search-card">
          <input class="search-input" type="search" name="search-input" id="search-input" placeholder="Job title or keywords">
          <button class="search-button" name="search" id="search">Search</button>
        </div>
      </div>
    </div>
  </form>
  <!-- searchbar ends -->


  <!--allicons starts-->
  <div class="allicons">
    <!-- livejobs starts -->
    <!-- all the links in this div will be same-->
    <a href="#lj">
      <div class="livejobs">
        <div class="icon1">
          <i class="fa-regular fa-address-card fa-3x"></i>
        </div>

        <div class="link1">
          <!-- link1 has 2 divs: link & number of jobs -->
          <div class="link-of-lj">
            <!-- lj=livejobs -->
            <a href="#lj">LIVE JOBS</a>
          </div>
          <div class="num-of-lj">
            <h2><?php echo $job->getLiveJobs(); ?></h2>
          </div>
        </div>
      </div>
    </a>
    <!-- livejob ends -->


    <!-- companies start -->
    <a href="#comp">
      <div class="companies">
        <!-- all the links in this div will be same-->
        <div class="icon3">
          <i class="fa-solid fa-city fa-3x"></i>
        </div>

        <div class="link3">
          <!-- link1 has 2 divs: link & number of companies -->
          <div class="link-of-comp">
            <a href="#">COMPANIES</a>
          </div>
          <div class="num-of-comp">
            <h2><?php echo $job->getCompanyCount(); ?></h2>
          </div>
        </div>
      </div>
    </a>
    <!-- companies ends -->

    <!-- newjobs starts -->
    <a href="#nj">
      <div class="newjobs">
        <!-- all the links here should be same -->
        <div class="icon4">
          <i class="fa-solid fa-link fa-3x"></i>
        </div>
        <div class="link4">
          <div class="link-of-nj">
            <!-- nj means new jobs -->
            <a href="#">NEW JOBS</a>
          </div>
          <div class="num-of-nj">
            <h2><?php echo $job->getLiveJobs(); ?></h2>
          </div>
        </div>
      </div>
    </a>
    <!-- new jobs ends -->
  </div>
  <!-- allicons ends -->
  <!-- hot-job-container starts -->
  <div class="hot-jobs-container">


    <!-- heading-container of hot jobs starts -->
    <div class="title-icon-container">
      <div class="hotjob-icon">
        <i class="fa-solid fa-fire-burner "></i>
      </div>
      <div class="hotjob-title">
        <h2>Hot <span>Jobs</h2></span>
      </div>
    </div>
    <!-- heading-container ends -->

    <!-- row1 starts -->
    <div class="row1">
      <!-- container-1 of row1 ends -->


      <!-- container-2 of row1 starts -->
      <?php

      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT * FROM job_info ORDER BY id DESC LIMIT 3"));
      while ($rs->hasNext()) {
        echo '<div class="akijgroup">
                <div class="akij-heading">
                  <a href="job_profile.php?job_id=' . $rs->get('id') . '">' . $rs->get('company') . '</a>
                  <p>' . $rs->get('name') . '</p>
                  <p>Salary: ' . $rs->get('salary') . '</p>
                </div>
              </div>';
      }

      ?>

    </div>
    <!-- row1 ends -->



    <!-- row2 starts -->
    <div class="row2">

      <?php

      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT * FROM job_info ORDER BY id DESC LIMIT 3, 6"));
      while ($rs->hasNext()) {
        echo '<div class="akijgroup">
          <div class="akij-heading">
            <a href="job_profile.php?job_id=' . $rs->get('id') . '">' . $rs->get('company') . '</a>
            <p>' . $rs->get('name') . '</p>
            <p>Salary: ' . $rs->get('salary') . '</p>
          </div>
        </div>';
      }

      ?>

    </div>
    <!-- row2 ends -->

  </div>
  <!-- hot job conatainer ends -->

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
</head>

</html>