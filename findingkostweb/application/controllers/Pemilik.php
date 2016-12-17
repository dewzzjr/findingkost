<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilik extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $tipe = $this->session->userdata('tipe');
        
        if ( !$this->session->has_userdata('username') ){ //cek apakah belum login
            redirect('akun/masuk'); // redirect
        } else
        {
            if ( $tipe == 0 ) {
                redirect('admin');
            } else
            if ( $tipe == 1 ){
                // let them in
            } else 
            if ( $tipe == 2 ) {
                redirect('pencari');
            } else {
                show_404();
            }
        }

        $this->load->model('akun_model');
        $this->load->model('kos_model');
    }

    function index(){
        $profil     = $this->akun_model->akun( $this->session->id );
        //$penghuni   = $this->kos_model->penghuni( $this->session->id );
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
        //$view_penghuni = $this->get_view_penghuni( $penghuni );
        //$data[] = $view_penghuni;
        $this->parser->parse('pemilik/menu', $data);
    }

    public function kos() {
        $data['title'] = "Beranda";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('pemilik/kos', $data);
        $this->load->view('footer');
    }

	
    public function penghuni(){
        $data['title'] = "Beranda";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('pemilik/menu');
        $this->load->view('pemilik/penghuni', $data);
        $this->load->view('footer');
    }


}
