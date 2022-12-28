<?php

class ImageUploadFailureException extends Exception {
    public function __construct() {
        $this->message = "Failed to upload image";
    }
}

include '../phpDependencies/config.php';

if (isset($_POST['submit'])) {
    try {
        $id = $_SESSION['id'];
        $fileName = $_FILES['image']['name'];
        $fileTmpName = $_FILES['image']['tmp_name'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $uploadPath = "./uploads/$id.$fileExt";
        if (move_uploaded_file($fileTmpName, $uploadPath))
            $message = "Uploaded successfully";
        else
            throw new ImageUploadFailureException();
    } catch(Exception $e) {
        die("Eror: " . $e->getMessage());
    }
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
                        echo '
                        <a href="../loginAndRegistration/login.php">Sign in</a>
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

    <!-- employee info starts -->
    <form action="" method="post" enctype="multipart/form-data">
        <div class="employee-info">
            <div class="display-info">

                <div class="image">
                    <img src="images\tanzim.jpg" alt="Shahrier Al Tanzim">
                </div>

                <div class="basic-info">
                    <h3>Employee</h3>
                    <br>
                    <p>Name : </p>
                    <input type="text" name="name" id="name" placeholder="Enter Your Name">
                    <p>Date of birth : </p>
                    <input type="date" name="date_of_birth" id="date_of_birth">
                    <p>Skill : </p>
                    <select name="skill" id="skill">
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
                    <p>Availability : </p>
                    <select name="availability" id="availability">
                        <option value="-1" disabled selected>Availability</option>
                        <option value="available">Available</option>
                        <option value="unavailable">Unavailable</option>
                    </select>
                    <p>Present District : </p>
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
                    <p>Permanent District : </p>
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
                    <p>Upload Picture : </p>
                    <input type="file" name="image" id="image" accept="image/*">
                </div>
            </div>
        </div>
        <div class="detailed-info">
            <div class="detailed-info-title">
                <h2> Detailed Information </h2>
            </div>
            <div class="present-adress">
                <p>Present Adress : </p>
                <br>
                <input class="present-adress" type="text" name="present_adress" id="present_address" placeholder="present-adress">
            </div>
            <div class="permanent-adress">
                <p>Permanent Adress : </p>
                <br>
                <input class="permanent-adress" type="text" name="permanent_adress" id="permanent_address" placeholder="permanent-adress">
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
            <div class="save">
                <input type="submit" name="submit" id="submit" value="Save" class="save">
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
</body>

</html>