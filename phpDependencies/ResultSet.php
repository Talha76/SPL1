<?php

class ResultSet {
  private mysqli_result $result;
  private $row;

  public function __construct(mysqli_result $result) {
    try {
      $this->result = $result;
    } catch (Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function numRows() : int {
    try {
      return $this->result->num_rows;
    } catch (Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

  public function hasNext() {
    try {
      return $this->row = $this->result->fetch_assoc();
    } catch (Exception $e) {
      die("Error: " .$e->getMessage());
    }
  }

  public function setRow($row) {
    try {
      $this->row = $row;
    } catch(Exception $e) {
      die("Error: " .$e->getMessage());
    }
  }

  public function getRow() { return $this->row; }

  public function get($key) {
    try {
      return $this->row[$key];
    } catch (Exception $e) {
      die("Error: " . $e->getMessage());
    }
  }

}

?>
