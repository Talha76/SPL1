<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Employer-info-edit</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employer_profile_edit_style.css">
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

<!-- employee info starts -->
<div class="employer-info">
    <div class="display-info">

        <div class="image">
            <img src="images\tanzim.jpg" alt="Shahrier Al Tanzim">
        </div>

        <div class="basic-info">
            <h3>Employer</h3>
            <br>
            <p>Name : </p>
            <input type="text" name="name" id="name" placeholder="name">
            <p>Age : </p>
            <input type="text" name="age" id="age" placeholder="age">
            <p>Quality : </p>
            <input type="text" name="quality" id="quality" placeholder="quality">
            <p>Work Experience : </p>
            <input type="text" name="work-experience" id="work-experience" placeholder="work-experience">
            <p>Availabity : </p>
            <input type="text" name="availability" id="availability" placeholder="availability">
            <p>Adress : </p>
            <input type="text" name="adress" id="adress" placeholder="adress">
            <p>District : </p>
            <input type="text" name="district" id="district" placeholder="district">
            <p>Division : </p>
            <input type="text" name="division" id="division" placeholder="division">
            <!-- <P>Rating : 5 star</P> -->
            <p>Upload Picture : </p>
            <input type="image" name="image" id="image" placeholder="image">
        </div>
    </div>
</div>
<div class="detailed-info">
    <div class="detaile-info-title">
        <h2> Detailed Information </h2>
    </div>
    <div class="present-adress">
        <p>Present Adress : </p>
        <br>
        <input class="present-adress" type="input" name="present-adress" placeholder="present-adress"> 
    </div>
    <div class="permanent-adress">
        <p>Permanent Adress : </p>
        <br>
        <input class="permanent-adress" type="input" name="permanent-adress" placeholder="permanent-adress"> 
    </div>
    <div class="father-info">
        <p>Father Info : </p>
        <br>
        <input class="father-info" type="input" name="father-info" placeholder="father-info"> 
    </div>
    <div class="mother-info">
        <p>Mother Info : </p>
        <br>
        <input class="mother-info" type="input" name="mother-info" placeholder="mother-info"> 
    </div>
    <div class="education">
        <p>Education : </p>
        <br>
        <input class="education" type="input" name="education" placeholder="education"> 
    </div>
    <div class="previous-jobs">
        <p>Previous Jobs : </p>
        <br>
        <input class="previous-jobs" type="input" name="previous-jobs" placeholder="previous-jobs"> 
    </div>
    <div class="skills">
        <p>Skills : </p>
        <br>
        <input class="skills" type="input" name="skills" placeholder="skills"> 
    </div>
    <div class="interests">
        <p>interests : </p>
        <br>
        <input class="interests" type="input" name="interests" placeholder="interests"> 
    </div>
    <div class="marital-status">
        <p>Marital Status : </p>
        <br>
        <input class="marital-status" type="input" name="marital-status" placeholder="marital-status"> 
    </div>
    <div class="religion">
        <p>Regligion : </p>
        <br>
        <input class="religion" type="input" name="religion" placeholder="religion"> 
    </div>
</div>
<br>
<br>
<div class="employer-edit">
    <div class="save">
        <input type="submit" name="save" id="save" value="Save" class="save"> 
    </div>
</div>
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