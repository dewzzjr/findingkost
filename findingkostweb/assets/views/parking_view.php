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
	      <h3 class="header center light-blue-text text-lighten-1">Easy to <strong>Parking</strong></h3>
	      <div class="row center">
		      <h6 class="header col s12 light grey-text text-darken-3">in Surabaya</h6>
		    </div>
		      <br><br>
		    <div class="row center">
		      <h5 class="light">available parking area in <strong><?php echo $kelurahan ?></strong></h5>
		      <i class="small material-icons">arrow_drop_down</i>
		    </div>
	    </div>
		</div>
  </div>

  	
  <div class="section">

    <!--   Panel Tempat Parkir   -->
    <div class="row">

      <?php foreach($parking as $parking){?>
      <div class="col s12 m4">
    		<div class="card horizontal">
      		<div class="card-image">
      		</div>
      		<div class="card-stacked">
        		<div class="card-content">
          		<h5><strong><?php echo $parking->name_parking;?></strong></h5>
          		<h6 class="light"><?php echo $parking->address_parking;?><i class="material-icons right">directions_car</i></h6>
              <br>
              <button class="btn waves-effect waves-light blue accent-2 " onclick="doConfirm()"><i class="material-icons">input</i></button>
        		</div>
        		<div class="card-action">
        			<div class="col s3">
          			<i class="green-text material-icons">check_circle</i> <?php echo $parking->capacity;?>
          		</div>
          		<div class="col s4">
          			<i class="green-text material-icons">attach_money</i> Rp <?php echo $parking->cost;?>
          		</div>
          		<div class="col s4">
          			<i class="green-text material-icons">access_time</i> <?php echo $parking->open_clock;?>
          		</div>
        		</div>
      		</div>
    		</div>
      </div>
      <?php }?>
    </div>
    
  
    </div>
  
  <?php include("footer.php"); ?>

  <script>
    function doConfirm()
      {
        status=confirm("Are you sure to booking?");
        if(status!=true)
        {
          return false;
        }
      }
  </script>

</body>
</html>