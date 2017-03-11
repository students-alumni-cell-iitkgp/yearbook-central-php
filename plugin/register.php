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
<<<<<<< HEAD
    <title>Yearbook</title>
<script>
   $(document).ready(function(){
   if ($(window).width()>770) {
    (function($){ $('#nav').show();
     
    })(jQuery, undefined); }
    else{$('#nav').remove(); $('#mob_nav').show();
    }
    $(".button-collapse").sideNav();
  });

</script>

    <style type="text/css">
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

<div id="nav" class="row" style="background-color: black; display: none;">

    <div align="left" class="col l2 s2 m2"><a style="margin-top:1.3em" class="waves-effect waves-light btn-large" href="register.php"><i class="material-icons right"></i>Home</a></div>
    <div  class="col l5 m4 s3 right-align"><a href="http://www.sac.iitkgp.ac.in"><img height="90" width="200" src="year.png" alt="someimg"/></a></div>
    <div align="right" class="col l3 m4 s4"><a href="https://erp.iitkgp.ernet.in" style="margin-top:1.3em" class="waves-effect waves-light btn-large">Edit erp picture<i class="material-icons right"></i></a></div>
    <div align="right" class="col l2 m2 s2"><a href="index.php" style="margin-top:1.3em" class="waves-effect waves-light btn-large"><i class="material-icons right"></i>Logout</a></div>


</div>

      <nav id="mob_nav" style="display: none; background-color: black; color: black;" >
      <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="#!" class="brand-logo"><img width="180" height="50" src="http://localhost/yearbook1/plugin/year.png" alt="someimg"/></a>
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
        <li><a href="index.php" style="color: black;">Update Erp Profile Picture</a></li>
        <li><a href="index.php" style="color: black;">Logout</a></li>
      </ul>
      </div>
    </nav>


<div class="container">
<br/>

 <div id="modal1" class="modal">
    <div class="modal-content center">
      <form action="motosave.php" method="post" enctype="multipart/form-data">
      <input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">
        <img src="ind/shot.jpg" alt="" class="circle responsive-img" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">
        <div class="input-field col s12 l12 m12">
          <textarea name="motto" id="icon_prefix2" required class="materialize-textarea" placeholder="Enter Your Caption Here (Max 50 characters)" style="text-align: center;color: black;" maxlength="50"></textarea>
        </div>
        <input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="padding-top: 0;width: 150px;"  id="imgsave" >
        </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
<div align="center" class="row">
<div class="">
<img src="<?php if ($line['pro_pic']) { echo $line['pro_pic']; } else { echo 'ind/shot.jpg'; } ?>" class="circle responsive-img" width="200px" height="200">
</div>
 <h4> <?php echo $line['name'] ?> </h4>
 <h5>"
          <?php 
          if ($line['view_self']) {
          echo $line['view_self'];
           }else{
            echo "Upload your Caption for the Yearbook";
           }
          ?> "
  <h5>
</div>

<br/>
<div align="center" class="row">
  <div class="col l4 m4 s6">
  <a class='dropdown-button btn' data-activates='dropdown1' style="width: 100%;height: 100%;font-size: 2px;">User</a>
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
=======
        <style>.navigation{
    margin: 0px auto;
    font-family: "Trebuchet MS", sans-serif;
    font-size: 24px;
    font-style: normal;
    font-weight: bold;
    letter-spacing: 1.4px;
}
.navigation .item{
    position:absolute;
}
.user{
    top:125px;
    left:110px;
}
.home{
   top:50px;
   left:360px;
}
.shop{
   top:90px;
   left:625px;
}
.camera{
   top:230px;
   left:835px;
}
.fav{
   top:420px;
   left:950px;
}
a.icon{
    width:52px;
    height:52px;
    position:absolute;
    top:0px;
    left:0px;
    cursor:pointer;
}
.navigation .item a.active{
    background-position:0px -52px;
}
.item img.circle{
    position:absolute;
    top:0px;
    left:0px;
    width:52px;
    height:52px;
    opacity:0.9;
}
.item h3{
    position:absolute;
    width:200px;
    height:52px;
    color:silver;
    font-size:15px;
    top:0px;
    left:52px;
    text-indent:10px;
    line-height:52px;
    text-shadow:1px 1px 1px #fff;
    text-transform:uppercase;
}
.item h3.active{
    color:#111;
    text-shadow:1px 0px 1px #555;
}
.item ul{
    list-style:none;
    position:absolute;
    top:60px;
    left:25px;
    display:none;
}
.item ul li a{
    font-size:15px;
    text-decoration:none;
    letter-spacing:1.5px;
    text-transform:uppercase;
    color:#222;
    padding:3px;
    float:left;
    clear:both;
    width:150px;
    text-shadow:1px 1px 1px #fff;
}
.item ul li a:hover{
    background-color:#fff;
    color:#444;
    width: 150px;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
    -moz-box-shadow:1px 1px 4px #666;
    -webkit-box-shadow:1px 1px 4px #666;
    box-shadow:1px 1px 4px #666;
}

            *{
                margin:0;
                padding:0;
            }
            body{
                background:#333 url(img/bg.png) no-repeat top left;
                 font-family: Century gothic;
            }
            .title{
                width:600px;
                height:119px;
                position:absolute;
                top:20px;
                right: 20px;
                font-size: 45px;
                color: grey;
            }
            a.back{
                background:transparent url(back.png) no-repeat top left;
                position:fixed;
                width:150px;
                height:27px;
                outline:none;
                bottom:0px;
                left:0px;
            }
            #content{
                margin:0 auto;
            }
            h3{
                color: black;
            }
            ::-webkit-input-placeholder {
              font-size: 20px;
              color: black;
			}

        </style>
    </head>

    <body>
      <div id="modal1" class="modal">
    <div class="modal-content center">
    	<form action="motosave.php" method="post" enctype="multipart/form-data">
    	<input type="file" name="fileToUpload" id="fileToUpload" style="display: none;" onchange="readURL(this);">
        <img src="ind/your-shot.jpg" alt="" class="circle responsive-img" id="OpenImgUpload" style="cursor: pointer;width: 180px;height: 180px;">
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
        <div id="content">
            <div class="title">Welcome to Yearbook'17</div>

            <div class="navigation" id="nav">
                <div class="item user">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>User</h3>
                    <ul>
                        <li><a href="profile/index.php?roll=<?php echo $value1; ?>">My Profile</a></li>
                        <li><a href="details.php?flag=1">Edit Details</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </div>
                <div class="item home">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>Batch Sento</h3>
                    <ul>
                        <li><a href="search/">Find friend</a></li>
                    </ul>
                </div>
                <div class="item shop">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>Write Article</h3>
                    <ul>
                        <li><a href="writeup.php">About Event</a></li>
                    </ul>
                </div>
                <div class="item camera">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>Upload Photo</h3>
                    <ul>
                        <li><a href="upload.php">Upload Pics</a></li>
                    </ul>
                </div>
                <div class="item fav">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="http://www.webteam.iitkgp.ernet.in/scg/">My Imprint</a></li>
                        <li><a href="http://www.sac.iitkgp.ac.in/team.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>

		<div class="col s6 m6 l4 offset-l1 box upload">
		<p style="position: absolute;bottom: 20px;right: 20px; color: grey;font-size: 15px;text-align: right;">Contact us at:<br> yearbook.iitkgp@gmail.com</p>
		
		</div><div id="load"></div>
        <!-- The JavaScript -->
        <script type="text/javascript" src="jquery.easing.1.3.js"></script>
        <script type="text/javascript">  
            $(function() {
                $('#nav > div').hover(
                function () {
                    var $this = $(this);
                    $this.find('img').stop().animate({
                        'width'     :'250px',
                        'height'    :'250px',
                        'top'       :'-25px',
                        'left'      :'-25px',
                        'opacity'   :'1.0'
                    },500,'easeOutBack',function(){
                        $(this).parent().find('ul').fadeIn(700);
                    });

                    $this.find('a:first,h3').addClass('active');
                },
                function () {
                    var $this = $(this);
                    $this.find('ul').fadeOut(500);
                    $this.find('img').stop().animate({
                        'width'     :'52px',
                        'height'    :'52px',
                        'top'       :'0px',
                        'left'      :'0px',
                        'opacity'   :'0.9'
                    },5000,'easeOutBack');

                    $this.find('a:first,h3').removeClass('active');
                }
            );
            });
>>>>>>> 17e8e2fe0aa058087aa9934db68ed3929b533936
var back = "<?php echo $views; ?>" ;
var back2 = "<?php echo $path; ?>" ;
//script for modal only
$(document).ready(function() {
  $('.modal-trigger').leanModal();
  
  if ( (!back)||!(back2) ) {
<<<<<<< HEAD
    $("#modal1").openModal();
=======
  	$("#modal1").openModal();
>>>>>>> 17e8e2fe0aa058087aa9934db68ed3929b533936
  } else {
  }
});

 
   $('#photo').click(function(){
      $('#photo').submit();
   });
     $('#writeup').click(function(){
      $('#writeup').submit();
   });
     $('#views').click(function(){
      $('#views').submit();
   });

<<<<<<< HEAD
  $('#OpenImgUpload').click(function(){ $('#fileToUpload').trigger('click'); });
  function readURL(input) {
=======
 	$('#OpenImgUpload').click(function(){ $('#fileToUpload').trigger('click'); });
 	function readURL(input) {
>>>>>>> 17e8e2fe0aa058087aa9934db68ed3929b533936
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
<<<<<<< HEAD
</div>
</body>
</html>

=======
    </body>
</html>
>>>>>>> 17e8e2fe0aa058087aa9934db68ed3929b533936
<?php
  if($line['email']==NULL||$line['phone']==NULL){
    echo '<script>$(".upload").hide();$(".edit_button").hide();</script>';

<<<<<<< HEAD
  }else{
    echo '<script>$(".edit").hide();</script>';
  }

if (isset($_GET['motto'])&&!empty($_GET['motto'])){
   $motto=$_GET['motto'];
=======
	}else{
		echo '<script>$(".edit").hide();</script>';
	}

if (isset($_GET['motto'])&&!empty($_GET['motto'])){
	 $motto=$_GET['motto'];
>>>>>>> 17e8e2fe0aa058087aa9934db68ed3929b533936
}
?>