<?php

include '../phpDependencies/config.php';

if (isset($_POST['submit'])) {
  $id = $_SESSION['id'];
  $firstName = filter_input(INPUT_POST, 'first_name');
  $lastName = filter_input(INPUT_POST, 'last_name');
  $gender = filter_input(INPUT_POST, 'gender');
  $skill = filter_input(INPUT_POST, 'skill');
  $dateOfBirth = filter_input(INPUT_POST, 'date_of_birth');
  $fathersName = filter_input(INPUT_POST, 'father_name');
  $mothersName = filter_input(INPUT_POST, 'mother_name');
  $religion = filter_input(INPUT_POST, 'religion');
  $maritalStatus = filter_input(INPUT_POST, 'marital_status');
  $nationality = filter_input(INPUT_POST, 'nationality');
  $nid = filter_input(INPUT_POST, 'nid');
  $bloodGroup = filter_input(INPUT_POST, 'blood_group');

  $primaryMobile = filter_input(INPUT_POST, 'primary_mobile');
  $secondaryMobile = filter_input(INPUT_POST, 'secondary_mobile');
  $secondaryMail = filter_input(INPUT_POST, 'secondary_email');

  $secondaryMail = filter_input(INPUT_POST, 'secondary_email');

  $presentDistrict = filter_input(INPUT_POST, 'present_district');
  $presentAddress = filter_input(INPUT_POST, 'present_address');
  $permanentDistrict = filter_input(INPUT_POST, 'permanent_district');
  $permanentAddress = filter_input(INPUT_POST, 'permanent_address');


  $objective = filter_input(INPUT_POST, 'objective');
  $presentSalary = filter_input(INPUT_POST, 'present_salary');
  $expectedSalary = filter_input(INPUT_POST, 'expected_salary');
  $preferredPosition = filter_input(INPUT_POST, 'preferred_position');
  $jobTimePreference = filter_input(INPUT_POST, 'job_time_preference');


  $preferredLocation = filter_input(INPUT_POST, 'preferred_location');


  $careerSummary = filter_input(INPUT_POST, 'career_summary');
  $specialQualification = filter_input(INPUT_POST, 'special_qualification');
  $keyword = filter_input(INPUT_POST, 'keyword');


  $db = new Database('user_db');
  $sql = "INSERT INTO user_info(id, first_name, gender, date_of_birth, religion, nationality)
          VALUES('$id', '$firstName', '$gender', '$dateOfBirth', '$religion', '$nationality')";
  $db->update($sql);

  $sql = "INSERT INTO employee_preference(id, skill)
          VALUES('$id', '$skill')";
  $db->update($sql);


  $sql = "INSERT INTO address(id, present_district)
          VALUES('$id', '$presentDistrict')";
  $db->update($sql);

  $sql = "INSERT INTO contact_info(id, primary_mobile)
          VALUES('$id', '$primaryMobile')";
  $db->update($sql);

  $sql = "INSERT INTO user_family_info(id, marital_status)
          VALUES('$id', '$maritalStatus')";
  $db->update($sql);

  if (strlen($lastName)) {}
  if (strlen($lastName)) {
    $db->update("UPDATE user_info SET last_name = '$lastName' where id = '$id'");
  }
  if (strlen($nid)) {
  }
  if (strlen($nid)) {
    $db->update("UPDATE user_info SET nid = '$nid' where id = '$id'");
  }
  if (strlen($bloodGroup)) {
  }
  if (strlen($bloodGroup)) {
    $db->update("UPDATE user_info SET blood_group = '$bloodGroup' where id = '$id'");
  }
  if (strlen($secondaryMobile)) {
  }
  if (strlen($secondaryMobile)) {
    $db->update("UPDATE contact_info SET secondary_mobile = '$secondaryMobile' where id = '$id'");
  }
  if (strlen($secondaryMail)) {
  }
  if (strlen($secondaryMail)) {
    $db->update("UPDATE contact_info SET secondary_mail = '$secondaryMail' where id = '$id'");
  }
  if (strlen($presentAddress)) {
  }
  if (strlen($presentAddress)) {
    $db->update("UPDATE address SET present_address = '$presentAddress' where id = '$id'");
  }
  if (strlen($permanentDistrict)) {
  }
  if (strlen($permanentDistrict)) {
    $db->update("UPDATE address SET permanent_district = '$permanentDistrict' where id = '$id'");
  }
  if (strlen($permanentAddress)) {
  }
  if (strlen($permanentAddress)) {
    $db->update("UPDATE address SET permanent_address = '$permanentAddress' where id = '$id'");
  }
  if (strlen($objective)) {
  }
  if (strlen($objective)) {
    $db->update("UPDATE employee_preference SET objective = '$objective' where id = '$id'");
  }
  if (strlen($presentSalary)) {
  }
  if (strlen($presentSalary)) {
    $db->update("UPDATE employee_preference SET present_salary = $presentSalary where id = '$id'");
  }
  if (strlen($expectedSalary)) {
  }
  if (strlen($expectedSalary)) {
    $db->update("UPDATE employee_preference SET expected_salary = $expectedSalary where id = '$id'");
  }
  if (strlen($preferredPosition)) {
  }
  if (strlen($preferredPosition)) {
    $db->update("UPDATE employee_preference SET preferred_position = '$preferredPosition' where id = '$id'");
  }
  if (strlen($jobTimePreference)) {
  }
  if (strlen($jobTimePreference)) {
    $db->update("UPDATE employee_preference SET job_time_preference = '$jobTimePreference' where id = '$id'");
  }
  if (strlen($preferredLocation)) {
  }
  if (strlen($preferredLocation)) {
    $db->update("UPDATE employee_preference SET preferred_location = '$preferredLocation' where id = '$id'");
  }
  if (strlen($careerSummary)) {
  }
  if (strlen($careerSummary)) {
    $db->update("UPDATE employee_preference SET career_summary = '$careerSummary' where id = '$id'");
  }
  if (strlen($specialQualification)) {
  }
  if (strlen($specialQualification)) {
    $db->update("UPDATE employee_preference SET special_qualification = '$specialQualification' where id = '$id'");
  }
  if (strlen($keyword)) {
  }
  if (strlen($keyword)) {
    $db->update("UPDATE employee_preference SET keyword = '$keyword' where id = '$id'");
  }
  header("Location: education.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Registration</title>
  <link rel="stylesheet" href="../home/css/style.css">
  <link rel="stylesheet" href="css/personal_details_style.css">
  <link rel="stylesheet" href="../home/css/style.css">
  <link rel="stylesheet" href="css/personal_details_style.css">
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

  <div class="personal-details">
    <h1>Personal Details</h1>
  </div>
  <div class="personal-details">
    <h1>Personal Details</h1>
  </div>
  <div class="container form-container">
    <form action="" method="POST">

      <div class="basic-information">
        <h2>Basic Information</h2>
        <input type="text" class="first_name" id="first_name" name="first_name" placeholder="Your First Name" required>
        <input type="text" class="last_name" name="last_name" id="last_name" placeholder="Your Last Name">

        <select class="gender" name="gender" id="gender" required>
          <option value="-1" disabled selected>Select Your Gender</option>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="others">Others</option>
        </select>

        <select class="skill" name="skill" id="skill" required>
          <option value="-1" selected disabled>Select Your Skill</option>
          <option value="1">Accounting/Finance</option>
          <option value="2">Bank/Non-Bank Fin. Institution</option>
          <option value="3">Commercial/Supply Chain</option>
          <option value="4">Education/Training</option>
          <option value="5">Engineer/Architect</option>
          <option value="6">Garments/ Textile</option>
          <option value="7">General Management/Admin</option>
          <option value="8">IT/Telecommunication</option>
          <option value="9">Marketing/Sales</option>
          <option value="10">Media/Advertisement/Event Mgt.</option>
          <option value="11">Medical/Pharma</option>
          <option value="12">NGO/Development</option>
          <option value="13">Research/Consultancy</option>
          <option value="14">Secretary/Receptionist</option>
          <option value="15">Data Entry/Operator/BPO</option>
          <option value="16">Customer Support/Call Centre</option>
          <option value="17">HR/Org. Development</option>
          <option value="18">Design/Creative</option>
          <option value="19">Production/Operation</option>
          <option value="20">Hospitality/ Travel/ Tourism</option>
          <option value="21">Beauty Care/ Health & Fitness</option>
          <option value="22">Law/ Legal</option>
          <option value="23">Electrician/ Construction/ Repair</option>
          <option value="24">Security/Support Service</option>
          <option value="25">Driving/Motor Technician</option>
          <option value="26">Agro (Plant/Animal/Fisheries)</option>
        </select>

        <input type="date" class="date_of_birth" name="date_of_birth" id="date_of_birth" required>
        <input type="text" class="father_name" name="father_name" id="father_name" placeholder="Father's Name">
        <input type="text" class="mother_name" name="mother_name" id="mother_name" placeholder="Mother's Name">

        <select class="religion" name="religion" id="religion" required>
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

        <select class="marital_status" name="marital_status" id="marital_status" required>
          <option value="-1" selected disabled>Select Your Marital Status</option>
          <option value="married">Married</option>
          <option value="single">Single</option>
          <option value="divorced">Divorced</option>
        </select>

        <input type="text" class="nationality" name="nationality" id="nationality" placeholder="Nationality" required>
        <input type="text" name="nid" id="nid" placeholder="National ID">

        <select class="blood_group" name="blood_group" id="blood_group">
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
      </div>
      <div class="contact-information">
        <h2>Contact Information</h2>
        <input type="text" name="primary_mobile" id="primary_mobile" placeholder="Enter Your Mobile Number" required>
        <input type="text" name="secondary_mobile" id="secondary_mobile" placeholder="Secondary Mobile Number">
        <input type="email" name="secondary_mail" id="secondary_mail" placeholder="Secondary Mail">
      </div>
      <div class="adress">
        <h2>Present Address</h2>
        <select id="present_district" name="present_district" required>
          <option value="-1" selected disabled>Select District</option>
          <option value="1">Brahmanbaria</option>
          <option value="2">Bagerhat</option>
          <option value="3">Bandarban</option>
          <option value="4">Barishal</option>
          <option value="5">Bhola</option>
          <option value="6">Bogura</option>
          <option value="7">Barguna</option>
          <option value="8">Chandpur</option>
          <option value="9">Chapainawabganj</option>
          <option value="10">Chattogram</option>
          <option value="11">Chuadanga</option>
          <option value="12">Cumilla</option>
          <option value="13">Cox's Bazar</option>
          <option value="14">Dhaka</option>
          <option value="15">Dinajpur</option>
          <option value="16">Faridpur</option>
          <option value="17">Feni</option>
          <option value="18">Gaibandha</option>
          <option value="19">Gazipur</option>
          <option value="20">Gopalganj</option>
          <option value="21">Habiganj</option>
          <option value="22">Jamalpur</option>
          <option value="23">Jashore</option>
          <option value="24">Jhalakathi</option>
          <option value="25">Jhenaidah</option>
          <option value="26">Joypurhat</option>
          <option value="27">Khagrachhari</option>
          <option value="28">Khulna</option>
          <option value="29">Kishoreganj</option>
          <option value="30">Kurigram</option>
          <option value="31">Kushtia</option>
          <option value="32">Lalmonirhat</option>
          <option value="33">Laksmipur</option>
          <option value="34">Madaripur</option>
          <option value="35">Magura</option>
          <option value="36">Manikganj</option>
          <option value="37">Meherpur</option>
          <option value="38">Moulvibazar</option>
          <option value="39">Munshiganj</option>
          <option value="40">Mymensingh</option>
          <option value="41">Naogaon</option>
          <option value="42">Narail</option>
          <option value="43">Narayanganj</option>
          <option value="44">Narsingdi</option>
          <option value="45">Natore</option>
          <option value="46">Netrokona</option>
          <option value="47">Nilphamari</option>
          <option value="48">Noakhali</option>
          <option value="49">Pabna</option>
          <option value="50">Panchagarh</option>
          <option value="51">Patuakhali</option>
          <option value="52">Pirojpur</option>
          <option value="53">Rajbari</option>
          <option value="54">Rajshahi</option>
          <option value="55">Rangamati</option>
          <option value="56">Rangpur</option>
          <option value="57">Satkhira</option>
          <option value="58">Shariatpur</option>
          <option value="59">Sherpur</option>
          <option value="60">Sirajganj</option>
          <option value="61">Sunamganj</option>
          <option value="62">Sylhet</option>
          <option value="63">Tangail</option>
          <option value="64">Thakurgaon</option>
        </select>

        <input type="text" name="present_address" id="present_address" placeholder="Enter your full present address">

        <h2>Permanent Address</h2>
        <select id="permanent_district" name="permanent_district">
          <option value="-1" selected disabled>Select District</option>
          <option value="1">Brahmanbaria</option>
          <option value="2">Bagerhat</option>
          <option value="3">Bandarban</option>
          <option value="4">Barishal</option>
          <option value="5">Bhola</option>
          <option value="6">Bogura</option>
          <option value="7">Barguna</option>
          <option value="8">Chandpur</option>
          <option value="9">Chapainawabganj</option>
          <option value="10">Chattogram</option>
          <option value="11">Chuadanga</option>
          <option value="12">Cumilla</option>
          <option value="13">Cox's Bazar</option>
          <option value="14">Dhaka</option>
          <option value="15">Dinajpur</option>
          <option value="16">Faridpur</option>
          <option value="17">Feni</option>
          <option value="18">Gaibandha</option>
          <option value="19">Gazipur</option>
          <option value="20">Gopalganj</option>
          <option value="21">Habiganj</option>
          <option value="22">Jamalpur</option>
          <option value="23">Jashore</option>
          <option value="24">Jhalakathi</option>
          <option value="25">Jhenaidah</option>
          <option value="26">Joypurhat</option>
          <option value="27">Khagrachhari</option>
          <option value="28">Khulna</option>
          <option value="29">Kishoreganj</option>
          <option value="30">Kurigram</option>
          <option value="31">Kushtia</option>
          <option value="32">Lalmonirhat</option>
          <option value="33">Laksmipur</option>
          <option value="34">Madaripur</option>
          <option value="35">Magura</option>
          <option value="36">Manikganj</option>
          <option value="37">Meherpur</option>
          <option value="38">Moulvibazar</option>
          <option value="39">Munshiganj</option>
          <option value="40">Mymensingh</option>
          <option value="41">Naogaon</option>
          <option value="42">Narail</option>
          <option value="43">Narayanganj</option>
          <option value="44">Narsingdi</option>
          <option value="45">Natore</option>
          <option value="46">Netrokona</option>
          <option value="47">Nilphamari</option>
          <option value="48">Noakhali</option>
          <option value="49">Pabna</option>
          <option value="50">Panchagarh</option>
          <option value="51">Patuakhali</option>
          <option value="52">Pirojpur</option>
          <option value="53">Rajbari</option>
          <option value="54">Rajshahi</option>
          <option value="55">Rangamati</option>
          <option value="56">Rangpur</option>
          <option value="57">Satkhira</option>
          <option value="58">Shariatpur</option>
          <option value="59">Sherpur</option>
          <option value="60">Sirajganj</option>
          <option value="61">Sunamganj</option>
          <option value="62">Sylhet</option>
          <option value="63">Tangail</option>
          <option value="64">Thakurgaon</option>
        </select>
        <input type="text" name="present_address" id="present_address" placeholder="Enter your full present address">

        <h2>Permanent Address</h2>
        <select id="permanent_district" name="permanent_district">
          <option value="-1" selected disabled>Select District</option>
          <option value="1">Brahmanbaria</option>
          <option value="2">Bagerhat</option>
          <option value="3">Bandarban</option>
          <option value="4">Barishal</option>
          <option value="5">Bhola</option>
          <option value="6">Bogura</option>
          <option value="7">Barguna</option>
          <option value="8">Chandpur</option>
          <option value="9">Chapainawabganj</option>
          <option value="10">Chattogram</option>
          <option value="11">Chuadanga</option>
          <option value="12">Cumilla</option>
          <option value="13">Cox's Bazar</option>
          <option value="14">Dhaka</option>
          <option value="15">Dinajpur</option>
          <option value="16">Faridpur</option>
          <option value="17">Feni</option>
          <option value="18">Gaibandha</option>
          <option value="19">Gazipur</option>
          <option value="20">Gopalganj</option>
          <option value="21">Habiganj</option>
          <option value="22">Jamalpur</option>
          <option value="23">Jashore</option>
          <option value="24">Jhalakathi</option>
          <option value="25">Jhenaidah</option>
          <option value="26">Joypurhat</option>
          <option value="27">Khagrachhari</option>
          <option value="28">Khulna</option>
          <option value="29">Kishoreganj</option>
          <option value="30">Kurigram</option>
          <option value="31">Kushtia</option>
          <option value="32">Lalmonirhat</option>
          <option value="33">Laksmipur</option>
          <option value="34">Madaripur</option>
          <option value="35">Magura</option>
          <option value="36">Manikganj</option>
          <option value="37">Meherpur</option>
          <option value="38">Moulvibazar</option>
          <option value="39">Munshiganj</option>
          <option value="40">Mymensingh</option>
          <option value="41">Naogaon</option>
          <option value="42">Narail</option>
          <option value="43">Narayanganj</option>
          <option value="44">Narsingdi</option>
          <option value="45">Natore</option>
          <option value="46">Netrokona</option>
          <option value="47">Nilphamari</option>
          <option value="48">Noakhali</option>
          <option value="49">Pabna</option>
          <option value="50">Panchagarh</option>
          <option value="51">Patuakhali</option>
          <option value="52">Pirojpur</option>
          <option value="53">Rajbari</option>
          <option value="54">Rajshahi</option>
          <option value="55">Rangamati</option>
          <option value="56">Rangpur</option>
          <option value="57">Satkhira</option>
          <option value="58">Shariatpur</option>
          <option value="59">Sherpur</option>
          <option value="60">Sirajganj</option>
          <option value="61">Sunamganj</option>
          <option value="62">Sylhet</option>
          <option value="63">Tangail</option>
          <option value="64">Thakurgaon</option>
        </select>

        <input type="text" name="permanent_address" id="permanent_address"
          placeholder="Enter your full permanent address">
      </div>
      <input type="text" name="permanent_address" id="permanent_address"
        placeholder="Enter your full permanent address">
  </div>

  <div class="career-and-application-information">
    <h2>Career and application information</h2>
    <div class="career-and-application-information">
      <h2>Career and application information</h2>

      <input type="text" name="objective" id="objective" placeholder="Your objective">
      <input type="number" name="present_salary" id="present_salary" placeholder="Present Salary">
      <input type="number" name="expected_salary" id="expected_salary" placeholder="Expected Salary">
      <select name="preferred_position" id="preferred_position">
        <option value="-1" disabled selected>Select Your preferred Position</option>
        <option value="entry">Entry Level</option>
        <option value="mid">Mid Level</option>
        <option value="top">Top Level</option>
      </select>
      <input type="text" name="objective" id="objective" placeholder="Your objective">
      <input type="number" name="present_salary" id="present_salary" placeholder="Present Salary">
      <input type="number" name="expected_salary" id="expected_salary" placeholder="Expected Salary">
      <select name="preferred_position" id="preferred_position">
        <option value="-1" disabled selected>Select Your preferred Position</option>
        <option value="entry">Entry Level</option>
        <option value="mid">Mid Level</option>
        <option value="top">Top Level</option>
      </select>

      <select name="job_time_preference" id="job_time_preference">
        <option value="-1" disabled selected>Select Your Preference</option>
        <option value="parttime">Part time</option>
        <option value="fulltime">Full time</option>
        <option value="contract">Contract</option>
        <option value="intern">Internship</option>
        <option value="freelance">Freelance</option>
      </select>
    </div>
    <select name="job_time_preference" id="job_time_preference">
      <option value="-1" disabled selected>Select Your Preference</option>
      <option value="parttime">Part time</option>
      <option value="fulltime">Full time</option>
      <option value="contract">Contract</option>
      <option value="intern">Internship</option>
      <option value="freelance">Freelance</option>
    </select>
  </div>

  <div class="location">
    <h2>Preferred Location</h2>
    <input type="text" name="preferred_location" id="preferred_location" placeholder="Enter Your Preferred Location">
  </div>
  <div class="other-information">
    <h2>Other Information</h2>
    <input type="text" name="career_summary" id="career_summary" placeholder="Enter Your Career Summary">
    <input type="text" name="special_qualification" id="special_qualification"
      placeholder="Enter Your Special Qualifications">
    <input type="text" name="keyword" id="keyword" placeholder="Enter your preferred keywords">
  </div>
  <br>
  <button class="form-button" type="submit" name="submit">Save</button>
  <div class="location">
    <h2>Preferred Location</h2>
    <input type="text" name="preferred_location" id="preferred_location" placeholder="Enter Your Preferred Location">
  </div>
  <div class="other-information">
    <h2>Other Information</h2>
    <input type="text" name="career_summary" id="career_summary" placeholder="Enter Your Career Summary">
    <input type="text" name="special_qualification" id="special_qualification"
      placeholder="Enter Your Special Qualifications">
    <input type="text" name="keyword" id="keyword" placeholder="Enter your preferred keywords">
  </div>
  <br>
  <button class="form-button" type="submit" name="submit">Save</button>
  </form>
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
 