<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Awal extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proses()
	{
		$nim = $this->input->post('nim');
		$password = $this->input->post('password');
		$cek = $this->db->get_where('mahasiswa',array('nim'=>$nim));
		if($cek->num_rows() > 0){
			
			$data_user = $cek->row();
			$this->session->set_userdata('id',$data_user->id);
            $this->session->set_userdata('nim',$nim);
			$this->session->set_userdata('nama',$data_user->nama);
			$this->session->set_userdata('is_login',TRUE);
 
			redirect(base_url("masuk"));
			
 
		}else{
			echo "Username dan password salah !";
		}
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user');
	}
}