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
		$this->load->model('Login');

		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->library('session');
	}

	public function index()
	{	
		$content['admin']='';
		$content['profile']='';
		$content['track'] = "/Main/viewLogin";
		$content['track2'] = "/Main/index";
		$content['log'] = "login";
		$this->load->view('home_page',$content);
	}
	
	public function utama(){
		$content['admin']='';
		$content['profile']='';
		$content['track'] = "/Main/viewLogin";
		$content['track2'] = "/Main/utama";
		$content['log'] = "login";
		if($this->session->userdata('username') || $this->session->userdata('admin') ){
			if($this->session->userdata('admin')){
				$content['admin']="Admin";
			}
			else{
				$content['profile']='Profile';
			}
			$content['track'] = "/Main/logout";
			$content['log'] = "logout";
		}
		$this->load->view('home_page',$content);
	}
	//HALAMAN ADMIN
	public function viewHomeAdmin(){
		$this->load->view('home_admin');
	}

	public function viewManageAdmin(){
		$this->load->view('Admin/ListAdmin');
	}
	public function viewManageObat(){
		$this->load->view('Obat/ListObat');
	}
	public function viewManagePelanggan(){
		$this->load->view('Pelanggan/ListPelanggan');
	}
	public function viewManageTransaksi(){
		$this->load->view('Transaksi/ListTransaksi');
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
	//HALAMAN REGISTER
	public function tambahPelanggan(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		$this->form_validation->set_rules('repeat-password','repeat-password','required');

		if($this->form_validation->run() == false){
			$this->load->view('Login/Register');
		}
		else{
			$data = $this->Pelanggan->tambahPelanggan();
			$username = $this->input->post('username');
			$this->session->set_userdata('username',$username);
			redirect('Main/utama');
		}
	}

	//HALAMAN LOGIN
	public function viewLogin(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run() == false){
			$this->load->view('Login/Login');
		}
		else{
			$cek = $this->Login->check_username();
			if($cek){
				$username = $this->input->post('username');
				$this->session->set_userdata('username',$username);
				redirect('Main/utama');
			}
			else{
				$this->load->view('Login/Login');
			}
		}
	}

	//UPDATE PROFILE
	public function UpdateProfile(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('alamat','alamat','required');
		$this->form_validation->set_rules('password','password','required');
		$this->form_validation->set_rules('no_hp','no_hp','required');
		$this->form_validation->set_rules('repeat-password','repeat-password','required');
		$data = $this->session->userdata('username');
		$dataku['profiled'] = $this->Pelanggan->getPelanggan($data);

		if($this->form_validation->run() == false){
			$this->load->view('Pelanggan/UpdateProfile',$dataku);
		}
		else{
			$this->Pelanggan->editPelanggan();
			redirect('Main/utama');
		}
	}

	public function viewLoginAdmin(){
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('password','password','required');
		
		if($this->form_validation->run() == false){
			$this->load->view('Login/LoginAdmin');
		}
		else{
			$cek = $this->Login->check_usernameA();
			if($cek){
				$username = $this->input->post('username');
				$this->session->set_userdata('admin',$username);
				redirect('Main/utama');
			}
			else{
				$this->load->view('Login/LoginAdmin');
			}
		}
	}
	//LOGOUT
	public function logout(){
		$this->session->sess_destroy();
		redirect('Main/utama');
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
