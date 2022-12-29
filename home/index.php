<?php

include_once '../phpDependencies/config.php';
include_once '../phpDependencies/Person.php';

if(isset($_SESSION['id'])) {
  $id = $_SESSION['id'];
  $person = new Person($id);
  if($person->getUserType() == 'employee') {
    header('Location: index_employees.php');
  } else {
    header('Location: index_employers.php');
  }
} else {
  header('Location: index_employees.php');
}

?>
