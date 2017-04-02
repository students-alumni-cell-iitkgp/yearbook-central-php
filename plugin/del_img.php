<?php
session_start();
include 'connection.php';
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
    }
$id=$_GET['id'];
$roll=$_SESSION['rollno'];
	$check=substr($id,0,9);
if ($check!=$roll) {
	header('Location:index.php');
	die();

}else{
$result = $connection-> query("DELETE FROM photos WHERE name='$id'");
	header('Location:upload.php');
}
?>