<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<?php include("head.php"); ?>
</head>
<body>

	<div class="vertical-center">
		<div class="row">
			<div class="center-align">
				<img src="<?php echo base_url('assets/img/logo parkcode.png'); ?>">
            	<span class="grey-text text-darken-3"><h4><strong>park</strong>code</h4></span>
            	<br>
            	<?php echo validation_errors(); ?>
            	<?php echo form_open('Verifysignup'); ?>
            	<div class="row">
				    <form class="col s12">
				      	<div class="row">
				        	<div class="input-field col s6">
				          		<input name="first_name" type="text" class="validate" required>
				          		<label class="left-align" for="first_name">First Name</label>
				        	</div>
				        	<div class="input-field col s6">
				        		<input name="last_name" type="text" class="validate" required>
				          		<label class="left-align" for="last_name">Last Name</label>
				        	</div>
				      	</div>
				      	<div class="row">
				        	<div class="input-field col s6">
				          		<input name="username" type="text" class="validate" required>
				          		<label class="left-align" for="username">Username</label>
				        	</div>
				        	<div class="input-field col s6">
				        		<input name="password" type="password" class="validate" required>
				          		<label class="left-align" for="password">Password</label>
				        	</div>
				      	</div>
				      	<div class="row">
				        	<div class="input-field col s12">
				          		<input name="email" type="text" class="validate" required>
				          		<label class="left-align" for="email">Email</label>
				        	</div>
				      	</div>
				      	<div class="row">
				      		<input type="checkbox" class="filled-in" id="filled-in-box">
      						<label for="filled-in-box">You are agreeing to the Terms of Service</label>
				      	</div>
				      	<button class="btn waves-effect waves-light blue accent-2 " type="submit" value ="">Sign Up</button>
				    </form>
				  </div>
            	
            	<div class="text-center"> 
                	<h6>Already have an account ? <a href="<?php echo base_url('login'); ?>" class="text-center new-account">Login </a></h6>
            	</div>
			</div>
		</div>
	</div>
</body>
</html>