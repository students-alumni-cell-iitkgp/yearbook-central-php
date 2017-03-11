<?php   
include 'connection.php';

  session_start();
  if (isset($_SESSION['rollno'])) {
    
  }else{
  echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
  }
  $value1=$_SESSION['rollno'];
  $query = "select * from register where rollno = '$value1'"; 
  $result =  $connection->query($query); 
  $line = mysqli_fetch_array($result);
  $views=$line['view_self'];
  $path=$line['pro_pic'];

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>YB|Home</title>
    <link rel="icon" href="ind/fav.png" type="image/png" >
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">

    <title>Yearbook</title>
<script>
   $(document).ready(function(){
   if ($(window).width()>770) {
    (function($){ $('#nav').show(); $('#user').show();
     
    })(jQuery, undefined); }
    else{$('#nav').remove(); $('#mob_nav').show();
    }
    $(".button-collapse").sideNav();
  });

</script>

    <style type="text/css">
    @media only screen and (min-width: 770px) {
    .container {
      border-right: 1px #bdbdbd solid; 
      border-left:1px #bdbdbd solid;
      padding-right: 23px; 
      padding-left: 23px;
        
    }
}
    	li{
    		text-align: center !important;
    	}
    	.btn{
    		font-size: 15px !important;    
    		margin-top: 10px;	
    		padding: 5px;	
    	}
      #modal1{
        overflow: hidden;
      }
          </style>
	</head>
	<body>

  <div id="modal1" class="modal">
    <div class="modal-content center">
      <form action="motosave.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">
        <img src="ind/shot.jpg" alt="" class="circle responsive-img" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">
        <div class="input-field col s12 l12 m12">
          <textarea name="motto" id="icon_prefix2" required class="materialize-textarea" placeholder="Enter Your Caption Here" style="text-align: center;color: black;"></textarea>
        </div>
        <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="width: 150px;" id="imgsave">
        </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>

<div id="nav" class="row" style="background-color: black; display: none;">

    <div align="left" class="col l1 s2 m2"><a style="margin-top:1.3em" class="waves-effect waves-light btn-large" href="register.php"><i class="material-icons right"></i>Home</a></div>
    <div  class="col l3 m4 s3 right-align"><a href="http://www.sac.iitkgp.ac.in"><img style="padding-top: 7px;" height="90" width="250" src="sac.png" alt="someimg"/></a></div>
    <div  class="col l3 m4 s3 right-align"><a href="#"><img height="90" width="200" src="yearbook.png" alt="someimg"/></a></div>
    <div align="right" class="col l3 m4 s4"><a href="https://erp.iitkgp.ernet.in" style="margin-top:1.3em" class="waves-effect waves-light btn-large">Edit erp Profile pic<i class="material-icons right"></i></a></div>
    <div class="col l2 m2 s2"><a href="index.php" style="margin-top:1.3em" class="waves-effect waves-light btn-large"><i class="material-icons right"></i>Logout</a></div>


</div>

      <nav id="mob_nav" style="display: none; background-color: black; color: black;" >
      <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="#!" class="brand-logo"><img width="140" height="50" src="year.png" alt="someimg"/></a>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="register.php" style="color: black;">Home</a></li>
        <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li>
              <a class="collapsible-header" style="color: black;">User<i class="mdi-navigation-arrow-drop-down right"></i></a>
              <div class="collapsible-body">
                <ul>
                  <li><a style="color: black;" href="profile/index.php?roll=<?php echo $value1; ?>">My Profile</a></li>
        <li><a href="details.php?flag=1" style="color: black;">Edit Details</a></li>
                </ul>
    </div></li></ul></li>
        <li><a href="index.php" style="color: black;">Update Erp Profile Pic</a></li>
        <li><a href="index.php" style="color: black;">Logout</a></li>
      </ul>
      </div>
    </nav>


<div class="container">
<br/>
<div align="center" class="row">
<div class=""><a class="modal-trigger" href="#modal1">
<img src="<?php if ($line['pro_pic']&&$line['pro_pic']!='NULL') { echo $line['pro_pic']; } else { echo 'ind/your.jpg'; } ?>" class="circle" width="200px" height="200px"> </a>
</div>
 <h4> <?php echo $line['name'] ?> </h4>
 <h5>"
          <?php 
          if ($line['view_self']&&$line['view_self']!='NULL') {
          echo $line['view_self'];
           }else{
            echo "Upload your Caption for the Yearbook";
           }
          ?> "
  </h5>
</div>

<br/>
<div align="center" class="row">
  <div class="col l4 m4 s6">
  <a class='dropdown-button btn' id="user" data-activates='dropdown1' style="display: none; width: 100%;height: 100%;font-size: 2px;">User</a>
  <ul id='dropdown1' class='dropdown-content' style="margin-top:55px;">
        <li><a href="profile/index.php?roll=<?php echo $value1; ?>">My Profile</a></li>
        <li><a href="details.php?flag=1">Edit Details</a></li>
  </ul>
   </div>
       <div class="col l4 m4 s6">
           	<a class='btn' href='search/' style="width: 100%;height: 100%;">Batch Sento</a>
           </div>
       <div class="col l4 m4 s6">
           	<a class='btn' href='writeup.php' style="width: 100%;height: 100%;">Write Article</a>
           </div>
       <div class="col l4 m4 s6">
           	<a class='btn' href='upload.php' style="width: 100%;height: 100%;">Upload Photo</a>
           </div>

       <div class="col l4 m4 s6 offset-l4">
  		<a class='btn' style="width: 100%;height: 100%;font-size: 2px;" href="http://www.sac.iitkgp.ac.in/team.php">Contact Us</a>
</div>
<div class="row">
<div  class="col s12 l6 card-panel grey lighten-5 z-depth-1" align="center" style="height: 400px;"><h5>Yearbook</h5><p> The yearbook is an opus of memories that you would carry along graduating from the institute. The wonderful years spent in the campus are engraved and expressed via photographs and writeups in this departing souvenir from IIT KGP. 
With an assortment of your thoughts and snaps from various experiences through the years, the book truly collaborates your time in KGP and is a walk down your memory lane every time you look through it.</p> </div>
    <div class="col l6 s12 card-panel grey lighten-5 z-depth-1" align="center" style="height: 400px;"><h5>Previous Yearbook</h5> <br>
    <div class="row">
        <div class="col l6 s6"><img src="img/year16.jpg" width="100%" alt=""/></div>
        <div class="col l6 s6"> <img src="img/year2015.jpg" width="100%"  alt=""/></div>
    </div>
    </div>

</div>
<script type="text/javascript">
  // Script for modal
var back = "<?php echo $views; ?>" ;
var back2 = "<?php echo $path; ?>" ;
$(document).ready(function() {
  $('.modal-trigger').leanModal();
  
  if ( (!back)||!(back2) ) {
    $("#modal1").openModal();
  } else {
  }

});

</script>


<script type="text/javascript">
	  $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 350,
      constrainWidth: false, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: false, // Displays dropdown below the button
      alignment: 'left', // Displays dropdown with edge aligned to the left of button
      stopPropagation: false // Stops event propagation
    }
  );

 
   $('#photo').click(function(){
      $('#photo').submit();
   });
     $('#writeup').click(function(){
      $('#writeup').submit();
   });
     $('#views').click(function(){
      $('#views').submit();
   });

  $('#OpenImgUpload').click(function(){ $('#fileToUpload').trigger('click'); });
  function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#OpenImgUpload')
                    .attr('src', e.target.result)
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

 $(document).ready(function() {
    $('select').material_select();
  });

  function update(){
    $('.edit_button').click(function(){
      $('.edit').show();$(".upload").hide();$(".edit_button").hide();
    });
  }
</script>

</div> </div>
</body>
</html>


<?php
  if($line['email']==NULL||$line['phone']==NULL){
    echo '<script>$(".upload").hide();$(".edit_button").hide();</script>';


  }else{
    echo '<script>$(".edit").hide();</script>';
  }

if (isset($_GET['motto'])&&!empty($_GET['motto'])){
   $motto=$_GET['motto'];
}
?>
