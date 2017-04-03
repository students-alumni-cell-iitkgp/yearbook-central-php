<?php
include "../connection.php";
@session_start();
    if (sha1($_SESSION['rollno'])!="7fa0ad2bc14c757bb2e94c5db055d350bfca8663") {
      echo '<script>alert("Authorised Users only");window.location.href="../index.php";</script>';
    }
$result = $connection-> query("UPDATE register set " . $_POST["column"] . " = '".$_POST["editval"]."' WHERE  id=".$_POST["id"]);
?>