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

	<div class="container">
		<br>
		<p class="grey-text text-darken-3"><strong>This</strong></p>
		<h4 class="light-blue-text text-lighten-1"><strong>Edit</strong> Your Profile</h4>
		<br>
		<br>
		<br>
		<?php echo validation_errors(); ?>
        <?php echo form_open('Profile/update'); ?>
		<div class="row">
			<!--sisi kiri-->
			<div class="col s5">
			    <img width="200" src="<?php echo base_url('assets/img/sample.png');?>" class="circle responsive-img z-depth-2" alt="">
			</div>
			<!--sisi kanan-->
			<div class="col s6">
				<div class="row">
					<div class="row">
				        <div class="input-field col s6">
				          	<input name="first_name" type="text" class="validate" value="<?php echo $user->first_name; ?>">
				          	<label class="left-align" for="first_name">First Name</label>
				        </div>
				        <div class="input-field col s6">
				        	<input name="last_name" type="text" class="validate" value="<?php echo $user->last_name; ?>">
				          	<label class="left-align" for="last_name">Last Name</label>
				        </div>
				    </div>
				    <div class="row">
				        <div class="input-field col s6">
				          	<input name="email" type="text" class="validate" value="<?php echo $user->email; ?>">
				          	<label class="left-align" for="email">Email</label>
				        </div>
				        <div class="input-field col s6">
				        	<input name="age" type="text" class="validate" value="<?php echo $user->age; ?>">
				          	<label class="left-align" for="lage">Age</label>
				       	</div>
				    </div>
				    <div class="row">
				        <div class="input-field col s6">
				          	<input name="address" type="text" class="validate" value="<?php echo $user->address; ?>">
				          	<label class="left-align" for="address">Address</label>
				        </div>
				        <div class="input-field col s6">
				        	<input name="birth_date" type="text" class="validate" value="<?php echo $user->birth_date; ?>">
				          	<label class="left-align" for="birth_date">Birth date (YYYY/MM/DD)</label>
				        </div>
				    </div>
				    <div class="row">
					    <div class="input-field col s6">
					        <input name="birth_place" type="text" class="validate" value="<?php echo $user->birth_place; ?>">
					        <label class="left-align" for="birth_place">Birth place</label>
					    </div>
					</div>
					<div class="row">
						<div class="col s6">
							<button class="btn waves-effect waves-light blue accent-2 " type="submit"><i class="material-icons">done</i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br>


	<?php include("footer.php"); ?>
</body>
</html>