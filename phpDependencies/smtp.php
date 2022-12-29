<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include_once './config.php';

class Mailer {
  private PHPMailer $mailer;

  public function __construct() {
    try {
      $this->mailer = new PHPMailer(TRUE);
      // $this->mailer->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
      $this->mailer->isSMTP();                                            //Send using SMTP
      $this->mailer->SMTPAuth   = true;                                   //Enable SMTP authentication
      $this->mailer->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
      $this->mailer->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
      $this->mailer->isHTML(TRUE);
      $this->connect();
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function connect() {
    try {
      $this->mailer->Host = 'smtp-relay.sendinblue.com';

      $smtpCredentialsDB = new Database('smtp_credentials');
      $resultSet = $smtpCredentialsDB->query("SELECT * FROM smtp_credentials");
      if($resultSet->num_rows == 0) {
        throw new Exception("SMTP Credentials doesn't exist");
      }
      $row = $resultSet->fetch_array();
      $this->mailer->Username = $row['email'];
      $this->mailer->Password = $row['password'];
      $this->mailer->setFrom($row['email']);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setSender(string $mail, string $name = '') {
    try {
      $this->mailer->setFrom($mail, $name);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setRecipient(string $mail, string $name = '') {
    try {
      $this->mailer->addAddress($mail, $name);
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function setCC(string $mail, string $name = '') {
    try {
      $this->mailer->addCC($mail, $name);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setBCC(string $mail, string $name = '') {
    try{
      $this->mailer->addBCC($mail, $name);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setHTML(bool $option = TRUE) {
    try {
      $this->mailer->isHTML($option);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setSubject(string $subject) {
    try {
      $this->mailer->Subject = $subject;
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setBody(string $body) {
    try {
      $this->mailer->Body = $body;
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function setAltBody(string $altBody) {
    try {
      $this->mailer->AltBody = $altBody;
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function send() {
    try {
      $this->mailer->send();
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function addAttachment(string $path) {
    try {
      $this->mailer->addAttachment($path);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }
}

?>
