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


    <!--header starts-->
    <header>
        <!-- <div class="background-image">
            <img src="https://images.unsplash.com/photo-1486312338219-ce68d2c6f44d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2072&q=80">
        </div> -->
        <h1 class="header-title">
            FIND YOUR <br> <span>PERFECT EMPLOYEE</span><br>EASILY
        </h1>
        <!-- Divisional Jobs -->
        <!-- <div class="Divisional-Jobs">
            <h1 class="heading">Divisional Jobs</h1>
            <button class="dhaka">Dhaka</button>
            <button class="Barishal">Barishal</button>
            <button class="Khulna">Khulna</button>
            <button class="Sylhet">Sylhet</button>
            <button class="Chottogram">Chottogram</button>
            <button class="Rajshahi">Rajshahi</button>
            <button class="Rangpur">Rangpur</button>
            <button class="Mymenshingh">Mymenshingh</button> -->

            <!--Quick links starts-->
            <!-- <div class="Quick-links">
                <h1 class="hq">Quick links</h1>
                <ul>
                    <div class="li1">
                        <li><a href="#">Employers List</a></li>
                    </div>
                    <div class="li2">
                        <li><a href="#">Part time jobs</a></li>
                    </div>
                    <div class="li3">
                        <li><a href="#">Contractual jobs</a></li>
                    </div>
                    <div class="li4">
                        <li><a href="#">Overseas Jobs</a></li>
                    </div>
                    <div class="li5">
                        <li><a href="#">Work from home</a></li>
                    </div>
                    <div class="li6">
                        <li><a href="#">Technical jobs</a></li>
                    </div>
                </ul>
            </div> -->
            <!-- quick links ends -->
        <!-- </div> -->
        <!-- Divisional jobs ends -->


    </header>
    <!-- header ends -->

    <!--searchbar starts-->
    <div class="search-wrapper">
        <div class="search-box">
            <div class="search-card">
                <input class="search-input" type="text" placeholder="Employees or skills">
                <div class="organizationtype">
                    <select class="org-dropdown" id="org-dropdown">
                        <option value="organizationtype">Employee Type</option>
                        <option value="semi-government">Full Time</option>
                        <option value="ngo">Part Time</option>
                        <option value="privatefirm">Student</option>
                        <option value="internationalagencies">Job Hopper</option>
                        <option value="others">Others</option>

                    </select>
                </div>
                <button class="search-button">Search</button>
            </div>
        </div>
    </div>
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
                        <a href="#lj">LIVE EMPS</a>
                    </div>
                    <div class="num-of-lj">
                        <a href="#lj">
                            <h2>7365+</h2>
                        </a>
                    </div>
                </div>
            </div>
        </a>
        <!-- livejob ends -->

        <!-- vacancies starts -->
        <a href="#vc">
            <div class="vacancies">
                <!-- all the links in this div will be same-->

                <div class="icon2">
                    <i class="fa-solid fa-users fa-3x"></i>
                </div>
                <div class="link2">
                    <!-- link1 has 2 divs: link & number of vacancies -->
                    <div class="link-of-vc">
                        <a href="#">VACANCIES</a>
                    </div>
                    <div class="num-of-vc">
                        <a href="#lj">
                            <h2>7365+</h2>
                        </a>
                    </div>
                </div>
            </div>
        </a>
        <!-- vacancies ends -->

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
                        <a href="#">EMPLOYEES</a>
                    </div>
                    <div class="num-of-comp">
                        <a href="#comp">
                            <h2>7365+</h2>
                        </a>
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
                        <a href="#">NEW Employees</a>
                    </div>
                    <div class="num-of-nj">
                        <a href="#nj">
                            <h2>7365+</h2>
                        </a>
                    </div>
                </div>
            </div>
        </a>
        <!-- new jobs ends -->
    </div>
    <!-- allicons ends -->
    <!-- hot-employees-container starts -->
    
    <div class="hot-employees-container">
        <div class="hot-employees-title">
            <h1>HOT EMPLOYEES</h1>
        </div>
        <!-- Employee1 - start -->
        <div class="employee1">
            <div class="employee1-image">
                <img src="images\wasif.jpg">
            </div>
            <div class="employee1-info">
                <p> <a href="https://www.facebook.com/mostofawasif.mishal"> Mustafa Wasif Mishal</a></p>
                <p>Software Engineer</p>
                <!-- <br> -->
                <p>Skills : CPer, Html, Css, PHP</p>
                <p>Interests : Full-Stack</p>
            </div>
        </div>
        <!-- Employee1 - end -->
        <!-- Employee2 - start -->
        <div class="employee2">
            <div class="employee2-image">
                <img src="images\kawsar.jpg">
            </div>
            <div class="employee2-info">
                <p><a href="https://www.facebook.com/profile.php?id=100010367555864">Kawsar Ahmed</a></p>
                <p>Love Expert</p>
                <!-- <br> -->
                <p>Skills : Teeange-Love, Married Love, Heatbreak Handling</p>
                <p>Interests : Maily Married Couples</p>
            </div>
        </div>
        <!-- Employee2 - end -->
        <!-- Employee3 - start -->
        <div class="employee3">
            <div class="employee3-image">
                <img src="images\talha.jpg">
            </div>
            <div class="employee3-info">
                <p><a href="https://www.facebook.com/talha.1876">Mushfiq Talha</a> </p>
                <p>Cadet</p>
                <p>Skills : Boxing, Mixed Marshal-Arts</p>
                <p>Interests: Beating up bad guys</p>
            </div>
        </div>
        <!-- Employee3 - end -->
        <!-- Employee4 - start -->
        <div class="employee4">
            <div class="employee4-image">
                <img src="images\tanzim.jpg">
            </div>
            <div class="employee4-info">
                <p><a href="https://www.facebook.com/profile.php?id=100009151512067">Shahrier Al Tanzim</a></p>
                <p>Programmer</p>
                <p>Skills : Cplusplus, Python</p>
                <p>Interests: Competitive Programming</p>
            </div>
        </div>
        <!-- Employee4 - end -->
        <!-- Employee5 - start -->
        <div class="employee5">
            <div class="employee5-image">
                <img src="images\ridun.jpg">
            </div>
            <div class="employee5-info">
                <p><a href="https://www.facebook.com/tashrefeemahmood.ridun">Tasrefee Mahmood Ridun</a></p>
                <p>Photographer</p>
                <p>Skills : Picture Editing, Camera Knowledge</p>
                <p>Interests: Wild-life Phototgraphy</p>
            </div>
        </div>
        <!-- Employee5 - end -->
    </div>
    <!-- hot employees conatainer ends -->
    
    <!-- to make the footer lower, have to work on that -->
    <br><br><br>
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
</body>
</head>

</html>