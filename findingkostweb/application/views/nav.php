<?php
$modal = [
[
    'class' => "modal-trigger",
    'id'    => "login"
], 
[
    'class' => "modal-trigger",
    'id'    => "signup"
]
];
$list = [
    [
        anchor('kos/cari', '<i class="material-icons right">search</i>Pencarian'),
        anchor(current_url() . 'akun/masuk', '<i class="material-icons right">open_in_browser</i>Masuk'),
        anchor(current_url() . 'akun/daftar', '<i class="material-icons right">library_add</i>Daftar')    
    ], 
    [
        anchor('kos/cari', '<i class="material-icons right">search</i>Pencarian'),
        anchor('akun', '<i class="material-icons right">person_pin</i>' . $this->session->nama),
        anchor('akun/keluar', '<i class="material-icons right">power_settings_new</i>Keluar')    
    ]
];

$attributes = [
    'class' => 'right hide-on-med-and-down',
    'id'    => 'nav-mobile'
];
$ul = ($this->session->has_userdata('username') ) ? $list[1] : $list[0];
?>
<nav>
    <div class="container">
    <div class="nav-wrapper">
        <a href="<?php base_url(); ?>" class="brand-logo">
            Finding<strong>Kost</strong>
        </a>
        <?php echo ul($ul, $attributes); ?>
    </div>
    </div>
</nav>