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

    <h1 class="search-page-healine">Search results ... </h1>
    <!-- search-bar starts -->
    <div class="search-bars">
        <div class="search-bar-main">
            <input type="text" name="search-bar" id="search-bar" class="search-bar">
            
            <input type="submit" name="search" id="search" class="search" value="Search">
        </div>
        <div class="filters">
            <select name="filter" id="filter" class="filter">
                <option value="salary">Salary</option>
                <option value="rating">Rating</option>
                <option value="age">Age</option>
                <option value="time">Time</option>
            </select>
    
            <select name="place" id="place" class="place">
                <option value="rangpur">Rangpur</option>
                <option value="dhaka">Dhaka</option>
                <option value="chattagram">Chattagram</option>
                <option value="khulna">Khulna</option>
                <option value="barishal">Barishal</option>
                <option value="rajshahi">Rajshahi</option>
                <option value="mymenshing">Mymenshing</option>
                <option value="sylhet">Sylhet</option>
            </select>
        </div>
    </div>
    <div class="search-results">
        <div class="result1">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
        <div class="result2">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
        <div class="result3">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
        <div class="result4">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
        <div class="result5">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
        <div class="result6">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
        <div class="result7">
            <div class="image">
                <img src="" alt="">
            </div>
            <div class="details">
                <h4>Software Engineering</h4>
                <p>Company : <a href="job_profile.html"> SWE Google</a></p>
                <p>Salary : 69000 Tk/Month</p>
                <p>Duration : 8 hours</p>
                <p>Rating : 5 Stars</p>
                <p>Quality Required : CSS, HTML, PHP, JAVASCRIPT </p>
            </div>
        </div>
    </div>
    <div class="page-jump">
        <input type="submit" name="start" id="start" class="start" value="Start">
        <input type="submit" name="previous" id="previous" class="previous" value="Previous">
        <input type="text" name="page-no" id="page-no" class="page-no" placeholder="Present page no.">
        <input type="submit" name="go-page" id="go-page" class="go-page" value="Go">
        <input type="submit" name="next" id="next" class="next" value="Next">
        <input type="submit" name="end" id="end" class="end" value="End">
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
