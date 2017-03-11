<?php 

@session_start();
include '../connection.php';
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
    }
$roll= $_SESSION['rollno'];

$recommend=substr($roll,0,4);
$query = $connection->query("SELECT * FROM register WHERE rollno LIKE '".$recommend."%' ORDER BY RAND() ASC LIMIT 6");
if(($query)){
  if(mysqli_num_rows($query)==NULL)
    echo "No Recomendations";
  else{
  while ($query_row = mysqli_fetch_assoc($query)) {
    if (strtoupper($query_row['rollno'])!=strtoupper($_SESSION['rollno'])) {
    $friend = $query_row['name'];
    if ($query_row['pro_pic']) {
    echo '  <div class="col l2 m4 s6"  style=""><a href="../profile/index.php?roll='.$query_row['rollno'].'" style="color:#fff;"><img src="../'.$query_row["pro_pic"].'" height="150px;"><br>'.$friend.' </a></div> ';
    } else {
    echo '  <div class="col l2 m4 s6"  style=""><a href="../profile/index.php?roll='.$query_row['rollno'].'" style="color:#fff;"><img src="../ind/your-shot.jpg" height="150px;"><br>'.$friend.' </a></div> ';

    }
    
    }
  }}}
?>