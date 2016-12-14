<!-- Page Content -->
<div class="container">
    <div class="row">
        <!-- Blog Post Content Column -->
        <div class="col-lg-8">
            <br>
            <br>
            <br>
            <!-- Pemilik kos -->
            <h2><?php echo $kos->nama; ?></h2>
            <!-- Alamat kos -->
            <p class="lead"><?php echo $kos->alamat; ?>
            <br><?php echo $kos->telepon; ?></p>
            <hr>
            <!-- Foto -->
            <img class="img-responsive" src="<?php echo base_url('assets/img/'.$kos->foto); ?>" alt="">
            <hr>
            <!-- Deskripsi & fasilitas -->
            <h4>Fasilitas :</h4><?php echo $kos->fasilitas; ?>
            <hr>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="col-md-4">
            <!-- Blog Search Well -->
            <div class="well">
                <h4>Harga</h4>
                Rp <?= number_format( $kos->harga, 2, ",", "." ); ?> / bulan
                <button class="btn btn-default" type="button">Daftar sekarang</button>  
                <!-- /.input-group -->
            </div>
        </div>
    </div>