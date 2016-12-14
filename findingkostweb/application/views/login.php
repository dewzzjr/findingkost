<!DOCTYPE html>
<html lang="en">
<head>
<?php
$data['title'] = "FindingKost | Login";
$this->load->view('header', $data); 
?>
</head>
<body>
<?php 
$this->load->view('v_login');
$this->load->view('footer'); 
?>
</body>
</html>