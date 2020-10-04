<?php

session_start();

$connection = mysqli_connect(
  'localhost', 'root', '', 'tasks-database'
);

// for testing connection
#if($connection) {
#  echo 'database is connected';
#}

?>
