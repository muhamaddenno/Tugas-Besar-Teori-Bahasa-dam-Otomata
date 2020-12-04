<?php

class Mahasiswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mahasiswa_model');
    }

    public function index($nim = False){
        $data['mahasiswa'] = $this->Mahasiswa_model->getmk($nim);
        $this->load->view('krs/index', $data);
    }

    public function tambahmk($nim = false)
    {
        $data['mahasiswa'] = $this->Mahasiswa_model->getmk($nim);

        
        $matkul = $this->input->post('matkul');
        
        
        $data = array(
            'matkul' => $matkul,
            
        );

        
        $this->db->insert('mahasiswa', $data);
    }

    public function registration(){
        $this->load->view('krs/registration');
        
    }
}