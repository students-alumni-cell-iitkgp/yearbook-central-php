
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
	$views=$line['view_self'];

	if($line['email']==NULL||$line['phone']==NULL){

	}else{
		@$flag=$_GET['flag'];
		if (isset($flag)) {
			if ($flag==1) {
			}else{
				
				header( "Location:register.php" );
			}
		}else{

				header( "Location:register.php" );
		}
	}
?>

	
<html>
<head>
<title>YB|Details</title>
    <link rel="icon" href="ind/fav.png" type="image/png" >
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
</head>
<style>
	body{
		background-color:#333;
		color: white;
      font-family: Century gothic;
	}
</style>
<body>
<div class="container center">
<h1>Welcome to Yearbook'17 </h1>
<div class="row">
	<div class="col l12">
		<form method="post" action="registerconnect.php">
		
		<h4 style="text-align:center;color:#707070 ">Fill up your details to continue</h4>
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
				<div class="col s12 l4 m4 offset-l4">
				<button type="submit" id="submit" name="submit" class="waves-effect waves-light btn" required >Update</button>
			</div>
			
			
			
		</form>
	</div>
</div>
</div>
<script type="text/javascript">
	  $(document).ready(function() {
    $('select').material_select();
  });
</script>
</body>
</html>