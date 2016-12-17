<?php
class Kos_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Kos_model');
        $this->kos = $this->CI->Kos_model;
    }
    
    
    public function test_cari() {
        $actual = $this->kos->cari(['daerah' => 'mulyosari'])->num_rows();
        $this->assertEquals($actual, 3);
    }
    
    public function test_harga() {
        $actual = $this->kos->harga(0, 500000)->num_rows();
        $this->assertEquals($actual, 6);
    }
    

    public function test_kos(){
        $actual = $this->kos->kos(2);
        
        $obj            = new stdClass();
        $obj->id        = "2"; 
        $obj->alamat    = "Mulyosari Utara VII Mulyosari Surabaya";
        $obj->daerah    = "Mulyosari";
        $obj->id_pemilik= "5";
        $obj->foto      = "foto.jpg";
        $obj->fasilitas = "Kamar tidur 3x2.5, Kamar mandi luar, Dapur";
        $obj->harga     = "500000";
        
        $expected = $obj;
        $this->assertEquals($expected, $actual);
    }
    
    public function test_kos_fail(){
        $actual = $this->kos->kos(-1);
        $this->assertNull($actual);
    }
    
    public function test_penghuni(){
        $actual = $this->kos->penghuni(1);
        $this->assertEquals(1,$actual);
    }
    
    public function test_akun_penghuni () {
        $obj = new stdClass();
        $obj->id            = '1';
        $obj->id_kos        = '1';
        $obj->id_pemilik    = '2';
        $obj->id_penghuni   = '1';
        $obj->status        = '1';
        $obj->tagihan       = '500000';
        $obj->lunas         = '0';
        $expected[] = $obj;
        
        $actual = $this->kos->akun_penghuni(1);
        $this->assertEquals($expected, $actual);
    }

    public function test_cari_notfound() {
        $actual = $this->kos->cari(['daerah' => 'notfound'])->num_rows();
        $this->assertEquals($actual, 0);
    }
    
    public function test_harga_notfound() {
        $actual = $this->kos->harga(500000, 0)->num_rows();
        $this->assertEquals($actual, 0);
    }
    
    public function test_kos_notfound() {
        $actual = $this->kos->kos(-1);
        $this->assertNull($actual);
    }
    
}
