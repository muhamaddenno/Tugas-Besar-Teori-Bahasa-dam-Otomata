<?php 
class Auth extends CI_Model 
{
	
	public function __construct()
	{
        parent::__construct();
    }
   
    function cek_login($table,$where){      
        return $this->db->get_where($table,$where);
    }
    function simpan($id, $id2, $kode_matkul, $nama, $sks, $dosen){      
        $data_user = array(
            'id_mahasiswa'=>$id2,
            'id_matkul'=>$id,
            'kode_matkul'=>$kode_matkul,
            'nama'=>$nama,
            'sks'=>$sks,
            'dosen'=>$dosen,
        );
        $this->db->insert('ambil',$data_user);
    }
    function register($nama,$nim,$password,$prodi,$foto)
    {
        $data_user = array(
            'nama'=>$nama,
            'nim'=>$nim,
            'password'=>password_hash($password,PASSWORD_DEFAULT),
            'prodi'=>$prodi,
            'foto'=>$foto
        );
        $this->db->insert('mahasiswa',$data_user);
    }
    public function hapus($val)
    {
        $this->db->where('id',$val);
        $this->db->delete('ambil');
    }
}
?>