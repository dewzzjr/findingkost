<?php 
$n = array(
    'type'  => 'text',
    'name'  => 'username',
    'id'    => 'username',
    'value' =>  set_value('username'),
    'class' => 'validate required'
);

$p = array(
    'type'  => 'password',
    'name'  => 'password',
    'id'    => 'password',
    'class' => 'validate required'
);

$s = array(
    'type'   => 'submit',
    'name'   => 'submit',
    'id'     => 'login',
    'value'  => 'true',
    'class'  => 'btn waves-effect waves-light indigo darken-4',
    'content'=> 'Login<i class="material-icons right">send</i>'
);
echo form_open('akun/submit_masuk');
?>
<div class="row">
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