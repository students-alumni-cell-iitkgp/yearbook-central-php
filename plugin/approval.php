<?php
	require 'connection.php';
	session_start();
	if (isset($_SESSION['rollno'])) {
		
	}else{
  		echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
	}
	$value1=$_SESSION['rollno'];
	$query = "select * from register where rollno = '$value1'"; 
	$result = $connection->query($query); 
	$line = mysqli_fetch_array($result);

?>

<!DOCTYPE html>
<html>
<head>
	<title>List</title>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="animate.css">
	<style>


body
{
	background-color: #333;
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


</style>
</head>
<body>
	<div class="container grey">
		<div class="fixed-action-btn" style="bottom: 45px; right: 180px;">
			<a class="btn-floating btn-large waves-effect waves-light red" href="register.php"><i class="material-icons">home</i></a>
		</div>
		<table class="highlight col l12 s12 m12">

	        <tbody>
	          <?php
	          	$dept = $line['department'];
	          	$query_select_view = "select * from views where deptmate = '$value1'";
	          	$query_select_view_run = $connection->query($query_select_view);
	          	while ($list = mysqli_fetch_assoc($query_select_view_run)) {
	          		@$list_views[] = $list;
	          	}
	          	for($i=0;$i<count($list_views);$i++){
	          		if(!empty($list_views[$i]['views'])){
		          		$rollno = $list_views[$i]['user'];
		          		$id = $list_views[$i]['id'];
		          		$view = $list_views[$i]['views'];
		          		$query_select_user = "select * from register where rollno = '$rollno'";
		          		$query_select_user_run =$connection->query($query_select_user);
		          		$list = mysqli_fetch_assoc($query_select_user_run);
		          		$name = $list['name'];
		          		echo '<tr><td style = "word-wrap: break-word;padding:20px; "> <b>'.$name.' said:</b><br>
		          			  '.$view.'
		          		</td>
		          		<td><div class="approval" style="padding:20px">';	          			
		          		if($list_views[$i]['approval']=='approve'){
		          			
		          			echo '<input type="submit" class="btn waves-light disapprove app'.$i.'" value= "disapprove" data-no="'.$i.'" data-id="'.$id.'" id= "'.$rollno.'"> ';
		          		}else{
		          				          			

		          			echo '<input type="submit" class="btn waves-light red approve app'.$i.'" value= "Approve" data-no="'.$i.'" data-id="'.$id.'" id= "'.$rollno.'"> <div class="text_show'.$i.'" style= "padding-left = 15px;"></div>';
		          		}

		          		echo '</div></td>';
		          		$pass= $list_views[$i]['deptmate'];
		          	}else{
		          		
		          	}	
	          	}
		       	

	          ?>
	        </tbody>
      	</table>
	</div>
</body>
<script>
	$(document).on('click', '.approve', function(){
		var rollno = $(this).attr('id');
		var no = $(this).attr('data-no');
		var id = $(this).attr('data-id');
		var query= 'id='+id;
		$.ajax({
			url: 'views_approval_data.php',
			data: query,
			
			type: 'POST',
			success: function (data) {
					console.log(data);
					if(data){
						console.log(data);
						//$('.approve').remove();
						$('.app'+no).attr('value','disapprove');
						$('.app'+no).removeClass('approve');
						$('.app'+no).addClass('disapprove');
						$('.app'+no).removeClass('red');
						$('.text_show'+no).html('Approved');
					}else{
						alert("Please try again");
					}
				}
		});
	});	
	$(document).on('click', '.disapprove',function(){
		var rollno = $(this).attr('id');
		var no = $(this).attr('data-no');
		var id = $(this).attr('data-id');
		var query= 'id='+id;
		$.ajax({
			url: 'views_disproval_data.php',
			data: query,
			
			type: 'POST',
			success: function (data) {
					console.log(data);
					if(data){
						console.log(data);
						$('.app'+no).attr('value','approve');
						$('.app'+no).removeClass('disapprove');
						$('.app'+no).addClass('approve');
						$('.app'+no).addClass('red');
						$('.text_show'+no).html('');
					}else{
						alert("Please try again");

					}
				}
		});
	});		
</script>
</html>
