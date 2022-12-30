<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $person = new Person($id);
    $userType = $person->getUserType();
}

if(isset($_POST['search'])) {
    header('Location: search_result_page.php?search=' . $_POST['search-bar']);
}

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Search Reuslts</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/search_result_page_style.css">
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
      <h2 class="navbar-logo"> <a href="index.php">Kaajkormo.com</a></h2>

      
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

    <h1 class="search-page-healine">Search results ... </h1>
    <!-- search-bar starts -->
    <form action="" method="POST">
        <div class="search-bars">
            <div class="search-bar-main">
                <input type="search" name="search-bar" id="search-bar" class="search-bar">
                
                <input type="submit" name="search" id="search" class="search" value="Search">
            </div>
        </div>
    </form>
    <div class="search-results">
        <?php

        $search = filter_input(INPUT_GET, 'search');
        $db = new Database('job_db');
        $sql = "SELECT * FROM job_info WHERE name LIKE '%$search%' ORDER BY id DESC";
        $rs = new ResultSet($db->query($sql));
        $cnt = 0;
        while($rs->hasNext() && $cnt < 10) {
            $cnt++;
            echo '<div class="result">
                      <div class="details">
                          <h4><a href="job_profile.php?job_id=' . $rs->get('id') . '">' . $rs->get('name') . '</a></h4>
                          <p>Company : ' . $rs->get('company') . '</p>
                          <p>Salary : ' . $rs->get('salary') . ' BDT/Month</p>
                      </div>
                  </div>';
        }

        $sql = "SELECT * FROM job_info WHERE company LIKE '$company' ORDER BY id DESC";
        $rs = new ResultSet($db->query($sql));
        while($rs->hasNext() && $cnt < 10) {
            $cnt++;
            echo '<div class="result">
                      <div class="details">
                          <h4><a href="job_profile.php?job_id=' . $rs->get('id') . '">' . $rs->get('name') . '</a></h4>
                          <p>Company : ' . $rs->get('company') . '</p>
                          <p>Salary : ' . $rs->get('salary') . ' BDT/Month</p>
                      </div>
                  </div>';
        }

        ?>
    </div>
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
</html>
