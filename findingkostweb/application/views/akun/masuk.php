
<!-- Main Content -->
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
		   
			<!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
			<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
			<!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
			
		</div>
	</div>
</div>


<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<section id="masuk">
<!--header class="intro-header" style="background-image: url('<?= base_url('assets/img/masuk.jpg');?>')"-->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="page-heading">

                    <br><br><br>
                    <?php if($fail) { ?>
                        <p class="text-danger">Nama pengguna atau kata sandi yang dimasukkan salah</p>
                    <?php } ?>
                    <?php echo form_open('akun/submit_masuk'); ?>	
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nama Pengguna</label>
                                <input type="text" 
                                       name="username" 
                                       class="form-control" 
                                       placeholder="Nama Pengguna" 
                                       id="name" 
                                       required data-validation-required-message="Masukkan nama pengguna Anda">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Kata Sandi</label>
                                <input type="password" 
                                       name="password" 
                                       class="form-control" 
                                       placeholder="Kata Sandi" 
                                       id="password" 
                                       required data-validation-required-message="Masukkan kata sandi Anda">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" name="masuk" class="btn btn-default">Masuk</button>
                            </div>
                        </div>
                        </form>
                        <em>dapatkan akun 
                            <a href="<?= base_url('daftar');?>">
                                <strong>disini</strong>
                            </a>
                        </em>
                </div>
            </div>
        </div>
    </div>
<!--/header-->
</section>
<hr>