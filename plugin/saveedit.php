<?php
include "connection.php";
@session_start();
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
    }
$result = $connection-> query("UPDATE writeup set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);
?>