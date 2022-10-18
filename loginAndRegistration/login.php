<?php

include '../phpDependencies/config.php';

session_start();

if (isset($_POST['submit'])) {
    $id = filter_input(INPUT_POST, 'id');
    $password = md5(filter_input(INPUT_POST, 'password'));

    $query = "SELECT id, password FROM userID WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 0)
        $error = "User not found!";
    else {
        $row = mysqli_fetch_array($result);

        if ($row['password'] == $password) {
            $_SESSION['id'] = $row['id'];
            header('location:../home/index.php');
        } else
            $error = "Wrong password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTS-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sclae=1.0">
    <link rel="stylesheet" href="css/login_styles.css">
    <link rel="stylesheet" href="../home/css/style.css">
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
            <h2 class="navbar-logo"> <a href="../home/index.php">Kaajkormo.com</a></h2>


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

    <div class="form-container">
        <form class="form" action="" method="post">
            <div class="login-title">
                <h3>Log In Now</h3>
            </div>

            <?php
            if (isset($error)) {
                echo '<span class="error-msg">' . $error . '</span>';
            }
            ?>
            <div class="input-fields">
                <input class="user-id" type="text" name="id" id="id" placeholder="Enter User ID" required>
                <br>
                <input class="password" type="password" name="password" id="password" placeholder="Enter password" required>
            </div>
            <br>
            <button type="submit" name="submit" class="form-btn" onclick="showMessage()">Log in</button>
            <br>
            <br>
            <p>Don't have an account? <a href="register.php">Register now</a></p>

        </form>
    </div>

    <!-- footer -->
    <div class="footer">

        <!-- about us starts -->
        <div class="about-us">
            <div class="heading-about-us">
                <h2>ABOUT US</h2>
            </div>
            <div class="links">
                <a href="../home/about_us.php">About Kajkormo</a>
                <a href="../home/terms_and_conditions.php">Terms & conditions</a>
                <a href="#">Our Services</a>
                <a href="../home/privacy_policy.php">Privacy Policy</a>
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
                <a href="#">Create Account</a>
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
                <a href="#">Create Account</a>
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