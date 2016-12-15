<!DOCTYPE html>
<html>
<head>
<?php
$this->load->view('header'); 
?>
</head>
<body>

<div class="row vertical-center valign-wrapper">
    <div class="valign hoverable card-panel col s12 m8 offset-m2 l6 offset-l3">
            <div class="row" style="margin-top: 15px">
                <span class="card-title">
                <a class="indigo-text darken-4" target="_self" href="{link}">
                    <!--<strong>Pencarian</strong>-->
                <div class="push-m1 col s12 m4 center-on-small-only">
                    {icon}
                </div>
                <div class="right-aligned col s12 m2 center-on-small-only">
                    <h3 class="indigo-text darken-4">Finding<strong>Kost</strong></h3>
                </div>
                </a>
                </span>
            </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6">
                        <a class="active indigo-text darken-4"href="#login">Masuk</a>
                    </li>
                    <li class="tab col s6">
                        <a class="indigo-text darken-4" href="#signup">Daftar</a>
                    </li>
                </ul>
            </div>
            <div id="login" class="col s12"><?php $this->load->view('akun/v_login');?></div>
            <div id="signup" class="col s12"><?php $this->load->view('akun/v_signup');?></div>
        </div>    
    </div>
</div>
<?php 
$this->load->view('footer'); 
?>
<script>
    var Materialize;
    $(document).ready(function(){
        $('ul.tabs').tabs('select_tab', 'tab_id');
        if(location.search !== ""){
            Materialize.toast('Username atau Password Anda Salah!', 5000);
        }
    });
</script>
</body>
</html>