<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}

	public function index()
	{
		$this->load->view('registration');
	}

	public function proses()
	{
        $this->form_validation->set_rules('nama', 'nama','trim|required|min_length[1]|max_length[255]|is_unique[mahasiswa.nama]');
        $this->form_validation->set_rules('nim', 'nim','trim|required|min_length[1]|max_length[255]|is_unique[mahasiswa.nim]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
            $nama = $this->input->post('nama');
            $nim = $this->input->post('nim');
			$password = $this->input->post('password');
            $prodi = $this->input->post('prodi');
			$foto = $_FILES['foto']['name'];
	        if ($foto != '') {
	            $config['upload_path'] = './assets/img';
	            $config['allowed_types'] = 'jpg|png';
	            $config['file_name']        = 'news-' .date('ymd').'-'.substr(md5(rand()),0,10);
	            $this->load->library('upload', $config);
	        if (!$this->upload->do_upload('foto')) {
	            $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Failed Adding Data!</div>');
	                die();
	        } else {
	            $foto = $this->upload->data('file_name');
	            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Has Been Added!</div>');
	            }
	        } 
			$this->auth->register($nama,$nim,$password,$prodi,$foto);
			$this->session->set_flashdata('success_register','Proses Pendaftaran User Berhasil');
			$this->load->view('login');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			$this->load->view('login');
		}
	}
}