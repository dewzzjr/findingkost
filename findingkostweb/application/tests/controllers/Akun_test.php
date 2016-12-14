<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Akun_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
    }
    
    public function test_index()
    {
        $output = $this->request('GET', 'akun');
        $this->assertContains('<strong>disini</strong>', $output);
    }

    public function test_profil()
    {
        $output = $this->request('GET', 'akun/profil/dewzzjr');
        $this->assertContains('<br>dewzzpro@gmail.com', $output);
        $this->assertContains('<br>2147483647', $output);
        $this->assertContains('<br>123123123123', $output);
    }
    public function test_profil_pencari()
    {
        $_SESSION['username'] = "ayushaqs";
        $_SESSION['tipe'] = "2";
        $this->request('GET', 'akun');
        $this->assertRedirect('pencari');
    }
    
    public function test_profil_pemilik()
    {
        $_SESSION['username'] = "rediangalih";
        $_SESSION['tipe'] = "1";
        $this->request('GET', 'akun');
        $this->assertRedirect('pemilik');
    }
    
    public function test_submit_masuk_nopassword(){
        $this->request('POST', 'akun/submit_masuk',
            [
                'username' => 'dewzzjr',
                'password' => '',
            ]);
        $this->assertRedirect('akun/masuk/fail');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_submit_masuk_nousername(){
        $this->request('POST', 'akun/submit_masuk',
            [
                'username' => '',
                'password' => '123',
            ]);
        $this->assertRedirect('akun/masuk/fail');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_submit_masuk_unmatch(){
        $this->request('POST', 'akun/submit_masuk',
            [
                'username' => 'dewzzjr',
                'password' => 'unmatch',
            ]);
        $this->assertRedirect('akun/masuk/fail');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_submit_masuk(){
        $this->assertFalse( isset($_SESSION['username']) );
        $this->request('POST', 'akun/submit_masuk',
            [
                'username' => 'dewzzjr',
                'password' => '123',
            ]);
        $this->assertRedirect('');
        $this->assertEquals('dewzzjr', $_SESSION['username']);
    }
    
    public function test_keluar(){
        $_SESSION['username'] = "rediangalih";
        $_SESSION['tipe'] = "1";
        $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'akun/keluar');
        $this->assertRedirect('');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_keluar_(){
        $this->assertFalse( isset($_SESSION['username']) );
        $this->request('GET', 'akun/keluar');
        $this->assertRedirect('');
        $this->assertFalse( isset($_SESSION['username']) );
    }
    
    public function test_method_404()
    {
        $this->request('GET', 'kos/method_not_exist');
        $this->assertResponseCode(404);
    }

    public function test_APPPATH()
    {
        $actual = realpath(APPPATH);
        $expected = realpath(__DIR__ . '/../..');
        $this->assertEquals(
            $expected,
            $actual,
            'Your APPPATH seems to be wrong. Check your $application_folder in tests/Bootstrap.php'
        );
    }
}
