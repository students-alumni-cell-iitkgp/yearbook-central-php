<?php  
session_start();
include '../connection.php';
  if (isset($_SESSION['rollno'])) {
    
  }else{
      echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
  }


$roll= $_SESSION['rollno'];

$recommend=substr($roll,0,4);
if (isset($_POST['search'])) {
  $name=$_POST['search'];
  $query_1 = "select * from register where name = '$name'"; 
  $result_1 = $connection-> query($query_1);
  $line_1 = mysqli_fetch_array($result_1);
  $roll=$line_1['rollno'];
  header('Location:../profile/index.php?roll='.$roll.'');


}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>YB|Find Friend</title>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script type="text/javascript" src="../../js/materialize.min.js"></script>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="../animate.css">
  <script type="text/javascript" src="../js/intro.min.js"></script>
  <link type="text/css" rel="stylesheet" href="../css/introjs.min.css"  media="screen,projection"/>
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
      color: #fff;
      font-family: Century gothic;
    }
    .row{
      padding: 20px;
    }
    .card,.back{
      background-color: grey;
    }
      .introjs-tooltiptext{
        color: black;
      }
      .introjs-helperLayer {
        background-color: grey !important;
        opacity: 0.3;
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
  </script>
</head>
<body>
<div class="container-fluid"><?php  include "nav.php" ?><div>

<button id="btnn1" class="waves-effect waves-light btn" style="float: right;width: 150px;padding: 0 ;margin-right: 20px;" onclick="javascript:introJs().start();">Tutorial<i class="material-icons" >help</i></button>
<button id="btnn2" class="btn-floating " style="float: right;padding: 0 ;margin-right: 20px;display: none;" onclick="javascript:introJs().start();" title="Tutorial"><i class="material-icons" >help</i></button>
  <div class="container">

            <div class="col s12 m6">
          <div class="card darken-1 animated zoomInDown" data-step="1" data-intro="Search your friends and write something interesting about them ;p">
            <div class="card-content " style="text-align: center;">
              <span class="card-title ">Yearbook'17</span>
              <h5 style="cursor: default;">"Make the Yearbook yours"</h5>

              The most valued possession you take away from KGP: your friends. Search for your friend below to visit his/her profile and write a testimonial for them. This would be an amazing look back at your friendship several years from now.

<div class="ui-widget " >
  <form action="" method="post" style="padding: 20px;">
  <label for="name" style="font-size: 15px;color: #fff">Enter Name: </label>
  <input id="name" name="search" style="cursor: pointer;">
  <input type="submit" name="submit" class="waves-effect waves-light btn" style="background-color: #4CB2D4">
</form>
</div></div></div>
<div class="card grey darken-1 center animated zoomInUp" style="overflow-x: hidden;" data-step="2" data-intro="See friends suggestion here">

<div class="row back" style="">
<h5>People you may know<div id="reload" style="color: #fff;cursor: pointer;" ><i class="material-icons" data-step="3" data-intro="Refresh the suggestion list">cached</i></div></h5>
  <div id="load" class="center row" style="padding-left: 0;">
  <?php 
      include "recommend.php";
   ?>
  </div>
              </div>
            </div>
          </div>
        </div>
  <script type="text/javascript">
    $("#reload").click(function(){
    $("#load").load("recommend.php");
});
  </script>
</body>
</html>