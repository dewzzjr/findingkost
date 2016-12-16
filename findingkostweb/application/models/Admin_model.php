<?php
class Admin_model extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user()
        {
            $sql = "SELECT *, akun.id as idakun FROM akun LEFT JOIN kos ON akun.id=kos.id_pemilik where akun.tipe != '0'";
            $query = $this->db->query($sql);
            $result = $query->result();
            return $result;
        }
    
    public function getbyId($id)
        {
            $this->db->where('tipe !=','0');
            $this->db->where('id ', $id);
            $query = $this->db->get('akun');
            return $query->result();
        }

    public function updateUser($id, $data)
    {
        $this->db->where('id',$id);
        $this->db->update('akun', $data);

    }

    public function del_user($id)
        {
            $this->db->select('*');
            $this->db->from('akun');
            $this->db->where('id ', $id);

            $exist = ( $this->db->get()->num_rows() > 0 ) ? true : false ;
            if ( $exist ) {
                $query = $this->db->delete('akun', array('id' => $id));
                return ( ! $query ) ?  $this->db->error() : true; 
            }
            return false;
        }



}
