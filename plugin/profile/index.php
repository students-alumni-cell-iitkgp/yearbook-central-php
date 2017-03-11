<?php   
include '../connection.php';

  session_start();
  if ((isset($_SESSION['rollno']))) {
    
  }else{
  echo '<script>alert("You need to Log In");window.location.href="../index.php";</script>';
  }
  $value1=$_GET['roll'];
  $query = "select * from register where rollno = '$value1'"; 
  $result =  $connection->query($query); 
  if ($result) {
  $line = mysqli_fetch_array($result);
}
 ?>

<!doctype html>
<html>
  <head>
    <title>YB|Profile</title>
    <link rel="icon" href="../ind/fav.png" type="image/png" >
    <script type="text/javascript" src="../../js/materialize.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="../../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="myself2.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <meta name=viewport content='width=700'>
   <script>
 $(document).ready(function(){
   if ($(window).width()<770) {
    (function($){ $('body').addClass('container-fluid');
     
    })(jQuery, undefined); }
    else{$('body').addClass('container');}
    
  });
</script>

    <style type="text/css">
    table{
    	table-layout: fixed;
    }
      .btn{
        width: 180px;
      }
      body{
      font-family: Century gothic;
      }
.caption{
  margin-top: -40px;
  background-color: #005580;
}

.caption h2{
  text-align: left;
  font-size: 20px;
  color: #fff;
  padding:10px;

}
.header{

  background-image: url("../ind/1.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
@media only screen and (min-width: 1000px) {
    #capt {
        padding-left: 0px;
        margin-left: -200px;
    }

    </style>
  </head>
  
  <body>
  <div class="row" style="background-color: black;">
 <button type="button" class="waves-effect waves-light btn" onclick="location.href='../register.php'" style="position: absolute;left: 0;top: 0;">HOME </button>
            <div class="center-align"><a href="http://www.sac.iitkgp.ac.in"><img height="90" width="200" src="../year.png" alt="someimg"/></a> </div>
            <button type="button" class="waves-effect waves-light btn" style="position: absolute;right: 0;top: 0"onclick="location.href='../index.php'">LOGOUT </button> </div> </div>
    <div class="header">
      <div class="">

        <div class="row">
          <div class="col l6 m6 s6" style="padding: 20px;"><img src="<?php if ($line['pro_pic']) { echo '../'.$line['pro_pic']; } else { echo 'your-shot.jpg'; } ?>"></div>
          <div class="col l6 m6 s6" style=""><h1 style="font-size: 30px; color: #fff;background-color: black;opacity: 0.6;padding: 10px;"><?php echo $line['name']; ?></h1></div>
        </div> 
      </div>
    </div>

    <div class="caption">
      <div class="">
      <div class="row">
        <div class="l8 m6 s6 l6 offset-l3">
          <h2 id="capt">
          "<?php 
          if ($line['view_self']) {
          echo $line['view_self'];
           }else{
            echo "No Caption Uploaded";
           }
          ?>"
          </h2>
        </div>
      </div>
      </div>
    </div>            
      <div class="">
        <div class="row">
        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Roll No.</h6>
          <h6><?php echo $line['rollno']; ?></h6>
        </div>
        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Hall</h6>
          <h6><?php echo $line['HOR']; ?></h6>
        </div>
        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Email</h6>
          <h6>
          <?php 
          if ($line['email']) {
          echo $line['email'];
           }else{
            echo "No Email Provided";
           }
          ?></h6>
        </div>
        <div class="col l3 m3 s3 center">
          <h6 style="font-weight:bolder">Contact No.</h6>
          <h6>
          <?php 
          if ($line['phone']) {
          echo $line['phone'];
           }else{
            echo "No Contact No. Provided";
           }
          ?></h6>
        </div>
     
      </div>
      </div>
      <div class=" center" style="padding: 20px;">
      <?php if ($value1==$_SESSION['rollno']) {
        echo "Here’s what your friends written about you! Your testimonials are displayed below. You can approve or disapprove them by selecting the option shown beside each testimonial. The approved ones shall be a part of your yearbook.";
       include 'approval.php';
      } else {
       include '../department1.php';

      }
       ?>
    </div>    
  </body>
</html>