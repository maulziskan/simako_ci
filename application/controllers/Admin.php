<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Model_siswa");
		$this->load->model("Model_kelas");
		if ($this->session->userdata('nama_user')=="") {
			redirect('auth');
		}
		
	}
	public function index() {
		$data['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('admin/index', $data);
	}

	public function siswa_ms(){
		$data['data_siswa'] = $this->Model_siswa->ambil_siswa();
		$this->load->view('admin/siswa_ms',$data);
	}

	public function kelas_ms(){
		$data['data_kelas']= $this->Model_kelas->ambil_kelas();
		$this->load->view('admin/kelas_ms',$data);
	}

	public function kelas_input(){
		$this->load->view('admin/kelas_input');
	}

	public function logout() {
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('posisi');
		session_destroy();
		redirect('auth');
	}
}
?>