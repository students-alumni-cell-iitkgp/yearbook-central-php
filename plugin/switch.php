<?php
	require 'connection.php';
	session_start();
	$roll=$_SESSION['rollno'];
	$qu=$connection->query("SELECT * FROM register WHERE rollno = '$roll'");
	$query_row1 = mysqli_fetch_assoc($qu);
	$id=$_GET['id'];

		$query1 = $connection->query("SELECT * FROM views WHERE deptmate = '$id'");
		$query_row = mysqli_fetch_assoc($query1);
		echo $query_row['timeline'];
		if ($query_row['timeline']=='yes') {
		$query = "update views set timeline = 'NO' where deptmate = '$id'";
		$query_run = $connection-> query($query);
		} else {
		$query = "update views set timeline = 'yes' where deptmate = '$id'";
		$query_run = $connection-> query($query);
		}
		header('Location:views_approval.php');

?>
