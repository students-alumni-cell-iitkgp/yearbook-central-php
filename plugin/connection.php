<?php
$DB_NAME = 'yearbook';
$DB_HOST = 'localhost';
$DB_USER = 'root';
$DB_PASS = '';
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
}
?>