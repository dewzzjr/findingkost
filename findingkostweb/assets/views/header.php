<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
	<li><a class="light grey-text text-darken-3" href="<?php echo base_url('profile'); ?>">Profile</a></li>
	<li><a class="light grey-text text-darken-3" href="<?php echo base_url('logout'); ?>">Sign Out</a></li>
</ul>
<!--Navigation-->
<nav class="light-blue lighten-1" role="navigation">
	 <div class="nav-wrapper container"><a id="logo-container" href="<?php echo base_url('home'); ?>" class="brand-logo">Parkcode</a>
	    <ul class="right hide-on-med-and-down">
	        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">hello, <?php echo $username ?><i class="material-icons right">arrow_drop_down</i></a></li>
	    </ul>
		<ul id="nav-mobile" class="side-nav">
	        <li><a href="#">Navbar Link</a></li>
	    </ul>
	    <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
	</div>
</nav>