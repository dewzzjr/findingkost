<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kos extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('kos_model');
        $this->load->library('pagination');
    }

    public function index(){
        //$data['title'] = "Beranda";
        //$this->load->view('header', $data);
        //$this->load->view('nav');
        $this->load->view('beranda');
        //$this->load->view('footer');
    }

    public function cari(){
        $config['base_url'] = base_url().'kos/cari';
        $config['total_rows'] = $this->kos_model->hitung();
        $config['per_page'] = 6;
        $config['uri_segment'] = 3;
        
        $this->pagination->initialize($config);
        
        $page = ( $this->uri->segment(3) ) ? $this->uri->segment(2) : 0;
        $data['results'] = $this->kos_model->semua_page($config['per_page'], $page);
        $data['links'] = $this->pagination->create_links();
        //var_dump($config);exit();
        $data['title'] = "Beranda";
        $this->load->view('header', $data);
        $this->load->view('nav');
        if($config['total_rows'] > 0) {
            $this->load->view('kos/main', $data);
        } else {
            $this->load->view('kos/main');
        }
        $this->load->view('footer');
        
    }

    public function submit_cari(){

    }
    
    public function detail($id){
        $data['kos']  = $this->kos_model->kos($id);
        //var_dump($data['kos']);die();
        $title = $this->kos_model->nama_pemilik($id);
        $data['title'] = $title;
        $this->load->view('header', $data);
        $this->load->view('nav');
        $this->load->view('kos/detail',$data);
        $this->load->view('footer');
		
    }
}