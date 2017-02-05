<?php  

session_start();
include 'connection.php';
$roll= $_SESSION['rollno'];

$recommend=substr($roll,0,4);
if (isset($_POST['search'])) {
  $name=$_POST['search'];
  $query_1 = "select * from register where name = '$name'"; 
  $result_1 = $connection-> query($query_1);
  $line_1 = mysqli_fetch_array($result_1);
  $roll=$line_1['rollno'];
  header('Location:../department1.php?roll='.$roll.'');


}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>backend</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#name" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
</head>
<body>
 
<div class="ui-widget">
  <form action="" method="post">
  <label for="name">Name: </label>
  <input id="name" name="search">
  <input type="submit" name="submit">
</form>
</div><hr>
<table><?php 
$query = $connection->query("SELECT * FROM register WHERE rollno LIKE '".$recommend."%' ORDER BY RAND() ASC LIMIT 10");
if(($query)){
  if(mysqli_num_rows($query)==NULL)
    echo "No Recomendations";
  else{
  while ($query_row = mysqli_fetch_assoc($query)) {
    if ($query_row['rollno']!=$_SESSION['rollno']) {
    $friend = $query_row['name'];
    echo ' You might know <a href="../department1.php?roll='.$query_row['rollno'].'">'.$friend.' </a> <br>';
    }
  }}}
?>
<tr></tr>
</table>
</body>
</html>