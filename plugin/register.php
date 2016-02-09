
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
<div class="animated slideInDown row">
<div class="col l6 s11 m6 offset-l3 z-depth-2" >
	<form method="post" action="registerconnect.php">
		
		<h4 style="text-align:center;font-family:pacifico;color:#707070 ">Fill up your details</h4>
			<div class="row">

				<div class="input-field col s11 l4 m12 ">
					<select name="department">
      <option selected disabled value="<?php echo $line['department'];?>"><?php if( $line['department']) echo $line['department'] ;else echo 'Choose your department';?></option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      </select>
				</div>
					<div class="input-field col s6 l4 m6 ">
						<select name="HOR">
      <option selected disabled value="<?php echo $line['course'];?>"><?php if( $line['HOR']) echo $line['HOR'] ;else echo 'Choose your HALL';?></option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      <option value="1">UG</option>
      <option value="2">PG</option>
      <option value="3">RS</option>
      </select>
					</div>
				

					<div class="input-field col s6 l4 m6 ">
						<select name="course" >
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
						<input name="email" value="<?php echo $line['email']; ?>"type="email" >
						<label for="email">Email</label>
					</div>
				

					<div class="input-field col s11 l6 m12 ">
						<i class="material-icons prefix">phone</i>
						<input name="phone"value="<?php echo $line['phone']; ?>" type="number" size="10" optional>
						<label for="phone">Phone no</label>
					</div>
				</div>
				<div class="row">
				<div class="col s12 l4 m4 offset-l5">
				<button type="submit" id="submit"name="submit"class="waves-effect waves-light btn" required onclick="alert('submitted');">Update</button>
			</div>
			
			
			
		</form></div>
		</div>
		<div class="row">
		<div class="col s6 m6 l6">
		<div class="row">
		<div class="col s4 l4 m4 offset-l5" style="margin-top:50px">
		<form action="upload.php">
		<img src='i1.png' width="150px"><button type="submit"class="waves-effect waves-light btn special" >UPLOAD PHOTOS</button>
</form></div></div>
		</div>
		
				

		<div class="col s6 m6 l6">
		<div class="row">
		<div class="col s4 l4 m4 offset-l4"style="margin-top:50px">
		<form action="writeup.php">
		<img src='i2.png' width="150px"><button type="submit"class="waves-effect waves-light btn special">Upload Articles</button>
</form></div></div>
		</div>
		</div>
	
<script>
 $(document).ready(function() {

    $('select').material_select();
  });
</script>
	</body>
	</html>