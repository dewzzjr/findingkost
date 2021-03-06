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
                    <?php echo img('assets/images/favicon.gif', FALSE, ['height' => '80']);?>
                </div>
                <div class="right-aligned col s12 m2 center-on-small-only">
                    <h3 class="indigo-text darken-4">Finding<strong>Kost</strong></h3>
                    <h6 class="indigo-text darken-4"><strong>Administrator</strong> Mode</h6>
                </div>
                </a>
                </span>
            </div>
        <div class="row">
            <div class="col s12" align="center">
                  <table class="highlight">
                    <thead>
                      <tr>
                          <th data-field="name">Name</th>
                          <th data-field="username">Username</th>
                          <th data-field="role">Type</th>
                          <th data-field="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($akun as $ak) {
                      ?>
                      <tr>
                        <td><?php echo $ak->nama; ?></td>
                        <td><?php echo $ak->username; ?></td>
                        <td><?php 
                        if ($ak->tipe == 1)
                        {
                          echo 'Pemilik';
                        }
                        if ($ak->tipe == 2)
                        {
                          echo 'Pencari';
                        }
                        ?></td>
                        <td><a class="waves-effect waves-teal btn-flat" >Delete</a></td>
                        <?php
                        } ?>
                    </tbody>
                  </table>
                  <a class="waves-effect waves-light btn" href="<?php echo base_url('admin/index'); ?>">Back</a>
            </div>
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