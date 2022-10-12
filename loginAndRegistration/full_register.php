<?php

require 'config.php';

if(isset($_POST['submit'])) {
  
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

      <button type="submit" name="submit" class="form-btn">Complete Your Registration</button>

    </form>
  </div>

</body>

</html>