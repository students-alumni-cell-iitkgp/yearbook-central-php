<?php 
session_start();
include 'connection.php';
if (isset($_SESSION['rollno'])) {
        
    }else{
  echo '<script>alert("You need to Log In");window.location.href="index.php";</script>';
    }
?>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="animate.css">
    <link rel="icon" href="ind/fav.png" type="image/png" >
    <meta charset="utf-8">
    <title>YB|Upload</title>
    <meta name="description" content="Photo uploader for Yearbook 2016, IIT Kharagpur. Designed and maintained by Students' Alumni Cell IIT Kharagpur.">
    <!--material styles
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>-->
    <!-- Bootstrap styles-->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <!-- Generic page styles -->
    <link rel="stylesheet" href="css/style.css">
    <!-- blueimp Gallery styles -->
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="css/jquery.fileupload.css">
    <link rel="stylesheet" href="css/jquery.fileupload-ui.css">
    <!-- CSS adjustments for browsers with JavaScript disabled -->
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-noscript.css"></noscript>
    <noscript><link rel="stylesheet" href="css/jquery.fileupload-ui-noscript.css"></noscript>
<style>
 @font-face {
     font-family:pacifico;
     src: url('Pacifico.ttf');
 }
body
{
  background-color: #333;
  background-repeat:repeat;
  padding-top: 0;
      
}
.container
{font-family: Century gothic;
    background-color: silver;
    color: #333;
}
.btn
{    width: 120px;
}
.img-wrap {
    position: relative;
}
.img-wrap .close {
    position: absolute;
    top: 10px;
    right: 0px;
    z-index: 100;
    color: white;
    background-color: black;
    opacity: 1;
}
</style>
</head>
<body>
<div class="container-fluid" style="background-color: black;">
<div class="col-md-2 col-sm-2 col-lg-2">
 <button type="button" class="waves-effect waves-light btn" style="padding: 10px;" onclick="location.href='register.php'" ">HOME </button> </div>
            <div class="col-md-4 col-sm-4 col-lg-4"  align="center"><a href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="sac.png" alt="someimg"/></a> </div>
            <div class="col-md-4 col-sm-4 col-lg-4"  align="center"><a href="#"><img height="90" width="250" src="yearbook.png" alt="someimg"/></a> </div>
           <div class="col-md-2 col-sm-2 col-lg-2"> <button style="padding: 10px;" type="button" class="waves-effect waves-light btn" style="position: absolute;right: 0;top: 0"onclick="location.href='../index.php'">LOGOUT </button> </div> </div>
    <div class="container animated zoomInLeft ">
    <div class="row">
    
    <div class="col-md-12 col-sm-12 col-lg-12" align="center">
    <h2 style="color:#707070;">Upload Photos</h2></div>
    </div>
    <div class="row" align="center" style="padding: 30px;">
        <h4>What better way to capture a memory than printing it in your yearbook? Share with us the pictures of your most memorable times at KGP and we’ll make it a part of your memoir. Select the category for your picture/s and upload them using the option below.</h4>
    </div>
    <div class="row">    
    <div class="col-lg-6">
        <!-- The file upload form used as target for the file upload widget -->
        
        <form class="fileupload" action="server/php/index.php" method="POST" enctype="multipart/form-data" >
            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="form-group">
  <label for="classifiers">Select Category: (Max size: 5MB)</label>
  <select class="form-control" name="classifiers" onchange="showcat(this.options[this.selectedIndex].value)">
    <option value="dep">DEPARTMENT PHOTOS</option>
    <option value="hall">HALL PHOTOS</option>
    <option value="fest">FEST PHOTOS</option>
    <option value="misc">OTHER MOMENTS AT KGP</option>
  </select>
</div>
            
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The file input-button span is used to style the file input field as button -->
                    
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
    <!-- The template to display files available for upload -->
    <script id="template-upload" type="text/x-tmpl">
        {% for (var i=0, file; file=o.files[i]; i++) { %}
        <tr class="template-upload fade">
                    <td>
                    <label class="description">
                        <span>Caption:</span><br>
                        <input name="description[]" class="form-control" required>
                    </label> 
                    <label class="classifier">
                        <span>Category</span><br>
                        <select name="classifier[]" class="form-control classifier2" required>
                            <option value="" disabled selected>Choose your option</option>
                            <option value="Public">Public</option>
                            <option value="Private">Private</option>
                        </select>
                    </label>
                    </td>
                    <td>
                        <span class="preview"></span>
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
<script>$('.start').hide();</script>
<script type="text/javascript">
    function showcat(cat) {
       
       var x=document.getElementsByClassName('classifier2');
       for(var j=0;j<=9999;j++)
       {
        x[j].value=cat;
       }
    }
    $(document).ready(function(){
    $(".reload").click(function(){
    $("#load").load("pictures.php");
    });
});
</script>
</div><div class="col-lg-6 animated bounce" style="padding: 20px;color: #fff">
<h3>Uploads<i class="material-icons reload" style="cursor: pointer;">autorenew</i></h3>
<div id="load"> <?php  include 'pictures.php' ?></div>
</div></div></div>
</body>
</html>
