<?php

include '../phpDependencies/config.php'

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Privacy Policy</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/privacy_policy_style.css">
    <title>Document</title>
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
</head>
<div>
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

<!-- privacy page starts from here -->
<br>
<br>
<div class="privacy-policy">
    <div class="title">
        <h1>Privacy Policy</h1>
    </div>
    <div class="content">
        <p>
            Kaajkormo.com collects information about visitors.
            This information includes your IP address, browser type, domain names,
            access times and referring addresses. We use this information for
            operating our services, maintaining the quality of the service,
            security management and providing reports for relevant business
            purposes.
        </p>

        <br>
        <br>
        <h3>Confidentiality and Security</h3>
        <p>
            We regard your CV as a very personal document
            and we wish you to have full control over who
            can view it and whether or not.
        </p>
        <br>
        <p>
            The level of control is provided to you by your choice
            of whether to make your CV searchable by our Clients or not.
            Making your CV searchable considerably increases your exposure
            to potential employers.
        </p>
        <br>

        <ul>
            <li>
                When you apply to jobs through our services,
                your resume in your MYKaajkormo account and any other
                information that you disclosed during your job applications
                will be made available to the companies you are applying to.
            </li>
            <li>
                You may block any employer not to access your CV from our database.
            </li>
            <li>
                You may remove your CV from our searchable database at
                any time from "Delete Resume" option at MYKaajkormo.
            </li>
            <li>
                We limit access to personal information about you to employees
                who we believe reasonably need to come into contact with that
                information to provide products or services to you or in order
                to do their jobs. If any recruiter is found to be breaching our
                terms and conditions, then we will immediately terminate their use
                of our services.
            </li>
        </ul>
        <br>
        <h3>E-Mail this job to a friend</h3>
        <br>
        <p>
            Our Mail-a-Friend service makes it easy for our users to recommend
            jobs to friends or relatives. Simply complete the Mail-a-Friend form
            and we will send an email to your specified recipient(s) containing
            detail job description to the selected job. We will not use your
            recipient's details for any other purpose than the fulfillment of
            this service.
        </p>
        <br>
        <h3>Resume References</h3>
        <p>
            In reference section to your resume, Kaajkormo.com will
            ask you for their names, telephone numbers,
            emails and position titles. This information will
            be enclosed as part of your job application and
            employers may contact them to get references for your
            applications.
        </p>
        <br>
        <h3>Job Mail Service</h3>
        <br>
        <p>
            The Job Mail Service matches job seekers requirements for
            employment with the vacancies advertised on any one of our
            websites. For job seekers who register to this service you
            receive an email listing those jobs that we believe you should be
            interested in. Your requirements are defined by your preferred
            criteria which can be used to specific job titles, skills, organization
            types or other definition of the job you want. You can change these
            criteria at any time.
        </p>
        <br>

        <h3>E-Mail Notification Services</h3>
        <p>

            When you subscribe to a Kaajkormo.com E-mail Notification,
            We use your email address to send you the notification(s)
            you have requested like Kaajkormo.com Newsletter, Kaajkormo.com
            workshop/Training, Third Party offers and Promotions.
            You may subscribe and unsubscribe services by following the
            prominent instructions mentioned in each of the notification.
        </p>
        <h3>Third-Party Tracking Technologies</h3>
        <p>
            Kaajkormo.com uses the Google Analytics tracking technology
            to track visits to our website. It allows us to analyze the
            usage of our website and is merely for our internal use.
        </p>
        <br>
        <br>
        <h3>Cookies and Other Tracking Technologies</h3>
        <p>
            Some of our Web pages utilize "cookies" and other tracking
            technologies. A "cookie" is a small text file that may be used,
            for example, to collect information about Web website activity.
            Some cookies and other technologies may serve to recall Personal
            Information previously indicated by a Web user. Most browsers allow
            you to control cookies, including whether or not to accept them and
            how to remove them.
        </p>
        <br>
        <p>
            You may set most browsers to notify you if you receive a cookie,
            or you may choose to block cookies with your browser, but please
            note that if you choose to erase or block your cookies, you will
            need to re-enter your original user ID and password to gain access
            to certain parts of the Web website. Our use of cookies and other
            tracking technologies allows us to improve our website and your web
            experience. Your IP address might be used to track your location to
            provide you with various location based services and for our data
            analysis purposes. We may also analyze information that does not
            contain personal information for trends and statistics.
        </p>
        <br>
        <h3>Security</h3>
        <p>
            We use lots of tools (encryption, passwords, and physical security)
            to protect your personal information against unauthorized access and
            disclosure.
        </p>
        <br>
        <h3>Opting out of E-Mail Notification Services</h3>
        <p>
            We allow users to opt-out of having Email Notification Alerts sent
            to them at any time.
        </p>
        <br>
        <h3>Revision and updates</h3>
        <p>
            Kaajkormo.com regularly revises and updates its privacy policy
            and publishes changes to the policy at our website.
        </p>
    </div>
</div>
</body>

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
