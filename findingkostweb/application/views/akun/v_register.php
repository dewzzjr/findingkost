<?php 
$u = array(
    'type'  => 'text',
    'name'  => 'username',
    'id'    => 'username',
    'value' =>  set_value('username'),
    'class' => 'required validate',
);

$n = array(
    'type'   => 'text',
    'name'   => 'nama',
    'id'     => 'nama',
    'value'  =>  set_value('nama'),
    'pattern'=> '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$',
    'class'  => 'required validate'
);

$e = array(
    'type'   => 'text',
    'name'   => 'email',
    'id'     => 'email',
    'value'  =>  set_value('email'),
    'pattern'=> '[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$',
    'class'  => 'required validate'
);

$p = array(
    'type'  => 'password',
    'name'  => 'password',
    'id'    => 'password',
    'class' => 'required validate'
);

$p2 = array(
    'type'  => 'password',
    'name'  => 'cpassword',
    'id'    => 'cpassword',
    'class' => 'required validate'
);

$a = array(
    'type'  => 'text',
    'name'  => 'alamat',
    'id'    => 'alamat',
    'class' => 'required validate'
);

$t = array(
    'type'  => 'tel',
    'name'  => 'telepon',
    'id'    => 'telepon',
    'class' => 'required validate'
);

$s = array(
    'type'   => 'submit',
    'name'   => 'submit',
    'id'     => 'signup',
    'value'  => 'true',
    'class'  => 'btn waves-effect waves-light indigo darken-4 ',
    'content'=> 'Login<i class="material-icons right">send</i>'
);
echo form_open('akun/masuk');
?>
<div class="row">
    <div class="input-field col s8 offset-s2 indigo-text darken-4">
        <i class="material-icons prefix">perm_identity</i>
<?php        
        echo form_input($u);        
        echo form_label('username', $u['name']);
?>
    </div>
    <div class="input-field col s8 offset-s2 indigo-text darken-4" >
        <i class="material-icons prefix">email</i>
<?php
        echo form_input($e);
        echo form_label('email', $e['name']);
?>
    </div>
    <div class="input-field col s8 offset-s2 indigo-text darken-4" >
        <i class="material-icons prefix">lock_outline</i>
<?php
        echo form_input($p);
        echo form_label('password', $p['name']);
?>
    </div>
    <div class="input-field col s8 offset-s2 indigo-text darken-4" >
        <i class="material-icons prefix">lock</i>
<?php
        echo form_input($p2);
        echo form_label('confirm password', $p2['name']);
?>
    </div>
    <div class="input-field col s8 offset-s2 indigo-text darken-4">
        <i class="material-icons prefix">perm_identity</i>
<?php        
        echo form_input($n);
        echo form_label('nama', $n['name']);
?>
    </div>
    <div class="input-field col s8 offset-s2 indigo-text darken-4">
        <i class="material-icons prefix">location_on</i>
<?php        
        echo form_input($a);
        echo form_label('alamat', $a['name']);
?>
    </div>
    <div class="input-field col s8 offset-s2 indigo-text darken-4">
        <i class="material-icons prefix">call</i>
<?php
        echo form_input($t);
        echo form_label('telepon', $t['name']);
?>
    </div>
</div>
<div class="row center-align">
<?php 
echo form_button($s);
echo form_close();
?>
</div>