<?php

include_once 'Database.php';
include_once 'ResultSet.php';

class Job {
  private int $id;

  public function __construct(int $id) {
    $this->id = $id;
  }

  public function getID() { return $this->id; }

  private function get(string $attribute) {
    try {
      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT " . $attribute . " FROM job_info WHERE id = $this->id"));
      if($rs->hasNext()) {
        return $rs->get($attribute);
      } else {
        throw new Exception('Job not found');
      }
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getName() : string {
    return $this->get('name');
  }

  public function getEmployerID() : string {
    return $this->get('employer_id');
  }

  public function getType() : string {
    return $this->get('type');
  }

  public function getRank() : string {
    return $this->get('rank');
  }

  public function getSalary() : int {
    return $this->get('salary');
  }

  public function getCompany() : string {
    return $this->get('company');
  }

  public function getLocation() : string {
    return $this->get('location');
  }
  
  public function getEducationRequirements() : string {
    return $this->get('education_requirements');
  }

  public function getExperienceRequirements() : string {
    return $this->get('experience_requirements');
  }

  public function getEmail() : string {
    return $this->get('email');
  }

  public function getPhone() : string {
    return $this->get('phone');
  }
}

?>
