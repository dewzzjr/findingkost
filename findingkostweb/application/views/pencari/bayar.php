
     <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    
                    <h2 class="section-heading">KONFIRMASI PEMBAYARAN</h2> 
                    
                    <h3> Input Pembayaran</h3>
                    <div class="col-md-8">
                        <div class="well">
                                        Bulan<br>
                                                <?php
                                                    $bln=array(1=>"Januari","Februari","Maret","April","Mei", "Juni","July","Agustus","September","Oktober", "November","Desember");
                                                    echo "<select name=bulan>
                                                    <option value=Januari selected>Januari</option>";
                                                    for($bulan=2; $bulan<=12; $bulan++){
                                                        echo "<option value=$bulan>$bln[$bulan]</option>";
                                                    }
                                                    echo "</select>";
                                                ?>
                                        <br>
                                        <br>
                                        Pembayaran<br>
                                                <input type="number" class="text" placeholder="Rp" /></td> <!--harga sewa/nominal Rp tagihan>\-->
                                        <br>
                                        <br>
                                        <input class="btn btn-default" type="submit" value="Submit"/>

                        </div>
                    </div>
                
                </div>
            </div>
        </div>
           
     </div>