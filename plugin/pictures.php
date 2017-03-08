<?php 
@session_start();
include 'connection.php';
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
    }
?>

<h3>Uploads</h3>
      <?php   
    $value1=$_SESSION['rollno'];
$result=$connection->query("SELECT * FROM photos WHERE name LIKE '$value1%' order by id desc LIMIT 9");
  $rowcount=mysqli_num_rows($result); 
if (!$rowcount) {
	echo "You have not uploaded any photos";
}

while ($row=mysqli_fetch_array($result)) {
    if(substr($row['name'], 0,9)==$value1){
    	$imgname=$row['name'];
    echo '<div class="img-wrap col-lg-4 center"><span class="close"><a href="del_img.php?id='.$row["name"] .'" onclick="return(del());">&times;</a></span>'."<img src='server/php/files/".$row['name'] ."' height='100px' width='160px' style='margin :10px;'><br><div style='width:100%;text-align:center'><b>".$row['description'] ."</b></div></div>";
}

}
 ?>
 <script type="text/javascript">
 	function del() { 
    if (window.confirm('Delete this Picture?'))
    {
        return true;
    }
    else
        return false;
};
</script>
 </script>