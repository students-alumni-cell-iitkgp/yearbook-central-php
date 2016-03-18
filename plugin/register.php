
<html>
<?php 	
include 'connection.php';

	session_start();
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result = mysql_query($query); 
	$line = mysql_fetch_array($result, MYSQL_ASSOC);

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
	background-size: cover;
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


</style>
<body>
<div class="container">
		<div class="row">
			<div class="col s3 l3 m3">
			<img width="200px"class="upload"src="Logo.png">
			</div>
			<div class="col s3 l6 m3"><h3 class="center upload"style="font-family:pacifico;font-size:500%;color:#707070">Yearbook'16</h3>
</div>
<div class="col l2 s3 m3 offset-l1">
    <button type="button"class="waves-effect waves-light btn" onclick="location.href='login.php'">LOGOUT </button>


</div>
		</div></div>
				

<div class="animated slideInDown row"><center>
<button type="button" value="Edit" class="edit_button btn btn-large special" style="padding:20px;line-height:0px;height:40px;font-family: 'pacifico'"onclick="update();">Edit Your Details</button>
</center><div class="col l6 s11 m6 offset-l3 z-depth-2 edit" >

	<form method="post" action="registerconnect.php">
		
		<h4 style="text-align:center;font-family:pacifico;color:#707070 ">Fill up your details</h4>
			<div class="row">

				<div class="input-field col s11 l4 m12 ">
					<select name="department" required>
      <option selected value="<?php echo $line['department'];?>"><?php if( $line['department']) echo $line['department'] ;else echo 'Choose your department';?></option>
      <option value="AE">Aerospace Engineering</option>
      <option value="AG">Agricultural & Food Engineering</option>
      <option value="AR">Architecture & Regional Planning</option>
      <option value="BT">Biotechnology</option>
      <option value="CH">Chemical Engineering</option>
      <option value="CY">Chemistry</option>
      <option value="CE">Civil Engineering</option>
      <option value="CS">Computer Science & Engineering</option>
      <option value="EE">Electrical Engineering</option>
      <option value="ECE">Electronics & Electrical Communication Engineering</option>
      <option value="GG">Geology & Geophysics</option>
      <option value="HS">Humanities & Social Sciences</option>
      <option value="IM">Industrial & Systems Engineering</option>
      <option value="MA">Mathematics</option>
      <option value="ME">Mechanical Engineering</option>
      <option value="MT">Metallurgical & Materials Engineering</option>
      <option value="MI">Mining Engineering</option>
      <option value="NA">Ocean Engineering & Naval Architecture</option>
      <option value="PH">Physics</option>
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
		<option value="MMM"> Megnad Saha Hall </option>
		<option value="MT"> Mother Teresa Hall </option>
		<option value="NH"> Nehru Hall </option>
		<option value="PH"> Patel Hall </option>
		<option value="RK"> Radha Krishnan Hall </option>
		<option value="RP">Rajendra Prasad Hall </option>
		<option value="RLB">Rani Laxmibai Hall </option>
		<option value="SN/IG">Sarojini Naidu/Indira Gandhi Hall</option> 
		<option value="SN">Sister Nivedita Hall </option>
		<option value="VS">Vidyasagar Hall </option>
		<option value="ZH">Zakir Hussain Hall </option>
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
						<input name="phone"value="<?php echo $line['phone']; ?>" type="number" size="10" required>
						<label for="phone">Phone no</label>
					</div>
				</div>
				<div class="row">
				<div class="col s12 l4 m4 offset-l5">
				<button type="submit" id="submit"name="submit"class="waves-effect waves-light btn" required >Update</button>
			</div>
			
			
			
		</form></div>
		</div>
		<div class="row">
		<div class="col s6 m6 l6 upload">
		<div class="row">
		<div class="col s4 l4 m4 offset-l5" style="margin-top:50px">
		<form action="upload.php">
		<img src='i1.png' width="150px"><button type="submit"class="waves-effect waves-light btn special" >UPLOAD PHOTOS</button>
</form></div></div>
		</div>
		
				

		<div class="col s6 m6 l6 upload">
		<div class="row">
		<div class="col s4 l4 m4 offset-l4"style="margin-top:50px">
		<form action="writeup.php">
		<img src='i2.png' width="150px"><button type="submit"class="waves-effect waves-light btn special">Upload Articles</button>
</form></div></div>
		</div>
		</div>

		<div class="col s6 m6 l6 upload">
		<div class="row">
		<div class="col s4 l4 m4 offset-l5" style="margin-top:50px">
		<form action="department.php">
		<img src='i3.png' width="150px"><button type="submit"class="waves-effect waves-light btn special" >Click if you Dare</button>
</form></div></div>
		</div>		
		
	
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
	if($line['department']==NULL){
		echo '<script>$(".upload").hide();$(".edit_button").hide();</script>';

	}else{
		echo '<script>$(".edit").hide();</script>';
	}
?>
