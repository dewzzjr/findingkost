<?php

class Kos_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
    function kos($id){
        $this->db->select('*');
        $this->db->from('kos');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function semua_kos () {
        $query = $this->db->get('kos');
        return $query;
    }

    function akun_penghuni ( $id_kos ) {
        $query = $this->db->get_where('penghuni', array('id_kos'=>$id_kos));
        return $query->result();
    }

    public function cari($keyword) {
        $this->db->select('*');
        $this->db->from('kos');
        if ( isset($keyword['daerah']) ) { 
            $this->db->like('daerah',$keyword['daerah']);
        }
        return $this->db->get();
    }
    
    public function harga($min, $max) {
        $this->db->select('*');
        $this->db->from('kos');
        $this->db->where('harga >='.$min.' AND harga <='.$max);
        $this->db->order_by('harga','ASC');
        return $this->db->get();
    }
    
    public function hitung() {
        return $this->db->count_all('kos');
    }

    public function penghuni ( $id_penghuni) {
        $this->db->select('id_kos');
        $this->db->from('penghuni');
        $this->db->where('id', $id_penghuni);
        $query = $this->db->get();
        $data = $query->row();
        return ( $query->num_rows() > 0 ) ? $data->id_kos : false ; 
    }

    public function semua_page($limit, $start, $keyword = NULL) {
        $this->db->limit($limit, $start);
		if ( ! isset( $keyword) ){
			$query = $this->semua_kos();
		} else {
			$query = $this->cari ( $keyword );
		}
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
//
//    function tambah_kos($data) {
//        return $this->db->insert('kos', $data);
//    }
//
//    function tambah_penghuni($id_penghuni, $id_kos) {
//        $kos = $this->kos($id_kos)->row();
//        $data = [
//            'id_kos' => $id_kos,
//            'id_penghuni' => $id_penghuni,
//            'id_pemilik' => $kos->id_pemilik,
//            'status' => false,
//            'tagihan' => $kos->harga,
//            'lunas' => false
//        ];
//
//        return $this->db->insert('penghuni', $data);
//    }
}