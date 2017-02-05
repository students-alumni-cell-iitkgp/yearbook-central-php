<?php

session_start();
include 'connection.php';
//get search term
$searchTerm = $_GET['term'];
//get matched data from skills table
$query = $connection->query("SELECT * FROM register WHERE name LIKE '%".$searchTerm."%' ORDER BY name ASC LIMIT 10");
while ($row = $query->fetch_assoc()) {
    $data[] = $row['name'];
}
//return json data
echo json_encode($data);
?>