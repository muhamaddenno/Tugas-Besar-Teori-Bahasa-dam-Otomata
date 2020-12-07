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
		$pilihan = $this->db->get_where('ambil', ['nama' => "Matematika Diskrit", 'id_mahasiswa' => $id2])->row();
		$pilihan1 = $this->db->get_where('ambil', ['nama' => "Algoritma dan Pemograman", 'id_mahasiswa' => $id2])->row();
		$pilihan2 = $this->db->get_where('ambil', ['nama' => "Teori Bahasa dan Automata", 'id_mahasiswa' => $id2])->row();
		$pilihan3 = $this->db->get_where('ambil', ['nama' => "Sistem Digital", 'id_mahasiswa' => $id2])->row();
		$pilihan4 = $this->db->get_where('ambil', ['nama' => "Kriptografi", 'id_mahasiswa' => $id2])->row();
		$pilihan5 = $this->db->get_where('ambil', ['nama' => "Organisasi dan Arsitektur Komputer", 'id_mahasiswa' => $id2])->row();
		if($matkul->nama == "Algoritma dan Pemograman"  && empty($pilihan)) 
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Matematika Diskrit terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Sistem Digital" && empty($pilihan))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Matematika Diskrit terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Teori Bahasa dan Automata" && empty($pilihan1))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Algoritma dan Pemrograman terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Kriptografi" && empty($pilihan2))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Teori Bahasa dan Automata terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Organisasi dan Arsitektur Komputer" && empty($pilihan3))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Sistem Digital terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Keamanan Jaringan" && empty($pilihan4))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Kriptografi atau  Organisasi dan Arsitektur Komputer terlebih dahulu!</div>');
			redirect('masuk/index');
		}
		else if($matkul->nama == "Keamanan Jaringan" && empty($pilihan5))
		{
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Harus mengambil matakuliah Kriptografi atau  Organisasi dan Arsitektur Komputer terlebih dahulu!</div>');
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