<?php

session_start();
srand(time());

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

class ResultSet {
  private mysqli_result $result;

  public function __construct(mysqli_result $result = null) { $this->result = $result; }

  public function set(mysqli_result $result) { $this->result = $result; }
}

function getUserType(string $id):string {
  $db = new Database('user_db');

  return "hi";
}

class Person {
  private string $name;
  private string $email;
}

?>
