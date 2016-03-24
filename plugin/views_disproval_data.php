<?php
	require 'connection.php';
	session_start();
	if(isset($_POST['id'])){
		$id= $_POST['id'];
		$query = "update views set approval = 'disprove' where id = '$id'";
		if($query_run = mysql_query($query)){
			echo 1;
		}else{
			echo 0;
		}
	}	 
?>
