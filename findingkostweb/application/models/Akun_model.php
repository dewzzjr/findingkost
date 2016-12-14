<?php
class Akun_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function cek_akun($name) {
        $username = strtolower($name);
        $query = $this->db->get_where('akun', [ 'username' => $username ]);
        return $query->row();
    }

    public function akun($id){
        $query = $this->db->get_where('akun', [ 'id' => $id ]);
        return $query->row();
    }

    public function semua_akun(){
        $query = $this->db->get('akun');
        return $query;
    }

    public function penghuni_kos($id_penghuni){
        $query = $this->db->get_where('penghuni', array('id_penghuni'=>$id_penghuni));
        return $query;
    }
	
    public function tambah_akun($data) {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('id', $data['id']);
        $this->db->or_where('username', $data['username']);
        
        $exist = ( $this->db->get()->num_rows() > 0 ) ? true : false ;
        if ( ! $exist ) {
            $query = $this->db->insert('akun', $data);
            return ( ! $query ) ?  $this->db->error() : true; 
        }
        return false;
    }

    public function hapus_akun($id) {
        $this->db->select('*');
        $this->db->from('akun');
        $this->db->where('id', $id);
        
        $exist = ( $this->db->get()->num_rows() > 0 ) ? true : false ;
        if ( $exist ) {
            $query = $this->db->delete('akun', array('id' => $id));
            return ( ! $query ) ?  $this->db->error() : true; 
        }
        return false;
    }
}