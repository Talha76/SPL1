<?php

include '../phpDependencies/config.php';
include '../phpDependencies/smtp.php';
include '../phpDependencies/Database.php';

if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $email = $_SESSION['email'];
  $password = $_SESSION['password'];
  $userType = $_SESSION['user_type'];

  $smtpCredentials = new Database('smtp_credentials');
  $smtpCredentials->update("DELETE FROM otp_info WHERE id = '$id'");

  $otp = rand(10000000, 1000000000);
  $smtpCredentials->update("INSERT INTO otp_info VALUES('$id', '$email', '$password', '$userType', $otp, NOW())");

  $mail = new Mailer();
  $mail->setRecipient($email, $id);
  $mail->setSubject('Verify your Kaajkormo account.');
  $mail->setBody("<p>Hi " . $id . "!</p><br><p>Your otp is $otp. Your otp will expire within 5 minutes.</p>");
  $mail->setAltBody("Hi " . $id . "! Your otp is $otp. Your otp will expire within 5 minutes.");
  $mail->send();

  header('location: ./registration_mail_verification.php');
} else {
  die("Error: ID not set");
}

?>