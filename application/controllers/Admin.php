<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Model_siswa");
		$this->load->model("Model_kelas");
		$this->load->model("Model_mapel");
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

	public function kelas_aksi(){
		$id_kelas=$this->input->post('id_kelas');
		$nama_kelas=$this->input->post('nama_kelas');
		$jenjang=$this->input->post('jenjang');

		$data = array('id_kelas' => $id_kelas,
						'nama_kelas' => $nama_kelas,
						'jenjang' => $jenjang
			);
		$this->Model_kelas->simpan_kelas('ms_kelas',$data);
		redirect('Admin/kelas_ms');
	}

	public function kelas_edit($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$data['ms_kelas'] = $this->Model_kelas->edit_kelas($where,'ms_kelas')->result();
		$this->load->view('admin/kelas_edit',$data);
	}

	public function kelas_update(){
		$id_kelas = $this->input->post('id_kelas');
		$nama_kelas = $this->input->post('nama_kelas');
		$jenjang = $this->input->post('jenjang');
	
		$data = array(
			'nama_kelas' => $nama_kelas,
			'jenjang' => $jenjang
		);
	
		$where = array(
			'id_kelas' => $id_kelas
		);
	
		$this->Model_kelas->update_kelas($where,$data,'ms_kelas');
		redirect('Admin/kelas_ms');
	}

	public function kelas_hapus($id_kelas){
		$where = array('id_kelas' => $id_kelas);
		$this->Model_kelas->hapus_kelas($where,'ms_kelas');
		redirect('Admin/kelas_ms');
	}

	public function mapel_ms(){
		$data['data_mapel']= $this->Model_mapel->ambil_mapel();
		$this->load->view('admin/mapel_ms',$data);
	}

	public function mapel_input(){
		$this->load->view('admin/mapel_input');
	}

	public function mapel_aksi(){
		$id_mapel=$this->input->post('id_mapel');
		$nama_mapel=$this->input->post('nama_mapel');
		$jenjang=$this->input->post('jenjang');

		$data = array('id_mapel' => $id_mapel,
						'nama_mapel' => $nama_mapel,
						'jenjang' => $jenjang
			);
		$this->Model_mapel->simpan_mapel('ms_mapel',$data);
		redirect('Admin/mapel_ms');
	}

	public function mapel_edit($id_mapel){
		$where = array('id_mapel' => $id_mapel);
		$data['ms_mapel'] = $this->Model_mapel->edit_mapel($where,'ms_mapel')->result();
		$this->load->view('admin/mapel_edit',$data);
	}

	public function mapel_update(){
		$id_mapel = $this->input->post('id_mapel');
		$nama_mapel = $this->input->post('nama_mapel');
		$jenjang = $this->input->post('jenjang');
	
		$data = array(
			'nama_mapel' => $nama_mapel,
			'jenjang' => $jenjang
		);
	
		$where = array(
			'id_mapel' => $id_mapel
		);
	
		$this->Model_mapel->update_mapel($where,$data,'ms_mapel');
		redirect('Admin/mapel_ms');
	}

	public function mapel_hapus($id_mapel){
		$where = array('id_mapel' => $id_mapel);
		$this->Model_mapel->hapus_mapel($where,'ms_mapel');
		redirect('Admin/mapel_ms');
	}


	public function logout() {
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('posisi');
		session_destroy();
		redirect('auth');
	}
}
?>