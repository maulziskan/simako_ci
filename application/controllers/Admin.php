<?php
class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model("Model_siswa");
		$this->load->model("Model_kelas");
		$this->load->model("Model_mapel");
		$this->load->model("Model_walimurid");
		$this->load->model("Model_karyawan");
		$this->load->model("Model_guru");
		$this->load->model("Model_sekolah");
		$this->load->model("Model_belajar");

		if ($this->session->userdata('nama_user')=="") {
			redirect('auth');
		}
		
	}
	public function index() {
		$data['nama_user'] = $this->session->userdata('nama_user');
		$this->load->view('admin/index', $data);
		
	}
// Batas ------------------------------------------------
public function belajarharian(){
	$data['data_belajarharian']= $this->Model_belajarharian->ambil_belajarharian();
	$this->load->view('admin/belajarharian',$data);
}

public function belajarharian_input(){
	$data['ms_guru'] = $this->Model_guruid->ambil_guruid()->result();
	$data['ms_siswa'] = $this->Model_siswa->ambil_siswaid()->result();
	$data['ms_kelas'] = $this->Model_kelas->ambil_kelasid()->result();
	$data['ms_mapel'] = $this->Model_mapel->ambil_mapelid()->result();
	$this->load->view('admin/belajarharian_input',$data);	

}

public function belajarharian_aksi(){
	
	$id_belajarharian=$this->input->post('id_belajarharian');
	$id_guru=$this->input->post('id_guru');
	$id_kelas=$this->input->post('id_kelas');
	$id_siswa=$this->input->post('id_siswa');
	$id_mapel=$this->input->post('id_mapel');
	$tgl_belajar=$this->input->post('tgl_belajar');
	$jam_mulai=$this->input->post('jam_mulai');
	$ketertarikan=$this->input->post('ketertarikan');
	$keaktifan=$this->input->post('keaktifan');
	$kedisiplinan=$this->input->post('kedisiplinan');
	$ketekunan=$this->input->post('ketekunan');
	$konsentrasi=$this->input->post('konsentrasi');
	$antusiasme=$this->input->post('antusiasme');
	$kesopanan=$this->input->post('kesopanan');
	$motivasi=$this->input->post('motivasi');
	$kemandirian=$this->input->post('kemandirian');
	$happiness=$this->input->post('happiness');
	$standar_kompetensi=$this->input->post('standar_kompetensi');
	$pencapaian_siswa=$this->input->post('pencapaian_siswa');
	$saran_guru=$this->input->post('saran_guru');

	$data = array(
	'id_belajarharian' => $id_belajarharian,
	'id_guru' => $id_guru,
	'id_kelas' => $id_kelas,
	'id_siswa' => $id_siswa,
	'id_mapel' => $id_mapel,
	'tgl_belajar' => $tgl_belajar,
	'jam_mulai' => $jam_mulai,
	'ketertarikan' => $ketertarikan,
	'keaktifan' => $keaktifan,
	'kedisiplinan' => $kedisiplinan,
	'ketekunan' => $ketekunan,
	'konsentrasi' => $konsentrasi,
	'antusiasme' => $antusiasme,
	'kesopanan' => $kesopanan,
	'motivasi' => $motivasi,
	'kemandirian' => $kemandirian,
	'happiness' => $happiness,
	'standar_kompetensi' => $standar_kompetensi,
	'pencapaian_siswa' => $pencapaian_siswa,
	'saran_guru' => $saran_guru
		);
	$this->Model_belajarharian->simpan_belajarharian('ms_belajarharian',$data);
	redirect('Admin/belajarharian');
}

public function belajarharian_edit($id_belajarharian){
	$where = array('id_belajarharian' => $id_belajarharian);
	$data['ms_belajarharian'] = $this->Model_belajarharian->edit_belajarharian($where,'ms_belajarharian')->result();
	$data['ms_walimurid'] = $this->Model_walimurid->ambil_walimuridid()->result();
	$data['ms_sekolah'] = $this->Model_sekolah->ambil_sekolahid()->result();
	$data['ms_kelas'] = $this->Model_kelas->ambil_kelasid()->result();
	$this->load->view('admin/belajarharian_edit',$data);
}

public function belajarharian_update(){
	
	$id_belajarharian=$this->input->post('id_belajarharian');
	$id_guru=$this->input->post('id_guru');
	$id_kelas=$this->input->post('id_kelas');
	$id_siswa=$this->input->post('id_siswa');
	$id_mapel=$this->input->post('id_mapel');
	$tgl_belajar=$this->input->post('tgl_belajar');
	$jam_mulai=$this->input->post('jam_mulai');
	$ketertarikan=$this->input->post('ketertarikan');
	$keaktifan=$this->input->post('keaktifan');
	$kedisiplinan=$this->input->post('kedisiplinan');
	$ketekunan=$this->input->post('ketekunan');
	$konsentrasi=$this->input->post('konsentrasi');
	$antusiasme=$this->input->post('antusiasme');
	$kesopanan=$this->input->post('kesopanan');
	$motivasi=$this->input->post('motivasi');
	$kemandirian=$this->input->post('kemandirian');
	$happiness=$this->input->post('happiness');
	$standar_kompetensi=$this->input->post('standar_kompetensi');
	$pencapaian_siswa=$this->input->post('pencapaian_siswa');
	$saran_guru=$this->input->post('saran_guru');

	$data = array(
	'id_belajarharian' => $id_belajarharian,
	'id_guru' => $id_guru,
	'id_kelas' => $id_kelas,
	'id_siswa' => $id_siswa,
	'id_mapel' => $id_mapel,
	'tgl_belajar' => $tgl_belajar,
	'jam_mulai' => $jam_mulai,
	'ketertarikan' => $ketertarikan,
	'keaktifan' => $keaktifan,
	'kedisiplinan' => $kedisiplinan,
	'ketekunan' => $ketekunan,
	'konsentrasi' => $konsentrasi,
	'antusiasme' => $antusiasme,
	'kesopanan' => $kesopanan,
	'motivasi' => $motivasi,
	'kemandirian' => $kemandirian,
	'happiness' => $happiness,
	'standar_kompetensi' => $standar_kompetensi,
	'pencapaian_siswa' => $pencapaian_siswa,
	'saran_guru' => $saran_guru
		);
	

	$where = array(
		'id_belajarharian' => $id_belajarharian
	);

	$this->Model_belajarharian->update_belajarharian($where,$data,'ms_belajarharian');
	redirect('Admin/belajarharian');
}

public function belajarharian_hapus($id_belajarharian){
	$where = array('id_belajarharian' => $id_belajarharian);
	$this->Model_belajarharian->hapus_belajarharian($where,'ms_belajarharian');
	redirect('Admin/belajarharian');
}
	
// Batas ------------------------------------------------
public function siswa_ms(){
	$data['data_siswa']= $this->Model_siswa->ambil_siswa();
	$this->load->view('admin/siswa_ms',$data);
}

public function siswa_input(){
	$data['ms_walimurid'] = $this->Model_walimurid->ambil_walimuridid()->result();
	$data['ms_sekolah'] = $this->Model_sekolah->ambil_sekolahid()->result();
	$data['ms_kelas'] = $this->Model_kelas->ambil_kelasid()->result();
	$this->load->view('admin/siswa_input',$data);	
}

public function siswa_aksi(){
	
	$id_siswa=$this->input->post('id_siswa');
	$nama_siswa=$this->input->post('nama_siswa');
	$id_walimurid=$this->input->post('id_walimurid');
	$id_sekolah=$this->input->post('id_sekolah');
	$id_kelas=$this->input->post('id_kelas');
	$jenis_kelamin=$this->input->post('jenis_kelamin');
	$tempat_lahir=$this->input->post('tempat_lahir');
	$tgl_lahir=$this->input->post('tgl_lahir');
	$nisn=$this->input->post('nisn');
	$nik=$this->input->post('nik');
	$agama=$this->input->post('agama');
	$asal_sekolah=$this->input->post('asal_sekolah');
	$tgl_daftar=$this->input->post('tgl_daftar');
	$kelas_daftar=$this->input->post('kelas_daftar');
	$foto_siswa=$this->Model_siswa->upload();

	$data = array(
		'id_siswa' => $id_siswa,
		'nama_siswa' => $nama_siswa,
		'id_walimurid' => $id_walimurid,
		'id_sekolah' => $id_sekolah,
		'id_kelas' => $id_kelas,
		'jenis_kelamin' => $jenis_kelamin,
		'tempat_lahir' => $tempat_lahir,
		'tgl_lahir' => $tgl_lahir,
		'nisn' => $nisn,
		'nik' => $nik,
		'agama' => $agama,
		'asal_sekolah' => $asal_sekolah,
		'tgl_daftar' => $tgl_daftar,
		'kelas_daftar' => $kelas_daftar,
		'foto_siswa' => $foto_siswa['file']['file_name']
		);
	$this->Model_siswa->simpan_siswa('ms_siswa',$data);
	redirect('Admin/siswa_ms');
}

public function siswa_edit($id_siswa){
	$where = array('id_siswa' => $id_siswa);
	$data['ms_siswa'] = $this->Model_siswa->edit_siswa($where,'ms_siswa')->result();
	$data['ms_walimurid'] = $this->Model_walimurid->ambil_walimuridid()->result();
	$data['ms_sekolah'] = $this->Model_sekolah->ambil_sekolahid()->result();
	$data['ms_kelas'] = $this->Model_kelas->ambil_kelasid()->result();
	$this->load->view('admin/siswa_edit',$data);
}

public function siswa_update(){
	$id_siswa=$this->input->post('id_siswa');
	$nama_siswa=$this->input->post('nama_siswa');
	$id_walimurid=$this->input->post('id_walimurid');
	$id_sekolah=$this->input->post('id_sekolah');
	$id_kelas=$this->input->post('id_kelas');
	$jenis_kelamin=$this->input->post('jenis_kelamin');
	$tempat_lahir=$this->input->post('tempat_lahir');
	$tgl_lahir=$this->input->post('tgl_lahir');
	$nisn=$this->input->post('nisn');
	$nik=$this->input->post('nik');
	$agama=$this->input->post('agama');
	$asal_sekolah=$this->input->post('asal_sekolah');
	$tgl_daftar=$this->input->post('tgl_daftar');
	$kelas_daftar=$this->input->post('kelas_daftar');
	if($foto_siswa ['result']=='success'){

	$data = array(
		'id_siswa' => $id_siswa,
		'nama_siswa' => $nama_siswa,
		'id_walimurid' => $id_walimurid,
		'id_sekolah' => $id_sekolah,
		'id_kelas' => $id_kelas,
		'jenis_kelamin' => $jenis_kelamin,
		'tempat_lahir' => $tempat_lahir,
		'tgl_lahir' => $tgl_lahir,
		'nisn' => $nisn,
		'nik' => $nik,
		'agama' => $agama,
		'asal_sekolah' => $asal_sekolah,
		'tgl_daftar' => $tgl_daftar,
		'kelas_daftar' => $kelas_daftar,
		'foto_siswa' => $foto_siswa['file']['file_name']
		);
	}
	else{
		$data = array(
		'id_siswa' => $id_siswa,
		'nama_siswa' => $nama_siswa,
		'id_walimurid' => $id_walimurid,
		'id_sekolah' => $id_sekolah,
		'id_kelas' => $id_kelas,
		'jenis_kelamin' => $jenis_kelamin,
		'tempat_lahir' => $tempat_lahir,
		'tgl_lahir' => $tgl_lahir,
		'nisn' => $nisn,
		'nik' => $nik,
		'agama' => $agama,
		'asal_sekolah' => $asal_sekolah,
		'tgl_daftar' => $tgl_daftar,
		'kelas_daftar' => $kelas_daftar
		);
	}

	

	$where = array(
		'id_siswa' => $id_siswa
	);

	$this->Model_siswa->update_siswa($where,$data,'ms_siswa');
	redirect('Admin/siswa_ms');
}

public function siswa_hapus($id_siswa){
	$where = array('id_siswa' => $id_siswa);
	$this->Model_siswa->hapus_siswa($where,'ms_siswa');
	redirect('Admin/siswa_ms');
}
	

// Batas ------------------------------------------------

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

// Batas -------------------------------------------

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

// Batas -------------------------------------

public function walimurid_ms(){
	$data['data_walimurid']= $this->Model_walimurid->ambil_walimurid();
	$this->load->view('admin/walimurid_ms',$data);
}

public function walimurid_input(){
	$this->load->view('admin/walimurid_input');
}

public function walimurid_aksi(){
	$id_walimurid=$this->input->post('id_walimurid');
	$nama_walimurid=$this->input->post('nama_walimurid');
	$alamat_walimurid=$this->input->post('alamat_walimurid');
	$hubungan_kerabat=$this->input->post('hubungan_kerabat');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_walimurid=$this->input->post('email_walimurid');
	$pekerjaan=$this->input->post('pekerjaan');

	$data = array(
		'id_walimurid' => $id_walimurid,
		'nama_walimurid' => $nama_walimurid,
		'alamat_walimurid' => $alamat_walimurid,
		'hubungan_kerabat' => $hubungan_kerabat,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_walimurid' => $email_walimurid,
		'pekerjaan' => $pekerjaan
		);
	$this->Model_walimurid->simpan_walimurid('ms_walimurid',$data);
	redirect('Admin/walimurid_ms');
}

public function walimurid_edit($id_walimurid){
	$where = array('id_walimurid' => $id_walimurid);
	$data['ms_walimurid'] = $this->Model_walimurid->edit_walimurid($where,'ms_walimurid')->result();
	$this->load->view('admin/walimurid_edit',$data);
}

public function walimurid_update(){
	$id_walimurid=$this->input->post('id_walimurid');
	$nama_walimurid=$this->input->post('nama_walimurid');
	$alamat_walimurid=$this->input->post('alamat_walimurid');
	$hubungan_kerabat=$this->input->post('hubungan_kerabat');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_walimurid=$this->input->post('email_walimurid');
	$pekerjaan=$this->input->post('pekerjaan');

	$data = array(
		'nama_walimurid' => $nama_walimurid,
		'alamat_walimurid' => $alamat_walimurid,
		'hubungan_kerabat' => $hubungan_kerabat,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_walimurid' => $email_walimurid,
		'pekerjaan' => $pekerjaan
	);

	$where = array(
		'id_walimurid' => $id_walimurid
	);

	$this->Model_walimurid->update_walimurid($where,$data,'ms_walimurid');
	redirect('Admin/walimurid_ms');
}

public function walimurid_hapus($id_walimurid){
	$where = array('id_walimurid' => $id_walimurid);
	$this->Model_walimurid->hapus_walimurid($where,'ms_walimurid');
	redirect('Admin/walimurid_ms');
}

// Batas -------------------------------------
public function karyawan_ms(){
	$data['data_karyawan']= $this->Model_karyawan->ambil_karyawan();
	$this->load->view('admin/karyawan_ms',$data);
}

public function karyawan_input(){
	$this->load->view('admin/karyawan_input');	
}

public function karyawan_aksi(){
	$foto_karyawan=$this->Model_karyawan->upload();
	$id_karyawan=$this->input->post('id_karyawan');
	$nama_karyawan=$this->input->post('nama_karyawan');
	$alamat_karyawan=$this->input->post('alamat_karyawan');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_karyawan=$this->input->post('email_karyawan');
	$status_kerja=$this->input->post('status_kerja');
	$jabatan=$this->input->post('jabatan');
	$agama=$this->input->post('agama');

	$data = array(
		'id_karyawan' => $id_karyawan,
		'nama_karyawan' => $nama_karyawan,
		'alamat_karyawan' => $alamat_karyawan,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_karyawan' => $email_karyawan,
		'status_kerja' => $status_kerja,
		'jabatan' => $jabatan,
		'foto_karyawan' => $foto_karyawan['file']['file_name'],
		'agama' => $agama
		);
	$this->Model_karyawan->simpan_karyawan('ms_karyawan',$data);
	redirect('Admin/karyawan_ms');
}

public function karyawan_edit($id_karyawan){
	$where = array('id_karyawan' => $id_karyawan);
	$data['ms_karyawan'] = $this->Model_karyawan->edit_karyawan($where,'ms_karyawan')->result();
	$this->load->view('admin/karyawan_edit',$data);
}

public function karyawan_update(){
	$foto_karyawan=$this->Model_karyawan->edit_upload();
	$id_karyawan=$this->input->post('id_karyawan');
	$nama_karyawan=$this->input->post('nama_karyawan');
	$alamat_karyawan=$this->input->post('alamat_karyawan');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_karyawan=$this->input->post('email_karyawan');
	$status_kerja=$this->input->post('status_kerja');
	$jabatan=$this->input->post('jabatan');
	$agama=$this->input->post('agama');
	if($foto_karyawan['result']=='success'){
		//
		$data = array(
			'nama_karyawan' => $nama_karyawan,
			'alamat_karyawan' => $alamat_karyawan,
			'no_telp' => $no_telp,
			'no_hp' => $no_hp,
			'email_karyawan' => $email_karyawan,
			'status_kerja' => $status_kerja,
			'jabatan' => $jabatan,
			'foto_karyawan' => $foto_karyawan['file']['file_name'],
			'agama' => $agama
		);
	}
	else{
		$data = array(
			'nama_karyawan' => $nama_karyawan,
			'alamat_karyawan' => $alamat_karyawan,
			'no_telp' => $no_telp,
			'no_hp' => $no_hp,
			'email_karyawan' => $email_karyawan,
			'status_kerja' => $status_kerja,
			'jabatan' => $jabatan,
			'agama' => $agama
		);
	}

	

	$where = array(
		'id_karyawan' => $id_karyawan
	);

	$this->Model_karyawan->update_karyawan($where,$data,'ms_karyawan');
	redirect('Admin/karyawan_ms');
}

public function karyawan_hapus($id_karyawan){
	$where = array('id_karyawan' => $id_karyawan);
	$this->Model_karyawan->hapus_karyawan($where,'ms_karyawan');
	redirect('Admin/karyawan_ms');
}
// Batas -------------------------------------
public function guru_ms(){
	$data['data_guru']= $this->Model_guru->ambil_guru();
	$this->load->view('admin/guru_ms',$data);
}

public function guru_input(){
	$data['ms_karyawan'] = $this->Model_karyawan->ambil_karyawanid()->result();
	$this->load->view('admin/guru_input',$data);
}

public function guru_aksi(){
	$id_guru=$this->input->post('id_guru');
	$nama_guru=$this->input->post('nama_guru');
	$alamat_guru=$this->input->post('alamat_guru');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_guru=$this->input->post('email_guru');
	$id_karyawan=$this->input->post('id_karyawan');
	$jenjang_pendidikan=$this->input->post('jenjang_pendidikan');
	
	$data = array(
		'id_guru' => $id_guru,
		'nama_guru' => $nama_guru,
		'alamat_guru' => $alamat_guru,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_guru' => $email_guru,
		'id_karyawan' => $id_karyawan,
		'jenjang_pendidikan' => $jenjang_pendidikan
		);
	$this->Model_guru->simpan_guru('ms_guru',$data);
	redirect('Admin/guru_ms');
}

public function guru_edit($id_guru){
	$where = array('id_guru' => $id_guru);
	$data['ms_guru'] = $this->Model_guru->edit_guru($where,'ms_guru')->result();
	$data['ms_karyawan'] = $this->Model_karyawan->ambil_karyawanid()->result();
	$this->load->view('admin/guru_edit',$data);
}

public function guru_update(){
	$id_guru=$this->input->post('id_guru');
	$nama_guru=$this->input->post('nama_guru');
	$alamat_guru=$this->input->post('alamat_guru');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_guru=$this->input->post('email_guru');
	$id_karyawan=$this->input->post('id_karyawan');
	$jenjang_pendidikan=$this->input->post('jenjang_pendidikan');

	$data = array(
		'nama_guru' => $nama_guru,
		'alamat_guru' => $alamat_guru,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_guru' => $email_guru,
		'id_karyawan' => $id_karyawan,
		'jenjang_pendidikan' => $jenjang_pendidikan
	);

	$where = array(
		'id_guru' => $id_guru
	);

	$this->Model_guru->update_guru($where,$data,'ms_guru');
	redirect('Admin/guru_ms');
}

public function guru_hapus($id_guru){
	$where = array('id_guru' => $id_guru);
	$this->Model_guru->hapus_guru($where,'ms_guru');
	redirect('Admin/guru_ms');
}
// Batas -------------------------------------
public function sekolah_ms(){
	$data['data_sekolah']= $this->Model_sekolah->ambil_sekolah();
	$this->load->view('admin/sekolah_ms',$data);
}

public function sekolah_input(){
	$this->load->view('admin/sekolah_input');
}

public function sekolah_aksi(){
	$id_sekolah=$this->input->post('id_sekolah');
	$nama_sekolah=$this->input->post('nama_sekolah');
	$alamat_sekolah=$this->input->post('alamat_sekolah');
	$nama_yayasan=$this->input->post('nama_yayasan');
	$no_registrasi=$this->input->post('no_registrasi');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_sekolah=$this->input->post('email_sekolah');
	$npwp=$this->input->post('npwp');
	
	
	$data = array(
		'id_sekolah' => $id_sekolah,
		'nama_sekolah' => $nama_sekolah,
		'alamat_sekolah' => $alamat_sekolah,
		'nama_yayasan' => $nama_yayasan,
		'no_registrasi' => $no_registrasi,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_sekolah' => $email_sekolah,
		'npwp' => $npwp
		);
	$this->Model_sekolah->simpan_sekolah('ms_sekolah',$data);
	redirect('Admin/sekolah_ms');
}

public function sekolah_edit($id_sekolah){
	$where = array('id_sekolah' => $id_sekolah);
	$data['ms_sekolah'] = $this->Model_sekolah->edit_sekolah($where,'ms_sekolah')->result();
	$this->load->view('admin/sekolah_edit',$data);
}

public function sekolah_update(){
	$id_sekolah=$this->input->post('id_sekolah');
	$nama_sekolah=$this->input->post('nama_sekolah');
	$alamat_sekolah=$this->input->post('alamat_sekolah');
	$nama_yayasan=$this->input->post('nama_yayasan');
	$no_registrasi=$this->input->post('no_registrasi');
	$no_telp=$this->input->post('no_telp');
	$no_hp=$this->input->post('no_hp');
	$email_sekolah=$this->input->post('email_sekolah');
	$npwp=$this->input->post('npwp');

	$data = array(
		'nama_sekolah' => $nama_sekolah,
		'alamat_sekolah' => $alamat_sekolah,
		'nama_yayasan' => $nama_yayasan,
		'no_registrasi' => $no_registrasi,
		'no_telp' => $no_telp,
		'no_hp' => $no_hp,
		'email_sekolah' => $email_sekolah,
		'npwp' => $npwp
	);

	$where = array(
		'id_sekolah' => $id_sekolah
	);

	$this->Model_sekolah->update_sekolah($where,$data,'ms_sekolah');
	redirect('Admin/sekolah_ms');
}

public function sekolah_hapus($id_sekolah){
	$where = array('id_sekolah' => $id_sekolah);
	$this->Model_sekolah->hapus_sekolah($where,'ms_sekolah');
	redirect('Admin/sekolah_ms');
}
// Batas -------------------------------------

	public function logout() {
		$this->session->unset_userdata('nama_user');
		$this->session->unset_userdata('posisi');
		session_destroy();
		redirect('auth');
	}
}
?>