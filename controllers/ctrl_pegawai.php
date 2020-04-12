<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_pegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Pegawai');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Pegawai';
		$data['page'] = 'home_pegawai';
		$data['data_pegawai'] = $this->Pegawai->getAllPegawai();
		$this->load->view('home_pegawai',$data);
	}

	public function tambah($data){
		$this->Pegawai->tambahPegawai($data);
	}

	public function hapus($id_pegawai){
		$this->Pegawai->hapusPegawai($id_pegawai);
		redirect('ctrl_pegawai');
	}

	public function update($data, $id_pegawai){
		$this->Pegawai->editPegawai($data,$id_pegawai);
		redirect('ctrl_pegawai');
	}

}

?>
