<!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- Blog Post Content Column -->
            <br>
            <br>
            <br>
            <!-- nama penghuni -->
            <h2>Ayusha Qamara</h2>
            <br>
            <h3> Input Tagihan</h3>
            <div class="col-md-8">
                <div class="well">
                    <table >
                        <tr>
                            <td width="150px">Bulan</td>
                            <td width="300px">Tagihan</td>
                            <td width="300px"></td>
                        </tr>
                        <tr>
<?php
    $hidden = [
        'id' => $this->session->id
    ];
    
    $bln = [
        1 => "Januari",
        2 => "Februari",
        3 => "Maret",
        4 => "April",
        5 => "Mei", 
        6 => "Juni", 
        7 => "July",
        8 => "Agustus",
        9 => "September",
        10 => "Oktober", 
        11 => "November",
        12 => "Desember"
        ];
    
    $harga = [
        'type'        => 'number',
        'placeholder' => 'Rp',
        'class'       => 'text'
    ];
    $submit = [
        'class'         => 'btn btn-default'
    ];
    echo form_open('pencari/submit_bayar', '', $hidden);
    echo '<td>';
    echo form_dropdown('bulan', $bln, date('n'));
    echo '</td>';
    echo '<td>';
    echo form_input($harga);
    echo '</td>';
    echo '<td>';
    echo form_submit('submit', 'Simpan', $submit);
    echo '</td>';
    
?>               
                        </tr>
                    </table>
                </div>
            </div>
            <h3>Konfirmasi Pembayaran Tagihan</h3>
            <div class="col-md-8">
                <div class="well">
                    <table >
                        <tr>
                            <td width="200px">Tagihan</td>
                            <td width="200px">    </td>
                        </tr>
                        <tr>
                            <td> <!-- combo box tagihan-->
                                <!--mengambil nilai dari database kolom tagihan yang sudah diinputkan diatas-->
                                <select name="konfirmasitagihan">
                                  <option>Bulan - Rp</option>
<?php /*koneksi
      $namaserver='localhost';
      $userdb='root';
      $passdb='';
      $namadb='findingkost';

 $koneksi=mysql_connect($namaserver,$userdb,$passdb);
 mysql_select_db($namadb,$koneksi);
      $sql = mysql_query("SELECT tagihan FROM penghuni");
      while($row = mysql_fetch_assoc($sql)){
      echo "<option value='$row[konfirmasitagihan]'>$row[tagihan]</option>";} */
?>
                                </select>
                            </td>
                            <td>
                                <input class="btn btn-default" type="submit" value="Lunas"/>
                            </td>
                            <!--ketika submit value dari bulan dan tagihan dimasukkan kedalam satu kolom dalam database yaitu kolom tagihan (misal: Januari-Rp 1.000.000) -->
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>