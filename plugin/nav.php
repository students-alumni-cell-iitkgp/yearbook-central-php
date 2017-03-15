<script>
   $(document).ready(function(){
   if ($(window).width()>770) {
    (function($){ $('#nav').show();
     
    })(jQuery, undefined); }
    else{$('#nav').remove(); $('#mob_nav').show();
    }
    $(".button-collapse").sideNav();
  });

</script>

<div id="nav" class="row" style="background-color: black; display: none;">

    <div align="left" class="col l1 s2 m2"><a style="margin-top:1.3em" class="waves-effect waves-light btn-large" href="register.php"><i class="material-icons right"></i>Home</a></div>
    <div  class="col l3 m4 s3 right-align"><a href="http://www.sac.iitkgp.ac.in"><img height="90" width="250" src="sac.png" alt="someimg"/></a></div>
    <div  class="col l3 m4 s3 right-align"><a href="#"><img height="90" width="250" src="yearbook.png" alt="someimg"/></a></div>
    <div align="right" class="col l3 m4 s4"><a href="https://erp.iitkgp.ernet.in" style="margin-top:1.3em" class="waves-effect waves-light btn-large">Edit ERP Profile pic<i class="material-icons right"></i></a></div>
    <div align="right" class="col l2 m2 s2"><a href="index.php" style="margin-top:1.3em" class="waves-effect waves-light btn-large"><i class="material-icons right"></i>Logout</a></div>


</div>

      <nav id="mob_nav" style="display: none; background-color: black;" >
      <div class="nav-wrapper">
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <a href="#!" class="brand-logo"><img width="120" height="50" src="year.png" alt="someimg"/></a>
        <ul class="side-nav" id="mobile-demo">
        <li><a href="register.php">Home</a></li>
        <li><a href="index.php">Update Erp Profile Picture</a></li>
        <li><a href="index.php">Logout</a></li>
      </ul>
      </div>
    </nav>
  

