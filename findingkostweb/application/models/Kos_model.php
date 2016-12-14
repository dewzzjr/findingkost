<?php

class Kos_model extends CI_Model {
    
    function __construct(){
        parent::__construct();
        $this->load->database();
    }
	
    function kos($id){
        $this->db->select('*');
        $this->db->from('kos');
        $this->db->join('akun','kos.id_pemilik = akun.id');
        $this->db->where('kos.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    function semua_kos () {
        $query = $this->db->get('kos');
        return $query;
    }

    function akun_penghuni($id_kos) {
        $query = $this->db->get_where('penghuni', array('id_kos'=>$id_kos));
        return $query->result();
    }

    function cari($keyword) {
        $this->db->select('*');
        $this->db->from('kos');
        $this->db->like('alamat',$keyword);
        $this->db->like('fasilitas',$keyword);
        return $this->db->get();
    }
    
    function harga($min, $max) {
        $this->db->select('*');
        $this->db->from('kos');
        $this->db->where('harga >='.$min.' AND harga <='.$max);
        $this->db->order_by('harga','ASC');
        return $this->db->get();
    }
    
    public function hitung() {
        return $this->db->count_all('kos');
    }
    
    public function nama_pemilik($id_pemilik) {
        $this->db->select('nama');
        $this->db->from('akun');
        $this->db->where('id', $id_pemilik);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data['nama'];
    }

    public function alamat_pemilik( $id_pemilik ) {
        $this->db->select('alamat');
        $this->db->from('akun');
        $this->db->where('id', $id_pemilik);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data['alamat'];
    }

    public function foto_kos( $id_pemilik ) {
        $this->db->select('foto');
        $this->db->from('kos');
        $this->db->where('id_pemilik', $id_pemilik);
        $query = $this->db->get();
        $data = $query->row_array();
        return $data['foto'];
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

    function tambah_kos($data) {
        return $this->db->insert('kos', $data);
    }

    function tambah_penghuni($id_penghuni, $id_kos) {
        $kos = $this->kos($id_kos)->row();
        $data = [
            'id_kos' => $id_kos,
            'id_penghuni' => $id_penghuni,
            'id_pemilik' => $kos->id_pemilik,
            'status' => false,
            'tagihan' => $kos->harga,
            'lunas' => false
        ];

        return $this->db->insert('penghuni', $data);
    }
}