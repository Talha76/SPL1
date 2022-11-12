<?php

session_start();
srand(time());

class Database {
  private mysqli $connection;

  public function __construct(string $dbName) {
    try {
      $this->connection = new mysqli('localhost', 'root', '', $dbName);
      $this->connection->autocommit(TRUE);
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

  public function query(string $query) {
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
