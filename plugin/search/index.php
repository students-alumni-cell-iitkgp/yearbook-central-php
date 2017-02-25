<?php  

session_start();
include '../connection.php';
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
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="../animate.css">
  <style type="text/css">
    body{
      background-color: #333;
      color: #333;
    }
    .row{
      padding: 20px;
    }
  </style>
  <script>
  $(function() {
    $( "#name" ).autocomplete({
      source: 'search.php'
    });
  });
  </script>
</head>
<body>
  <div class="container">
            <div class="col s12 m6">
          <div class="card grey darken-1 animated zoomInDown">
            <div class="card-content " style="text-align: center;">
              <span class="card-title ">Yearbook'17</span>
              <h5>"Make the Yearbook yours"</h5>
<div class="ui-widget " >
  <form action="" method="post" style="padding: 30px;">
  <label for="name" style="font-size: 15px;color: #333">Enter Name: </label>
  <input id="name" name="search" >
  <input type="submit" name="submit" class="waves-effect waves-light btn">
</form>
</div></div></div>
<div class="card grey darken-1 center animated zoomInUp">
<div class="row " style="max-height: 300px;overflow: auto;">

<h5>People you may know</h5>
<?php 
$query = $connection->query("SELECT * FROM register WHERE rollno LIKE '".$recommend."%' ORDER BY RAND() ASC LIMIT 8");
if(($query)){
  if(mysqli_num_rows($query)==NULL)
    echo "No Recomendations";
  else{
  while ($query_row = mysqli_fetch_assoc($query)) {
    if ($query_row['rollno']!=$_SESSION['rollno']) {
    $friend = $query_row['name'];
    echo '  <div class="col l3"  style="padding-bottom:20px;"><a href="../department1.php?roll='.$query_row['rollno'].'" style="color:#333;"><img src="../ind/your-shot.jpg">'.$friend.' </a></div> ';
    }
  }}}
?></div>
            </div>
          </div>
        </div>
</body>
</html>