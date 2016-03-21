<?php
require 'connection.php';
session_start();
if (isset($_SESSION['rollno'])) {
    
  }else{
  echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
  }
?>
<html>
<head>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" type="text/css" href="animate.css">
  <script type="text/javascript">
function showfield(name){
  if(name=='other')document.getElementById('div1').innerHTML='Write your Topic here: <input type="text" name="writeup" />';
  else document.getElementById('div1').innerHTML='';
}
</script>
	<script>
	$(document).ready(function() {
    $('select').material_select();
  });
</script>
<style>
  body
{
  background-image: url('bck.jpg');
  background-size: cover;
}
.container
{
    width: 800px !important;
}
.btn
 {
  text-transform: lowercase;
  font-family: pacifico;
 }

@font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
</style>
</head>
	<div class="container animated zoomInDown">

	 <form action="writeupconnect.php" method="POST">
   <div class="row">
    <div class="col s6 l3 m6">
    <button type="button"class="waves-effect waves-light btn" onclick="location.href='register.php'">HOME </button>
    </div>
    <div class="col s6 l6 m6">
       <h4 style="text-align:center;font-family:pacifico;color:#707070 ">Upload Articles</h4>

    </div>
    <div class="col s6 l1 m6">
    <button type="button"class="waves-effect waves-light btn" style="margin-left: 100px"onclick="location.href='login.php'">LOGOUT </button>
    </div>
    </div>
	<div class="row">
<div class="col l4 ">
	<select name="topic" id="topic" required onchange="showfield(this.options[this.selectedIndex].value)">
      <option selected disabled>Choose your topic</option>
      <option  value="spring fest">Spring Fest</option>
      <option value="kshitij">Kshitij</option>
      <option value="aam">Annual Alumni Meet</option>
      <option value="life at kgp">Life at Kgp</option>
      <option value="illumination">Illumination</option>
      <option value="hall">Hall</option>
      <option value="other">Other</option>
    </select></div></div>
	<div id="div1"></div>
	<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12 l12 m12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea name="writeup"id="icon_prefix2" required class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Your Article here</label>
        </div>
      </div>
    <button type"submit" class="waves-effect waves-light btn" id="submit" required>SUBMIT</button>
  </div>
  </form></div>
</html>
