<?php

include '../phpDependencies/config.php';

if (isset($_POST['submit'])) {
  $firstName = filter_input(INPUT_POST, 'first_name');
  $lastName  = filter_input(INPUT_POST, 'last_name');
  $gender     = filter_input(INPUT_POST, 'gender');
  $skill      = filter_input(INPUT_POST, 'skill');
  $primaryMobile   = filter_input(INPUT_POST, 'primary_mobile');
  $secondaryMobile = filter_input(INPUT_POST, 'secondary_mobile');
  $dateOfBirth    = filter_input(INPUT_POST, 'date_of_birth');
  $fathersName      = filter_input(INPUT_POST, 'father_name');
  $mothersName      = filter_input(INPUT_POST, 'mother_name');
  $religion   = filter_input(INPUT_POST, 'religion');
  $maritalStatus   = filter_input(INPUT_POST, 'marital_status');
  $nationality      = filter_input(INPUT_POST, 'nationality');
  $nid        = filter_input(INPUT_POST, 'nid');
  $email      = filter_input(INPUT_POST, 'email');
  $bloodGroup      = filter_input(INPUT_POST, 'blood_group');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Complete Registration</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>

  <div class="container form-container">
    <form action="" method="POST">
      <h3>Complete Your Account</h3>

      <input type="text" id="first_name" name="first_name" placeholder="Your First Name" required>
      <input type="text" name="last_name" id="last_name" placeholder="Your Last Name">

      <select name="gender" id="gender" required>
        <option value="-1" disabled selected>Select Your Gender</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="others">Others</option>
      </select>

      <select name="skill" id="skill" required>
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

      <input type="text" name="primary_mobile" id="primary_mobile" placeholder="Enter Your Mobile Number" required>
      <input type="text" name="secondary_mobile" id="secondary_mobile" placeholder="Secondary Mobile Number">
      <input type="date" name="date_of_birth" id="date_of_birth" required>
      <input type="text" name="father_name" id="father_name" placeholder="Father's Name">
      <input type="text" name="mother_name" id="mother_name" placeholder="Mother's Name">

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

      <select name="marital_status" id="marital_status" required>
        <option value="-1" selected disabled>Select Your Marital Status</option>
        <option value="married">Married</option>
        <option value="single">Single</option>
        <option value="divorced">Divorced</option>
      </select>

      <input type="text" name="nationality" id="nationality" placeholder="Nationality" required>
      <input type="text" name="nid" id="nid" placeholder="National ID">
      <input type="email" name="secondary_mail" id="secondary_mail" placeholder="Secondary Mail">

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

      <h2>Address</h2>
      <h4>Present Address</h4>
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
      
      <h4>Permanent Address</h4>
      <select id="permanent_district" name="permanent_district" required>
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

      <input type="text" name="permanent_address" id="permanent_address" placeholder="Enter your full permanent address">

      <button type="submit" name="submit" class="form-btn">Complete Your Registration</button>

    </form>
  </div>

</body>

</html>