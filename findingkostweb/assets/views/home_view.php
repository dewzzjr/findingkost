<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
  <?php include("head.php"); ?>
</head>
<body>
  <?php include("header.php"); ?>

	<div id="index-banner">
    <div class="section no-pad-bot">
	     <div class="container">
	        <br><br>
	        <h3 class="header center light-blue-text text-lighten-1">Welcome to <strong>Parkcode</strong></h3>
	        <div class="row center">
	          <h6 class="header col s12 light grey-text text-darken-3">a new way find parking information in Surabaya</h6>
	        </div>
	        <br><br>
     	</div>
	  </div>
 	</div>
  <!--search bar--> 
  <div class="container">
    <div class="center-align">
      <span class="grey-text text-darken-3"><h6>search parking area <strong>here</strong></h6></span>
      <br>
      <?php echo validation_errors(); ?>
      <?php echo form_open('Verifysearch'); ?>
      <form>
        <div class="row">
          <div class="col s4 offset-s4">
            <input name="name_kelurahan" type="text" class="validate" required>
            <label class="left-align" for="name_kelurahan"></label>
            <button class="btn waves-effect waves-light blue accent-2 " type="submit"><i class="material-icons">search</i></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <div class="container">
    <div class="section">
      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h1 class="center"><i class="medium material-icons">play_circle_filled</i></h1>
            <h5 class="light center">Easy <strong>Use</strong></h5>
            <p class="center light">Mudah digunakan untuk mencari tempat parkir. Dimanapun dan kapanpun</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h1 class="center"><i class="medium material-icons">location_on</i></h1>
            <h5 class="light center">High <strong>Accuracy</strong></h5>
            <p class=" center light">Informasi yang diberikan update setiap saat dan akurat dalam pemetaan</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="icon-block">
            <h1 class="center"><i class="medium material-icons">code</i></h1>
            <h5 class="light center">Fast <strong>Respond</strong></h5>
            <p class="center light">Parkcode selalu maintenance rutin sehingga menjadikan peforma meningkat</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include("footer.php"); ?>
</body>
</html>