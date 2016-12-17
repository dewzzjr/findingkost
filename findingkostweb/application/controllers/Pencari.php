<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencari extends CI_Controller {
	
    function __construct(){
        parent::__construct();        
        $tipe = $this->session->tipe;
        
        if ( !$this->session->has_userdata('username') ){
            redirect('akun/masuk');
        } else
        {
            if ( $tipe == 0 ) {
                redirect('admin');
            } else
            if ( $tipe == 1 ){
                redirect('pemilik');
            } else 
            if ( $tipe == 2 ) {
                // let them in
            } else
            {
                show_404();
            }
        }

        $this->load->model('akun_model');
        $this->load->model('kos_model');
    }

    public function index(){
        $profil     = $this->akun_model->akun( $this->session->id );
        $penghuni   = $this->kos_model->penghuni( $this->session->id );
        $data = [
            'title'         => 'FindingKost | ' . ucwords( $profil->nama ),
            //'link_foto'     => base_url( 'assets/images/' . $kos->foto ),
            'link_username' => base_url( 'akun/profil/' . $profil->username ),
            'nama'          => ucwords( $profil->nama ),
            'alamat'        => $profil->alamat,
            'telepon'       => $profil->telepon,
            'email'         => $profil->email,
            //'harga'         => number_format( $kos->harga, 2, ",", "." )
        ];
        $view_penghuni = $this->get_view_penghuni( $penghuni );
        $data['view_bayar'] = $view_penghuni['view_bayar'];
        $data['view_kos'] = $view_penghuni['view_kos'];
        
        //var_dump($data);
        $this->parser->parse('pencari/menu', $data);
    }
    
    private function get_view_penghuni( $penghuni ) {
        if ( ! $penghuni ) {   
            $belum = '<p class="red white-text"><strong>Belum Terdaftar</strong></p>';
            $data['view_bayar'] = $belum;
            $data['view_kos']   = $belum;
        } else {
            $kos     = $this->kos_model->kos( $penghuni );
            $id_p    = $kos->id_pemilik;
            $pemilik = $this->akun_model->akun( $id_p );
            $data = [
                'link_foto'     => base_url( 'assets/images/' . $kos->foto ),
                'link_username' => base_url( 'akun/profil/' . $pemilik->username ),
                'fasilitas'     => $kos->fasilitas,
                'nama'          => ucwords( $pemilik->nama ),
                'alamat'        => $kos->alamat,
                'telepon'       => $pemilik->telepon,
                'harga'         => number_format( $kos->harga, 2, ",", "." )
            ];
            $vbayar = $this->load->view('pencari/v_kos','', TRUE);
            $vkos = $this->load->view('pencari/v_bayar','', TRUE);
            $data['view_bayar'] = $this->parser->parse_string($vbayar, $data);
            $data['view_kos']   = $this->parser->parse_string($vkos, $data);
        }
        return $data;
    }

    public function kos(){
        $data['title'] = "Kos yang Dihuni";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('pencari/menu');
        $this->load->view('pencari/kos', $data);
        $this->load->view('footer');
    }

    public function bayar(){
        $data['title'] = "Konfirmasi Pembayaran";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('pencari/menu');
        $this->load->view('pencari/bayar', $data);
        $this->load->view('footer');
    }

    public function review($kos){

    }

    public function pengaturan(){

    }

    public function submit_kos(){

    }

    public function submit_bayar(){
        
    }

    public function proses_data($username) {
        
    }

}
