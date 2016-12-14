<?php
class Akun_model_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('Akun_model');
        $this->akun = $this->CI->Akun_model;
    }
    
    public function test_cek_akun_admin(){
        
        $obj            = new stdClass();
        $obj->id        = "999";
        $obj->username  = "admin";
        $obj->password  = "202cb962ac59075b964b07152d234b70";
        $obj->nama      = "Administrator";
        $obj->tipe      = "0";
        $obj->email     = "findingkost@gmail.com";
        $obj->telepon   = "0";
        $obj->alamat    ="ITS";
        
        $expected = $obj;
        $actual = $this->akun->cek_akun('adMin');
        $this->assertEquals($expected, $actual);
    }
    
    public function test_akun() {
        $obj            = new stdClass();
        $obj->id        = "999";
        $obj->username  = "admin";
        $obj->password  = "202cb962ac59075b964b07152d234b70";
        $obj->nama      = "Administrator";
        $obj->tipe      = "0";
        $obj->email     = "findingkost@gmail.com";
        $obj->telepon   = "0";
        $obj->alamat    = "ITS";
        
        $actual = $this->akun->akun(999);
        $this->assertEquals($obj, $actual);
    }
    
    public function test_akun_notfound() {
        $actual = $this->akun->akun(-1);
        $this->assertNull($actual);
    }


    public function test_penghuni_kos() {
        $expected[0] = [
            'id' => '1',
            'id_kos' => '1',
            'id_pemilik' => '2',
            'id_penghuni' => '1',
            'status' => '1',
            'tagihan' => '500000',
            'lunas' => '0'
        ];
        $actual = $this->akun->penghuni_kos(1)->result_array();
        $this->assertEquals($expected, $actual);
    }
        
    public function test_semua_akun(){
        
        $obj            = new stdClass();
        $obj->id        = "999";
        $obj->username  = "admin";
        $obj->password  = "202cb962ac59075b964b07152d234b70";
        $obj->nama      = "Administrator";
        $obj->tipe      = "0";
        $obj->email     = "findingkost@gmail.com";
        $obj->telepon   = "0";
        $obj->alamat    = "ITS";
        
        $expected = $obj;
        $actual = $this->akun->semua_akun();
        $this->assertEquals(13, $actual->num_rows());
        $this->assertEquals($expected, $actual->result()[11]);
    }
    
    public function test_cek_akun_not_found(){
        $actual = $this->akun->cek_akun('not_found');
        $this->assertNull($actual);
    }
    
    public function test_tambah_akun(){
        
        $data = [
            'id'        => '900',
            'username'  => 'testing',
            'password'  => md5('testing'),
            'nama'      => 'Testing Akun',
            'tipe'      => '2',
            'email'     => 'testing@testing.com',
            'telepon'   => '123456',
            'alamat'    => 'Testing',
        ];
        
        $actual = $this->akun->tambah_akun($data);
        $this->assertTrue($actual);
        $delete = $this->akun->hapus_akun(900);
        $this->assertTrue($delete);
    }
    
    public function test_tambah_akun_fail(){
        
        $data = [
            'id'        => '1',
            'username'  => 'testing',
            'password'  => md5('testing'),
            'nama'      => 'Testing Akun',
            'tipe'      => '2',
            'email'     => 'testing@testing.com',
            'telepon'   => '123456',
            'alamat'    => 'Testing',
        ];
        
        $actual = $this->akun->tambah_akun($data);
        $this->assertFalse($actual);
    }
    
    public function test_hapus_akun_fail(){
        $actual = $this->akun->hapus_akun(-1);
        $this->assertFalse($actual);
    }
    
}
