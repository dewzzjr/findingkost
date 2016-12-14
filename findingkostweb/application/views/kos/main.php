<div class="container">

    <br>
    <br>
    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Pencarian Cepat</h1>
        </div>
    </div>
    <hr>
    <?php if(isset($results)) { ?>
    <!-- Kos -->
    <?php
    foreach($results as $data) { 
    ?>
    
    <div class="row">
        <div class="col-md-7">
            <a href="<?= base_url('kos/detail/'.$data->id) ?>">
                <img class="img-responsive" 
                     src="<?= base_url('assets/img/'.$data->foto);?>" 
                     alt="<?= $data->id_pemilik; ?>">
            </a>
        </div>
        <div class="col-md-5">
            <h3>
                <?=
                $this->kos_model->nama_pemilik($data->id_pemilik);
                ?>
            </h3>
            <h4><?= $data->alamat; ?></h4>
            <p><?= $data->fasilitas; ?></p>
            <br>
            <h5>Rp <?php echo number_format($data->harga,0,',','.'); ?>/bulan</h5>
            <a class="btn btn-primary" href="<?= base_url('kos/detail/'.$data->id);?>">
                Lihat selengkapnya 
                <span class="glyphicon glyphicon-chevron-right">
                    
                </span>
            </a>
        </div>
    </div>
    <!-- /.row -->

    <hr>
    <?php
    }
    ?>

    <!-- Pagination -->
    <div class="row text-center">
        <div class="col-lg-12">
            <ul class="pagination ">
                <?= $links; ?>
            </ul>
        </div>
    </div>
    <?php
    } else {
    ?>
    <h1> No result </h1>
    <?php
    }
    ?>
    
</div>