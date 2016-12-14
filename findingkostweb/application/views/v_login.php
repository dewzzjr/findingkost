<div class="container vertical-center" >
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
<?php 
$n = array(
    'type'  => 'text',
    'name'  => 'username',
    'id'    => 'username',
    'value' =>  set_value('username'),
    'class' => 'validate',
    'length'=> '12'
);

$p = array(
    'type'  => 'password',
    'name'  => 'password',
    'id'    => 'password',
    'class' => 'validate'
);

$s = array(
    'type'   => 'submit',
    'name'   => 'login',
    'id'     => 'login',
    'value'  => 'true',
    'class'  => 'btn waves-effect waves-light indigo darken-4',
    'content'=> 'Login<i class="material-icons right">send</i>'
);
echo form_open('akun/masuk');
?>
                <div class="input-field col s8 offset-s2 indigo-text darken-4">
                    <i class="material-icons prefix">perm_identity</i>
<?php        
echo form_input($n);        
echo form_label($n['name'], $n['name']);
?>
                </div>
                <div class="input-field col s8 offset-s2 indigo-text darken-4">
                    <i class="material-icons prefix">vpn_key</i>
<?php
echo form_input($p);
echo form_label($p['name'], $p['name']);
?>
                </div>
            </div>
            <div class="row center-align">
<?php 
echo form_button($s);
echo form_close();
?>
            </div>
        </div>    
    </div>
</div>