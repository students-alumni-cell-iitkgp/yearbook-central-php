<?php
$DB_NAME = 'yearbook';
$DB_HOST = 'localhost';
if (getenv("YEARBOOK_DB_USERNAME")&&getenv("YEARBOOK_DB_PASSWORD")) {
		$DB_USER =getenv("YEARBOOK_DB_USERNAME");
		$DB_PASSWORD = getenv("YEARBOOK_DB_PASSWORD");
} else {
		$DB_USER ="root";
		$DB_PASSWORD ="";
}
$connection = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
if ($connection->connect_error) {
  // die("Connecton failed: ".$connection->connect_error);
  die("It seems that we cannot talk to our DB right now. Please try again in a couple of minutes");
}
?>