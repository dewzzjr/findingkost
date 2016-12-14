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
        $this->assertContains('<em>Dapatkan hunian yang anda inginkan</em>', $output);
    }

    public function test_cari()
    {
        $output = $this->request('GET', 'kos/cari/6');
        $this->assertContains('<p>Kamar tidur <br>Kamar mandi <br>Parkiran <br>Dapur <br>AC</p>', $output);
    }
    public function test_detail()
    {
        $output = $this->request('GET', 'kos/detail/1');
        $this->assertContains('<h2>Redian Galih Irianti</h2>', $output);
        $this->assertContains('Tegal Mulyorejo Baru 114 Mulyorejo', $output);
        $this->assertContains('<br>81675438</p>', $output);
        $this->assertContains('<h4>Fasilitas :</h4>', $output);
        $this->assertContains('Kamar Tidur <br>Kamar mandi <br>Dapur <br>Parkir', $output);
        $this->assertContains('Rp 500.000,00 / bulan', $output);
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
