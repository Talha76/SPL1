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
      $sql = "SELECT name FROM employee_info WHERE id = '$this->id'";
      $rs = new ResultSet($db->query($sql));
      return $rs->get('name');
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function setName(string $name) : void {
    try {
      $db = new Database('user_db');
      $sql = "UPDATE employee_info SET name = $name WHERE id = '$this->id'";
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
}

?>
