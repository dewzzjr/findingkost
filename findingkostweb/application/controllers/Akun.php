<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('akun_model');
    }

    public function index()
    {
        if ( $this->session->has_userdata('username') ){
            $tipe = $this->session->userdata('tipe');
            if ( $tipe == 0 ) {
                redirect('admin');
            } else
            if ( $tipe == 1 ){
                redirect('pemilik');
            } else 
            if ( $tipe == 2 ){
                redirect('pencari');
            }
        } else {
            $this->masuk();
        }
    }
    
    public function masuk($fail = NULL)
    {
        $this->load->helper('form');
        $data['title'] = "Login";
        $data['fail'] = ( isset($fail) ? true : false );
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('akun/masuk', $data);
        $this->load->view('footer');
    }

    public function profil($username)
    {
        $data['profil'] = $this->akun_model->cek_akun($username);
        $data['title'] = "Profil";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('akun/profil', $data);
        $this->load->view('footer');
    }

    public function keluar()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('tipe');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('id');
        $this->session->sess_destroy();
        redirect('');
    }

    public function submit_masuk()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->akun_model->cek_akun($username);
        $pass1 = md5($password);
        $pass2 = $user->password;
            
        if ( isset($user) AND $pass1 == $pass2 ) {
            $data = array(
                'username'=>$user->username,
                'nama'=>$user->nama,
                'tipe'=>$user->tipe,
                'id'=>$user->id
            );
            $this->session->set_userdata($data);
            redirect('');
        } 
        else
        {
            redirect('akun/masuk/fail');
        }
    }
}
