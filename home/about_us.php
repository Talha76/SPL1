<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $person = new Person($id);
    $userType = $person->getUserType();
    if($userType == 'employee') {
        $location = 'index.php';
    } else {
        $location = 'index_employers.php';
    }
} else {
    $location = 'index.php';
}

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - About us</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/about_us_style.css">
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
        <a href="../home/search_result_page.php?search=">Jobs</a>
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

    <!-- ekhan theke main page er contents shuru-->
    <div class="about-us-full-page">
        <div class="about-us">
            <h1>About us</h1>
        </div>
        <div class="main-info">
            <div class="main-info-1">
                <small> -- Bdjobs.com Ltd. is the first and leading career management site in the country.
                    Eight young business and IT professional backed by strong command over e-business and
                    in-depth understanding of the needs of job seekers and employers in the country's
                    context started this venture on July 2000.
                </small>
            </div>
            <br>
            <br>
            <div class="main-info-2">
                <h4>The vision of the company is to try bringing Internet technology in the
                    mainstream business and economic life of the society.
                </h4>
            </div>
            <br>

            <div class="main-info-3">
                <small> -- Our web-site aims to explore maximum benefits of the Internet.
                    We believe our service will help the job seekers manage their career more efficiently.
                    This site will also help employers solve many of the problems associated with traditional
                    recruiting methods and allow them to save time and money.
                </small>
            </div>
            <br>
            <br>
            <div class="main-info-4">
                <small>
                    -- Right after its launching, the site has been able to attract the Internet users in the country.
                    The site regularly updates Job Information (on average more than 2500 valid job news are placed at any point of time at the site),
                    provides facility to the job seekers for posting resume and online application.
                    The site has also been able to get good response from a large number of organizations in the country who use online job advertisement facility,
                    online CV bank access and online application receiving and processing facility of www.bdjobs.com.
                    Till now, more than 25,000 employers in the country have recruited more than 3,50,000 professionals
                    at different levels for their organizations through Bdjobs.com service.
                </small>
            </div>
        </div>
        <br>
        <br>
        <div class="company-management">
            <div class="company-management-heading">
                <h3> Company Mangement </h3>
            </div>

            <div class="company-management-info">
                <div class="chairman">
                    <p>Shahrier Al Tanzim <br>
                        <span>Chairman</span>
                    </p>
                </div>

                <div class="ceo">
                    <p>Kawsar Ahmed <br>
                        <span>Cheif Executive Officer <br>
                            (CEO)</span>
                    </p>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="technical-team">
            <div class="technical-team-heading">
                <h3> Technical Team </h3>
            </div>

            <div class="technical-team-info">

                <div class="technical-team-info-1">
                    <div class="director">
                        <p> Mustafa Wasif Mishal <br>
                            <span> Director, Technology and Product </span>
                        </p>
                    </div>
                    <br>
                    <div class="technical-lead">
                        <p> Muazul Islam <br>
                            <span> Technical Lead, Systems </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="technical-team-info-2">
                <div class="system-administrator">
                    <p> Tasrefee Ridun <br>
                        <span> System Administrator, AGM, IT </span>
                    </p>
                </div>
                <br>
                <div class="senior-ui-web-developer">
                    <p> Mushfiqur Rahman Talha <br>
                        <span> Senior UI & Web Developer </span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Ehane about us page shesh -->
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
