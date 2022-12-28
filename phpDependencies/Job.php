<?php

include 'Database.php';
include 'ResultSet.php';

class Job {
  private int $id;

  public function __construct() {
    try {
      $db = new Database('job_db');
      $rs = new ResultSet($db->query("SELECT count(*) as total FROM job_info"));
      $this->id = intval($rs->get('total')) + 1;
    } catch(Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }
}

?>