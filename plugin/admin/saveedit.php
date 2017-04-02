<?php
include "../connection.php";
@session_start();
    if (sha1($_SESSION['rollno'])!="d033e22ae348aeb5660fc2140aec35850c4da997") {
      echo '<script>alert("Authorised Users only");window.location.href="../index.php";</script>';
    }
$result = $connection-> query("UPDATE register set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);
?>