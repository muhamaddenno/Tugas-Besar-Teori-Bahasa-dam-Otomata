<?php

class Mahasiswa_model extends CI_Model{

    public function __construct()
    {
        $this->load->database();
    }

    public function getmk($nim = FALSE){
        if($nim == FALSE){
            $query = $this->db->get('mahasiswa');
            return $query->result_array();
        }
        $query = $this->db->get_where('mahasiswa', array('nim'=>$nim));
        return $query->row_array();
    }

    
}