<?php  
session_start();
include '../connection.php';
    if (sha1($_SESSION['rollno'])!="7fa0ad2bc14c757bb2e94c5db055d350bfca8663") {
      echo '<script>alert("Authorised Users only");window.location.href="../index.php";</script>';
    }


$roll= $_SESSION['rollno'];

if (isset($_POST['search'])) {
  $name=$_POST['search'];
  $query_1 = "select * from register where name = '$name'"; 
  $result_1 = $connection-> query($query_1);
  $line_1 = mysqli_fetch_array($result_1);
  $roll=$line_1['rollno'];
  header('Location:index.php?roll='.$roll.'');
}
  if (isset($_GET['roll'])) {
  }
  $value1=@$_GET['roll'];
  $query = "select * from register where rollno = '$value1'"; 
  $result =  $connection->query($query); 
  $line = mysqli_fetch_array($result);
  $views=$line['name'];
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>YB|Admin</title>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="../animate.css">
  <style type="text/css">
  body,html{
    max-width: 100%;
    overflow-x: hidden;
  }
    @font-face {
  font-family: 'Century gothic';
  src: url('font.ttf');
}

    body{
      background-color:#333;
      color: #111;
      font-family: Century gothic;
    }
    .row{
      padding: 20px;
    }
    .card,.back{
      background-color: grey;
    }
  </style>
  <script>
   $(document).ready(function(){
   if ($(window).width()>770) {
    (function($){ $('#nav').show();
     
    })(jQuery, undefined); }
    else{$('#nav').remove(); $('#mob_nav').show();
    }
    $(".button-collapse").sideNav();
  });

  $(function() {
    $( "#name" ).autocomplete({
      source: 'search.php'
    });
  });

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
</head>
<body>
<?php include "nav.php" ?>
  <div class="container white">

            <div class="col s12 m6">
          <div class="card darken-1 animated zoomInDown">
            <div class="card-content " style="text-align: center;">
              <span class="card-title ">Admin Panel Yearbook'17</span>

  <div class="ui-widget " >
    <form action="" method="post" style="padding: 20px;">
      <label for="name" style="font-size: 15px;color: #fff">Enter Name: </label>
      <input id="name" name="search" style="cursor: pointer;">
      <input type="submit" name="submit" class="waves-effect waves-light btn" style="background-color: #4CB2D4">
    </form>
  </div>
  <form method="POST" action="query.php"> 
      <label for="query" style="font-size: 15px;color: #fff">Query: </label>
      <input id="query" name="query" style="cursor: pointer;">
      <div class="row">
      <div class="col l4">
      <label for="field1" style="font-size: 15px;color: #fff">field1: </label>
      <input id="field1" name="field1" style="cursor: pointer;">
      </div>
      <div class="col l4">
      <label for="field2" style="font-size: 15px;color: #fff">field2: </label>
      <input id="field2" name="field2" style="cursor: pointer;">
      </div>
      <div class="col l4">
      <label for="field3" style="font-size: 15px;color: #fff">field3: </label>
      <input id="field3" name="field3" style="cursor: pointer;">
      </div></div>
      <input type="submit" class="waves-effect waves-light btn">
  </form>
</div>
</div>

          </div>
          <table class="tbl-qa" style="color: #333;">
      <thead>
        <tr>

        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        </tr>
      </thead>
      <tbody>
      <?php
              if (isset($value1)&&!empty($value1)) {
              $query1 = " SELECT * from  register where rollno='$value1' ";
              $query_run = $connection->query($query1);
              if ($query_run) {
                echo '<script>alert("Query RUN success");";</script>';
              }else{
                echo '<script>alert("Query RUN Failure");";</script>';
              }
              while ($list = mysqli_fetch_assoc($query_run)) {
      ?>
        <tr class="table-row" style="border-bottom: 1px solid silver">
        <td style="text-align: center;"><?php echo $list["id"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'rollno','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["rollno"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'name','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["name"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'dob','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["dob"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'department','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["department"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'HOR','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["HOR"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'course','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["course"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'email','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["email"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'phone','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["phone"]; ?></td>
        <td contenteditable="true" onBlur="saveToDatabase(this,'view_self','<?php echo $list["id"]; ?>')" onClick="showEdit(this);"><?php echo $list["view_self"]; ?></td>
        <td ><?php echo substr($list["pro_pic"], 41); ?></td>

        </tr>
        <tr></tr>
    <?php
    }}
    ?>
      </tbody>
    </table>
        </div>
</body>
</html>