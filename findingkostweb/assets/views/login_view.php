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
            	<?php echo form_open('Verifylogin'); ?>
            	<div class="row">
            		<div class="col s6 offset-s3">
            			<form action = "" method = "post" class="">
                        <input type="text" class="form-control" id="username" name = "username" placeholder="Username" required autofocus>
                        <input type="password" class="form-control" id="password" name = "password" placeholder="Password" required>
                        <button class="btn waves-effect waves-light blue accent-2 " type="submit" value ="Login">Sign in</button>
                    </form>
            		</div>
            	</div>
            	<br>
            	<div class="text-center"> 
                	<h6>New in Parkcode ? <a href="<?php echo base_url('signup'); ?>" class="text-center new-account">Create an account </a></h6>
            	</div>
			</div>
		</div>
	</div>
</body>
</html>