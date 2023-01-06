<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
    $id = $_SESSION['id'];
    $person = new Person($id);
    $userType = $person->getUserType();
}

if (isset($_POST['submit'])) {
    $name=filter_input(INPUT_POST, 'name');
    $dateOfBirth=filter_input(INPUT_POST, 'date_of_birth');
    $skill=filter_input(INPUT_POST, 'skill');
    $availability=filter_input(INPUT_POST, 'availability');
    $bloodGroup=filter_input(INPUT_POST, 'blood_group');
    $presentAddress=filter_input(INPUT_POST, 'present_address');
    $permanentAddress=filter_input(INPUT_POST, 'permanent_address');
    $fathersName=filter_input(INPUT_POST, 'fathers_name');
    $mothersName=filter_input(INPUT_POST, 'mothers_name');
    $maritalStatus=filter_input(INPUT_POST, 'marital_status');
    $religion=filter_input(INPUT_POST, 'religion');
    
    $db=new Database("user_db");

    $rs = new ResultSet($db->query("SELECT * FROM user_info WHERE id = '$id'"));
    if($rs->hasNext()) {
        if(strlen($name)) {
            $db->update("UPDATE user_info SET name = '$name' WHERE id = '$id'");
        } if(strlen($dateOfBirth)) {
            $db->update("UPDATE user_info SET date_of_birth = '$dateOfBirth' WHERE id = '$id'");
        } if(strlen($skill)) {
            $db->update("UPDATE user_info SET skill = '$skill' WHERE id = '$id'");
        } if(strlen($availability)) {
            $db->update("UPDATE user_info SET availability = '$availability' WHERE id = '$id'");
        } if(strlen($bloodGroup)) {
            $db->update("UPDATE user_info SET blood_group = '$bloodGroup' WHERE id = '$id'");
        } if(strlen($presentAddress)) {
            $db->update("UPDATE address SET present_address = '$presentAddress' WHERE id = '$id'");
        } if(strlen($permanentAddress)) {
            $db->update("UPDATE address SET present_address = '$permanentAddress' WHERE id = '$id'");
        } if(strlen($fathersName)) {
            $db->update("UPDATE family_info SET fathers_name = '$fathersName' WHERE id = '$id'");
        } if(strlen($mothersName)) {
            $db->update("UPDATE family_info SET mothers_name = '$mothersName' WHERE id = '$id'");
        } if(strlen($maritalStatus)) {
            $db->update("UPDATE family_info SET marital_status = '$maritalStatus' WHERE id = '$id'");
        } if(strlen($religion)) {
            $db->update("UPDATE user_info SET religion = '$religion' WHERE id = '$id'");
        }
        header('Location: index_employees.php');
    }

    $query="insert into user_info values('$id','$name','$dateOfBirth','$skill','$availability','$bloodGroup','$religion')";
    $db->update($query);
    
    $query2="insert into family_info values('$id','$fathersName','$mothersName','$maritalStatus')";
    $db->update($query2);

    $query3="insert into address values('$id','$presentAddress','$permanentAddress')";
    $db->update($query3);
    header('Location: index_employees.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<title>KaajKormo - Employee-info-edit</title>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/employee_profile_edit_style.css">
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
      <h2 class="navbar-logo"> <a href="index.php">Kaajkormo.com</a></h2>

      
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
        <h1 class="employee">Employee</h1>
        <div class="basic-info">
            <br>
            <p>Name : </p>
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <p>Date of birth : </p>
            <input type="date" name="date_of_birth" id="date_of_birth">
            <p>Skill : </p>
            <input type="text" name="skill" id="skill" placeholder="Your skills">
            
            <p>Availability : </p>
            <select name="availability" id="availability">
                <option value="-1" disabled selected>Availability</option>
                <option value="available">Available</option>
                <option value="unavailable">Unavailable</option>
            </select>
            
            <p>Blood Group : </p>
            <select name="blood_group" id="blood_group">
                <option value="-1" selected disabled>Select Your Blood Group</option>
                <option value="A+">A(+ve)</option>
                <option value="A-">A(-ve)</option>
                <option value="B+">B(+ve)</option>
                <option value="B-">B(-ve)</option>
                <option value="O+">O(+ve)</option>
                <option value="O-">O(-ve)</option>
                <option value="AB+">AB(+ve)</option>
                <option value="AB-">AB(-ve)</option>
            </select>
            <p>Upload CV : </p>
            <input type="file" name="cv" id="cv" accept=".pdf">
        </div>
        <div class="detailed-info">
            <div class="detailed-info-title">
                <h2> Detailed Information </h2>
            </div>
            <div class="present-address">
                <p>Present address : </p>
                <br>
                <input class="present-address" type="text" name="present_address" id="present_address" placeholder="present-address">
            </div>
            <div class="permanent-address">
                <p>Permanent address : </p>
                <br>
                <input class="permanent-address" type="text" name="permanent_address" id="permanent_address" placeholder="permanent-address">
            </div>
            <div class="father-info">
                <p>Father's Name : </p>
                <br>
                <input class="father-info" type="text" name="fathers_name" id="fathers_name" placeholder="father-info">
            </div>
            <div class="mother-info">
                <p>Mother's Name : </p>
                <br>
                <input class="mother-info" type="text" name="mothers_name" id="mothers_name" placeholder="mother-info">
            </div>
            <div class="marital-status">
                <p>Marital Status : </p>
                <br>
                <select name="marital_status" id="marital_status" required>
                    <option value="-1" selected disabled>Select Your Marital Status</option>
                    <option value="married">Married</option>
                    <option value="single">Single</option>
                    <option value="divorced">Divorced</option>
                </select>
            </div>
            <div class="religion">
                <p>Religion : </p>
                <br>
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
        <div class="employee-edit">
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