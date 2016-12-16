<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $tipe = $this->session->userdata('tipe');
        
        if ( !$this->session->has_userdata('username') ){ //cek apakah belum login
            redirect('akun/masuk'); // redirect
        } else
        {
            if ( $tipe == 0 ) {
            	// let them in
            } else
            if ( $tipe == 1 ){
                redirect('pemilik');
            } else 
            if ( $tipe == 2 ) {
                redirect('pencari');
            } else {
                show_404();
            }
        }
        $this->load->model('Admin_model');
    }
    
    public function index() {
        $this->load->view('admin/adminview');
    }

    public function detail()
    {
    	$data['akun'] = $this->Admin_model->get_user();
        $this->load->view('admin/detailview', $data);

    }

    public function deleteUser($id) {
        $data['akun'] = $this->Admin_model->del_user($id);
        redirect('admin/detail');
    }


    public function editUser($id)
    {         
            $data['akun'] = $this->Admin_model->getbyId($id);
            $this->load->view('admin/editview', $data);
        
    }

    public function updateUser()
    {
       
        $id = $this->input->post('id');
             $data = array(
             'nama' => $this->input->post('name'),
             'username' => $this->input->post('username')
                 );

            $this->Admin_model->updateUser($id,$data);
            redirect('admin/detail');    
    }

}
