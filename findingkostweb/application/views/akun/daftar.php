<!DOCTYPE html>
<html>
<head>
<?php
$head['title'] = "FindingKost";

$this->load->view('header', $head); 
?>
</head>
<body>

<?php 
$this->load->view('nav');
?>
    <div class="">
<?php
$this->load->view('akun/v_register');
?>
    </div>
<?php

$this->load->view('footer');
?>
</body>
</html>