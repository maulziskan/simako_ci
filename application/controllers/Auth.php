<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		$this->load->view('index');
	}

	public function cek_login() {
		$data = array('nama_user' => $this->input->post('nama_user', TRUE),
						'password' => md5($this->input->post('password', TRUE))
			);
		$this->load->model('Model_user'); // load model_user
		$hasil = $this->Model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['kd_user'] = $sess->kd_user;
				$sess_data['nama_user'] = $sess->nama_user;
				$sess_data['posisi'] = $sess->posisi;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('posisi')=='admin') {
				redirect('Admin');
			}
			elseif ($this->session->userdata('posisi')=='user') {
				redirect('User');
			}		
		}
		else {
			echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
		}
	}

}

?>