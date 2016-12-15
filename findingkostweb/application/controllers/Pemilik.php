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
            if ( $tipe === 0 ) {
                redirect('admin');
            } else
            if ( $tipe === 1 ){
                // let them in
            } else 
            if ( $tipe === 2 ) {
                redirect('pencari');
            } else {
                show_404();
            }
        }

        $this->load->model('akun_model');
        $this->load->model('kos_model');
    }

    function index(){
        $username = $this->session->userdata('username'); //ambil user name yang ada di session
        $id = $this->session->userdata('id'); //ambil id dari session
        $data['profil'] = $this->akun_model->cek_akun($username);
        $data['kos'] = $this->kos_model->foto_kos($id);
        $data['title'] = "Beranda";
        $this->load->view('header', $data); //ambil title
        $this->load->view('nav');
        $this->load->view('pemilik/menu', $data); //ambil kos
        $this->load->view('akun/profil', $data); //ambil profil
        $this->load->view('footer');
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

    public function pengaturan(){

    }

    public function submit_kos(){

    }

    public function submit_penghuni($pencari){

    }

    public function submit_tagihan(){
        
    }

    public function submit_lunas($pencari){
        
    }

    public function proses_data($username) {
        
    }

}
