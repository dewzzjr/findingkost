<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('Admin_model');
    }
    
    public function index() {
        // echo 'ADMIN PAGE BELOM JADI HEHEHEHHEHE';
        $this->load->view('admin/adminview');
    }

    public function detail()
    {
    	$data['akun'] = $this->Admin_model->get_user();
        $this->load->view('admin/delview', $data);

    }


}
