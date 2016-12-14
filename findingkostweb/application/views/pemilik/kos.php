<div class="container">

        <div class="row">
            <section id="daftar">
				<header class="intro-header" style="background-image: url('/findingkostweb/assets/img/kos.jpg')">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
								<div class="page-heading">
									<span class="subheading"><em>silahkan daftar</em></span>
									
									<h1>Daftar Kos</h1>
									
									
								</div>
							</div>
						</div>
					</div>
				</header>
				
				<br>
				<form name="visi" method="post" action="" enctype="multipart/form-data">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nama Pemilik</label>
                            <input type="text" name="NamaPemilik" class="form-control" placeholder="Nama Pemilik" id="NamaPemilik" required data-validation-required-message="Masukkan nama pemilik kos">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Alamat</label>
                            <input type="text" name="Alamat" class="form-control" placeholder="Alamat Kos" id="Alamat" required data-validation-required-message="Masukkan alamat kos">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Daerah</label>
                            <input type="text" name="Daerah" class="form-control" placeholder="Daerah" id="Daerah" required data-validation-required-message="Masukkan daerah/wilayah kos">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Nomor Telepon</label>
                            <input type="number" name="NomorTelepon" class="form-control" placeholder="Nomor Telepon" id="NomorTelepon" required data-validation-required-message="Masukkan nomor telepon yang bisa dihubungi">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Foto</label>
							<br><h4 style="font-family:Times New Roman; color:#AEAEAE;">Foto</h4>
                            <input id="uploadImage" type="file" name="Foto" onchange="PreviewImage();"  placeholder="Foto"/>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Fasilitas</label>
                            <textarea rows="10" name="Fasilitas" class="form-control" placeholder="Fasilitas" id="message" required data-validation-required-message="Masukkan fasilitas yang tersedia"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
					<div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Harga sewa</label>
                            <input type="number" name="HargaSewa" class="form-control" placeholder="Harga Sewa" id="HargaSewa" required data-validation-required-message="Masukkan harga sewa kos per bulan">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default" name="simpan" value="Submit">Daftarkan Kos</button>
                        </div>
                    </div>
                </form>
            </div>
			
			

        </div>

    </div>