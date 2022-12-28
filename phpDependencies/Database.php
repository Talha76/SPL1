<?php

class Database {
  private mysqli $connection;

  public function __construct(string $dbName = null) {
    try {
      $this->connection = new mysqli('localhost', 'root', '', $dbName);
      $this->connection->autocommit(TRUE);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function __destruct() {
    try {
      $this->connection->close();
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function connect(string $dbName) {
    try {
      $this->connection = new mysqli('localhost', 'root', '', $dbName);
      $this->connection->autocommit(TRUE);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function query(string $query) : mysqli_result {
    try {
      return $this->connection->query($query);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }

  public function update(string $query) {
    try {
      $this->connection->query($query);
    } catch(Exception $e) {
      die("Error: ". $e->getMessage());
    }
  }
}

?>
