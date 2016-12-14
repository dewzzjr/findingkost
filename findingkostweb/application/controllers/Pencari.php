<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pencari extends CI_Controller {
	
    function __construct(){
        parent::__construct();        
        $tipe = $this->session->userdata('tipe');
        
        if ( !$this->session->has_userdata('username') ){
            redirect('akun/masuk');
        } else
        {
            if ( $tipe == 0 ) {
                //admin page
            } else
            if ( $tipe == 1 ){
                redirect('pemilik');
            } else 
            if ( $tipe == 2 ){
                // let them in
            }
        }

        $this->load->model('akun_model');
        $this->load->model('kos_model');
    }

    public function index(){
        $data['profil'] = $this->akun_model->cek_akun($this->session->userdata('username'));
        //$data['kos'] = $this->kos_model->kos($id)->row();
        $data['title'] = "Profil";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('pencari/menu');
        $this->load->view('akun/profil', $data);
        $this->load->view('footer');
 
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
