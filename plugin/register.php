
<html>
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

 ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
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
                font-family:Arial;
                background:#333 url(img/bg.png) no-repeat top left;
            }
            .title{
                width:548px;
                height:119px;
                position:absolute;
                top:20px;
                right: 20px;
                font-family: "Trebuchet MS", sans-serif;
                font-size: 50px;
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


        </style>
    </head>

    <body>
  <div id="modal1" class="modal modal-fixed-footer show ">
    <div class="modal-content"> 
    <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s4 offset-l4" >
              <img src="ind/your-shot.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            </div>
            <div class="row center">
            <div class="col s12">
                <span class="black-text">
                <form method="post" action="motosave.php">
				<input type="text" name="motto" style="text-align: center;font-size: 30px;font-weight: bold;" id="textsave" value="<?php echo $views ?>">
				<input type="submit" name="save" value="Save" class="waves-effect waves-light btn" style="padding: 10px;width: 150px;">
				</form>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Skip</a>
    </div>
  </div>	
        <div id="content">
            <div class="title">Welcome to Yearbook'17</div>

            <div class="navigation" id="nav">
                <div class="item user">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>User</h3>
                    <ul>
                        <li><a href="profile/">My Profile</a></li>
                        <li><a onclick="update();">Edit Details</a></li>
                        <li><a href="index.php">Logout</a></li>
                    </ul>
                </div>
                <div class="item home">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>Batch Sento</h3>
                    <ul>
                        <li><a href="department.php">Home</a></li>
                        <li><a href="search/">Find friend</a></li>
                        <li><a href="search/">Recommended</a></li>
                    </ul>
                </div>
                <div class="item shop">
                    <img src="img/bg_sm.png" alt="" width="199" height="199" class="circle"/>
                    <h3>Write Article</h3>
                    <ul>
                        <li><a href="writeup.php">About Event</a></li>
                        <li><a href="department1.php">About Friend</a></li>
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
		
		</div>
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
        </script>
        <script>
var back = "<?php echo $views; ?>" ;
//script for modal only
$(document).ready(function() {
  $('.modal-trigger').leanModal();
  
  if ( back == 'What Is Your Life Motto?') {
  	$("#modal1").openModal();
  } else {
  	$("#modal1").openModal();
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

</script>	
<script>
 $(document).ready(function() {

    $('select').material_select();
  });

  function update(){
  	$('.edit_button').click(function(){
  		$('.edit').show();$(".upload").hide();$(".edit_button").hide();
  	});
  }
</script>
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