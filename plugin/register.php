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
var back = "<?php echo $views; ?>" ;
var back2 = "<?php echo $path; ?>" ;
//script for modal only
$(document).ready(function() {
  $('.modal-trigger').leanModal();
  
  if ( (!back)||!(back2) ) {
  	$("#modal1").openModal();
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