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
		<h4 class="light-blue-text text-lighten-1"><strong>Your</strong> Profile</h4>
		<p class="light grey-text text-darken-3">Kamu dapat melihat informasi terkait<br>
		personal dan rekapitulasi parkir<br>
		yang pernah anda dilakukan</p>
		<br>
		<br>
		<br>
		<div class="row">
			<!--sisi kiri-->
			<div class="col s3">
				
			        <img width="200" src="<?php echo base_url('assets/img/sample.png');?>" class="circle responsive-img z-depth-2" alt="">
			    
			</div>
			<!--sisi kanan-->
			<div class="col s6">
				<div class="row">
					<div class="col s3">
						<h6><strong>Name</strong></h6>
						<h6><strong>Email</strong></h6>
						<h6><strong>First Name</strong></h6>
						<h6><strong>Last Name</strong></h6>
						<h6><strong>Age</strong></h6>
						<h6><strong>Adress</strong></h6>
						<h6><strong>Birth Date</strong></h6>
						<h6><strong>Birth Place</strong></h6>
					</div>
					<div class="col s1">
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
						<h6><strong>:</strong></h6>
					</div>
					<div class="col s6">
						<h6><?php echo $user->first_name.$user->last_name; ?></h6>
						<h6><?php echo $user->email; ?></h6>
						<h6><?php echo $user->first_name; ?></h6>
						<h6><?php echo $user->last_name; ?></h6>
						<h6><?php echo $user->age; ?></h6>
						<h6><?php echo $user->address; ?></h6>
						<h6><?php echo $user->birth_date; ?></h6>
						<h6><?php echo $user->birth_place; ?></h6>
					</div>
				</div>
				<a href="<?php echo base_url('profile_update'); ?>" class="btn waves-effect waves-light blue accent-2 "><i class="material-icons">mode_edit</i></a>
			</div>
			<div class="col s3">
				<div class="collection">
				    <a href="#" class="collection-item"><span class="new badge">4</span>Parkir</a>
				    <a href="#" class="collection-item"><span class="new badge">Rp 50.000</span>Pengeluaran</a>

				 </div>
			</div>
		</div>
	</div>
	<br>


	<?php include("footer.php"); ?>
</body>
</html>