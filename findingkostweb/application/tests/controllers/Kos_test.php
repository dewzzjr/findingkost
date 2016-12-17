<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Kos_test extends TestCase
{
    public function setUp()
    {
        $this->resetInstance();
    }
    
    public function test_index()
    {
        $output = $this->request('GET', '/');
        $this->assertContains('Finding<strong>Kost</strong>', $output);
    }

    public function test_cari()
    {
        $output = $this->request('GET', 'kos/cari/6');
        $this->assertContains('<p>Kamar tidur 3x4, Kamar mandi dalam, Dapur, Parkir Mobil</p>', $output);
    }
    
    public function test_detail()
    {
        $output = $this->request('GET', 'kos/detail/1');
        $this->assertContains('<i class="material-icons right">more_vert</i>', $output);
        $this->assertContains('<mark><b>Rp 500.000,00 / bulan-</b></mark>', $output);
        $this->assertContains('<strong>Jalan Tegal Mulyorejo Baru 114 Mulyosari, Surabaya</strong>', $output);
        $this->assertContains('<p>Kamar tidur 3x4, Kamar mandi dalam, Dapur, Parkir Mobil</p>', $output);
    }
    
    public function test_detail_notlogin()
    {
        $output = $this->request('GET', 'kos/detail/1');
        $this->assertContains('<li><a href="http://localhost/C:\xampp\php\phpunit/akun#login"><i class="material-icons right">play_for_work</i>MASUK</a></li>', $output);
    }
    
    public function test_detail_login_pencari()
    {
        $_SESSION['username'] = 'dewzzjr';
        $_SESSION['id']       = '999';
        $_SESSION['tipe']     = '2';
        $output = $this->request('GET', 'kos/detail/1');
        $this->assertContains('<p><a class="btn waves-effect" href="http://localhost/C:\xampp\php\phpunit/pencari/daftar/1">Daftar sekarang</a></p>', $output);
    }
    
    public function test_detail_login_penghuni()
    {
        $_SESSION['username'] = 'ayushaqs';
        $_SESSION['id']       = '1';
        $_SESSION['tipe']     = '2';
        $output = $this->request('GET', 'kos/detail/1');
        $this->assertContains('&nbsp;', $output);
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
