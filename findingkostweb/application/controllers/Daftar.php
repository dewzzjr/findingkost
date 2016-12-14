<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('akun_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = "Daftar";
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('akun/menu-daftar');
        $this->load->view('footer');
    }

    public function pencari(){
        $data['title'] = "Daftar Pencari";
        $data['akun'] = "Pencari";
        $data['tipe'] = 2;
        $this->form($data);
    }

    public function pemilik()
    {
        $data['title'] = "Daftar Pemilik";
        $data['akun'] = "Pemilik";
        $data['tipe'] = 1;
        $this->form($data);
        
    }

    public function submit_daftar()
    {
        $username = $this->input->post('username');
        $passconf = $this->input->post('passconf');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $query = $this->akun_model->cek_akun($username);
        $akun = $query->row();
        if($akun->username == $username && $passconf != $password){
            redirect('daftar');
        } else {
            $data = array(
                'username' => $username,
                'password' => md5($password),
                'email'    => $email,
                'nama'     => $this->input->post('nama'),
                'alamat'   => $this->input->post('alamat'),
                'telepon'  => $this->input->post('telepon'),
                'tipe'     => $this->input->post('tipe')
            );
            $query = $this->akun_model->tambah_akun($data);
        }
    }
    
    private function form($data)
    {
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|min_length[5]|max_length[255]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[15]|is_unique[akun.username]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[akun.email]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'trim|required');
        $this->form_validation->set_rules('telepon', 'No Telepon', 'trim|required|is_natural');
        $this->load->view('header', $data);
        $this->load->view('nav');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('akun/daftar', $data);
        }
        else
        {
            $this->load->view('akun/berhasil');
        }
        $this->load->view('footer');
    }
    
}