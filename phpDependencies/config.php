<?php

include 'Database.php';

session_start();
srand(time());

function getUserType(string $id) : string {
  $db = new Database('user_db');

  try {
    $sql = "SELECT user_type FROM userID WHERE id = '$id'";
    $result = $db->query($sql);
    if ($result->num_rows == 0) {
      die("Error: " . $id . " not found in Database ");
    }
    return $result->fetch_array()['user_type'];
  } catch(Exception $e) {
    die("Error: ". $e->getMessage());
  }
}

?>
