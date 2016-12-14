
     <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    
                    <h2 class="section-heading">PROFIL</h2> 
                    <?php //var_dump($profil);die(); ?>
                          <p>   
                        <?= $profil->nama; ?> <!-- nama lengkap-->
                         <br><?= $profil->email; ?> <!-- alamat email-->
                         <br><?= $profil->telepon; ?> <!-- no telepon-->
                         <br><?= $profil->alamat; ?> <!-- alamat tinggal-->
                         </p>
                
                </div>
            </div>
        </div>
           
     </div>