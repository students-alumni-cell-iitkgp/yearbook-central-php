

<?php   
include 'connection.php';
  session_start();
  if (isset($_SESSION['rollno'])) {
    
  }else{
  echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
  }
  $value1=$_SESSION['rollno'];
  $query = "select * from writeup where rollno = '$value1'"; 
  $result =  $connection->query($query); 
  $line = mysqli_fetch_array($result);
  $views=$line['writeup'];
?>

<html>
<head>
  <title>YB|Writeup</title>
    <link rel="icon" href="ind/fav.png" type="image/png" >
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
  <link rel="stylesheet" type="text/css" href="animate.css">
  <script type="text/javascript">
function showfield(name){
  if(name=='other')document.getElementById('div1').innerHTML='Write your Topic here: <input type="text" name="writeup" />';
  else document.getElementById('div1').innerHTML='';
}

  $(document).ready(function() {
    $('select').material_select();
  });

    function showEdit(editableObj) {
      $(editableObj).css("background","#FFF");
    } 
    
    function saveToDatabase(editableObj,column,id) {
      $(editableObj).css("background","#FFF url(loaderIcon.gif) no-repeat right");
      $.ajax({
        url: "saveedit.php",
        type: "POST",
        data:'column='+column+'&editval='+editableObj.innerHTML+'&id='+id,
        success: function(data){
          $(editableObj).css("background","#FDFDFD");
        }        
       });
    }
    </script>
    <style type="text/css">
html,body{
    max-width: 100%;
    overflow-x: hidden;
  }
  body
{
  background-color: #333;
  color: white;
  background-size: cover;
  font-size: 15px;
  font-family: Century gothic;
}

      table{
        table-layout: fixed !important;
      }
</style>
</head>
<body>
  <div class="container animated zoomInDown" style="display: table;">

   <div class="row" style="display: table-row;">
    <div class="col s3 l3 m3" style="padding: 0px; margin-left: 0px;">
    <button type="button"class="waves-effect waves-light btn" onclick="location.href='register.php'">HOME </button>
    </div>
    <div class="col s6 l6 m6 center">
       <h4 style="text-align:center;font-family:pacifico;color:#707070 ">Upload Articles</h4>

    </div>
    <div class="col s3 l3 m3" style="display: table-row;text-align: right;">
    <button type="button"class="waves-effect waves-light btn" onclick="location.href='index.php'">LOGOUT </button>
    </div>
    </div>
  <div class="row"><hr>
  <div class="col l12 s12 m12 center">How have all these years in KGP transformed you? What’s your funniest experience in the campus? Share with us your stories to make it a part of the yearbook that you carry along. Choose the topic below and send us your articles.</div><br><br><hr>

   <form action="writeupconnect.php" method="POST">
<div class="col l4 s6 m6 ">
  <select name="topic" id="topic" required onchange="showfield(this.options[this.selectedIndex].value)">
      <option selected disabled>Choose your topic</option>
      <option  value="Spring Fest">Spring Fest</option>
      <option value="Kshitij">Kshitij</option>
      <option value="Annual Alumni Meet">Annual Alumni Meet</option>
      <option value="Life at Kgp">Life at Kgp</option>
      <option value="Illumination">Illumination</option>
      <option value="Hall">Hall</option>
      <option value="Other">Other</option>
    </select></div></div>
  <div id="div1"></div>
  <div class="row">
      <div class="row">
        <div class="input-field col s12 l12 m12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="writeup" id="icon_prefix2" required class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Your Article here</label>
        </div>
      </div>
    <button type"submit" class="waves-effect waves-light btn" id="submit" required>SUBMIT</button>
  </div>
  </form>
<div class="row center white" style="margin-top: 20px;color: #333;">
<h4 style="color: #707070;padding-top: 20px">Your WriteUp</h4><hr><hr>
<table class="tbl-qa" style="color: #333;">
      <thead>
        <tr>
        <th class="table-header l2" width="10%" >SL-No.</th>
        <th class="table-header l3" width="150px">Topic</th>
        <th class="table-header l6" style="float: left;">Writeup<i class="material-icons" style="font-size: 20px;padding-left: 10px;width: 100%; ">mode_edit</i></th>
        <th class="table-header center l1"  width="50px"></th>
        </tr>
      </thead>
      <tbody>
      <?php

              $query_select_view = " SELECT * from  writeup where rollno='$value1' ";
              $query_select_view_run = $connection->query($query_select_view);
              $k=1;
              while ($list = mysqli_fetch_assoc($query_select_view_run)) {
      ?>
        <tr class="table-row" style="border-bottom: 1px solid silver">
        <td style="text-align: center;"><?php echo $k; ?></td>
        <td ><?php echo $list["topic"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'writeup','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["writeup"]; ?></td>
        <td style="width: 50px"><a href='writeupdelete.php?id=<?php echo $list["id"]; ?>'><i class="material-icons">delete</i></a></td>
        </tr>
    <?php
    $k++;
    }
    ?>
      </tbody>
    </table>

<hr>
</div>
  </div>
  </div>
</body>
</html>