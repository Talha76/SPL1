<?php

include '../phpDependencies/config.php'

?>

<!DOCTYPE html>
<html lang="en">
<title>Kaajkormo - Terms and conditions</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/terms_and_conditions_style.css">
    <title>Document</title>
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
    <title>Resposive job portal website</title>
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
                    <a href="#">Contact Us</a>
                </div>
            </div>



        </nav>
        <!-- navbar-1 ends -->

        <!--navbar2 starts-->
        <nav class="navbar2">
            <h2 class="navbar-logo"> <a href="index.php">Kaajkormo.com</a></h2>


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

    </div>
    <!-- navbar ends -->


    <div class="terms-and-conditions-page">
        <div class="disclaimer">
            <div class="disclaimer-title">
                <h1>Disclaimer - Terms and conditions</h1>
            </div>
            <br>
            <div class="disclaimer-info">
                <p>This is a public site with free access and KaajKormo.com Limited assumes no liability for the quality and genuineness of responses.
                    KaajKormo.com Limited is not liable for any information provided by any individual. The individual/company would have to conduct its
                    own background checks on the bonafide nature of all responses.
                    <br>
                    <br>
                    KaajKormo.com Limited will not be liable on account of any inaccuracy of information on this web site.
                    It is the responsibility of the visitor to further research the information on the site.
                    Any breach of privacy or of the information provided by the consumer to KaajKormo.com Limited to
                    be placed on the website by technical or any other means is not the responsibility of KaajKormo.com Limited.
                    KaajKormo.com Limited does not guarantee confidentiality of information provided to it by any person acquiring/using
                    all/any information displayed on the KaajKormo.com website.
                </p>
            </div>
        </div>
        <div class="resumedisplay">
            <div class="resumedisplay-title">
                <h3>Resume display</h3>
            </div>
            <div class="resumedisplay-info">
                <p>1. KaajKormo.com Limited allows you to Post/Submit your resume
                    in the KaajKormo.com website free of cost.
                </p>
                <br>
                <p>2. The resume displayed can be updated free of cost.</p>
                <br>
                <p>3. KaajKormo.com Limited offers no guarantee n (or) warranties
                    that there would be a satisfactory response or any response
                    once the resume is put on display.
                </p>
                <br>
                <p>4. KaajKormo.com Limited neither guarantees nor offers any warranty
                    about the credentials of the prospective employer/organization
                    which down loads the information and uses it to contact the
                    prospective employee.
                </p>
                <br>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">

        <!-- about us starts -->
        <div class="about-us">
            <div class="heading-about-us">
                <h2>ABOUT US</h2>
            </div>
            <div class="links">
                <a href="about_us.php">About Kaajkormo</a>
                <a href="terms_and_conditions_style.php">Terms & conditions</a>
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

</html>
