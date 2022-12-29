<?php

include_once 'Database.php';
include_once 'ResultSet.php';

class JobUtility {
  public function getID() : int {
    try {
      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT count(*) as total FROM job_info"));
      $rs->hasNext();
      return $rs->get('total');
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getLiveJobs() : int {
    try {
      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT count(*) as total FROM job_info"));
      $rs->hasNext();
      return $rs->get('total');
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getCompanyCount() : int {
    try {
      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT count(distinct company) as total FROM job_info"));
      $rs->hasNext();
      return $rs->get('total');
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function getLatestJobInfo(int $n) {
    try {
      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT * FROM job_info ORDER BY id DESC"));
      for($i = 0; $i < $n;$i++) {
        if($rs->hasNext()) continue;
        else throw new Exception("No more jobs");
      }
      return $rs->getRow();
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }
}

?>
