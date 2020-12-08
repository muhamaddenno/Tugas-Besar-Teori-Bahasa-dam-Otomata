<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('auth');
	}
	public function index()
	{
		$user = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row();
		$id2 = $user->id;
		$data['matkul'] = $this->db->get_where('ambil', ['id_mahasiswa' => $id2])->result();
		$data['mhs'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row();
		$this->load->view('krs/home', $data);
	}
	public function ambil()
	{
		$data['matkul'] = $this->db->get('matkul')->result();
		$this->load->view('krs/index', $data);
	}
	public function proses($id)
	{
		$user = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row();
		$id2 = $user->id;
		$matkul = $this->db->get_where('matkul', ['id' => $id])->row();
		$ampun = $this->db->get_where('ambil', ['id_matkul' => $id])->row();
		$pilihan = $this->db->get_where('ambil', ['nama' => "Kalkulus I", 'id_mahasiswa' => $id2])->row();
		$pilihan1 = $this->db->get_where('ambil', ['nama' => "Kalkulus II", 'id_mahasiswa' => $id2])->row();
		
		if($matkul->nama == "Kalkulus II"  && empty($pilihan)) 
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Kalkulus I terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Kalkulus Lanjut" && empty($pilihan1))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Kalkulus II terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if(!empty($ampun))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Mata Kuliah Sudah Diambil</div>');
			redirect('masuk/index');
		}
		else {
			$this->auth->simpan($id, $id2, $matkul->kode_matkul, $matkul->nama, $matkul->sks, $matkul->dosen);
			$data['matkul'] = $this->db->get_where('ambil', ['id_mahasiswa' => $id2])->result();
			$data['mhs'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row();
			$this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Matakuliah Berhasil ditambahkan!</div>');
			redirect('masuk/index');
		}
		
	}
	public function selesai()
    {
        $user = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row();
		$id2 = $user->id;
		$data['matkul'] = $this->db->get_where('ambil', ['id_mahasiswa' => $id2])->result();
		$data['mhs'] = $this->db->get_where('mahasiswa', ['nim' => $this->session->userdata('nim')])->row();
		$this->load->view('krs/selesai', $data);
    }

	public function hapus($val)
    {
        $this->auth->hapus($val);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Matakuliah Berhasil dihapus!</div>');
        redirect(base_url('masuk'));
    }
}