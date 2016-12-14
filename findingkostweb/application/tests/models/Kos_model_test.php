<?php
class Kos_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Kos_model');
        $this->kos = $this->CI->Kos_model;
    }
    
    
    public function test_kos_notfound() {
        $actual = $this->kos->kos(-1);
        $this->assertNull($actual);
    }

    
    public function test_kos(){
        $actual = $this->kos->kos(2);
        
        $obj            = new stdClass();
        $obj->id        = "5"; 
        $obj->alamat    = "Mulyosari Utara VII Mulyosari Surabaya";
        $obj->daerah    = "Mulyosari";
        $obj->id_pemilik= "5";
        $obj->foto      = "foto.jpg";
        $obj->fasilitas = "Kamar tidur <br>Kamar mandi <br>Parkir";
        $obj->harga     = "500000";
        $obj->username  = "dewangga";
        $obj->password  = "4d1a65f1c6d24c1f8f714fe7e31d29fc";
        $obj->nama      = "Dewangga Prasetya Praja";
        $obj->tipe      = "1";
        $obj->email     = "dewangga@gmail.com";
        $obj->telepon   = "99389";
        
        $expected = $obj;
        $this->assertEquals($expected, $actual);
    }
    public function test_akun_penghuni(){
        $actualNull = $this->kos->akun_penghuni(-1);
        $this->assertEquals([],$actualNull);
    }
    
    public function test_nama_pemilik(){
        $result			= $this->kos->nama_pemilik(2);
	$expected		= 'Redian Galih Irianti';
        $this->assertEquals($expected, $result);
    }
}
