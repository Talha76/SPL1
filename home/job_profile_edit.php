<?php
include '../phpDependencies/config.php';
if(isset($_POST['submit'])){
    $job_name = filter_input(INPUT_POST, 'job-name');
    $job_type = filter_input(INPUT_POST, 'job-type');
    $job_rank = filter_input(INPUT_POST, 'job-rank');
    $salary = filter_input(INPUT_POST, 'salary');
    $work_hour = filter_input(INPUT_POST, 'work-hour');
    $company = filter_input(INPUT_POST, 'company');
    $adress = filter_input(INPUT_POST, 'adress');
    
}
?>





<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Job-info-edit</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/job_profile_edit_style.css">
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
                    <!-- <?php

                    if (isset($_SESSION['id'])) {
                        echo '<a href="#">' . $_SESSION['id'] . '</a>
                              <a href="../loginAndRegistration/logout.php">Logout</a>'; -->
                    <!-- } else { -->
                        <!-- echo ' -->
                        <a href="../loginAndRegistration/login.php">Sign in</a>
                        <a href="../loginAndRegistration/register.php">Sign up</a>';
                    <!-- } -->

                    <!-- ?> -->
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

<!--job info starts -->
<form action="" method="post">
<div class="job-info">
    <div class="display-info">

        <!-- <div class="image">
            <img src="images\tanzim.jpg" alt="Shahrier Al Tanzim">
        </div> -->

        <div class="basic-info">
            <h3>JOB</h3>
            <br>
            <p>Job Name : </p>
            <input type="text" name="job-name" id="job-name" placeholder="job-name">
            <p>Job Type : </p>
            <input type="text" name="job-type" id="job-type" placeholder="job-type">
            <p>Job Rank : </p>
            <input type="text" name="job-rank" id="job-rank" placeholder="job-rank">
            <p>Salary :</p>
            <input type="text" name="salary" id="salary" placeholder="salary">
            <p>Work-hour : 8 hours/day</p>
            <input type="text" name="work-hour" id="work-hour" placeholder="work-hour">
            <p>Company : <a href="#"></a></p>
            <input type="text" name="company" id="company" placeholder="company">
            <p>Adress : </p>
            <input type="text" name="adress" id="adress" placeholder="adress">
        </div>
    </div>
</div>
<div class="detailed-info">
    <div class="detaile-info-title">
        <h2> Detailed Information </h2>
    </div>
    <div class="salary">
        <p>Salary : </p>
        <input type="text" name="salary" id="salary" placeholder="salary">
    </div>
    <div class="vacancy">
        <p>hello</p>
        <input type="text" name="vacancy" id="vacancy" placeholder="vacancy">
    </div>
    <div class="job-responsibilities">
        <input type="text" name="job-responsibilities" id="job-responsibilities" placeholder="job-responsibilities">
        <p>holo</p>
    </div>
    <div class="eduation-requirements">
        <p>hello</p>
        <input type="text" name="eduation-requirements" id="eduation-requirements" placeholder="eduation-requirements">
    </div>
    <div class="emplpoyment-status">
        <p>hello</p>
        <input type="text" name="emplpoyment" id="emplpoyment" placeholder="emplpoyment">
    </div>
    <div class="experience-requirements">
        <p>hello</p>
        <input type="text" name="experience-requirements" id="experience-requirements" placeholder="experience-requirements">
    </div>
    <div class="job-location">
        <p>hello</p>
        <input type="text" name="job-location" id="job-location" placeholder="job-location">
    </div>
    <div class="compensation-benefits">
        <p>hello</p>
        <input type="text" name="compensation-benefits" id="compensation-benefits" placeholder="compensation-benefits">
    </div>
</div>

<br>
<br>

<div class="job-apply">
    <div class="save">
        <input type="submit" name="save" id="save" value="Save" class="save"> 
    </div>
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