<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $link = '<a href="employer_profile.php">' . $id . '</a>
             <a href="../loginAndRegistration/logout.php">Logout</a>';
} else {
    $link = '<a href="../loginAndRegistration/login.php">Sign in</a>
             <a href="../loginAndRegistration/register.php">Sign up</a>';
}

if(isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST, 'name');
    $availability = filter_input(INPUT_POST, 'availability');
    $religion = filter_input(INPUT_POST, 'religion');

    $db=new Database("user_db");
    $rs = new ResultSet($db->query("SELECT count(id) as total FROM user_info WHERE id = '$id'"));
    $rs->hasNext();
    if($rs->get('total') > 0) {
      if(strlen($name)) {
        $db->update("UPDATE user_info SET name = '$name' WHERE id = '$id'");
      } if(strlen($availability)) {
        $db->update("UPDATE user_info SET availability = '$availability' WHERE id = '$id'");
      } if(strlen($religion)) {
        $db->update("UPDATE user_info SET religion = '$religion' WHERE id = '$id'");
      }
      header('Location: employer_profile.php');
    } else {
      $query="insert into user_info(id, name, availability, religion) values('$id','$name','$availability','$religion')";
      $db->update($query);
      header('Location: employer_profile.php');
    }
}


?>

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

          echo $link;

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
      <h2 class="navbar-logo"> <a href="index_employers.php">Kaajkormo.com</a></h2>

      
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
    <form action="" method="post" enctype="multipart/form-data">
        <h1 class="employeer">Employer</h1>
        <div class="basic-info">
            <br>
            <p>Name : </p>
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <br><br>
            <p>Availability : </p>
            <select name="availability" id="availability">
                <option value="-1" disabled selected>Availability</option>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            <br><br>
            <p>Email : </p>
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <br><br>
            <div class="religion">
                <p>Religion : </p>
                <select name="religion" id="religion" required>
                    <option value="-1" selected disabled>Select Your Religion</option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Christianity">Christianity</option>
                    <option value="Hinduism">Hinduism</option>
                    <option value="Islam">Islam</option>
                    <option value="Jainism">Jainism</option>
                    <option value="Judaism">Judaism</option>
                    <option value="Sikhism">Sikhism</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
        <br>
        <br>
        <div class="employer-edit">
            <div class="submit">
                <input type="submit" name="submit" id="submit" value="Save" class="submit">
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