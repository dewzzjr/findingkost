<!DOCTYPE html>
<html>
<head>
<?php
$this->load->view('header'); 
?>
</head>
<body>
    <?php $this->load->view('nav'); ?>
    <div class="container">
    <div class="row">
    <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a class="active" href="#profil">Profil</a></li>
        <li class="tab col s3"><a href="#kos">Kos</a></li>
        <li class="tab col s3"><a href="#penghuni">Penghuni</a></li>
        <li class="tab col s3"><a href="#tambah">Tambah Kos</a></li>
      </ul>
    </div>
    <div id="profil" class="col s12">Test 1</div>
    <div id="kos" class="col s12">Test 2</div>
    <div id="penghuni" class="col s12">Test 4</div>
    <div id="tambah" class="col s12">Test 4</div>
    </div>
    </div>
    <?php $this->load->view('footer'); ?>
    <script>
    $(document).ready(function(){
      $('ul.tabs').tabs();
    });
    </script>
</body>
</html>
