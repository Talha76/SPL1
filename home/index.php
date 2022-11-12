<?php

include '../phpDependencies/config.php'

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
        <a href="#jobs">Jobs</a>
        <a href="#myjobs">Myjobs</a>
        <a href="#elearning">E-learning</a>
        <a href="#tender">Tender/Eoi</a>
        <a href="#employers">Employers</a>
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
            echo '<a href="#">' . $_SESSION['id'] . '</a>
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
                        <option value="Career-Guidline"> <a href="#">Career Guideline</a></option>
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
          <a href="#"><i class="fa-brands fa-square-facebook fa-x"></i></a>
        </div>
        <div class="linkedin">
          <a href="#"><i class="fa-brands fa-linkedin fa-x"></i></a>
        </div>
        <div class="instagram">
          <a href="#"><i class="fa-brands fa-instagram fa-x"></i></a>
        </div>
        <div class="gmail">
          <a href="#"> <i class="fa-solid fa-at "></i></a>
        </div>
        <div class="youtube">
          <a href="#"><i class="fa-brands fa-youtube fa-x"></i></a>
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
      FIND YOUR <br> <span>PERFECT JOB</span><br>EASILY
    </h1>
    <!--Divisional Jobs-->
    <div class="Divisional-Jobs">
      <h1 class="heading">Divisional Jobs</h1>
      <button class="dhaka">Dhaka</button>
      <button class="Barishal">Barishal</button>
      <button class="Khulna">Khulna</button>
      <button class="Sylhet">Sylhet</button>
      <button class="Chottogram">Chottogram</button>
      <button class="Rajshahi">Rajshahi</button>
      <button class="Rangpur">Rangpur</button>
      <button class="Mymenshingh">Mymenshingh</button>

      <!--Quick links starts-->
      <div class="Quick-links">
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
      </div>
      <!-- quick links ends -->
    </div>
    <!-- Divisional jobs ends -->


  </header>
  <!-- header ends -->

  <!--searchbar starts-->
  <div class="search-wrapper">
    <div class="search-box">
      <div class="search-card">
        <input class="search-input" type="text" placeholder="Job title or keywords">
        <div class="organizationtype">
          <select class="org-dropdown" id="org-dropdown">
            <option value="organizationtype">Organization Type</option>
            <option value="semi-government">Semi Government</option>
            <option value="ngo">NGO</option>
            <option value="privatefirm">Private Firm/Company</option>
            <option value="internationalagencies">International Agencies</option>
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
            <a href="#lj">LIVE JOBS</a>
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
            <a href="#">VCANCIES</a>
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
            <a href="#">COMPANIES</a>
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
            <a href="#">NEW JOBS</a>
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

      <!-- container-1 of row1 starts -->
      <div class="bsh-container">
        <div class="bsh-image">
          <img src="images\bsh.jpeg">
        </div>
        <div class="bsh-heading">
          <a href="#">Bangladesh Specialized Hospital Ltd.</a>
        </div>
      </div>
      <!-- container-1 of row1 ends -->


      <!-- container-2 of row1 starts -->
      <div class="akijgroup">
        <div class="akij-image">
          <img src="images\Akij group.jpg">
        </div>
        <div class="akij-heading">
          <a href="#akij">Akij Group Ltd.</a>
        </div>
      </div>
      <!-- container-2 of row1 ends -->

      <!-- container-3 of row1 starts -->
      <div class="asset-container">
        <div class="asset-image">
          <img src="images\ASSET-Logo-Transparent.png">
        </div>
        <div class="asset-heading">
          <a href="#asset">Asset Developments & Holdings Ltd. </a>
        </div>
      </div>
      <!-- container-3 of row1 ends -->

    </div>
    <!-- row1 ends -->



    <!-- row2 starts -->
    <div class="row2">

      <!-- container-1 of row2 starts -->
      <div class="nsu-container">
        <div class="nsu-image">
          <img src="images\nsu.jpeg">
        </div>
        <div class="nsu-heading">
          <a href="#">North South University (NSU)</a>
        </div>
      </div>
      <!-- container-1 of row2 ends -->


      <!-- container-2 of row2 starts -->
      <div class="brac-container">
        <div class="brac-image">
          <img src="images\brac.png">
        </div>
        <div class="brac-heading">
          <a href="#brac">Brac</a>
        </div>
      </div>
      <!-- container-2 of row2 ends -->

      <!-- container-3 of row2 starts -->
      <div class="british-council-container">
        <div class="british-council-image">

          <img src="images\british_council.png">
        </div>
        <div class="british-council-heading">
          <a href="#british-council">British Council</a>
        </div>
      </div>
      <!-- container-3 of row2 ends -->

    </div>
    <!-- row2 ends -->


    <!-- row3 starts -->
    <div class="row3">

      <!-- container-1 of row3 starts -->
      <div class="square-container">
        <div class="square-image">
          <img src="images\logo-rectangle-text-company-architectural-engineering.jpg">
        </div>
        <div class="square-heading">
          <a href="#">Square Pharmaceuticals Ltd.</a>
        </div>
      </div>
      <!-- container-1 of row3 ends -->


      <!-- container-2 of row3 starts -->
      <div class="danish-container">
        <div class="danish-image">
          <img src="images\denish.jpeg">
        </div>
        <div class="danish-heading">
          <a href="#danish">Danish Refugee Council</a>
        </div>
      </div>
      <!-- container-2 of row3 ends -->

      <!-- container-3 of row3 starts -->
      <div class="walton-container">
        <div class="walton-image">

          <img src="images\walton.jpeg">
        </div>
        <div class="walton-heading">
          <a href="#walton">Walton</a>
        </div>
      </div>
      <!-- container-3 of row3 ends -->

    </div>
    <!-- row3 ends -->


    <!-- row4 starts -->
    <div class="row4">

      <!-- container-1 of row4 starts -->
      <div class="samsung-container">
        <div class="samsung-image">
          <img src="images\samsung.png">
        </div>
        <div class="samsung-heading">
          <a href="#">Samsung</a>
        </div>
      </div>
      <!-- container-1 of row4 ends -->


      <!-- container-2 of row4 starts -->
      <div class="trade-international-container">
        <div class="trade-international-image">
          <img src="images\tradeinternational.png">
        </div>
        <div class="trade-international-heading">
          <a href="#trade-international">Trade International Industries Ltd.</a>
        </div>
      </div>
      <!-- container-2 of row4 ends -->

      <!-- container-3 of row4 starts -->
      <div class="coast-container">
        <div class="coast-image">

          <img src="images\COAST-Foundation-logo-English_Web-1024x603.jpg">
        </div>
        <div class="coast-heading">
          <a href="#coast">COAST Foundation</a>
        </div>
      </div>
    </div>
    <!-- container-3 of row4 ends -->


    <!-- row5 starts -->
    <div class="row5">

      <!-- container-1 of row5 starts -->
      <div class="shahjalal-islamic-bank-container">
        <div class="shahjalal-islamic-bank-image">
          <img src="images\sib.png">
        </div>
        <div class="shahjalal-islamic-bank-heading">
          <a href="#">shahjalal-islamic-bank</a>
        </div>
      </div>
      <!-- container-1 of row5 ends -->


      <!-- container-2 of row5 starts -->
      <div class="seaf-ventures-container">
        <div class="seaf-ventures-image">
          <img src="images\seaf.png">
        </div>
        <div class="seaf-ventures-heading">
          <a href="#seaf-ventures">SEAF Ventures Ltd.</a>
        </div>
      </div>
      <!-- container-2 of row5 ends -->

      <!-- container-3 of row5 starts -->
      <div class="basis-container">
        <div class="basis-image">

          <img src="images\basis.png">
        </div>
        <div class="basis-heading">
          <a href="#basis">Bangladesh Association of Software and Information Services (BASIS)</a>
        </div>
      </div>
      <!-- container-3 of row5 ends -->
    </div>
    <!-- row5 ends -->


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
