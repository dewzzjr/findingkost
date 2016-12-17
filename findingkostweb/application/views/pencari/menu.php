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
    <ul class="collapsible popout" data-collapsible="accordion">
        <li>
            <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Profil</div>
            <div class="collapsible-body"><?php $this->load->view('akun/v_profil'); ?></div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">place</i>Kos yang Dihuni</div>
            <div class="collapsible-body">{view_kos}</div>
        </li>
        <li>
            <div class="collapsible-header"><i class="material-icons">payment</i>Bayar</div>
            <div class="collapsible-body">{view_bayar}</div>
        </li>
    </ul>
    </div>
    <?php $this->load->view('footer'); ?>
</body>
</html>
