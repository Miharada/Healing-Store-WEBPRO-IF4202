<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ctrl_pegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
        $this->load->model('Pegawai');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Pegawai';
		$data['page'] = 'home_pegawai';
		#$data['data_pegawai'] = $this->Pegawai->getAllPegawai();
		$this->load->view('Pegawai/home_pegawai',$data);
	}

	public function OutputPegawai(){
		$content = $this->Pegawai->getAllPegawai();
		echo json_encode($content);
	}

	public function tambah(){
		$data = $this->Pegawai->tambahPegawai();
		echo json_encode($data);
	}

	public function hapus(){
		$data = $this->Pegawai->hapusPegawai();
		echo json_encode($data);
	}

	public function update(){
		$data = $this->Pegawai->editPegawai();
		echo json_encode($data);
	}

}

?>
