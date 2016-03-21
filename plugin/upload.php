<!DOCTYPE HTML>
<?php 
session_start();
include 'connection.php';
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="login.php";</script>';
    }
?>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="animate.css"></head>
<style>
 @font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
      body
{
  background-image: url('bck.jpg');
  background-size: 100vw;
  background-repeat:repeat;
}
.container
{
    width: 900px !important;
    margin-top: -50px;
}
.btn
{
    font-family: 'pacifico';
    width: 120px;
}
</style>
<head>
    <meta charset="utf-8">
    <title>Students' Alumni Cell - YEARBOOK UPLOADER</title>
    <meta name="description" content="Photo uploader for Yearbook 2016, IIT Kharagpur. Designed and maintained by Students' Alumni Cell IIT Kharagpur.">
    <!--material styles
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>-->
    <!-- Bootstrap styles-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
    <script>$('.start').hide();</script>
</head>
<body>
    <div class="container animated zoomInDown ">
    <div class="row">
    <div class="col-md-2">
    <button type="button" class="btn btn-primary"style="width: 100px;background-color: rgb(43,187,173) " onclick="location.href='register.php'">home </button>
    </div>
    <div class="col-md-8"></div>
    <div class="col-md-1">
    <button type="button" class="btn btn-primary"style="width: 100px;margin-left: 20px;background-color: rgb(43,187,173) " onclick="location.href='login.php'">logout </button>
    </div>
    </div>
    <h4 style="text-align:center;font-family:pacifico;color:#707070;font-size:34.2px ">Upload Photos</h4>
        <!-- The file upload form used as target for the file upload widget -->
        
        <form class="fileupload" action="server/php/index.php" method="POST" enctype="multipart/form-data">
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="form-group">
  <label for="classifiers">Select Category:</label>
  <select class="form-control" name="classifiers" onchange="showcat(this.options[this.selectedIndex].value)">
    <option value="dep">DEPARTMENT PHOTOS</option>
    <option value="hall">HALL PHOTOS</option>
    <option value="fest">FEST PHOTOS</option>
    <option value="misc">OTHER MOMENTS AT KGP</option>
  </select>
</div>
            
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                    
                    <span class="btn btn-success fileinput-button">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Add files...</span>
                        <input type="file" name="files[]" multiple>
                    </span>
                    <button type="submit" class="btn btn-primary start">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Start upload</span>
                    </button>
                <!--<button type="reset" class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel upload</span>
                </button>
                <button type="button" class="btn btn-danger delete">
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Delete</span>
                </button>
                <input type="checkbox" class="toggle">
                <!-- The global file processing state -->
            </div>
            <!-- The global progress state -->
            <div class="col-lg-5 fileupload-progress fade">
                <!-- The global progress bar -->
                <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                </div>
                <!-- The extended global progress state -->
                <div class="progress-extended">&nbsp;</div>
            </div>
        </div>
        <!-- The table listing the files available for upload/download -->
        <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
    </form>
  <?php   
    $value1=$_SESSION['rollno'];
$result=mysql_query("SELECT name FROM photos order by id asc");  
while ($row=mysql_fetch_array($result)) {
    if(substr($row['name'], 0,9)==$value1)
    # code...
    echo "<img src='server/php/files/".$row['name'] ."' height='100px'>";
}


 ?>
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
                    <td>
                    <label class="description">
                        <span>Caption:</span><br>
                        <input name="description[]" class="form-control">
                    </label> 
                    <label class="classifier">
                        <span>Category</span><br>
                        <input name="classifier[]" class="form-control classifier2">
                    </label>
                    </td>
                    <td>
                        <span class="preview"></span>
                    </td>
                    <td>
                        <p class="name">{%=file.name%}</p>
                        <strong class="error text-danger"></strong>
                    </td>
                    <td>
                        <p class="size">Processing...</p>
                        <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
                    </td>
                    <td>
                       {% if (!i && !o.options.autoUpload) { %}
                        <button class="btn btn-primary start" disabled>
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                        {% } %}
                        {% if (!i) { %}
                        <button class="btn btn-warning cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                        {% } %}
                    </td>
                </tr>
                {% } %}
            
            </script>
             
            <!-- The template to display files available for download -->
            <script id="template-download">
            
             
            </script>
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
            <script src="js/vendor/jquery.ui.widget.js"></script>
            <!-- The Templates plugin is included to render the upload/download listings -->
            <script src="//blueimp.github.io/JavaScript-Templates/js/tmpl.min.js"></script>
            <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
            <script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
            <!-- The Canvas to Blob plugin is included for image resizing functionality -->
            <script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
            <!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <!-- blueimp Gallery script -->
            <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
            <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
            <script src="js/jquery.iframe-transport.js"></script>
            <!-- The basic File Upload plugin -->
            <script src="js/jquery.fileupload.js"></script>
            <!-- The File Upload processing plugin -->
            <script src="js/jquery.fileupload-process.js"></script>
            <!-- The File Upload image preview & resize plugin -->
            <script src="js/jquery.fileupload-image.js"></script>
            <!-- The File Upload audio preview plugin -->
            <script src="js/jquery.fileupload-audio.js"></script>
            <!-- The File Upload video preview plugin -->
            <script src="js/jquery.fileupload-video.js"></script>
            <!-- The File Upload validation plugin -->
            <script src="js/jquery.fileupload-validate.js"></script>
            <!-- The File Upload user interface plugin -->
            <script src="js/jquery.fileupload-ui.js"></script>
            <!-- The main application script -->
            <script src="js/main.js"></script>
            <!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
<!--[if (gte IE 8)&(lt IE 10)]>
<script src="js/cors/jquery.xdr-transport.js"></script>
<![endif]-->
<script type="text/javascript">
    function showcat(cat) {
       
       var x=document.getElementsByClassName('classifier2');
       for(var j=0;j<=9999;j++)
       {
        x[j].value=cat;
       }
    }
</script>
</div>
</body>
</html>
