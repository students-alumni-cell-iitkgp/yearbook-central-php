
<html>
<?php 	
include 'connection.php';

	session_start();
	if (isset($_SESSION['rollno'])) {
		
	}else{
	echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
	}
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result =  $connection->query($query); 
	$line = mysqli_fetch_array($result);

 ?>


<head>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<style>
body
{
	background-image: url('khb.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-attachment: fixed;
}
.toggle{
	display: none;
}
 @font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
 .btn
 {
 	text-transform: lowercase;
 	font-family: pacifico;
 }
.box
	{
		color: #707070;
		font-family: 'pacifico';
		font-size: 20px;
	}

.cursor_change{
	cursor:pointer;
}
.edit{
	background-color: white;
}
</style>
<body>
<div class="container">
		<div class="row">
			<div class="col s3 l3 m3">
			<img width="200px"class="upload"src="Logo.png">
			</div>
			<div class="col s3 l6 m3"><h3 class="center upload"style="position:relative;top:30px;font-family:pacifico;font-size:500%;color:#707070">Yearbook'16</h3>
</div>
<div class="animated slideInDown row" style="position:relative;top:-110px;left:140px;">
<div class="col l6 s3 m3 offset-l6">
   <button type="button" value="Edit" class="waves-effect waves-light btn edit_button" style="font-family: 'pacifico'" onclick="update();">Edit Your Details</button>

    <button type="button"class="waves-effect waves-light btn" onclick="location.href='login.php'">LOGOUT </button>


</div>
</div>
		</div></div>
				

<div class="animated slideInDown row"><center>
    <button type="button"class="waves-effect waves-light btn" ><a href="http://www.webteam.iitkgp.ernet.in/scg/" target="_blank" style="color:white;">MyImprint Website</a></button>

</center><div class="col l6 s11 m6 offset-l3 z-depth-2 edit" >

	<form method="post" action="registerconnect.php">
		
		<h4 style="text-align:center;font-family:pacifico;color:#707070 ">Fill up your details</h4>
			<div class="row">

				<div class="input-field col s11 l4 m12 ">
					<select name="department" required>
      <option selected value="<?php echo $line['department'];?>"><?php if( $line['department']) echo $line['department'] ;else echo 'Choose your department';?></option>
			<option value="AE">AE</option>
			<option value="AG">AG</option>
			<option value="AR">AR</option>
			<option value="AT">AT</option>
			<option value="BM">BM</option>
			<option value="BT">BT</option>
			<option value="CE">CE</option>

			<option value="CH">CH</option>
			<option value="CL">CL</option>
			<option value="CR">CR</option>
			<option value="CS">CS</option>

			<option value="CY">CY</option>
			<option value="EC">EC</option>

			<option value="EE">EE</option>
			<option value="ET">ET</option>
			<option value="GG">GG</option>
			<option value="GS">GS</option>

			<option value="HS">HS</option>
			<option value="ID">ID</option>
			<option value="IM">IM</option>
			<option value="IP">IP</option>
			<option value="IT">IT</option>
			<option value="MA">MA</option>
			<option value="ME">ME</option>

			<option value="MI">MI</option> 
			<option value="MM">MM</option>
			<option value="MS">MS</option>

			<option value="MT">MT</option>
			<option value="NA">NA</option>
			<option value="PH">PH</option>
			<option value="RD">RD</option>
			<option value="RE">RE</option>
			<option value="RJ">RJ</option>
			<option value="RT">RT</option>
			<option value="TS">TS</option>
			<option value="WM">WM</option>



      </select>
				</div>
					<div class="input-field col s6 l4 m6 ">
						<select name="HOR" required>
      <option selected value="<?php echo $line['HOR'];?>"><?php if( $line['HOR']) echo $line['HOR'] ;else echo 'Choose your HALL';?></option>
		<option value="SAM"> Ashutosh Mukherjee Hall </option>
		<option value="AZ"> Azad Hall </option>
		<option value="BCR"> B C Roy Hall </option>
		<option value="BRH"> B R Ambedkar Hall </option>
		<option value="GKH"> Gokhale Hall </option>
		<option value="HJB"> Homi Bhabha Hall </option>
		<option value="JCB"> J C Bose Hall </option>
		<option value="LLR"> Lala Lajpat Rai Hall </option>
		<option value="LBS"> Lalbahadur Sastry Hall </option>
		<option value="MMM"> Madan Mohan Malviya Hall </option>
		<option value="MS"> Megnad Saha Hall </option>
		<option value="MT"> Mother Teresa Hall </option>
		<option value="NH"> Nehru Hall </option>
		<option value="PH"> Patel Hall </option>
		<option value="RK"> Radha Krishnan Hall </option>
		<option value="RP">Rajendra Prasad Hall </option>
		<option value="RLB">Rani Laxmibai Hall </option>
		<option value="SN/IG">Sarojini Naidu/Indira Gandhi Hall</option> 
		<option value="NVH">Sister Nivedita Hall </option>
		<option value="VS">Vidyasagar Hall </option>
		<option value="VSRC">Vikram Sarabhai residential Complex </option>
		<option value="ZH">Zakir Hussain Hall </option>
		<option value="other">Other </option>
      </select>

					</div>
				

					<div class="input-field col s6 l4 m6 ">
						<select name="course" required>
      <option selected value="<?php echo $line['course'];?>"><?php if( $line['course']) echo $line['course'] ;else echo 'Choose your COURSE';?></option>
      <option value="UG">UG</option>
      <option value="PG">PG</option>
      <option value="RS">RS</option>
    </select>
					</div>
				</div>
				<div class="row">

					<div class="input-field col s11 l6 m12 ">
						<i class="material-icons prefix">email</i>
						<input name="email" value="<?php echo $line['email']; ?>"type="email" required >
						<label for="email">Email</label>
					</div>
				

					<div class="input-field col s11 l6 m12 ">
						<i class="material-icons prefix">phone</i>
						<input name="phone" value="<?php echo $line['phone']; ?>" type="number" size="10" required>
						<label for="phone">Phone no</label>
					</div>
				</div>
				<div class="row">
				<div class="col s12 l4 m4 offset-l5">
				<button type="submit" id="submit" name="submit" class="waves-effect waves-light btn" required >Update</button>
			</div>
			
			
			
		</form></div>
		</div>
		<div class="row">
		<div class="col s6 m6 l6 upload">
		<div class="row">
		<div class="col s4 l4 m4 offset-l5" style="margin-top:10px">
		<form id="photo" action="upload.php">
		<img id="photo" class="cursor_change" src='i1.png' width="150px"><button type="submit" class="waves-effect waves-light btn special" >UPLOAD PHOTOS</button>
</form></div></div>
		</div>
		
				

		<div class="col s6 m6 l6 upload">
		<div class="row">
		<div class="col s4 l4 m4 offset-l4"style="margin-top:10px">
		<form id="writeup" action="writeup.php">
		<img id="writeup" class="cursor_change" src='i2.png' width="150px"><button type="submit" class="waves-effect waves-light btn special">Upload Articles</button>
</form></div></div>
		</div>
		</div>
		<div class="row">
		<div class="col s6 m6 l6 upload">
		<div class="row">
		<div class="col s4 l4 m4 offset-l5" style="margin-top:10px">
		<form id="views" action="department.php">
		<img id="views" class="cursor_change" src='i3.png' width="150px"><button type="submit"class="waves-effect waves-light btn special" >Batch sento</button>
		
		</form></div></div>
		</div>
		
				
		<!--div >		
		<form action="views_approval.php">
		<button type="submit"class="waves-effect waves-light btn special" style="margin-left:240px;margin-top:150px;">Approve Views</button>
		</form></div-->
		<div class="col s6 m6 l4 offset-l1 box upload">
		<p style="margin-left: 50px;margin-top: 100px">Contact us at:<br> yearbook.iitkgp@gmail.com</p>
		
		</div>
		</div>
		<!--<div class="row">
		<div class="col s6 m6 l6 upload">
		
		<div class="col s4 l4 m4 offset-l5" style="margin-top:10px">
		<form action="department.php">
		<img src='i3.png' width="150px"><button type="submit"class="waves-effect waves-light btn special" >Batch sento</button>
</form>
		</div>	</div>	
		<div class="col l6 s6 m6 offset-l7 box">
				<p >Contact us at:<br> yearbook.iitkgp@gmail.com</p>

			</div></div>-->
<script>
 
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
		echo "heeeeeeeeeeeeeeeeeeeeelllllllllllllllllllllllllllllllllooooooooooooooooooooooooo";
		echo '<script>$(".upload").hide();$(".edit_button").hide();</script>';

	}else{
		echo '<script>$(".edit").hide();</script>';
	}
?>
