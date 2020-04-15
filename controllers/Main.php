<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin');
		$this->load->model('Obat');
		$this->load->model('Pelanggan');
		$this->load->model('Transaksi');
		$this->load->library('form_validation');
		$this->load->helper('url');
	}

	public function index()
	{
		$data['judul'] = 'Daftar Admin';
		$data['page'] = 'ListAdmin';
		#$data['data_Admin'] = $this->Admin->getAllAdmin();
		$this->load->view('Admin/ListAdmin',$data);
	}

	//BAGIAN ADMIN
	public function OutputAdmin(){
		$content = $this->Admin->getAllAdmin();
		echo json_encode($content);
	}

	public function tambah(){
		$data = $this->Admin->tambahAdmin();
		echo json_encode($data);
	}

	public function hapus(){
		$data = $this->Admin->hapusAdmin();
		echo json_encode($data);
	}

	public function update(){
		$data = $this->Admin->editAdmin();
		echo json_encode($data);
	}

	//BAGIAN OBAT
	public function OutputObat(){
		$content = $this->Obat->getAllObat();
		echo json_encode($content);
	}

	public function tambahObat(){
		$data = $this->Obat->tambahObat();
		echo json_encode($data);
	}

	public function hapusObat(){
		$data = $this->Obat->hapusObat();
		echo json_encode($data);
	}
	public function updateObat(){
		$data = $this->Obat->editObat();
		echo json_encode($data);
	}

	//Bagian Pelanggan
	public function OutputPelanggan(){
		$content = $this->Pelanggan->getAllPelanggan();
		echo json_encode($content);
	}

	public function tambahPelanggant(){
		$data = $this->Pelanggan->tambahPelanggan();
		echo json_encode($data);
	}

	public function hapusPelanggan(){
		$data = $this->Pelanggan->hapusPelanggan();
		echo json_encode($data);
	}
	public function updatePelanggan(){
		$data = $this->Pelanggan->editPelanggan();
		echo json_encode($data);
	}

	//bagian transaksi
	public function OutputTransaksi(){
		$content = $this->Transaksi->getAllTransaksi();
		echo json_encode($content);
	}

	public function tambahTransaksi(){
		$data = $this->Transaksi->tambahTransaksi();
		echo json_encode($data);
	}

	public function hapusTransaksi(){
		$data = $this->Transaksi->hapusTransaksi();
		echo json_encode($data);
	}
}

?>
