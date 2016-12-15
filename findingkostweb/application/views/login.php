<!DOCTYPE html>
<html>
<head>
<?php
$data['title'] = "FindingKost";
$this->load->view('header', $data); 
?>
</head>
<body>

<div class="row vertical-center valign-wrapper">
    <div class="valign hoverable card-panel col s12 m8 offset-m2 l6 offset-l3">
            <div class="row" style="margin-top: 15px">
                <span class="card-title">
                <div class="push-m1 col s12 m4 center-on-small-only">
                    <?php echo img('assets/images/favicon.gif', FALSE, ['height' => '80']);?>
                </div>
                <div class="right-aligned col s12 m2 center-on-small-only">
                    <h3 class="indigo-text darken-4">Finding<strong>Kost</strong></h3>
                </div>
                </span>
            </div>
        <div class="row">
            <div class="col s12">
                <ul class="tabs">
                    <li class="tab col s6 indigo lighten-3 waves-effect">
                        <a class="indigo-text darken-4" target="_self" href="<?php echo base_url()?>">
                            <strong>Pencarian</strong>
                        </a>
                    </li>
                    <li class="tab col s3">
                        <a class="active indigo-text darken-4"href="#login">Masuk</a>
                    </li>
                    <li class="tab col s3">
                        <a class="indigo-text darken-4" href="#signup">Daftar</a>
                    </li>
                </ul>
            </div>
            <div id="login" class="col s12"><?php $this->load->view('akun/v_login');?></div>
            <div id="signup" class="col s12">
                <h5 class="center-align indigo-text darken-4">
                    <italic>Daftar sebagai</italic>
                </h5>
                <p class="center-align">
                    <strong>
                        <a class="btn waves-effect">
                            <i class="material-icons left">fast_rewind</i>PEMILIK
                        </a>
                        <a class="btn waves-effect">
                            <i class="material-icons right">fast_forward</i>PENCARI
                        </a>    
                    </strong>
                </p>
            </div>
        </div>    
    </div>
</div>
<?php 
$this->load->view('footer'); 
?>
    <script>
        $(document).ready(function(){
            $('ul.tabs').tabs('select_tab', 'tab_id');
        });
    </script>
</body>
</html>