<?php

include_once 'Database.php';
include_once 'ResultSet.php';

class Person {
  private string $id;
  
  public function __construct(string $id) {
    try {
      $this->id = $id;
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getId() : string { return $this->id; }

  public function getName() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT name FROM user_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('name');
      } else throw new Exception("User not found with id.");
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function setName(string $name) : void {
    try {
      $db = new Database('user_db');
      $sql = "UPDATE user_info SET name = $name WHERE id = '$this->id'";
      $db->update($sql);
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getUserType() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT user_type FROM userID WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('user_type');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function setUserType(string $userType) : void {
    try {
      $db = new Database('user_db');
      $db->update("UPDATE userID SET user_type = '$userType'");
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getPassword() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT password FROM userID WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('password');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function setPassword(string $password) : void {
    try {
      $db = new Database('user_db');
      $db->update("UPDATE userID SET password = '$password'");
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getEmail() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT email FROM userID WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('email');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getAvailability() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT availability FROM user_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('availability');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getReligion() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT religion FROM user_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('religion');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getDateOfBirth() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT date_of_birth FROM user_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('date_of_birth');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getSkill() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT skill FROM user_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('skill');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getBloodGroup() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT blood_group FROM user_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('blood_group');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getPresentAddress() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT present_address FROM address WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('present_address');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getPermanentAddress() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT permanent_address FROM address WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('permanent_address');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getFathersName() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT fathers_name FROM family_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('fathers_name');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getMothersName() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT mothers_name FROM family_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('mothers_name');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getMaritalStatus() : string {
    try {
      $db = new Database('user_db');
      $sql = "SELECT marital_status FROM family_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      if($rs->hasNext()) {
        return $rs->get('marital_status');
      } else {
        throw new Exception("User not found with this id.");
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }
}

?>
