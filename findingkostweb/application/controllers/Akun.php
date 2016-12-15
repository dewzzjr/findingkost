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
            redirect('akun/masuk');
        }
    }

    public function masuk(){
        $data = [
            'title' => 'FindingKos',
            'link'  => base_url(),
            'icon'  => img( 'assets/images/favicon.gif', FALSE, ['height' => '80'] )
        ];
        $this->parser->parse('akun/masuk', $data);
    }
    
    public function profil($username = NULL)
    {
        if(isset($username)){
            $profil = $this->akun_model->cek_akun($username);
            if ( ! $profil ) {
                show_404();
            }
            $data = [
                'title'   => 'FindingKos | ' . ucwords($profil->nama),
                'nama'    => ucwords($profil->nama),
                'email'   => $profil->email,
                'alamat'  => $profil->alamat,
                'telepon' => $profil->telepon
            ];
            $this->parser->parse('akun/profil', $data);
        } else {
            redirect('akun');
        }
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
            redirect('akun/masuk?fail=true');
        }
    }
}
